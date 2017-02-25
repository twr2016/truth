window.onload = function(){
	var cut_left = 0;//某计数器
	//console.log(document.getElementsByClassName);
	if(document.getElementsByTagName&&document.getElementById&&document.getElementsByClassName){
		//console.log("3");
		var button_left = document.getElementById("button_left");
		var button_right = document.getElementById("button_right");
		var somenews_on1 = document.getElementsByClassName("somenews_on1")[0];
		var news = somenews_on1.getElementsByClassName("news");
		//console.log(news);
		button_left.onclick = function(){
			Move();
		}
		button_right.onclick = function(){
			Move();
		}
	}


	function Move(){
		if(cut_left%2==0){
			for(var j = 0;j<3;j++){
				news[j].style.display = "none";
			}
			for(var j;j<6;j++){
				news[j].style.display = "block";
				if(j==5){
					news[j].style.marginRight = "16px";
				}
			}
		}else{
			for(var j = 0;j<3;j++){
				news[j].style.display = "block";
				if(j==2){
					news[j].style.marginRight = "16px";
				}
			}
			for(var j;j<6;j++){
				news[j].style.display = "none";	
			}
		}
		cut_left++;
	}
}
