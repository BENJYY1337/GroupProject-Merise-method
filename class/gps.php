<?php
class gps /* extends bateau */
{

    // Les parametres-----------------------------------------------------------------

    /**
     * _idgps
     *
     * @var string
     */
    private $_idgps = '';

    /**
     * _longitude
     *
     * @var string
     */
    private $_longitude = '';

    /**
     * _latitude
     *
     * @var string
     */
    private $_latitude = '';

    //Le constructeur-----------------------------------------------------------------

    public function __construct(array $value)
    {
        $this->_idgps = $value['idgps'];
        $this->_longitude = $value['longitude'];
        $this->_latitude = $value['latitude'];
    }

    //Les Setteur---------------------------------------------------------------------

    /**
     * Set the value of _idgps
     *
     * @return  self
     */
    public function set_idgps($_idgps)
    {
        $this->_idgps = $_idgps;

        return $this;
    }

    /**
     * Set the value of _longitude
     *
     * @return  self
     */
    public function set_longitude($_longitude)
    {
        $this->_longitude = $_longitude;

        return $this;
    }


    /**
     * Set the value of _latitude
     *
     * @return  self
     */
    public function set_latitude($_latitude)
    {
        $this->_latitude = $_latitude;

        return $this;
    }

    //Les Getteurs--------------------------------------------------------------------

    /**
     * Get the value of _idgps
     */
    public function get_idgps()
    {
        return $this->_idgps;
    }

    /**
     * Get the value of _longitude
     */
    public function get_longitude()
    {
        return $this->_longitude;
    }

    /**
     * Get the value of _latitude
     */
    public function get_latitude()
    {
        return $this->_latitude;
    }

    //Les methodes--------------------------------------------------------------------

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . '_' . $key;

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}

$donnees = [
    "idgps" => "10",
    "longitude" => "20",
    "latitude" => "30",
];

$bateau = new gps($value);
$bateau->hydrate($donnees);
$bateau->get_idgps();
var_dump($bateau);
