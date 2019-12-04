<?php
namespace App\Model\Entity;

use App\Model\entity\Database;
require_once "Model/Entity/Connection.php";

$pdo = Database::getPdo();

class BoardingCards
{
    private $id;
    
    private $flight_number;
    
    private $bus_number;
    
    private $gate;
    
    private $seat;
    
    private $departure;
    
    private $arrival;

    public $donnees = [];
    public function __construct($donnees = [])
    {
        if (!empty($donnees)) { // Si on a spécifié des valeurs, alors on hydrate l'objet.
            $this->hydrate($donnees);
        }
    }
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'. ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    //Setter /
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setFlight_number($flight_number)
    {
        $this->flight_number = $flight_number;
    }

    public function setBus_number($bus_number)
    {
        $this->bus_number = $bus_number;
    }

    public function setGate($gate)
    {
        $this->gate = $gate;
    }

    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }
    

    //Getter/
    public function getId()
    {
        return $this->id;
    }
    public function getFlight_number()
    {
        return $this->flight_number;
    }
    
    public function getBus_number()
    {
        return $this->bus_number;
    }

    public function getGate()
    {
        return $this->gate;
    }

    public function getSeat()
    {
        return $this->seat;
    }

    public function getDeparture()
    {
        return $this->departure;
    }
    public function getArrival()
    {
        return $this->arrival;
    }
}
