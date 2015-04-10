<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
<ul id="menuDynamicRight" class="leftMenu">
	<li id="rightmenuDynamic" class="active"><a href="#page">
		<?php
			echo $dynamicPositioningHeader;
		?>
	</a></li>
	<li id="rightmenuCapability"><a href="#capabilityAnchor">
		<?php
			echo $capabilityTitle;
		?>
	</a></li>
	<li id="rightmenuSimulation"><a href="#simulationAnchor">Simulation</a></li>
	<li id="rightmenuArctic"><a href="#arcticAnchor">Arctic</a></li>
	<li id="rightmenuExpertisep"><a href="#expertisepAnchor">Expertise</a></li>
	<li id="rightmenuLectures"><a href="#lecturesAnchor">Lectures</a></li>
</ul>
<h1>
	<?php
	echo $dynamicPositioningTitle;
	?>
</h1>
<img src="pics/dynamic/cover.jpg" id="servicesCover" alt="Cover pic dynamic positioning, petrol plateform" onload="smoothScrollingDynamic(); colorMenus(); goToAnchorAfterLoad();"/>
<!--
<div class="bigButtons">
	<a href="#capabilityAnchor">
		<div class="blockLink" id="capability">
			<img class="blockLinkPic" src="pics/dynamic/capability.png" alt="Capability sticker" >
			<p>Capability</p>
		</div>
	</a>
	<a href="#simulationAnchor">
		<div class="blockLink" id="simulation">
			<img class="blockLinkPic" src="pics/dynamic/simulation.png" alt="Simulation sticker" >
			<p>Simulation</p>
		</div>
	</a>
	<a href="#arcticAnchor">
		<div class="blockLink" id="arctic">
			<img class="blockLinkPic" src="pics/dynamic/arctic.png" alt="Arctic sticker" >
			<p>Arctic</p>
		</div>
	</a>
	<a href="#expertiseAnchor">
		<div class="blockLink" id="expertise">
			<img class="blockLinkPic" src="pics/dynamic/expertise.jpg" alt="Expertise sticker" >
			<p>Expertise</p>
		</div>
	</a>
	<a href="#lecturesAnchor">
		<div class="blockLink" id="lectures">
			<img class="blockLinkPic" src="pics/dynamic/lectures.jpg" alt="Lectures sticker" >
			<p>Lectures</p>
		</div>
	</a>
</div>
-->
<h1>
	<?php
	echo $dynamicPositioningSubtitle;
	?>
</h1>
<div class="article centerArticle">
	<p>
		<?php
		echo $dynamicPositioningPresentation;
		?>
	</p>
</div>
<?php
include 'includes/dynamic/capability.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/dynamic/simulation.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/dynamic/arctic.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/dynamic/expertise.php';
?>	
<div class="newPageMini"></div>
<?php
include 'includes/dynamic/lectures.php';
?>
<div class="newPage"></div>
<div class="newPage"></div>