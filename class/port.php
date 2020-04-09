<?php
    class port extends bateau
{
    // Les parametres------------------------------------------------------------------
        /**
         * @var int id des ports
         * @var string indique le port de départ
         * @var string indique le port d'arrivé
         * @var string indique le nom de l'escale si il y en a eu une
         * @var string indique la date d'arrivée dans le port
         * @var string indique la date de départ du port
         * @var string indique la date d'une possible escale
         */
        
        private $_idport;
        private $_portDepart;
        private $_portArrive;
        private $_escale;
        private $_datesArrivees;
        private $_datesDepart;
        private $_datesEscales;

        
        
    // Le Constructeur------------------------------------------------------------------
        
        
        
    // Les Setters------------------------------------------------------------------
    
        /**
        * Set the value of _idport
        *
        * @return  self
        */ 
        public function set_idport($_idport)
        {
            $this->_idport = $_idport;

            return $this;
        }
        
        /**
        * Set the value of _portDepart
        *
        * @return  self
        */ 
        public function set_portDepart($_portDepart)
        {
            $this->_portDepart = $_portDepart;
            
                return $this;
        }
        
        /**
        * Set the value of _portArrive
        *
        * @return  self
        */ 
        public function set_portArrive($_portArrive)
        {
            $this->_portArrive = $_portArrive;

            return $this;
        }

        /**
        * Set the value of _escale
        *
        * @return  self
        */ 
        public function set_escale($_escale)
        {
            $this->_escale = $_escale;

            return $this;
        }

        /**
        * Set the value of _datesArrivees
        *
        * @return  self
        */ 
        public function set_datesArrivees($_datesArrivees)
        {
            $this->_datesArrivees = $_datesArrivees;

            return $this;
        }

        /**
        * Set the value of _datesDepart
        *
        * @return  self
        */ 
        public function set_datesDepart($_datesDepart)
        {
            $this->_datesDepart = $_datesDepart;

            return $this;
        }

        /**
        * Set the value of _datesEscales
        *
        * @return  self
        */ 
        public function set_datesEscales($_datesEscales)
        {
            $this->_datesEscales = $_datesEscales;

            return $this;
        }

    // Les Getters------------------------------------------------------------------
    
        /**
        * Get the value of _idport
        */ 
        public function get_idport()
        {
            return $this->_idport;
        }
        
        /**
        * Get the value of _portDepart
        */ 
        public function get_portDepart()
        {
            return $this->_portDepart;
        }
        
        /**
        * Get the value of _portArrive
        */ 
        public function get_portArrive()
        {
            return $this->_portArrive;
        }
        
        /**
        * Get the value of _escale
        */ 
        public function get_escale()
        {
            return $this->_escale;
        }

        /**
        * Get the value of _datesArrivees
        */ 
        public function get_datesArrivees()
        {
            return $this->_datesArrivees;
        }

        /**
        * Get the value of _datesDepart
        */ 
        public function get_datesDepart()
        {
            return $this->_datesDepart;
        }

        /**
        * Get the value of _datesEscales
        */ 
        public function get_datesEscales()
        {
            return $this->_datesEscales;
        }

    // Les Methodes------------------------------------------------------------------

}