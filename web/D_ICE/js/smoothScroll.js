/*************************************		ENABLE SMOOTH SCROLLING FOR EVERY ANCHOR ***************************************************************/

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top -100
		}, 900, 'swing', function () {
			//window.location.hash = target;
		});
	});
});



/******************************************		SCROLLING FUNCTION FOR THE MENU OF THE SERVICE PAGE ***************************************************/
function smoothScrollingService(){
	function turnActive(name){
		$("#rightmenuControl").removeClass("active");
		$("#rightmenuDesign").removeClass("active");
		$("#rightmenuExpertise").removeClass("active");
		$("#rightmenuInnovation").removeClass("active");
		$("#rightmenuMre").removeClass("active");
		$("#rightmenuServices").removeClass("active");
		var sectionToTurnActive = "#rightmenu" + name;
		$(sectionToTurnActive).addClass("active");
	}
	window.onscroll = function(){
		var scroll = window.scrollY;
		if (scroll +100 <=  document.getElementById("controlAnchor").offsetTop ){
			turnActive("Services");
		} else if(scroll + 100 >= document.getElementById("controlAnchor").offsetTop && scroll + 100 <= document.getElementById("designAnchor").offsetTop){
			turnActive("Control");
		} else if(scroll + 100 >= document.getElementById("designAnchor").offsetTop && scroll + 100 <= document.getElementById("expertiseAnchor").offsetTop){
			turnActive("Design");
		} else if(scroll + 100 >= document.getElementById("expertiseAnchor").offsetTop && scroll + 100 <= document.getElementById("innovationAnchor").offsetTop){
			turnActive("Expertise");
		} else if(scroll + 100 >= document.getElementById("innovationAnchor").offsetTop && scroll + 100 <= document.getElementById("innovationAnchor").offsetTop +200){
			turnActive("Innovation");
		} else {
			turnActive("Mre");
		}
	}
}


/******************************************		SCROLLING FUNCTION FOR THE MENU OF THE SOCIETY PAGE ***************************************************/
function smoothScrollingSociety(){
	function turnActive(name){
		$("#rightmenuHistory").removeClass("active");
		$("#rightmenuContact").removeClass("active");
		$("#rightmenuCareers").removeClass("active");
		$("#rightmenuTerms").removeClass("active");
		$("#rightmenuSociety").removeClass("active");
		var sectionToTurnActive = "#rightmenu" + name;
		$(sectionToTurnActive).addClass("active");
	}
	window.onscroll = function(){
		var scroll = window.scrollY;
		if(scroll + 100 <= document.getElementById("historyAnchor").offsetTop){
			turnActive("Society");
		} else if(scroll + 100 >= document.getElementById("historyAnchor").offsetTop && scroll + 100 <= document.getElementById("contactAnchor").offsetTop){
			turnActive("History");
		} else if(scroll + 100 >= document.getElementById("contactAnchor").offsetTop && scroll + 100 <= document.getElementById("contactAnchor").offsetTop +200){
			turnActive("Contact");
		} else{
			turnActive("Careers");
		}
	}
}


/******************************************		SCROLLING FUNCTION FOR THE MENU OF THE DYNAMIC POSITIONING PAGE ***************************************************/
function smoothScrollingDynamic(){
	function turnActive(name){
		$("#rightmenuCapability").removeClass("active");
		$("#rightmenuSimulation").removeClass("active");
		$("#rightmenuArctic").removeClass("active");
		$("#rightmenuExpertisep").removeClass("active");
		$("#rightmenuLectures").removeClass("active");
		$("#rightmenuDynamic").removeClass("active");
		var sectionToTurnActive = "#rightmenu" + name;
		$(sectionToTurnActive).addClass("active");
	}
	window.onscroll = function(){
		var scroll = window.scrollY;
		if(scroll <= document.getElementById("capabilityAnchor").offsetTop -100){
			turnActive("Dynamic");
		}else if(scroll + 100 >= document.getElementById("capabilityAnchor").offsetTop && scroll+ 100  <= document.getElementById("simulationAnchor").offsetTop){
			turnActive("Capability");
		} else if(scroll+ 100  >= document.getElementById("simulationAnchor").offsetTop && scroll+ 100  <= document.getElementById("arcticAnchor").offsetTop){
			turnActive("Simulation");
		} else if(scroll+ 100  >= document.getElementById("arcticAnchor").offsetTop && scroll+ 100  <= document.getElementById("expertisepAnchor").offsetTop){
			turnActive("Arctic");
		} else if(scroll+ 100  >= document.getElementById("expertisepAnchor").offsetTop && scroll+ 100  <= document.getElementById("expertisepAnchor").offsetTop + 200){
			turnActive("Expertisep");
		} else{
			turnActive("Lectures");
		}
	}
}


/******************************************		SCROLLING FUNCTION FOR THE MENU OF THE REFERENCES PAGE ***************************************************/
function smoothScrollingReferences(){
	function turnActive(name){
		$("#rightmenuProjects").removeClass("active");
		$("#rightmenuPublications").removeClass("active");
		$("#rightmenuReferences").removeClass("active");
		var sectionToTurnActive = "#rightmenu" + name;
		$(sectionToTurnActive).addClass("active");
	}
	window.onscroll = function(){
		var scroll = window.scrollY;
		if(scroll +100 <= document.getElementById("projectsAnchor").offsetTop ){
			turnActive("References");
		} else if(scroll + 100 >= document.getElementById("projectsAnchor").offsetTop && scroll + 100 <= document.getElementById("projectsAnchor").offsetTop +200){
			turnActive("Projects");
		} else {
			turnActive("Publications");
		} 
	}
}