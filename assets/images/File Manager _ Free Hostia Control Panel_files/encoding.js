var EditArea_encoding= {
	/**
	 * Returns the HTML code for a specific control string or false if this plugin doesn't have that control.
	 * A control can be a button, select list or any other HTML item to present in the EditArea user interface.
	 * Language variables such as {$lang_somekey} will also be replaced with contents from
	 * the language packs.
	 * 
	 * @param {string} ctrl_name: the name of the control to add	  
	 * @return HTML code for a specific control or false.
	 * @type string	or boolean
	 */	
	get_control_html: function(ctrl_name){
		switch(ctrl_name){
			case "encoding_select":
				html =
					"<select id='encoding_select' onchange='javascript:editArea.execCommand(\"encoding_select_change\")' fileSpecific='no'>"
					+"			<option value='-1'>Encoding</option>"
                    +"          <option value='UTF-8'>UTF-8</option>"
                    +"          <option value='UTF-32'>UTF-32</option>"
                    +"          <option value='UTF-16'>UTF-16</option>"
                    +"          <option value='UTF-7'>UTF-7</option>"
                    +"          <option value='ASCII'>ASCII</option>"
                    +"          <option value='EUC-JP'>EUC-JP</option>"
                    +"          <option value='SJIS'>SJIS</option>"
                    +"          <option value='JIS'>JIS</option>"
                    +"          <option value='ISO-2022-JP'>ISO-2022-JP</option>"
                    +"          <option value='Windows-1252'>Windows-1252</option>"
                    +"          <option value='ISO-8859-1'>ISO-8859-1</option>"
                    +"          <option value='ISO-8859-2'>ISO-8859-2</option>"
                    +"          <option value='ISO-8859-3'>ISO-8859-3</option>"
                    +"          <option value='ISO-8859-4'>ISO-8859-4</option>"
                    +"          <option value='ISO-8859-5'>ISO-8859-5</option>"
                    +"          <option value='ISO-8859-6'>ISO-8859-6</option>"
                    +"          <option value='ISO-8859-7'>ISO-8859-7</option>"
                    +"          <option value='ISO-8859-8'>ISO-8859-8</option>"
                    +"          <option value='ISO-8859-9'>ISO-8859-9</option>"
                    +"          <option value='ISO-8859-10'>ISO-8859-10</option>"
                    +"          <option value='ISO-8859-13'>ISO-8859-13</option>"
                    +"          <option value='ISO-8859-14'>ISO-8859-14</option>"
                    +"          <option value='ISO-8859-15'>ISO-8859-15</option>"
                    +"          <option value='ISO-8859-16'>ISO-8859-16</option>"
                    +"          <option value='EUC-CN'>EUC-CN</option>"
                    +"          <option value='CP936'>CP936</option>"
                    +"          <option value='EUC-TW'>EUC-TW</option>"
                    +"          <option value='BIG-5'>BIG-5</option>"
                    +"          <option value='EUC-KR'>EUC-KR</option>"
                    +"          <option value='ISO-2022-KR'>ISO-2022-KR</option>"
                    +"          <option value='Windows-1251'>Windows-1251</option>"
                    +"          <option value='CP866'>CP866</option>"
                    +"          <option value='KOI8-R'>KOI8-R</option>"
					+"		</select>";
				return html;
		}
		return false;
	}
	
	/**
	 * Executes a specific command, this function handles plugin commands.
	 *
	 * @param {string} cmd: the name of the command being executed
	 * @param {unknown} param: the parameter of the command	 
	 * @return true - pass to next handler in chain, false - stop chain execution
	 * @type boolean	
	 */
	,execCommand: function(cmd, param){
		// Handle commands
		switch(cmd){
			case "encoding_select_change":
				var files = parent.parent.editAreaLoader.getAllFiles("edit_area");

				parent.parent.e_data = [];
				for (var i in files) {
					parent.parent.e_data.push({ path: files[i].path, name: files[i].title });
				}

				if (document.getElementById("encoding_select").value != -1 && parent.parent.check_saved()) {
					parent.parent.simple_onload();
				}

				return false;
		}
		// Pass to next handler in chain
		return true;
	}
	/**
	 * Get called once EditArea is fully loaded and initialised
	 *	 
	 * @return nothing
	 */	 	 	
	,onload: function(){
		var eaObj = parent.document.getElementById(editArea.id);
		if (eaObj.getAttribute('file_encoding'))
			document.getElementById("encoding_select").value = eaObj.getAttribute('file_encoding');
	}
};

// Adds the plugin class to the list of available EditArea plugins
editArea.add_plugin("encoding", EditArea_encoding);
