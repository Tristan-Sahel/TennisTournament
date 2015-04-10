<h2 id="expertiseAnchor">
	<?php
	echo $expertiseTitle;
	?>
</h2>
<?php
$article = '		
<div class="article centerArticle">
<h3>'
.$expertise['title'].
'</h3><p>'
.$expertise['body'].
'</p></div>
';
echo $article;
?>