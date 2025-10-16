<?php
Class Team {          
    # Attributs
    private int $idTeam;
    private string $name;
    private string $dateCreation;
    private array $players;

    # Constructeur
    public function __construct($idTeam, $name, $dateCreation){
        $this->_idTeam = $idTeam;             
        $this->_name = $name;              
        $this->_players = [];    
    }

    # toString
    public function __toString() {
        return "{$this->_idTeam}<br>
        {$this->_name}<br>";
    }

    #Getter

    public function getIdTeam() {
        return $this->_idHotel;
    }

    public function getName() {
        return $this->_name;
    }

    public function getOkayer() {
        return $this->_player;
    }

    # Setters
    public function setIdTeam($idTeam) {
        $this->_idTeam = $idTeam;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function addPlayers($player){
        $this->_players[] = $player; 
    }

}