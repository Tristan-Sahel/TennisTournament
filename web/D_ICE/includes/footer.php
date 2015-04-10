<?php
if ($_GET['lang'] == 'en'){
	include (__DIR__.'/languages/en.php');
} else{
	include (__DIR__.'/languages/fr.php');
}
?>
<div id="footer">
	<p>
		<?php
		echo $footerPresentation;
		?>
	</p>
	<ul id="menuFooter">
		<li>
			<a href="https://www.linkedin.com/company/9352601?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1427969601450%2Ctas%3Ad--ice+engineering"  target="_blank">
				<img src="pics/linkedIn.png" alt="LinkedIn"/>
			</a>
		</li>
		<li onclick="goToAnchor('society', 'careers')">
			<?php
				echo $careerTitle;
			?>		
		</li>
		<li onclick="goToAnchor('society', 'contact')">
			Contact
		</li>
		<li onclick="goTo('terms')">
			<?php
			echo $termsTitle;
			?>
		</li>
	</ul>
	<img src="pics/wave3.png" alt="wave" id="wave"/>
</div>
