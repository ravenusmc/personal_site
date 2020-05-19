var maxFileSize = 500000;
var dodrop;

;(function( $ ) {
	var dd_count, dd_files, dd_path, dd_callback, xhrs = {};

	dodrop = function(dt, path, callback) {
		var files = dt.files;
		if (
			typeof dt.items !== "undefined" && dt.items !== "undefined" &&
			dt.items.length  > 0 && typeof dt.items[0].webkitGetAsEntry === "function"
		)
			files = dt.items;
		dd_files = [];
		dd_path = path;
		dd_callback = callback;
		dd_count = files.length;
		if (!dd_count)
			return doSend();

		for (var i = 0; i < files.length; i++) {
			prepareDragAndDropItem(files[i]);
			console.log('cc');
		}
	}

	function prepareDragAndDropItem(item) {
		if (
			typeof item.webkitGetAsEntry === "function" ||
			typeof item.createReader === "function"
		) {
			var fileEntry;
			if (typeof item.createReader === "function")
				fileEntry = item;
			else
				fileEntry = item.webkitGetAsEntry();
			if (fileEntry.isFile) {
				item = item.getAsFile();
				item.fullPath = fileEntry.fullPath;
			} else if (fileEntry.isDirectory) {
				var dirReader = fileEntry.createReader();
				var entriesCallback = (function(parentEntry) {
					return function(entries) {
						if (!entries.length) {
							var path = dd_path + parentEntry.fullPath.replace(/\/[^\/]+$/g, '');
							getJSON('/filemanager/new', { 'type': 'folder', 'recursive': true, 'path': path, 'name': parentEntry.name, '_csrf': _csrf }, function() {});
						}
						for (var i = 0; i < entries.length; i++) {
							if (entries[i].isFile) {
								var fileCallback = (function(full_path) { 
									return function(file) {
										file.fullPath = full_path;
										prepareDragAndDropItem(file);
									};
								})(entries[i].fullPath);
								dd_count++;
								entries[i].file(fileCallback);
							} else if (entries[i].isDirectory) {
								dd_count++;
								prepareDragAndDropItem(entries[i]);
							}
						}
						dd_count--;
					};
				})(fileEntry);
				dd_count++;
				dirReader.readEntries(entriesCallback);
			} else {
				item = { size: 0 };
			}
		}

		if (item.size > 0) {
			var fileDivId = filenameToId(item.name);
			// Don't add to queue if there is an upload with the same name in progress
			if ($("#" + fileDivId).size()) {
				alert("The upload of this file has already been initiated. Please allow a few seconds for the process to take place.");
				return;
			}
			
			dd_files.push(item);
		}
		dd_count--;

		if (0 === dd_count)
			doSend();
	}

	function doSend() {
		if (dd_files == undefined) {
			alert("Your browser doesn't support drag and drop file upload. Please upgrade to more recent version.");
			return;
		}
		if (dd_files.length == 0) {
			alert("You must select at least one file. Folder uploads are not possible.");
			return;
		}

		window.onbeforeunload = function() {
			return "The file upload you have initiated is still in progress. If you leave the page, the process will be terminated.";
		}

		$("#upload_progress_log").foundation('open');
		//{
		//	dialogClass: 'upload_alert',
		//	modal: false,
		//	title: 'Upload progress',
		//	position: [($(window).width()/2-175),50],
		//	height: "auto",
		//	maxHeight: $(window).height - 180,
		//	width: "auto",
		//	minWidth: 350,
		//	resizable: false
		//});
		sendMultipleFiles({
			files: dd_files,
			url: "/filemanager/upload-files/?_csrf=" + _csrf + "&path=" + encodeURIComponent(dd_path),
			onloadstart: function() {
				var fileDivId = filenameToId(this.file.name);
				$("#upload_progress_log").append(
					'<div id="' + fileDivId + '">\
						<h6><strong><span>Uploading</span>: '+ this.file.name + '</strong></h6>\
						<div id="' + fileDivId + '_progbar" class="progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">\
							<span class="progress-meter" style="width: 0%">\
								<p class="progress-meter-text">0%</p>\
							</span>\
						</div>\
						<hr>\
						<a id="' + fileDivId + '_cancel" href="#">Cancel</a>\
					</div>'
				);
				//$("#" + fileDivId + "_progbar").progressbar();
				$("#" + fileDivId + "_cancel").click(function(e) {
					e.preventDefault();
					xhrs[fileDivId].abort();
					delete xhrs[fileDivId];
					$("#" + fileDivId).remove();
					if (0 == $("#upload_progress_log").children().size()) {
						window.onbeforeunload = null;
						$("#upload_progress_log").foundation('close');
					}
				});
				$("#upload_progress_log").attr({ scrollTop: $("#upload_progress_log").attr("scrollHeight") });

			},
			onprogress: function(e) {
				var fileDivId = filenameToId(this.file.name);
				$("#" + fileDivId + "_progbar .progress-meter").css({width: ((e.loaded/e.total)*100) + '%'});
				$("#" + fileDivId + "_progbar .progress-meter-text").html( parseInt((e.loaded/e.total)*100) + "%" );
			},
			onload: function(e, xhr) {
				if (!$("#upload_progress_log a:visible").size()) {
					$("#upload_progress_log").empty();
					window.onbeforeunload = null;
					$("#upload_progress_log").foundation('close');
					eval("var result = " + xhr.responseText);
					if (result['status'] === true) {
						showMsg('success', result['msg']);
						dd_callback();
					} else {
						showMsg('error', result['msg']);
					}
				}
			},
			onerror: function(err_type) {
				if (err_type == 'file_size')
					showMsg('error', filemanager_upload_error_size_lang);
				else
					showMsg('error', filemanager_upload_error_lang);

				$("#upload_progress_log").foundation('close');
			}
		});
	}

	// function to upload multiple files via handler
	function sendMultipleFiles(handler) {
		var length = handler.files.length, i = 0, onload = handler.onload;
		handler.current = 0;
		handler.total = 0;
		handler.sent = 0;
		while (handler.current < length)
			handler.total += handler.files[handler.current++].size;
		handler.current = 0;
		if (length) {
			handler.file = handler.files[handler.current];
			sendFile(handler).onload = function(e, xhr){
				if(++handler.current < length){
					handler.sent += handler.files[handler.current - 1].size;
					handler.file = handler.files[handler.current];
					sendFile(handler).onload = arguments.callee;
				} else if(onload) {
					handler.onload = onload;
					handler.onload(e, xhr);
				}
			};
		};
		return  handler;
	};

	// function to upload a single file via handler
	var sendFile = (function(toString) {
		var isFunction = function(Function){
			return toString.call(Function) === "[object Function]";
		},
		split = "onabort.onerror.onloadstart.onprogress".split("."),
		length = split.length;
		return  function(handler){
			if ((maxFileSize && maxFileSize < handler.file.size)||(handler.file.size == 0)) {
				if (isFunction(handler.onerror))
					handler.onerror('file_size');
				return;
			};
			if (handler.file.size != 0) {
			
				var xhr = new XMLHttpRequest, upload = xhr.upload;
				for (var i = 0; i < length; i++) {
					upload[split[i]] = (function(event){
						return function(e){
							if (isFunction(handler[event])) 
								handler[event].call(handler, e, xhr);
						};
					})(split[i]);
				}
				upload.onload = function(e){
					delete xhrs[filenameToId(handler.file.name)];

					if (handler.onreadystatechange === false) {
						if (isFunction(handler.onload)) 
							handler.onload(e, xhr);
					}
					else {
						setTimeout(function(){
							if (xhr.readyState === 4) {
								finishUpload(handler.file.name);
								if (isFunction(handler.onload)) 
									handler.onload(e, xhr);
							}
							else 
								setTimeout(arguments.callee, 15);
						}, 15);
					}
				};
				var url = handler.url +
					"&file_name=" + encodeURIComponent(handler.file.name) +
					(typeof handler.file.fullPath == 'undefined' ? '' : "&file_path=" + encodeURIComponent(handler.file.fullPath)) +
					"&file_size=" + encodeURIComponent(handler.file.size);
				xhr.open("POST", url, true);
				xhr.setRequestHeader("If-Modified-Since", "Mon, 26 Jul 1997 05:00:00 GMT");
				xhr.setRequestHeader("Cache-Control", "no-cache");
				xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
				//xhr.setRequestHeader("X-File-Name", handler.file.name);
				//xhr.setRequestHeader("X-File-Size", handler.file.size);
				xhr.send(handler.file);

				xhrs[filenameToId(handler.file.name)] = xhr;
			}
			return handler;
		};
	})(Object.prototype.toString, maxFileSize);

	function finishUpload(uploadFileName) {
		uploadFileName = filenameToId(uploadFileName);
		//$("#" + uploadFileName + " h4").css("color","blue");
		$("#" + uploadFileName + " h6 span").html("Uploaded");
		$("#" + uploadFileName + "_progbar .progress-meter").css({style: '100%'});//("value", 200);
		$("#" + uploadFileName + "_progbar .progress-meter-text").html( "100%" );
		$("#" + uploadFileName + "_cancel").hide();
	}

	/*
	ID and NAME tokens must begin with a letter ([A-Za-z]) and may be followed by any number of letters, 
	digits ([0-9]), hyphens ("-"), underscores ("_"), colons (":"), and periods (".").
	*/
	function filenameToId(filename) {
		filename = filename.replace(/\s+/g, '-');
		filename = filename.replace(/([^a-zA-Z0-9-_]+)/g, "");
		return filename;
	}
})( jQuery );
