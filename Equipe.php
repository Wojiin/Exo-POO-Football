<?php
class Team {          
    # Attributs
    private int $_idTeam;
    private string $_name;
    private string $_dateCreation;
    private Pays $_pays;
    private array $_players;

    # Constructeur
    public function __construct($idTeam, $name, $dateCreation, $pays){
        $this->_idTeam = $idTeam;             
        $this->_name = $name;              
        $this->_dateCreation = $dateCreation;
        $this->_pays = $pays;
        $this->_players = [];
        $pays->addTeam($this);
    }

    # toString
    public function __toString() {
        return "{$this->_name} ({$this->_pays->getName()} {$this->_dateCreation})";
    }

    # Getters
    public function getIdTeam() {
        return $this->_idTeam;
    }

    public function getName() {
        return $this->_name;
    }

    public function getDateCreation() {
        return $this->_dateCreation;
    }

    public function getPays() {
        return $this->_pays;
    }

    public function getPlayers() {
        return $this->_players;
    }

    # Setters
    public function setIdTeam($idTeam) {
        $this->_idTeam = $idTeam;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function setDateCreation($dateCreation) {
        $this->_dateCreation = $dateCreation;
    }

    public function addPlayer($player){
        $this->_players[] = $player; 
    }

}
