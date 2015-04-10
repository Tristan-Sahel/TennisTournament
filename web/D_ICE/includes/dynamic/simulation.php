<h2 id="simulationAnchor">
<?php
	echo $simulationTitle;
?>
</h2>
<img class="floatAtTheRightOfArticle" src="pics/dynamic/simulation.png" alt="Simulation sticker" >
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$simulation['title'].
'</h3>
<p>'
.$simulation['body'].
'</p>
</div>
';
echo $article;
?>