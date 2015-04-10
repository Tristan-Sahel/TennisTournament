<?php
//######################################### PARAGRAPHES FRANCAIS POUR SOCIETÉ ########################################################

//TITRE
$societyTitle = "Societé";

// NOUVELLES
$newsTitle = "Nouvelles";
$new1 = array('title' =>"Lancement du site : 2015-03-04" ,
	'body' => "Le site a été officiellement mis en ligne le  ….
	<br/><br/> Suivez nous aussi sur LinkedIn et restez informés des dernières avancées technologiques.
	");
$new2 = array('title' =>"Candidature de D-ICE ENGINEERING à Symbiose, 2015-03-15" ,
	'body' => "D-ICE Engineering a proposé sa candidature à l'incubateur d'entreprise
	de la grande école d'ingénieur Centrale Nantes, et de l'école de commerce Audencia : Symbiose 
	<br/><br/><a href='http://www.audencia.com/incubateur/'>En savoir plus</a>
	");
$new3 = array('title' =>"Lancement de D-ICE ENGINEERING : 2015-03-04" ,
	'body' => "D-ICE Engineering a été créée et a commencé son activité fin janvier 2015");
$news = array();
array_push($news, $new1, $new2, $new3);

//CARRIÈRES
$careerTitle = 'carrières';
$career = array('title' => "Bienvenue dans l'équipe", 
	'body' => 			" 
	D-ICE est toujours à la recherche de nouveaux talents souhaitant travailler sur des projets complexes et ambitieux. 
	<br/><br/>Passionné par les nouvelles technologies ? Intéressé par le travail au sein d'une équipe entreprenante et dynamique ?
	<br/><br/>Envoyez nous votre candidature à l'adresse suivante: 
	<br/><br/>careers@dice-engineering.com
	"
	);

//HISTOIRE
$historyTitle = 'Histoire';
$history = array('title' =>'Histoire' , 
	'body' =>"
	D-ICE Engineering – DESIGN, INNOVATION, CONTROL & EXPERTISE – est une entreprise innovante ainsi qu'une experte du Positionnement Dynamique.
	D-ICE propose un une palette complète de services en ingéniérie ainsi que des services de pointe pour la thématique du Positionnement Dynamique.
	<br/><br/>Basée à Nantes, la societé a été fondée fin janvier 2015 par Sofien Kerkeni, ingénieur diplomé de l'École Centrale de Nantes (ECN) 
	et ancien responsable des développements du produit de positionnement dynamique de Sirehna.
	<br/><br/>D-ICE postule à Symbiose, l'incubateur d'entreprises de l'ECN et d'Audencia, grande école de Management.
	<br/><br/>D-ICE est votre partenaire privilégié pour tous vos projets complexes et innovants et pour
	vos projets de contrôle des plateformes marines.
	"
	);

//CONTACT
$imprint = array('title' => "Imprint", 
	'body' => "
	Le siège social de D-ICE ENGINEERING est situé au 8 quai de Versailles 44 000 Nantes, France, avec un capital de 3k€.
	<br/><br/>RCS Nantes - 809 273 329 - APE 7112 B
	"
	);

	?>

	<?php
//######################################### PARAGRAPHES FRANCAIS POUR RÉFÉRENCES ########################################################

//TITRE
	$referencesTitle = "Références";

// PROJECTS
	$projectsTitle = "Projets";
	$project1 = array('title' =>"Cosmos (Complex Offshore Structures and Marine Operations)" ,
		'presentation' => "
		D-ICE prend part au projet français de recherche Cosmos
		", 
		'body' => "
		<img src='pics/references/cosmos.jpg' class='articleFloatRightPic' alt='Illustration Cosmos project'/>
		Ce projet est une proposition d’un programme de recherche mené par le 
		LHEAA, le laboratoire d'hydrodynamique de l'École Centrale de Nantes.
		7 partenaires font partie du consortium incluant les académiques 
		<a href='https://lheea.ec-nantes.fr/doku.php'>LHEAA</a>, 
		<a href='http://www.irccyn.ec-nantes.fr/fr/'>l'IRCCyN</a>, 
		<a href='http://www.supmaritime.fr/'>l'ENSM Nantes</a>
		, l’association 
		<a href='http://www.clarte.asso.fr/'>CLARTE</a>
		 et les entreprises 
		<a href='http://www.sirehna.com/'>DCNS Research/SIREHNA</a>
		 et D-ICE.
		<br/><br/>Les objectifs de ce projet sont de relever certains des multiples défis par 
		l'installation des EMR
		<br/><br/>Au cours de cet ambitieux projets de 4 ans, des sujets scientifiques 
		complexes comme le levage de charges lourdes, la simulations multi-
		corps, le positionnement dynamique en eaux peu profondes et en 
		conditions difficiles, les opérations complexes seront abordés
		<br/><br/>Le projet a réussi avec succès la première étape de sélection.
		<br/><br/>La décision finale sera dévoilée pendant l'été pour un lancement en fin d'année 2015.
		.");
$project2 = array('title' =>"Opérations offshore en arctique" , 
	'presentation' => "
	D-ICE lance des projets de R&D sur le Positionnement dynamique en arctique
	",
	'body' => "
	<img src='pics/references/arcticProject.jpg' class='articleFloatRightPic' alt='Illustration projet arctique ofshore'/>
	Les maneuvres de bâteaux dans la glace est un défi proposé par l'industrie navale.
	Les forces exercées par la glace sont en effet différentes des intéractions qui ont lieu dans l'eau.
	<br/><br/>
	Cet environnement hostile nécéssite d'intenses recherches dans le secteur naval pour faire face avec les multiples problèmes causés par la glace, le froid et les hautes latitudes.
	<br/><br/>
	La conjoncture actuelle n'est pas favorable au développement des technologies arctiques.
	<br/><br/>
	D-ICE lancera cependant des études internes pour répondre à  ces problèmes et se maintenir à la pointe.
	");
$projects = array();
$projects[0] = $project1;
$projects[1] = $project2;

$publicationsSummary = "Appuyés par l'entreprise, nos ingénieurs ont une forte activité de conférence et de publication dans des revues scientifiques.
<br/><br/>Les publications sélectionnées ci-dessous illustrent leur expertise reconnue.";

?>

<?php
//######################################### PARAGRAPHES FRANCAIS POUR SERVICES ########################################################

//TITLE
$servicesTitle = "Services";
$servicesSubtitle = "Maintenez le cap avec D-ICE";
$servicesPresentation = "D-ICE vous propose une palette complète de services en ingéniérie
pour vos projets innovants et à haute valeur ajoutée
<ul>
<li>Études de faisabilité</li>
<li>Spécifications</li>
<li>Design et développement de systèmes de contrôle</li>
<li>Analyse et validation de résultats</li>
<li>...</li>
</ul>


";

//CONTROL
$controlTitle = 'Contrôle';
$control = array('title' => "D-ICE offre son excellence technique sur toutes les problématiques en relation avec l'ingéniérie de contrôle incluant des activités diverses:", 
	'body' => 		"
	Les systèmes de régulation sont essentiels dans beaucoup d’applications de 
	haute technologie. 
	<br/>Ces systèmes sont issus de la théorie du contrôle, science qui étudie 
	les dynamiques et la stabilité des systèmes ainsi que les techniques et les algorithmes de 
	régulation.
	<br/>Par essence multidisciplinaire, la mise en œuvre de telles techniques requiert 
	une grande expérience ainsi que des compétences pratiques et théoriques de haut niveau

	"
	);

//DESIGN
$designTitle = 'Design';
$design = array('title' => '', 
	'body' => "
	Vos projets et vos produits méritent le meilleur de la technologie, 
	l’optimisation complète du système pour obtenir les meilleures performances.
	<br/><br/>D-ICE vous offre son expérience et ses compétences dès le début de vos 
	projets pour l’exploitation complète des possibilités."
	);

//EXPERTISE
$expertiseTitle = 'Expertise et commissionning';
$expertise = array('title' => '', 
	'body' => "
	D-ICE propose son expertise pour tous les systèmes électriques avec une forte expérience dans les équipements marins;
	pilotes automatiques, positionnement dynamique, capteurs, etc...
	"
	);

//INNOVATION
$innovationTitle = 'Innovation';
$innovation = array('title' => "D-ICE offre son excellence technique sur toutes les problématiques en relation avec l'ingéniérie de contrôle incluant des activités diverses:", 
	'body' => 		"
	Les nombreux projets de Recherche et Développements ainsi que la 
	localisation de l’entreprise proche de laboratoires académiques et d’entreprises 
	innovantes vous assurent des services à la pointe ainsi que l’anticipation des nouvelles 
	techniques et des futures ruptures technologiques. 
	<br/><br/>Nous vous offrons notre engagement pour le succès de vos ambitieux 
	projets innovants.
	"
	);

//MRE
$mreTitle = 'E.M.R';
$mre = array('title' => "Bienvenue dans l'équipe", 
	'body' => 		" 
	Le développement, l’optimisation et l’installation des EMR sont de 
	nouveaux sujets de recherche. D-ICE souhaite être un acteur majeur du domaine. Cette
	volonté est entre autres traduite par la participation significative de l’entreprise au 
	projet COSMOS.
	"
	);

	?>



	<?php
//######################################### CONTENU FRANÇAIS POUR LE POSITIONNEMENT DYNAMIQUE ########################################################

	$dynamicPositioningHeader = "Positionnement Dynamique";
	$dynamicPositioningTitle = "Votre expert en Positionnement Dynamique";
	$dynamicPositioningSubtitle = "Services pour l'industrie offshore";
	$dynamicPositioningPresentation = "
	La technologie du positionnement dynamique est un standard canonique et une solution réelle pour l'industrie Offshore
	<br/><br/>Cependant, l'exploration et la production dans de plus en plus de domaines à défis et avec de plus en plus de contraintes
	nécéssite de nouvelles compétences et des outils mis à jour pour assurer et prédire de meilleures performances pour les bâteaux.
	";

//CAPABILIY
	$capabilityTitle = "Capability plots";
	$capability = array('title' => "D-ICE D-ICE propose un accompagnement complet l’établissement des
		capability plots.
		" ,
		'body' => "Toute combinaison de vent, de courant ou de vagues et toute opération
		peut être traitée.
		<br/><br/>De plus, D-ICE propose son expertise pour les opérations non standards 
		ou les environnements inédits comme le stationkeeping en arctic.
		"
		);

//SIMULATION
	$simulationTitle = "Simulation";
	$simulation = array('title' => "Modules de simulation", 
		'body' => 		"
		Les opérations dans des environnements difficiles sont exigeantes.
		<br/><br/>Les outils avancés de simulation sont des solutions réelles pour modéliser, explorer 
		et designer ces opérations, entrainer les équipages...
		<br/><br/>D-ICE propose ses compétences pour le développement de modules de contrôle de 
		plateformes et de DP à la pointe de la technologie. Ces programmes peuvent être 
		écrits dans tous les langages de programmation et développés avec un process de 
		haute qualité.
		<br/><br/>Ces développements bénéficieront des avancées obtenues sur les projets de 
		Recherche et de Développement mené par D-ICE.
		"
		);

//ARCTIQUE
	$arcticTitle = "Arctique";
	$arctic = array('title' => "“Meet D-ICE challenge”.", 
		'body' => 		"Une nouvelle frontière
		<br/>D-ICE possède une expérience inégalée dans le domaine des algorithmes de contrôle du positionnement dynamique dans les eaux infestées de glace
		et est votre partenaire privilégié dans le développement de cette technologie clé du futur.
		"
		);

//EXPERTISE POSITIONING
	$expertisePTitle = "Expertise";
	$expertiseP = array('title' => "Une entreprise indépendante pour une véritable", 
		'body' => 		"Nous vous offrons notre engagement pour toutes les 
		activités et notamment pour le commissioning des 
		équipements électriques et mécanique, la conduite de 
		FMEA (Failure Mode Effects Analysis) pour les systèmes 
		de positionnement dynamique, le design des opérations. 
		Nous vous offrons notre indépendance et notre vue 
		extérieure pour un feedback opérationnel ou l’analyse 
		d’incident DP.
		"
		);

//LECTURES
	$lecturesTitle = "Lectures";
	$lectures = array('title' => "“Vers l'excellence”", 
		'body' => 		"
		D-ICE propose des formations sur mesure pour vos 
		équipages, vos ingénieurs, etc ... permettant la profonde 
		compréhension des aspects techniques et des défis à 
		relever du positionnement dynamique.
		<br/><br/>
		Un levier inestimable pour le succès de vos projets et de 
		vos opérations
		"
		);

		?>



		<?php
//######################################### ENGLISH CONTENT FOR THE TERMS OF USE ########################################################

		$termsTitle = "Mentions légales";
		$privacy = "Politique de confidentialité";
		$policy = 

		$terms = array('title' => "Mentions légales", 
			'body' => "
			En accédant au site www.dice-engineering.com, vous acceptez les mentions légales suivantes:<br/><br/>

			Ce site internet, dont le contenu ainsi que la sélection et l'organisation du contenu de chaque page ou ensemble de pages,
			sont la pleine proprieté de D-ICE ENGINEERING sauf mention contraire.<br/><br/>

			Tous droits réservés. Vous êtes autorisés à stocker des données extraites du site de D-ICE ENGINEERING sur votre ordinateur
			et d'imprimer des copies de ces dernières pour un usage exclusivement personnel et non commercial.<br/><br/>

			Vous êtes autorisés à utiliser et distribuer des données limitées extraites du site de D-ICE ENGINEERING nécéssaires à
			l'établissement de lien direct aux pages, ou leur indexation dans les moteurs de recherches en ligne.<br/><br/>

			Tout utilisation sortant du cadre défini ci-dessus, reproduction, traduction, adaptation, réarrangement, toute autre modification,
			distribution ou stockage de données issues de ce site dans n'importe quelle forme ou par n'importe quel moyen, en partie ou en intégralité,
			sans l'accord écrit préalable de D-ICE est interdite.<br/><br/>

			Les photographies ci-dessous sont sous la licence Creative Commons CC2.0. Vous pouvez trouver ces contenus en cliquant sur les photos

			<br/><br/>Les informations contenues dans ce site peuvent ne pas être exactes ou à jour malgré nos efforts.<br/><br/>

			La présente mention légale est régie par le Droit français.  

			",

			'policy' => "D-ICE apprécie votre visite et l'intéret que vous portez à notre entreprise
			<br/><br/>Sentez vous en sécurité sur notre site, aucune information n'est collectée. 
			Notre cite contient cependant des liens vers d'autres sites dont nous ne pouvons pas garantir l'intégrité des pratiques
			"
			);

			?>

			<?php
//######################################### CONTENU FRANÇAIS POUR LE FOOTER ########################################################

			$footerPresentation = "Design. Innovation. Contrôle. Expertise";
			$marineRenewableEnergy = "Énergies marines renouvellables";

			?>