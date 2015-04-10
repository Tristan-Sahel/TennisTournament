<h2 id="lecturesAnchor">
<?php
	echo $lecturesTitle;
?>
</h2>
<img class="floatAtTheLeftOfArticle" src="pics/dynamic/lectures.jpg" alt="Lectures sticker" >
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$lectures['title'].
'</h3>
<p>'
.$lectures['body'].
'</p>
</div>
';
echo $article;
?>