<h2 id="careersAnchor">
<?php
	echo $careerTitle;
?>
</h2>
<img src="pics/society/careers.jpg" alt="Handshake" class="floatAtTheRightOfArticle"/>

<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$career['title'].
'</h3>
<p>'
.$career['body'].
'</p>
</div>
';
echo $article;
?>