<h2 id="expertisepAnchor">
<?php
	echo $expertisePTitle;
?>
</h2>
<img class="floatAtTheRightOfArticle" src="pics/dynamic/expertise.jpg" alt="Expertise sticker" >
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$expertiseP['title'].
'</h3>
<p>'
.$expertiseP['body'].
'</p>
</div>
';
echo $article;
?>