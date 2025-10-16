<?php
Class Player {          
    # Attributs 
    private int $_idPlayer;
    private string $_firstName;
    private string $_lastName;
    private string $_birthDate;
    private string $_pays;
    private Team $_team;

    # Constructeur
    public function __construct($idPlayer, $firstName, $lastName, $_birthDate, $pays, Team $team){
        $this->_idPlayer = $idPlayer;
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = $birthDate;
        $this->_pays = $pays;     
    }

    # toString
    public function __toString() {
        return "{$this->_idPplayer}<br>
        {$this->_firstName}<br>
        {$this->_lastName}<br>";
    }

        # Getters
    public function getIdPlayer() {
        return $this->_idPlayer;
        }

    public function getFirstName() {
        return $this->_firstName;
        }

    public function getLastName() {
        return $this->_lastName;
        }


    # Setters
    public function setIdPlayer($idPlayer) {
        $this->_idPlayer = $idPlayer;
        }

    public function setFirstname($firstName) {
        $this->_firstName = $firstName;
        }

    public function setLastName($lastName) {
        $this->_lastName = $lastName;
        }

}