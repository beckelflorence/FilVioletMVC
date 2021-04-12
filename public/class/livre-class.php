<?php

    class LIVRE{
        //déclaration des attributs
        private $id_l;
        private $titre_l;
        private $annee_l;
        private $resume_l;
        private $id_t;

        
        public function id_l(){return $this->id_l;}
        public function titre_l(){return $this->titre_l;}
        public function annee_l(){return $this->annee_l;}
        public function resume_l(){return $this->resume_l;}
        public function id_t(){return $this->id_t;} 
        
        //déclaration des Setter
        public function setid_l($id){
            $this->id_l=(int) $id;
        }
        public function settitre_l($name){
            $this->titre_l=$name;
        }
        public function setannee_l($surname){
            $this->annee_l=$surname;
        }
        public function setresume_l($mail){
            $this->resume_l=$mail;
        }
        public function setid_t($avat){
            $this->id_t=$avat;
        }

        //HYDRATATION
        public function hydrate( array $donnees){
            foreach($donnees as $key => $value){
                $method='set'.ucfirst($key);// ucfirst mettra la premiere lettre en majuscule
                if(method_exists($this,$method)){
                    $this->$method($value);
                }
            }
        }
    }

    class LivreManager{
        private function dbConnect(){
            // j'initialise un variable $bdd avec un l'objet PDO qui me permet de me connecter
            $bdd= new PDO('mysql:host=localhost;dbname=livre;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            /*                      |               |               |                    |=>array le tableau contenant l'option des erreurs 
                                    |               |               |=>encryptage chartset=utf8
                                    |               |=>dbnam = nom de la base
                                    |=> host = l'hôte */

            return $bdd;
        }

        public function getLivres(){
            $livres=[];
            $db=$this->dbConnect();
            $req=$db->query('SELECT * FROM livre'); /* pas besoin d execute avec query */
            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $book = new LIVRE;
                $book->hydrate($data);
                $livres[]=$book;
            }
            return $livres;
        }

        public function getLivre($id){
            
            $db=$this->dbConnect();
            $req=$db->prepare('SELECT * FROM livre WHERE id_l=?');
            $req->execute(array($id));
            $data= $req->fetch(PDO::FETCH_ASSOC);
            $book= new LIVRE();
            $book->hydrate($data);
            return $book;
        }
    }
?>
