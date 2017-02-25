window.onload = function(){
	var cut_right = 0;//记录向右点击的次数,开始时为0次
	//console.log(document.getElementsByClassName);
	if(document.getElementsByTagName&&document.getElementById&&document.getElementsByClassName){
		//console.log("3");
		var button_left = document.getElementById("button_left");
		var button_right = document.getElementById("button_right");
		var somenews_on1 = document.getElementsByClassName("somenews_on1")[0];
		var news = somenews_on1.getElementsByClassName("news");
		//console.log(news);
		button_left.onclick = function(){
			Moveleft();
		}
		button_right.onclick = function(){
			Move();
		}
	}

	function Moveright(){
		cut_right++;
	}

	function Moveleft(){
		news[cut_right].style.display = "none";
		if(cut_right==0){
			cut_right = 6;
		}else if(cut_right==5){
			cut_right = 1;
		}
		cut_right--;
		news[cut_right].style.display = "block";
		news[cut_right].style.marginRight = "16px";



	}
}
