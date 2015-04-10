<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
<ul id="menuSocietyRight" class="leftMenu">
	<li id="rightmenuSociety" class="active"><a href="#page">Society</a></li>
	<li id="rightmenuHistory"><a href="#historyAnchor">History</a></li>
	<li id="rightmenuContact"><a href="#contactAnchor">Contact</a></li>
	<li id="rightmenuCareers"><a href="#careersAnchor">Careers</a></li>
</ul>
<h1>
	<?php
	echo $societyTitle;
	?>
</h1>
<div id="paeContainer">
	<img src="pics/society/cover.jpg" id="servicesCover" alt="Society cover picture" onload="smoothScrollingSociety(); colorMenus(); goToAnchorAfterLoad();"/>
	<?php
	include 'includes/society/history.php';
	?>
	<div class="newPage"></div>
	<?php
	include 'includes/society/contact.php';
	?>
	<div class="newPage"></div>
	<?php
	include 'includes/society/careers.php';
	?>
	<div class="newPage"></div>
	<div class="newPage"></div>
</div>