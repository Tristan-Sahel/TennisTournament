<h2 id="capabilityAnchor">
<?php
	echo $capabilityTitle;
?>
</h2>
<img class="floatAtTheLeftOfArticle" src="pics/dynamic/capability.png" alt="Capability sticker"/>
<?php
$article = '		
<div class="article centerArticle leftArticle">
<h3>'
.$capability['title'].
'</h3>
<p>'
.$capability['body'].
'</p>
</div>
';
echo $article;
?>