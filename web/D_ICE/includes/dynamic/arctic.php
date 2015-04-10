<h2 id="arcticAnchor">
<?php
	echo $arcticTitle;
?>
</h2>
<img class="floatAtTheLeftOfArticle" src="pics/dynamic/arctic.jpg" alt="Arctic sticker" >
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$arctic['title'].
'</h3>
<p>'
.$arctic['body'].
'</p>
</div>
';
echo $article;
?>