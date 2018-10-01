function formCheck(){

	if(document.forms["Store"]["name"].value==""||document.forms["Store"]["pass"].value==""||document.forms["Store"]["Item1"].value==""||document.forms["Store"]["Item2"].value==""||document.forms["Store"]["Item3"].value==""||document.forms["Store"]["Ship"].value==""){
		alert("Stone info not fully filled out");
		return false;
	}	
}