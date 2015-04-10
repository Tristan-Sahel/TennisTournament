function reorderNews(){
	if ($(window).width()>600){
		var listNews = document.getElementsByClassName("new");
		for (var i = listNews.length - 1; i >= 0; i--) {
			if(i%2 == 0){
				listNews[i].style.marginLeft = '50px';
			}
		};
	}
}