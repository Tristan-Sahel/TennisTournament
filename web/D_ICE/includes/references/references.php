<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
<ul id="menuReferencesRight" class="leftMenu">
	<li id="rightmenuReferences" class="active"><a href="#page">References</a></li>
	<li id="rightmenuProjects"><a href="#projectsAnchor">Projects</a></li>
	<li id="rightmenuPublications"><a href="#publicationsAnchor">Publications</a></li>
</ul>
<h1>
	<?php
	echo $referencesTitle;
	?>
</h1>
<img src="pics/references/cover.jpg" id="servicesCover" onload="smoothScrollingReferences(); colorMenus(); goToAnchorAfterLoad();" alt="Cover picture references" />
<?php
include 'includes/references/projects.php';
?>
<img src="pics/references/book.jpg" alt="book" class="book floatAtTheRightOfArticle"/>
<div class="newPageMini"></div>
<?php
include 'includes/references/publications.php';
?>	
<div class="newPage"></div>
<div class="newPageMini"></div>
