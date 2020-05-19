var isCtrl = false;
var isEdited = false;

document.onkeyup=function(e){ 
	var evt = e || window.event;
	if(evt.keyCode == 17) isCtrl=false;
	else {
		if (isEdited || 
			(isCtrl && evt.keyCode>=49 && evt.keyCode<=57) ||
			(isCtrl && evt.keyCode==70) ||
			(isCtrl && evt.keyCode==83) ||
			(isCtrl && evt.keyCode==87)
		) return;
		/*
		isEdited = true;
		parent.markAsEdited();
		*/
	}
} 
document.onkeydown=function(e)
{ 
	var evt = e || window.event;
	
	if(evt.keyCode == 17) isCtrl=true;
	if (isCtrl == true && ((evt.keyCode >= 49 && evt.keyCode <= 57) || evt.keyCode == 70 || evt.keyCode == 83 || evt.keyCode == 87))
	{
		parent.parent.shortcutKey(evt.keyCode);
		return false; 
	}
} 

function fileIsSaved()
{
	isEdited = false;
}

var EditArea_whcp= {
	/**
	 * Get called once this file is loaded (editArea still not initialized)
	 *
	 * @return nothing	 
	 */	 	 	
	init: function(){	
		//	alert("test init: "+ this._someInternalFunction(2, 3));
		//editArea.load_script(this.baseURL+"whcp_fns.js");
	}
};

// Adds the plugin class to the list of available EditArea plugins
editArea.add_plugin("whcp", EditArea_whcp);
