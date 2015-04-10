<?php
if ($_GET['lang'] == 'fr'){
	include (__DIR__.'/languages/fr.php');
} else{
	include (__DIR__.'/languages/en.php');
}
?>
<div id="header">
	<div id="subHeader">
		<p onclick="goTo('home')" id="linkLogo">
			<img id="logo" src="pics/logo.png" alt="logo D-ICE" onload="movePageInsideMenu();"/>
		</p>

		<!--########################################		BIG TOP MENU		###########################-->
		<ul id="menu">
			<li class="firstDegreeMenu">
				<p onclick="goTo('society')">
					<?php
					echo $societyTitle;
					?>
				</p>
				<ul id="scrollingMenu" class="scrollingMenu">
					<li>
						<p onclick="goTo('news')">
							News
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('society', 'history')">
							<?php
							echo $historyTitle;
							?>
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('society', 'contact')">
							Contact
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('society', 'careers')">
							<?php
							echo $careerTitle;
							?>
						</p>
					</li>
				</ul>

			</li>
			<li class="firstDegreeMenu"><p onclick="goTo('services')" >SERVICES</p>
				<ul id="scrollingMenuServices" class="scrollingMenu">
					<li>
						<p onclick="goToAnchor('services', 'control')">
							<?php
							echo $controlTitle;
							?>
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('services', 'design')">
							Design
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('services', 'expertise')">
							Expertise
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('services', 'innovation')">
							Innovation
						</p>
					</li>
					<li>
						<p onclick="goToAnchor('services', 'mre')">
							M.R.E
						</p>
					</li>
				</ul>
			</li>
			<li class="firstDegreeMenu"><p onclick="goTo('positioning')" class="headerDynPos">
				<?php
				echo $dynamicPositioningHeader;
				?>
			</p>
			<ul id="scrollingMenuPositioning" class="scrollingMenu">
				<li>
					<p onclick="goToAnchor('positioning', 'capability')" style="">
						<?php
						echo $capabilityTitle;
						?>
					</p>
				</li>
				<li>
					<p onclick="goToAnchor('positioning',  'simulation')">
						Simulation
					</p>
				</li>
				<li>
					<p onclick="goToAnchor('positioning', 'arctic')">
						Arctic
					</p>
				</li>
				<li>
					<p onclick="goToAnchor('positioning', 'expertisep')">
						Expertise
					</p>
				</li>
				<li>
					<p onclick="goToAnchor('positioning', 'lectures')">
						Lectures
					</p>
				</li>
			</ul>
		</li>
		<li class="firstDegreeMenu"><p onclick="goTo('references')">REFERENCES</p>

			<ul id="scrollingMenuReferences" class="scrollingMenu">
				<li>
					<p onclick="goToAnchor('references', 'projects')">
						R&D
					</p>
				</li>
				<li>
					<p onclick="goToAnchor('references', 'publications')">
						Publications
					</p>
				</li>

			</ul>


		</li>
	</ul>
	<ul id="languages">
		<li><p id="fr" onclick="changeLanguage('fr')">Fr</p></li>
		<li><p id="en" class="activeLanguage" onclick="changeLanguage('en')">En</p></li>
	</ul>
</div>
</div>