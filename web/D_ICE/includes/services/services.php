<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
<ul id="menuServicesRight" class="leftMenu">
	<li id="rightmenuServices" class="active"><a href="#page">Services</a></li>
	<li id="rightmenuControl"><a href="#controlAnchor">Control</a></li>
	<li id="rightmenuDesign"><a href="#designAnchor">Design</a></li>
	<li id="rightmenuExpertise"><a href="#expertiseAnchor">Expertise</a></li>
	<li id="rightmenuInnovation"><a href="#innovationAnchor">Innovation</a></li>
	<li id="rightmenuMre"><a href="#mreAnchor">M.R.E.</a></li>
</ul>
<h1>
	<?php
	echo $servicesTitle;
	?>
</h1>
<img src="pics/services/cover.jpg" id="servicesCover" alt="Services cover picture" onload="smoothScrollingService(); colorMenus(); goToAnchorAfterLoad();"/>
<!--
<div class="bigButtons">
	<a href="#controlAnchor">
		<div class="blockLink" id="control">
			<img class="blockLinkPic" alt="Control sticker" src="pics/services/control.png">
			<p>Control</p>
		</div>
	</a>
	<a href="#designAnchor">
		<div class="blockLink" id="design">
			<img class="blockLinkPic"alt="Design sticker"  src="pics/services/design.png">
			<p>Design</p>
		</div>
	</a>
	<a href="#expertiseAnchor">
		<div class="blockLink" id="expertise">
			<img class="blockLinkPic" alt="Expertise sticker" src="pics/services/expertise.png">
			<p>Expertise</p>
		</div>
	</a>
	<a href="#innovationAnchor">
		<div class="blockLink" id="innovation">
			<img class="blockLinkPic" alt="Innovation sticker" src="pics/services/innovation.png">
			<p>Innovation</p>
		</div>
	</a>
	<a href="#mreAnchor">
		<div class="blockLink" id="mre"><img class="blockLinkPic" alt="M.R.E sticker" src="pics/services/mre.png">
			<p>M.R.E</p>
		</div>
	</a>
</div>
-->
<h1>
	<?php
	echo $servicesSubtitle;
	?>
</h1>

<div class="article centerArticle">
	<p>
		<?php
		echo $servicesPresentation;
		?>	
	</p>
</div>
<?php
include 'includes/services/control.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/services/design.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/services/expertisecommissioning.php';
?>
<div class="newPageMini"></div>
<?php
include 'includes/services/innovation.php';
?>	
<div class="newPageMini"></div>
<?php
include 'includes/services/mre.php';
?>
<div class="newPage"></div>
<div class="newPageMini"></div>
