<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
	<img src="pics/society/cover.jpg" style="display:none;" onload="smoothScrollingSociety(); colorMenus(); goToAnchorAfterLoad();"/>
<h2 style="margin:50px;">
	<?php
	echo $newsTitle;
	?>
</h2>
<div id="pageContainerNews">
	<div id="newsContainer">
		<?php
		foreach ($news as &$new) {
			$article = '		
			<div class="article new">
			<h3>'
			.$new['title'].
			'</h3>
			<p>'
			.$new['body'].
			'</p>
			</div>
			';
			echo $article;
		}
		?>
	</div>
	<div id="newsPicsContainer">
		<img src="pics/news/1.jpg" alt="Nantes's ring" onload="reorderNews()"/>
		<img src="pics/news/2.jpg" alt="Terminal"/>
		<img src="pics/news/3.jpg" alt="Boat plan"/>
	</div>
</div>