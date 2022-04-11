<?php

    Class solar_system
    {
        private $bdd;

        public function __construct()
        {
            try {
                $this->bdd=new PDO("mysql:localhost;dbname=voie_lactee;charset=utf8","root","");
            }
            catch (Exception $e)
            {
                die("Erreur :".$e->getMessage());
            }   
        }

        public function insertsolarsystem($board)
        {
            $rocket = $this->bdd->prepare("INSERT INTO `système solaire`(`nom_planete`) VALUES (':data')");
            $rocket->execute(array(':data'=>$board));
        }
    }
?>