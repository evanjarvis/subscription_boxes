function checkBox(item){
	var box=document.forms['box'].elements['favorite[]'], length=box.length, count = 0;
	for(var i=0;i<length;i++){
		count +=(box[i].checked) ? 1 : 0;
		if(count>3){
			item.checked=false;
		}
	}
}
