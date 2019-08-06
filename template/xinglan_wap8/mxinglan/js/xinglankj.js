function dom(id){
	return !id ? null : document.getElementById(id);
}
function showmenu(id){
	if(dom(id+'_menu').style.display == "none"){
		dom(id+'_menu').style.display = "block";
	}else{
		dom(id+'_menu').style.display = "none";
	}
}