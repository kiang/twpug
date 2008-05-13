function returnObjById( id )
{
    if (document.getElementById)
        var returnVar = document.getElementById(id);
    else if (document.all)
        var returnVar = document.all[id];
    else if (document.layers)
        var returnVar = document.layers[id];
    return returnVar;
}


function Validate() {
    document.the_form.file_name_escaped.value = escape(document.the_form.file_name.value);
    document.the_form.file_name_escaped_cp.value = escape(document.the_form.file_name_cp.value);
    if(getSource('') == 'upload' && document.the_form.file_name.value == '') {
        alert('File path should not be empty');
        return false;    
    }
    if(returnObjById('action').value == 'compare_info' && getSource('_cp') == 'upload' && document.the_form.file_name_cp.value == '') {
        alert('File path should not be empty');
        return false;    
    }
    if(returnObjById('action').value == 'import_info' && document.the_form.drop_version[document.the_form.drop_version.selectedIndex].value == 0 && document.the_form.new_version.value == '') {
        alert('New version name should not be empty');
        return false;    
    } 
    return true;    
}

function getSource(suffixe) {
    srctype = document.getElementsByName('srctype' + suffixe);
    for (var i=0; i<srctype.length; i++) {
         if (srctype[i].checked) {
            return srctype[i].value;
         }
    }
}

function displayAction() {
	action = returnObjById('action').value;
	switch (action)
    {
      case 'compare_info':
        returnObjById('compared').style.display= 'inline';
        returnObjById('db_options').style.display= 'none';
        break;
      case 'show_info':                         
        returnObjById('compared').style.display= 'none';
        returnObjById('db_options').style.display= 'none';
        break;
      case 'import_info':   
        returnObjById('compared').style.display= 'none';
        returnObjById('db_options').style.display= '';
        break;
      case 'import_dico':   
	 returnObjById('compared').style.display= 'inline';
	 returnObjById('db_options').style.display= 'none';
        break;
      default: 
        break;
    }
}

function displaySrc(suffixe) {
  
    source = getSource(suffixe);   
    switch (source)
    {
      case 'upload':
        returnObjById('upload_row' + suffixe).style.display= '';
        returnObjById('lang_row' + suffixe).style.display= 'none';
        returnObjById('vtiger_path' + suffixe).style.display= 'none';
       break;
      case 'sug_inst':
        returnObjById('upload_row' + suffixe).style.display= 'none';
        returnObjById('lang_row' + suffixe).style.display= '';
        returnObjById('vtiger_path' + suffixe).style.display= '';
        break;       
      default: 
        break;
    }
}
