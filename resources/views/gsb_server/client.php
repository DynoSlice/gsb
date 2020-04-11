<?php

$Client_Soap= new SoapClient('http://127.0.0.1/gsb/resources/views/gsb_server/services?wsdl', array('trace' => 1));


echo '----------- liste des fonctions ---------------<br>';
$Liste_Fonctions = $Client_Soap->__getFunctions();
   foreach($Liste_Fonctions as $La_Fonction) {
		echo $La_Fonction.'<br>';
	}
	echo '<br><br>';
  
  $id = Auth::user()->id;
  
  $req = $Client_Soap->__soapCall('Donne_liste_frais', array ($id));
  echo '----------- Liste des frais  ---------------<br>';
  print_r($req);
 
 
   echo '<br>';
   echo '<br>';
   echo '<br>';


  $req = $Client_Soap->__soapCall('Donne_info_user', array ($id));
  echo '----------- Information utilisateur connecter  ---------------<br>';
  print_r($req);
  // foreach($req as $info){
  //   echo "\r - $info \r ";
  // };


  echo '<br>';
  echo '<br>';
  echo '<br>';


 $req = $Client_Soap->__soapCall('Donne_article_user', array ($id));
 echo '----------- Article utilisateurs   ---------------<br>';
 print_r($req);
  
	echo '<br>';
	echo '<br>';
	echo '<br>';
 
 // ?>
 
