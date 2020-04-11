<?php
ini_set('soap.wsdl_cache_enabled',0);  // uniquement en phase de dev


class C_MON_SERVEUR{
   
   public function Donne_liste_frais($id)
	{ 
      $pdo = new pdo("mysql:host=localhost:3308;dbname=gsb","root", "");
      $sql = "select * FROM missions WHERE user_id = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetch();
	   return $resultat; 
   }


   public function Donne_info_user($id)
	{ 
      $pdo = new pdo("mysql:host=localhost:3308;dbname=gsb","root", "");
      $sql = "select * FROM users WHERE id = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetch();
	   return $resultat;
   }

   public function Donne_article_user($id)
	{ 
      $pdo = new pdo("mysql:host=localhost:3308;dbname=gsb","root", "");
      $sql = "select * FROM articles WHERE user_id = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetch();
	   return $resultat;
   }
   

}

 $mon_serveur = new soapserver('http://127.0.0.1/gsb/resources/views/gsb_server/services.wsdl');  
 $mon_serveur->setclass('c_mon_serveur');
 $mon_serveur->handle();
 ?> 
 