<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      
		//$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		try{
        self::$instance = new PDO('mysql:host=localhost;port=3308;dbname=promotion', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//ou bien comme ceci pour afficher les erreurs
		//self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      
      return self::$instance;
    }
  }
?>