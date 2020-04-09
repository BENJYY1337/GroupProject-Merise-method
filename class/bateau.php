<?php
class bateau{

    // Les parametres-----------------------------------------------------------------
        private $_idbateau ='';
        private $_nom ='';
        private $_modele ='';
        private $_taille ='';
        private $_proprietaire ='';
        private $_maintenance_idmaintenance ='';
        private $_createdBy ='';
        private $_createdDate ='';
        private $_updatedBy ='';
        private $_updatedDate ='';

    //Le constructeur-----------------------------------------------------------------
        function __construct(array $value)
        {
            $this->_idbateau = $value['idbateau'];
            $this->_nom = $value['nom'];
            $this->_modele = $value['modele'];
            $this->_taille = $value['taille'];
            $this->_proprietaire = $value['proprietaire'];
            $this->_maintenance_idmaintenance = $value['maintenance_idmaintenance'];
            $this->_createdBy = $value['createdBy'];
            $this->_createdDate = $value['createdDate'];
            $this->_updatedBy = $value['updatedBy'];
            $this->_updatedDate = $value['updatedDate'];
        }



    //Les Setteur---------------------------------------------------------------------

        public function set_idbateau($_idbateau)
        {
                $this->_idbateau = $_idbateau;

                return $this;
        }
        

        public function set_nom($_nom)
        {
                $this->_nom = $_nom;

                return $this;
        }

        public function set_modele($_modele)
        {
                $this->_modele = $_modele;

                return $this;
        }

        public function set_taille($_taille)
        {
                $this->_taille = $_taille;

                return $this;
        }

        public function set_proprietaire($_proprietaire)
        {
                $this->_proprietaire = $_proprietaire;

                return $this;
        }

        public function set_maintenance_idmaintenance($_maintenance_idmaintenance)
        {
                $this->_maintenance_idmaintenance = $_maintenance_idmaintenance;

                return $this;
        }

        public function set_createdBy($_createdBy)
        {
                $this->_createdBy = $_createdBy;

                return $this;
        }

        public function set_createdDate($_createdDate)
        {
                $this->_createdDate = $_createdDate;

                return $this;
        }

        public function set_updatedBy($_updatedBy)
        {
                $this->_updatedBy = $_updatedBy;

                return $this;
        }

        public function set_updatedDate($_updatedDate)
        {
                $this->_updatedDate = $_updatedDate;

                return $this;
        }
    //Les Getteurs--------------------------------------------------------------------

        public function get_idbateau()
        {
                return $this->_idbateau;
        }

        public function get_nom()
        {
                return $this->_nom;
        }
        public function get_modele()
        {
                return $this->_modele;
        }

        public function get_taille()
        {
                return $this->_taille;
        }

        public function get_proprietaire()
        {
                return $this->_proprietaire;
        }

        public function get_maintenance_idmaintenance()
        {
                return $this->_maintenance_idmaintenance;
        }

        public function get_createdBy()
        {
                return $this->_createdBy;
        }

        public function get_createdDate()
        {
                return $this->_createdDate;
        }

        public function get_updatedBy()
        {
                return $this->_updatedBy;
        }

        public function get_updatedDate()
        {
                return $this->_updatedDate;
        }
    //Les methodes--------------------------------------------------------------------
        
        public function hydrate(array $donnees)
        {
        if(isset($donnees['idbateau'])){ $this->idbateau = $donnees['idbateau'];}
        }

     //------------------------------------------------------------------------------
        
}
