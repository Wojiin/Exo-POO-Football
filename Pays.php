<?php
Class Pays {          
    # Attributs 
    private int $_idPays;
    private string $_name;
    private array $_teams;

    # Constructeur
    public function __construct($idPays, $name){
        $this->_idPays = $idPays;             
        $this->_name = $name;
        $this->_teams = [];     
    }

    # toString
    public function __toString() {
        return "{$this->_idPays}<br>
        {$this->_name}<br>";
    }

    # Getters
    public function getIdPays() {
        return $this->idPays;
    }

    public function getName() {
        return $this->_name;
    }

    public function getTeams() {
        return $this->_teams;
    }

    # Setters
    public function setIdPays($idPays) {
        $this->_idPays = $idPays;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function addTeam($team){
        $this->_teams[] = $team; 
    }

}
