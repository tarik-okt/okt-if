<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Institut Français | Algérie</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/dinot.css">
		<link rel="stylesheet" href="css/style.css">
		
        <script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        <script src="js/sortable.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/collapse.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="js/scrollspy.js"></script>  
		<style>
    body { padding-top: 50px; }
  </style>
        
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
	<?php include("include/navbar-topfix-1.php");
		include("include/header-login.php");
			?>
		</header>
   <hr>
     <!--ANCRE NAVBAR-TOPFIX--><div id="sujet"></div>
     	<div class="container">
	         <div class="well">
			 <h2>FICHE N°1</h2>
				<div class="row">
					 <div class="text-center well encadre col-xs-12 col-sm-offset-4 col-sm-4 col-sm-offset-4">
						 <h3 class="activite">Thème</h3>
							 <h3 class="remarque">UNE OFFRE INTÉRESSANTE !
							 </h3>
					 </div>
					 <div class="text-center well encadre col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1">
						<ul class="list-unstyled"><h3 class="activite">Objectifs</h3>
							 <li class="remarque"><span class="fa fa-angle-double-right"></span> Identifier l’expéditeur d’un courriel professionnel reçu.</li>
							 <li class="remarque"><span class="fa fa-angle-double-right"></span> Repérer l’objet d’un courriel professionnel.</li>
							 <li class="remarque"><span class="fa fa-angle-double-right"></span> Reconnaître la structure d’un courriel professionnel.</li>
							 <li class="remarque"><span class="fa fa-angle-double-right"></span> Utiliser de façon adéquate les formules d’appel et de salutations</li>
						</ul>
					 </div>
				 </div>
			 <p class="recoi" id="sujet">Mohammed RAÏS reçoit le message suivant:</p>
			 
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
Service commercial VEH</p><!--ANCRE NAVBAR-TOPFIX--><div id="act1"></div>
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
			                    <!-- FORMULAIRE A TRANSMETTRE -->

				
			  <form id="form" method="POST" action="corrige1.php">
			  <h3 class="activite">Activité 1</h3>
			  <p><i>Repérez le sujet et l'objet du courriel :</i></p>


			  <div class="well well-lg">
			  
			  <div class="row">  
                                <div class="col-md-12 col-xs-12"><p class="label-info label_activite">a. Qui est l'expéditeur de ce courrier électronique aussi appelé courriel ?</p></div>
								<div class="col-md-4 col-xs-12">
								 <input type="radio" style='visibility:hidden;display:none' name="exped" value="Vous n'avez pas répondu"  checked="checked"/>
                                       <div class="input-group">
                                        <span class="input-group-addon">                                     
                                        <input type="radio" name="exped" id="exped1" value="Un homme" />
                                    </span><label for="exped1" class="form-control">Un homme</label></div></div>
								<div class="col-md-4 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="exped" id="exped2" value="Une femme" />
                                    </span><label for="exped2" class="form-control">Une femme</label></div></div>
								<div class="col-md-4 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="exped" id="exped3" value="On ne sait pas" />
                                    </span><label for="exped3" class="form-control">On ne sait pas</label></div></div>
				</div></br> 
								
				<div class="row">  
                                <div class="col-md-12 col-xs-12"><p class="label-info label_activite">b. Que propose-t-on à Mohammed RAÏS ?</p></div>
								<div class="col-md-4 col-xs-12">
								<input type="radio" style='visibility:hidden;display:none' name="propos" value="Vous n'avez pas répondu"  checked="checked"/>
                                       <div class="input-group">
                                        <span class="input-group-addon">                                     
                                        <input type="radio" name="propos" id="propos1" value="On lui propose une brochure" />
                                    </span><label for="propos1" class="form-control">On lui propose une brochure</label></div></div>
								<div class="col-md-4 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="propos" id="propos2" value="On lui fait une proposition commerciale" />
                                    </span><label for="propos2" class="2 form-control">On lui fait une proposition commerciale</label></div></div>
								<div class="col-md-4 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="propos" id="propos3" value="On lui indique qu'un conseiller commercial va le contacter" />
                                    </span><label for="propos3" class="2 form-control">On lui indique qu'un conseiller commercial va le contacter</label></div></div>
			<!--ANCRE NAVBAR-TOPFIX--></div> <div id="act2"></div>


	 </div><!--fin activité 1--></br>


								 <h3 class="activite">Activité 2</h3>
                          <p><i>De quoi est composé un courriel ?<i></p>
	                          
						  
                <div class="well well-lg col-xs-12 col-sm-12 col-md-5">
					 
                    
                    <p>Faites glisser les éléments pour les mettre dans le <strong>bon ordre</strong>.</p>
                                                 
            </div>
            <div class="well well-lg col-xs-12 col-sm-12 col-md-offset-1 col-md-6">
                <ol class="phrases vertical encours">
                    <li value="4"><i class="fa fa-arrows-v"></i> <strong>Développement</strong> : Votre conseiller commercial aura le privilège de...</li>
                    <li value="1"><i class="fa fa-arrows-v"></i> <strong>Objet</strong> : Offre commerciale</li>
                    <li value="3"><i class="fa fa-arrows-v"></i> <strong>Rappel du contexte</strong> : Faisant suite à...</li>
                    <li value="5"><i class="fa fa-arrows-v"></i> <strong>Remerciement</strong> : Nous vous remercions pour...</li>          
                    <li value="6"><i class="fa fa-arrows-v"></i> <strong>Salutations</strong> : Cordialement</li>
                    <li value="2"><i class="fa fa-arrows-v"></i> <strong>Formule d’appel</strong> : Bonjour</li> <!--ANCRE NAVBAR-TOPFIX--><div id="act3"></div> 
                    <li value="7"><i class="fa fa-arrows-v"></i> <strong>Signature</strong> : Service commercial</li>     
                </ol>
				<input type="text" id="ordre" hidden="hidden" name="reponse" value="pas de reponse" /> 
			</div>
            <!--fin activité 2-->

			<!--ANCRE NAVBAR-TOPFIX--><div id="act3"></div>
			<h3 class="activite">Activité 3</h3>
			<p><i>Choisissez la bonne expression :</i></p>
			<div class="well well-lg" style="font-style : normal">
					<p>De :Mohammed RAÏS (med.raïs@gmail.com)</p>
                    <p>Envoyé :lun. 16/03/14 à 09h41</p>
                    <p>A :service.commercial@veh.dz</p>
                    <p>Objet : Re : offre commerciale</p>
									<div class="input-group">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite"><i>Formule d’appel :</i>
												</span>
													<select name="formap" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Madame, Monsieur">Madame, Monsieur</option>
        	                                            <option VALUE="Salut">Salut</option>     	                                            
		                                                <option VALUE="Monsieur">Monsieur</option>
														<option VALUE="Monsieur, Madame">Monsieur, Madame</option>
													</select>
										
											</div>
										</div>
								</br>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite"><i>Rappel du contexte :</i>	
												</span>		
													<select name="rapp" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Je vous remercie pour votre message">Je vous remercie pour votre message</option>
        	                                            <option VALUE="Merci pour votre message">Merci pour votre message</option>     	                                            
		                                                <option VALUE="Merci beaucoup">Merci beaucoup</option>
		                                                <option VALUE="Bien reçu, merci">Bien reçu, merci</option>
													</select>												
											</div>
										</div>		
								</br>					
										<div class="form-group"></h3>
											<div class="input-group">
												<span class="input-group-addon label_activite"><i>Développement :</i>	
												</span>		
													<select name="exprim" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Oui, c’est intéressant">Oui, c’est intéressant</option>
        	                                            <option VALUE="Ça m’intéresse">Ça m’intéresse</option>
		                                                <option VALUE="Je serais, en effet, intéressé">Je serais, en effet, intéressé</option>
		                                                <option VALUE="En effet, c’est intéressant">En effet, c’est intéressant</option>
		                                                <option VALUE="Cela a l’air très intéressant">Cela a l’air très intéressant</option>
													</select>												
											</div>
										</div>d’acquérir un véhicule de votre marque en bénéficiant des remises annoncées.<hr>
									
					<p>Cependant, je souhaiterais savoir dans quelle mesure je serais susceptible de pouvoir bénéficier d’un prêt bancaire auprès de votre compagnie.</p>					
									
								</br>		
								
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite"><i>Remerciement :</i> 	
												</span>		
													<select name="rapel" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>
														<option VALUE="Je vous remercie par avance pour votre réponse">Je vous remercie par avance pour votre réponse</option>
														<option VALUE="Merci beaucoup de me répondre">Merci beaucoup de me répondre</option>
		                                                <option VALUE="C'est possible ? Merci">C'est possible ? Merci</option>
		                                                <option VALUE="Répondez moi vite s'il vous plaît">Répondez moi vite s'il vous plaît</option>
													</select>												
											</div><div id="act4"></div><!--ANCRE NAVBAR-TOPFIX-->
										</div>	
							
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite"><i>Salutations</i> 	
												</span>		
													<select name="cordialement" class="form-control">
														<option VALUE="vous n'avez pas répondu"></option>
        	                                            <option VALUE="Cordialement">Cordialement</option>
		                                                <option VALUE="Aimablement">Aimablement</option>
		                                                <option VALUE="A bientôt"> A bientôt</option>
													</select>												
											</div>
										</div>	
									</div>
										
								</br>			                         
				 <p> Mohammed Raïs </p>
									
		    </div><!--fin activité 3--></br>


                                 <h2>Aller plus loin</h2>
                                 <h3 class="activite">Activité 4</h3>
            
                                 <p><i>Comment vous adressez-vous à :</i></p>
			<div class="well well-lg">					 
								 <div class="input-group">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite">Un avocat :
												</span>
													<select name="avocat" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>
		                                                <option VALUE="Bonjour Maître">Bonjour Maître</option>
        	                                            <option VALUE="Cher avocat"> Cher avocat </option>
		                                                <option VALUE="Monsieur l'avocat">Monsieur l'avocat</option>
		                                                <option VALUE="Maître">Maître</option>
													</select>
												
											</div>
										</div>
								</br>
								
								<div class="input-group">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon label_activite">Un médecin :
												</span>
													<select name="medcin" class="form-control">
														<option VALUE="vous n'avez pas répondu"> </option>                                
        	                                            <option VALUE="Professeur">Professeur</option>
		                                                <option VALUE="Maître">Maître</option>
		                                                <option VALUE="Docteur">Docteur</option>
													</select>
												
											</div>
										</div><div id="act5"></div><!--ANCRE NAVBAR-TOPFIX-->
									</div>
								</div>
			</div><!--fin activité 4--></br>
			
								<h3 class="activite">Activité 5</h3>
                               
                                    
                         
                                <p><i>Pour quel type de destinataire utiliseriez-vous ces formules?</i></p>
            <div class="well well-lg">                            
                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Salutations respectueuses</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="sentim" value="Vous n'avez pas répondu" checked="checked"/>
                                        <input type="radio" name="sentim" id="sentim1" value="À un proche" />
                                    </span><label for="sentim1" class="form-control">À un ami </label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="sentim" id="sentim2" value="À des essionnels" />
                                    </span><label for="sentim2" class=" form-control">À un profes<wbr>sionnel</label></div>
								</div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="sentim" id="sentim3" value="À une personnalité" />
                                    </span><label for="sentim3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>
                                
                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordialement</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="cord" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="cord" id="cord1" value="À un proche" />
                                    </span><label for="cord1" class="form-control">À un ami </label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="cord" id="cord2" value="À des professionnels" />
                                    </span><label for="cord2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="cord" id="cord3" value="À une personnalité" />
                                    </span><label for="cord3" class=" form-control">À un supérieur hiérarchique </label></div></div>
								</div></br>
                      
                               <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À la prochaine !</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="alap" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="alap" id="alap1" value="À un proche" />
                                    </span><label for="alap1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="alap" id="alap2" value="À des professionnels" />
                                    </span><label for="alap2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="alap" id="alap3" value="À une personnalité" />
                                    </span><label for="alap3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>

                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Cordiales salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="cors" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="cors" id="cors1" value="À un proche" />
                                    </span><label for="cors1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="cors" id="cors2" value="À des professionnels" />
                                    </span><label for="cors2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="cors" id="cors3" value="À une personnalité" />
                                    </span><label for="cors3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>

                               <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class=" label-info label_activite">Respectueuse considération</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="resp" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="resp" id="resp1" value="À un proche" />
                                    </span><label for="resp1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="resp" id="resp2" value="À des professionnels" />
                                    </span><label for="resp2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="resp" id="resp3" value="À une personnalité" />
                                    </span><label for="resp3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>

                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Sincères salutations</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										 <input type="radio" style='visibility:hidden;display:none' name="ss" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="ss" id="ss1" value="À un proche" />
                                    </span><label for="ss1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="ss" id="ss2" value="À des professionnels" />
                                    </span><label for="ss2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="ss" id="ss3" value="À une personnalité" />
                                    </span><label for="ss3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>

                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Salutations distinguées</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="sd" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="sd" id="sd1" value="À un proche" />
                                    </span><label for="sd1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="sd" id="sd2" value="À des professionnels" />
                                    </span><label for="sd2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="sd" id="sd3" value="À une personnalité" />
                                    </span><label for="sd3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br>

                               <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">Bises</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="bs" value="Vous n'avez pas répondu"checked="checked"/>
                                        <input type="radio" name="bs" id="bs1" value="À un proche" />
                                    </span><label for="bs1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="bs" id="bs2" value="À des professionnels" />
                                    </span><label for="bs2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="bs" id="bs3" value="À une personnalité" />
                                    </span><label for="bs3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br> 

                                <div class="row">  
                                <div class="col-md-3 col-xs-12"><p class="label-info label_activite">À +</p></div>
								<div class="col-md-3 col-xs-12">
                                       <div class="input-group">
                                        <span class="input-group-addon">
										<input type="radio" style='visibility:hidden;display:none' name="a" value="Vous n'avez pas répondu" checked="checked"/>
                                        <input type="radio" name="a" id="a1" value="À un proche" />
                                    </span><label for="a1" class="form-control">À un ami</label></div></div>
								<div class="col-md-3 col-xs-12"><div class=" input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="a" id="a2" value="À des professionnels" />
                                    </span><label for="a2" class=" form-control">À un profes<wbr>sionnel</label></div></div>
								<div class="col-md-3 col-xs-12"><div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="radio" name="a" id="a3" value="À une personnalité" />
                                    </span><label for="a3" class=" form-control">À un supérieur hiérarchique</label></div></div>
								</div></br> 
								

            </div><!--fin activité 5--></br>
							    <button class="btn btn-success btn-md pull-right" type="submit" hidden="hidden">
                        <i class="fa fa-check-circle"> </i> Voir le corrigé</button></br></br>
							    
                           </form>
            
           
                
                
     </div><!--fin well principal-->
	 </div><!--fin container principal-->
     <hr>
    <footer>
    	<?php include("include/footer.php"); ?> 
    </footer>
	<!-- JavaScript Includes -->
	<script type="text/javascript">
        $(document).ready(function(){
            var group = $("ol.phrases").sortable({
                group: 'phrases',

            onDrop: function (item, container, _super) {
                $('#ordre').val(group.sortable("serialize").get().join())
                _super(item, container)
                },
            serialize: function (parent, children, isContainer) {
                return isContainer ? children.join() : parent.val()
                },
            })
        })
    </script>
	
    </body>
</html>