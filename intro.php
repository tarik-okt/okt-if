<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
        <link rel="stylesheet" href="css/fa/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/tooltip.js"></script>
		<script src="js/popover.js"></script>
		<!-- JavaScript Test -->
		<script>
		$(function () {
		  $('.js-popover').popover()
		})
		</script>
		<!--script integration du lecteur Adobe-->
		<script type="text/javascript"> 
		PDF.SetShowToolBar("true"); //--- barre d'outils true(visible) false(non visible) ---// 
		PDF.SetShowScrollbar("true"); //--- barre de scroll true(visible) false(non visible) ---// 
		PDF.SetPageMode("none"); //--- cache les signets ---// 
		PDF.setZoom(80%); //--- Zoom le document à 80% ---// 
		</script>
		  <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
	<body>
		<header>
			<?php include("include/header-login.php");    
			  include("include/subheader.php");
			?>
		</header>
		<!--SNIPET MODAL JAVASCRIPT-->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Exemple de certification</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
							<img src="img/Certification.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL JAVASCRIPT-->
		<!--SNIPET MODAL2 JAVASCRIPT-->
		<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Exemple de courriel</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
							<!--BOITE MAIL -->
							<div class="list-group-item">
								<div style="float:right"> 
									<a class="btn btn-info" href="#" title="Accès à votre boite de réception">
									<i class="fa fa-envelope-o fa-lg"></i> Boite de réception</a>
									<a class="hidden-xs btn btn-primary" href="#" title="Afficher les messages non lus">
									<i class="fa fa-envelope fa-lg"></i> Non lus </a>
									<a href="#" class="hidden-xs" title="Répondre">
									<i class="fa fa-reply fa-lg"></i></a>
									<a href="#" class="hidden-xs" title="Répondre à tous">
									<i class="fa fa-reply-all fa-lg"></i></a>
									<a href="#" class="hidden-xs" title="Faire suivre à vos contacts">
									<i class="fa fa-share fa-lg"></i></a>
									<a href="#" class="hidden-xs" title="Imprimer">
									<i class="fa fa-print fa-lg"></i></a>
								</div>
								<p><strong>Objet:</strong> Offre commerciale</p>
								<div class="list-group-item">
									<p><strong>De :</strong> service.commercial@<wbr>veh.dz
									<span><strong>À : </strong>
									<a class="btn btn-primary btn-xs" href="#" title="med.rais102@gmail.com">
									<i class="fa fa-user fa-lg"></i> Moi</a>
									</span></br>
									<strong>Envoyé :</strong> dim. 15/03/14 10:21</p>
								</div>
							</div>
							<div class="list-group-item">
								<p>Bonjour, </br>
								Faisant suite à votre visite sur notre site Internet et à votre demande
								de brochure sur notre modèle CLS 2000, 
								nous revenons vers vous afin de vous faire une offre.</br> 

								Notre conseiller commercial aura le privilège de vous faire bénéficier
								des remises exceptionnelles du mois pouvant aller jusqu’à 450 000 Da sur 
								l’ensemble de notre gamme de véhicules, 
								si vous le contactez à l’adresse suivante : service.commercial@<wbr>veh.dz 
								avant le 30 mars.</br> 

								Nous vous remercions pour l’intérêt que vous portez à notre marque.</br>
								Cordialement.</br> 
								Service commercial VEH</p>
							</div>
							<div class="list-group-item">
								<a class="btn btn-primary" href="#" title="Répondre">
								<i class="fa fa-reply fa-lg"></i> Répondre</a>
								<a class="btn btn-info hidden-xs" href="#" title="Répondre à tous">
								<i class="fa fa-reply-all fa-lg"></i> Répondre à tous</a>
								<a class="btn btn-info hidden-xs" href="#" title="Transférer">
								<i class="fa fa-share fa-lg"></i> Transférer</a>
								<a class="btn btn-danger hidden-xs" href="#" title="Supprimer">
								<i class="fa fa-trash-o fa-lg"></i> Supprimer</a>
							</div>
							<!--FIN BOITE MAIL -->
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL2 JAVASCRIPT-->
		<!--SNIPET MODAL3 JAVASCRIPT-->
		<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title resume text-center" id="myModalLabel"><img src="img/le-saviez-vous.png" alt="" class="img-responsive"></h4>
					</div>
					<div class="modal-body body-saviez-vous">
						<h2 class="resume">EN RÉSUMÉ :</h2>
						<div>
							<p class="resume">- Lors de la réception d'un courriel, la première étape est de repérer l'expéditeur et l'objet du message.</p>
							<p class="resume">- Il est important de respecter une organisation dans la rédaction d'un courriel : objet, formule d'appel,
							rappel du contexte, développement, remerciements, salutations, signature.</p>
							<p class="resume">-Les formules utilisées dans le courriel doivent tenir compte de la nature de l'expéditeur
							( un service, un homme, une femme, une catégorie de professionnels) ainsi que du type de relation qui vous lie 
							avec ce dernier ( ami, collègue, client, subalterne, supérieur hiérarchique...)</p>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>	
		<!--FIN DE MODAL3 JAVASCRIPT-->
		<!--SNIPET MODAL4 JAVASCRIPT-->	 
		<div id="myModal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title" id="myModalLabel">Exemple d'activité</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
							<img src="img/activite.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL4 JAVASCRIPT-->
		<!--SNIPET MODAL5 JAVASCRIPT-->
		<div id="myModal5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title" id="myModalLabel">Exemple de thème</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
							<div class="text-center well encadre">
								<h3 class="activite">Thème</h3>
								<h3 class="remarque">UNE OFFRE INTÉRESSANTE !</h3>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL5 JAVASCRIPT-->
		<!--SNIPET MODAL6 JAVASCRIPT-->
		<div id="myModal6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title" id="myModalLabel">Exemple d'objectifs</h4>
					</div>
					<div class="modal-body">
						<div style="size:auto">
						 <div class="text-center well encadre">
							<ul class="list-unstyled"><h3 class="activite">Objectifs</h3>
								 <li class="remarque"><span class="fa fa-angle-double-right"></span> Identifier l’expéditeur d’un courriel professionnel reçu.</li>
								 <li class="remarque"><span class="fa fa-angle-double-right"></span> Repérer l’objet d’un courriel professionnel.</li>
								 <li class="remarque"><span class="fa fa-angle-double-right"></span> Reconnaître la structure d’un courriel professionnel.</li>
								 <li class="remarque"><span class="fa fa-angle-double-right"></span> Utiliser de façon adéquate les formules d’appel et de salutations</li>
							</ul>
						 </div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE MODAL6 JAVASCRIPT-->
		<div class="content">
			<div class="container">
				<div class="well">
					<p>Cette  formation certifiante proposée par l’<abbr title="Institut français d’Algérie">IFA</abbr> s'adresse à un large public professionnel,
					du niveau <a href="img/tabcecrl.pdf" target="blank">B2</a> du <abbr title="Cadre européen commun de référence pour les langues">CECRL</abbr>.</p> 
					<p>En fin de parcours, un <a class="modal-title" data-toggle="modal" data-target="#myModal"><strong>certificat d’assiduité et de suivi</strong></a>
					 attestant du niveau acquis vous sera délivré.</p>
				</div>
				<hr>
				<div class="list-group-item">
					<h3 class="activite">1.Mise en situation</h3>
					<p>Nous allons suivre un personnage, Mohammed RAÏS dans ses échanges de courriels en vue d’acquérir un véhicule.<br/>
					Vous compléterez vingt quatre fiches pratiques qui correspondent aux différentes démarches engagées par M.RAÏS.</p>
				</div>
				<div class="list-group-item">
					<h3 class="activite">2.Objectifs</h3>
					<ul class="list-unstyled">À l'issue de cette formation, vous saurez: : 
						<div style="margin-left:2em">
							<li><span class="fa fa-angle-double-right"></span> Analyser et repérer rapidement les informations essentielles contenues dans un courriel.</li> 
							<li><span class="fa fa-angle-double-right"></span> Utiliser un vocabulaire adapté à la communication professionnelle électronique.</li>
							<li><span class="fa fa-angle-double-right"></span> Réaliser certaines démarches professionnelles (demander un crédit bancaire, solliciter un délai de paiement, passer commande, etc...).</li>
							<li><span class="fa fa-angle-double-right"></span> Améliorer vos capacités rédactionnelles (lexique, conjugaison, syntaxe, etc...).
						</div> 
					</ul>
				</div>
				<div class="list-group-item">
					<h3 class="activite">3.Guide pratique</h3>
					<ul class="list-unstyled">Chaque fiche est structurée de la façon suivante :
						<div style="margin-left:2em">
							<li><span class="fa fa-angle-double-right"></span> Un <a class="modal-title" data-toggle="modal" data-target="#myModal5"><strong>encadré</strong></a> qui met en évidence le thème autour duquel est construite l’unité.</li>
							<li><span class="fa fa-angle-double-right"></span> Un <a class="modal-title" data-toggle="modal" data-target="#myModal6"><strong>encadré</strong></a> explicitant les objectifs poursuivis tout au long de l’unité.</li>
							<li><span class="fa fa-angle-double-right"></span> Un <a class="modal-title" data-toggle="modal" data-target="#myModal2"><strong>courriel professionnel.</strong></a></li>
							<li><span class="fa fa-angle-double-right"></span> Des <a class="modal-title" data-toggle="modal" data-target="#myModal4"><strong>activités</strong></a> en rapport au courriel.</li>
							<li><span class="fa fa-angle-double-right"></span> Un <a class="js-popover" data-container="body" data-toggle="popover" data-placement="top" data-content="Lancez-vous! Faites la première fiche pour voir la première correction!" data-original-title="" title=""><strong>corrigé</strong></a> apportant des éclaircissements en rapport avec vos réponses.</li>
							<li><span class="fa fa-angle-double-right"></span> Une page interactive <a class="modal-title" data-toggle="modal" data-target="#myModal3"><strong>« Le saviez-vous ? »</strong></a> centrée sur des éléments à retenir. </li>
						</div> 
					</ul>
				</div>
				<hr>
				<div class="well">
					<p class="alinea">Par la richesse de ses contenus, son ergonomie et son aspect dynamique, cette formation en ligne de l’IFA vous aidera à acquérir et développer des compétences, nécessaires pour la bonne conduite de vos projets en entreprise.</p>
				</div>
				<div class="buttons pull-right">
					<a href="construction2.html"class="btn btn-formation">M'inscrire gratuitement</a>
				</div> 
			</div>
		</div>
		<hr>
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
    </body>
</html>