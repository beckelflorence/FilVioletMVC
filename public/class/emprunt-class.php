<?php

    class EMPRUNT{
        //déclaration des attributs
        private $id_em;
        private $date_em;
        private $delais_em;
        private $id_i;
        private $ref_e;

        
        public function id_em(){return $this->id_em;}
        public function date_em(){return $this->date_em;}
        public function delais_em(){return $this->delais_em;}
        public function id_i(){return $this->id_i;}
        public function ref_e(){return $this->ref_e;} 
        
        //déclaration des Setter
        public function setid_em($id){
            $this->id_em=(int) $id;
        }
        public function setdate_em($date){
            $this->date_em=$date;
        }
        public function setdelais_em($delais){
            $this->delais_em=$delais;
        }
        public function setid_i($id_i){
            $this->id_i=$id_i;
        }
        public function setref_e($ref){
            $this->ref_e=$ref;
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

    class EmpruntManager{
        private function dbConnect(){
            // j'initialise un variable $bdd avec un l'objet PDO qui me permet de me connecter
            $bdd= new PDO('mysql:host=localhost;dbname=livre;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            /*                      |               |               |                    |=>array le tableau contenant l'option des erreurs 
                                    |               |               |=>encryptage chartset=utf8
                                    |               |=>dbnam = nom de la base
                                    |=> host = l'hôte */

            return $bdd;
        }

        public function getEmprunts(){
            $emprunts=[];
            $db=$this->dbConnect();
            $req=$db->query('SELECT * FROM emprunt'); /* pas besoin d execute avec query */
            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $em = new EMPRUNT;
                $em->hydrate($data);
                $emprunts[]=$em;
            }
            return $emprunts;
        }

        public function getEmprunt($id){
            
            $db=$this->dbConnect();
            $req=$db->prepare('SELECT * FROM emprunt WHERE id_em=?');
            $req->execute(array($id));
            $data= $req->fetch(PDO::FETCH_ASSOC);
            $em= new EMPRUNT();
            $em->hydrate($data);
            return $em;
        }
    }
?>
