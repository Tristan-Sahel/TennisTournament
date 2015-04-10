<?php 
include 'includes/head.php';
?>

<body onload="ChangeHomeCarousel();scrollingMenu();">
	<?php
	include 'includes/header.php';
	?>
	<div id="bigcontainer">
		<div id="container">
			<div id="page">
				<?php
				$page = $_GET['page'];
				switch ($page)
				{
					case '':
					include 'includes/home.php';
					break;
//HOME
					case 'home':
					include 'includes/home.php';
					break;

//SERVICES
					case 'services':
					include 'includes/services/services.php';
					break;
					case 'design':
					include 'includes/services/design.php';
					break;
					case 'control':
					include 'includes/services/control.php';
					break;
					case 'expertisecommissioning':
					include 'includes/services/expertisecommissioning.php';
					break;
					case 'innovation':
					include 'includes/services/innovation.php';
					break;
					case 'mre':
					include 'includes/services/mre.php';
					break;

//SOCIETY GROUP
					case 'society':
					include 'includes/society/society.php';
					break;

					case 'news':
					include 'includes/society/news.php';
					break;

					case 'history':
					include 'includes/society/history.php';
					break;

					case 'contact':
					include 'includes/society/contact.php';
					break;

					case 'imprint':
					include 'includes/society/imprint.php';
					break;

					case 'terms':
					include 'includes/society/terms.php';
					break;

					case 'careers':
					include 'includes/society/careers.php';
					break;

//DYNAMIC POSITIONING GROUP
					case 'positioning';
					include 'includes/dynamic/positioning.php';
					break;

					case 'dynamic':
					include 'includes/dynamic/dynamic.php';
					break;

					case 'expertise':
					include 'includes/dynamic/expertise.php';
					break;

					case 'capabilities':
					include 'includes/dynamic/capabilities.php';
					break;

					case 'simulation':
					include 'includes/dynamic/simulation.php';
					break;

					case 'arctic':
					include 'includes/dynamic/arctic.php';
					break;

					case 'lectures':
					include 'includes/dynamic/lectures.php';
					break;

//REFERENCES
					case 'references':
					include 'includes/references/references.php';
					break;

					case 'projects':
					include 'includes/references/projects.php';
					break;

					case 'clients':
					include 'includes/references/clients.php';
					break;

					case 'publications':
					include 'includes/references/publications.php';
					break;
				}
				?> 
			</div>
		</div>
		<div class="fakeFooter"></div>
	</div>

	<?php 
	include 'includes/footer.php';
	?>
</body>
<?php 
include 'includes/overlay.php';
?>
</html>
