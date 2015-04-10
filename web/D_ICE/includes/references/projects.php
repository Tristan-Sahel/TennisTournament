<h2 id="projectsAnchor"><?php
echo $projectsTitle;
?>
</h2>
<!--
<div class="article centerArticle">
	<h3>Cosmos (Complex Marine Offshore Operations)</h3>
	<p>
		<img src="pics/references/cosmos.jpg" class="articleFloatRightPic" alt="Cosmos project illustration"/>
		<br/><br/>This project proposal is a Research Program lead by the LHEAA, the laboratory of hydrodynamics of the Ecole Centrale Nantes. 
		<br/>7 partners are in the consortium including academics LHEAA, IRCCyN, ENSM Nantes, CLARTE and industrials DCNS Research/SIREHNA and D-ICE.
		<br/><br/> The objectives of the project is to address some the multiples challenges imposed for MRE installation.
		<br/><br/>Challenging scientific subjects like heavy lifting, multibody simulations, DP in shallow water and in harsh conditions, complex operations will be handled during this ambitious 4 -years project.
		<br/><br/>The project has successfully passed the first step of selection. The final decision will be released during the summer for a kick off in the end of 2015.
	</p>
</div>
<div class="article centerArticle">
	<h3>Arctic offshore operations</h3>
	<p>
		<img src="pics/references/arcticProject.jpg" class="articleFloatRightPic" alt="Arctic ofshore project illustration"/>
		Ship opera ons in ice are a new challenge proposed to the ship industry.
		The ice forces are indeed very different from the interractions existing in open water.
		<br/><br/>This harsh environment requires intense research in several area in order to cope with the multiples issues imposed by the ice, the cold and the high latitudes...
		<br/><br/>The current conjecture is not favorable for the development of the technologies for the arctic.
		<br/><br/>D-ICE will nevertheless launch intern studies for addressing these issues and keep at the cutting edge.	
	</p>
</div>
-->

<?php
foreach ($projects as &$project) {
	$article = '		
	<div class="article new">
	<h3>'
	.$project['title'].
	'</h3>
	<p>'
	.$project['body'].
	'</p>
	</div>
	';
	echo $article;
}

?>
