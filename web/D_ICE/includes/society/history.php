<h2 id="historyAnchor">
<?php
echo $historyTitle;
?>
</h2>
<img src="pics/society/history.jpg" alt="Sea artistic pic" class="floatAtTheRightOfArticle"/>	
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$history['title'].
'</h3>
<p>'
.$history['body'].
'</p>
</div>
';
echo $article;
?>
