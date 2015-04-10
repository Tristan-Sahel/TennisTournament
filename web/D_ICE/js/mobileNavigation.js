/*function movePageInsideMenu() {
	if ($(window).width()<=600){
		var container = document.getElementById('bigcontainer');
		container.innerHTML = "<li>"+container.innerHTML + "</li>";
		var menu = document.getElementById('menu');
		menu.replaceChild(container, menu.firstChild);
	}
}*/

function ChangeHomeCarousel() {
	if ($(window).width()<=600){
		var list = document.getElementById('picMenu').childNodes;
		for (var i = list.length - 1; i >= 0; i--) {
			list[i].innerHTML = "";
		};
	}
}
