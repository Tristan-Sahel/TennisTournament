/*FUNCTION TO CHANGE THE IMAGE WHEN CLICKING ON THE LINK ON THE HOMEPAGE*/
function changeImage(){
	var list = document.getElementsByClassName('clickableLink');
	var pic = document.getElementById('homeImage');
	
	list[0].addEventListener('click', function() {
		list[0].classList.add('clickedImg');
		homeImage.src = "pics/homeBoat.jpg";
		homeImage.onclick = function(){ goTo('positioning'); };
		list[1].classList.remove('clickedImg');
		list[2].classList.remove('clickedImg');
		list[3].classList.remove('clickedImg');
		list[4].classList.remove('clickedImg');
	}, false);

	list[1].addEventListener('click', function() {
		list[1].classList.add('clickedImg');
		homeImage.src = "pics/homeEnergy.jpg";
		homeImage.onclick = function(){ goTo('positioning'); };
		list[0].classList.remove('clickedImg');
		list[2].classList.remove('clickedImg');
		list[3].classList.remove('clickedImg');
		list[4].classList.remove('clickedImg');
	}, false);

	list[2].addEventListener('click', function() {
		list[2].classList.add('clickedImg');
		homeImage.src = "pics/homeExpertise.jpg";
		homeImage.onclick = function(){ goToAnchor('services','expertise'); };
		list[0].classList.remove('clickedImg');
		list[1].classList.remove('clickedImg');
		list[3].classList.remove('clickedImg');
		list[4].classList.remove('clickedImg');
	}, false);

	list[3].addEventListener('click', function() {
		list[3].classList.add('clickedImg');
		homeImage.src = "pics/homeServices.jpg";
		homeImage.onclick = function(){ goTo('services'); };
		list[0].classList.remove('clickedImg');
		list[1].classList.remove('clickedImg');
		list[2].classList.remove('clickedImg');
		list[4].classList.remove('clickedImg');
	}, false);

	list[4].addEventListener('click', function() {
		list[4].classList.add('clickedImg');
		homeImage.src = "pics/homeSociety.jpg";
		homeImage.onclick = function(){ goTo('society'); };
		list[0].classList.remove('clickedImg');
		list[1].classList.remove('clickedImg');
		list[2].classList.remove('clickedImg');
		list[3].classList.remove('clickedImg');
	}, false);

	if ($(window).width()>600){
		var numberOfNews = document.getElementsByClassName('more').length;
		var newParagraph = document.getElementById('homeNews').children[0];
		newParagraph.style.height = numberOfNews*70 + "px";
		newParagraph.style.lineHeight = numberOfNews*70 + "px";
	}
}