<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/languages/en.php');
} else if ($_GET['lang'] == 'fr'){
	include (__DIR__.'/languages/fr.php');
} else {
	include (__DIR__.'/languages/en.php');
}
?>
<div id="middlediv">
	<img src="pics/homeBoat.jpg" onclick="goTo('positioning')" id="homeImage" onload="changeImage(); underlineActivelanguage();" alt="Homepage image" />
	<ul id="picMenu">
		<li class="clickableLink clickedImg" style="line-height:20px;"><br/>
			<?php
			echo $dynamicPositioningTitle;
			?>
		</li>
		<li class="clickableLink" style="line-height:20px;"><br/>
			<?php
			echo $marineRenewableEnergy;
			?>
		</li>
		<li class="clickableLink" style="line-height:20px;"><br/>
			<?php
			echo $expertiseTitle;
			?>
		</li>
		<li class="clickableLink">
			Services
		</li>
		<li class="clickableLink">
			<?php
			echo $societyTitle;
			?>
		</li>
	</ul>
</div>
<div id="homeQuickLaunchers">
<ul >
	<li onclick="goToAnchor('references', 'projects')">
		<img src="pics/references/arcticProject.jpg">
		<?php
		echo $projects[1]['presentation'];
		?>	
	</li>
	<li onclick="goToAnchor('references', 'projects')">
		<img src="pics/references/cosmos.jpg">
		<?php
		echo $projects[0]['presentation'];
		?>	
	</li>
	<li onclick="goToAnchor('society', 'careers')">
		<img src="pics/society/careers.jpg">
		<?php
		echo $careerTitle;
		?>
	</li>
</ul>
</div>
<div id="homeNews">
	<p>
		News
	</p>
	<ul>
		<?php
		foreach ($news as &$new) {
			$article = "
			<li onclick=\"goTo('news')\">
			<h3>"
			.$new['title'].
			"</h3>
			<div class='more'>
			more...
			</div>
			</li>
			";
			echo $article;
		}
		?>
	</ul>
</div>
