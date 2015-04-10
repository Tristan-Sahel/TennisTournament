<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/../languages/en.php');
} else{
	include (__DIR__.'/../languages/fr.php');
}
?>
<img src="pics/society/cover.jpg" style="display:none;" onload="smoothScrollingSociety(); colorMenus(); goToAnchorAfterLoad();"/>
<h2 id="termsAnchor">
	<?php
	echo $termsTitle;
	?>
</h2>
<?php
$article = '		
<div class="article centerArticle">
<h3>'
.$terms['title'].
'</h3>
<p>'
.$terms['body'].
'</p>';

for ($i = 1; $i <= 3; $i++) {
	$pic = '		
	<img class="privatePic" alt="Private picture number'
	.$i.
	'" src="pics/private/'
	.$i.
	'.jpg">
	';
	$article = $article . $pic;
}
$article = $article . '</div>';

echo $article;
?>
<div class="article centerArticle">
	<h3>
		<?php
		echo $privacy.'</h3>';

		echo $terms['policy'];
		?>
	
</div>
