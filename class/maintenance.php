<?php
class maintenance /* extends bateau */{

    // Les parametres-----------------------------------------------------------------        
        /**
         *
             * @var int id de la maintenance
         * @var string date maintenance electrique
         * @var string date maintenance electronique
         * @var string date maintenance des circuits
         * @var string date maintenance de la coque
         * @var string date maintenance de l'agrement
         */
        private $_idmaintenance ='';
        private $_electricite ='';
        private $_electronique ='';
        private $_circuit ='';
        private $_coque ='';
        private $_grement ='';
        

    //Le constructeur-----------------------------------------------------------------



    //Les Setteur---------------------------------------------------------------------

        /**
         * Set date maintenance de l'agrement
         *
         * @param  int  $_idmaintenance  date maintenance de l'agrement
         *
         * @return  self
         */ 
        public function set_idmaintenance($_idmaintenance)
        {
                $this->_idmaintenance = $_idmaintenance;

                return $this;
        }

        /**
         * Set the value of _electricite
         *
         * @return  self
         */ 
        public function set_electricite($_electricite)
        {
                $this->_electricite = $_electricite;

                return $this;
        }

        /**
         * Set the value of _electronique
         *
         * @return  self
         */ 
        public function set_electronique($_electronique)
        {
                $this->_electronique = $_electronique;

                return $this;
        }

        /**
         * Set the value of _circuit
         *
         * @return  self
         */ 
        public function set_circuit($_circuit)
        {
            $this->_circuit = $_circuit;
            
            return $this;
        }
        
        /**
         * Set the value of _coque
         *
         * @return  self
         */ 
        public function set_coque($_coque)
        {
            $this->_coque = $_coque;
            
            return $this;
        }
        
        /**
         * Set the value of _grement
         *
         * @return  self
         */ 
        public function set_grement($_grement)
        {
            $this->_grement = $_grement;
            
            return $this;
        }

        
    //Les Getteurs--------------------------------------------------------------------

        /**
         * Get date maintenance de l'agrement
         *
         * @return  string
         */ 
        public function get_idmaintenance()
        {
            return $this->_idmaintenance;
        }

        /**
         * Get the value of _electricite
         */ 
        public function get_electricite()
        {
                return $this->_electricite;
        }
        /**
         * Get the value of _electronique
         */ 
        public function get_electronique()
        {
                return $this->_electronique;
        }

        /**
         * Get the value of _circuit
         */ 
        public function get_circuit()
        {
                return $this->_circuit;
        }

        /**
         * Get the value of _coque
         */ 
        public function get_coque()
        {
                return $this->_coque;
        }

        /**
         * Get the value of _grement
         */ 
        public function get_grement()
        {
                return $this->_grement;
        }
            
    //Les methodes--------------------------------------------------------------------
        

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.'_'.$key;

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}


// test hydratation avec tableau
$donnees = [
        "idmaintenance" => "10",
        "electricite" => "20",
        "electronique" => "30",
        "circuit" => "40",
        "coque" => "50",
        "grement" => "60",
];

$bateau = new maintenance();
$bateau->hydrate($donnees);
var_dump($bateau);




