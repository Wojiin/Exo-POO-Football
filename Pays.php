<?php
class Pays {          
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
        return "{$this->_name}";
    }

    # Getters
    public function getIdPays() {
        return $this->_idPays;
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

    public function addTeam($team) {
        $this->_teams[] = $team;
    }

    # Affichage des équipes du pays
    public function listeTeams() {
        echo "<ul>";
        foreach ($this->_teams as $team) {
            echo "<li>{$team->getName()}</li>";
        }
        echo "</ul>";
    }
}
