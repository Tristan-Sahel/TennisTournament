// FUNCTION TO ACTIVATE THE SCROLLING MENU

function scrollingMenu(){
	if ($(window).width()>600){
		var society = document.getElementById('menu').children[0];
		var services = document.getElementById('menu').children[1];
		var dynamic = document.getElementById('menu').children[2];
		var references = document.getElementById('menu').children[3];
		var scrollingMenu = document.getElementById('scrollingMenu');
		var scrollingMenuServices = document.getElementById('scrollingMenuServices');
		var scrollingMenuPositioning = document.getElementById('scrollingMenuPositioning');
		var scrollingMenuReferences = document.getElementById('scrollingMenuReferences');


		society.addEventListener('mouseover', function() {
			scrollingMenu.style.display="block";
			society.classList.add('bluemenu');
		}, false);
		scrollingMenu.addEventListener('mouseover', function() {
			scrollingMenu.style.display="block";
			society.classList.add('bluemenu');
		}, false);
		society.addEventListener('mouseout', function() {
			scrollingMenu.style.display="none";
			society.classList.remove('bluemenu');
		}, false);
		scrollingMenu.addEventListener('mouseout', function() {
			scrollingMenu.style.display="none";
			society.classList.remove('bluemenu');
		}, false);



		services.addEventListener('mouseover', function() {
			scrollingMenuServices.style.display="block";
			services.classList.add('bluemenu');
		}, false);
		scrollingMenuServices.addEventListener('mouseover', function() {
			scrollingMenuServices.style.display="block";
			services.classList.add('bluemenu');
		}, false);
		services.addEventListener('mouseout', function() {
			scrollingMenuServices.style.display="none";
			services.classList.remove('bluemenu');
		}, false);
		scrollingMenuServices.addEventListener('mouseout', function() {
			scrollingMenuServices.style.display="none";
			services.classList.remove('bluemenu');
		}, false);



		dynamic.addEventListener('mouseover', function() {
			scrollingMenuPositioning.style.display="block";
			dynamic.classList.add('bluemenu');
		}, false);
		scrollingMenuPositioning.addEventListener('mouseover', function() {
			scrollingMenuPositioning.style.display="block";
			dynamic.classList.add('bluemenu');
		}, false);
		dynamic.addEventListener('mouseout', function() {
			scrollingMenuPositioning.style.display="none";
			dynamic.classList.remove('bluemenu');
		}, false);
		scrollingMenuPositioning.addEventListener('mouseout', function() {
			scrollingMenuPositioning.style.display="none";
			dynamic.classList.remove('bluemenu');
		}, false);



		references.addEventListener('mouseover', function() {
			scrollingMenuReferences.style.display="block";
			references.classList.add('bluemenu');
		}, false);
		scrollingMenuReferences.addEventListener('mouseover', function() {
			scrollingMenuReferences.style.display="block";
			references.classList.add('bluemenu');
		}, false);
		references.addEventListener('mouseout', function() {
			scrollingMenuReferences.style.display="none";
			references.classList.remove('bluemenu');
		}, false);
		scrollingMenuReferences.addEventListener('mouseout', function() {
			scrollingMenuReferences.style.display="none";
			references.classList.remove('bluemenu');
		}, false);
	}
}




// FONCTIONS TO REDIRECT TO OTHER PAGES AND TO CHANGE LANGUAGE

//Language switch functions
function changeLanguage(language){
	var url = window.location.href;
	var actualPage = url.split("?page=")[1];
	if (actualPage == null){
		actualPage = "home";
		window.location.href = url.split("&lang=")[0] + "?page=" + actualPage + "&lang=" +language;

	} else {
		window.location.href = url.split("&lang=")[0] + "&lang=" +language;
	}

}

function removeAnchor(currentUrl){
	if (currentUrl.split("#")[1] != null){
		return currentUrl.split("#")[0];
	}
	return currentUrl;
}

// Creates the new url whe clicking on a link
function newUrl(page){
	var url = window.location.href;
	var actualLanguage = url.split("&lang=")[1];
	if (actualLanguage == null){
		actualLanguage = "en";
	}
	actualLanguage = removeAnchor(actualLanguage);
	return url.split("?page=")[0] + "?page=" + page + "&lang=" + actualLanguage;
}

//Page switch function
function goTo(page){
	window.location.href = newUrl(page);		
}


//Page switch function with anchor
function goToAnchorAfterLoad(){
	if(window.location.hash != ""){
		var target = window.location.hash + "Anchor";
		var $target = $(target);
		$('html, body').animate({
			'scrollTop': $target.offset().top -100
		}, 500);
		return false;
	}	
}

function underlineActivelanguage(){
	var url = window.location.href;
	var actualLanguage = url.split("&lang=")[1];
	if (actualLanguage == null){
		actualLanguage = "en";
	}
	actualLanguage = removeAnchor(actualLanguage);
	if(actualLanguage == "fr"){
		$("#fr").addClass('activeLanguage');
		$("#en").removeClass('activeLanguage');
	} else{
		$("#en").addClass('activeLanguage');
	}
}

function goToAnchor(page, anchor){
	if (getUrlParameter('page') == page){
		var target = "#" + anchor + "Anchor";
		var $target = $(target);
		$('html, body').animate({
			'scrollTop': $target.offset().top
		}, 500);
		return false;	
	}
	else{
		window.location.href = newUrl(page) + "#" + anchor;
	}
}

//JQuery function to get an url parameter
function getUrlParameter(sParam)
{
	var sPageURL = window.location.search.substring(1);
	var sURLVariables = sPageURL.split('&');
	for (var i = 0; i < sURLVariables.length; i++) 
	{
		var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] == sParam) 
		{
			return sParameterName[1].split("?")[0];
		}
	}
}          

function colorMenus(){
	var society = document.getElementById('menu').children[0];
	var services = document.getElementById('menu').children[1];
	var dynamic = document.getElementById('menu').children[2];
	var references = document.getElementById('menu').children[3];
	if (getUrlParameter('page')=='society') {
		uncolorMenus();
		society.classList.add('bluemenuPersistent');
	} else if (getUrlParameter('page')=='services') {
		uncolorMenus();
		services.classList.add('bluemenuPersistent');
	} else if (getUrlParameter('page')=='positioning') {
		uncolorMenus();
		dynamic.classList.add('bluemenuPersistent');
	} else if (getUrlParameter('page')=='references') {
		uncolorMenus();
		references.classList.add('bluemenuPersistent');
	} else {
		uncolorMenus();
	};
	underlineActivelanguage();

	function uncolorMenus(){
		society.classList.remove('bluemenuPersistent');
		services.classList.remove('bluemenuPersistent');
		dynamic.classList.remove('bluemenuPersistent');
		references.classList.remove('bluemenuPersistent');
	}
}