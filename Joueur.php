<?php
class Player {          
    # Attributs 
    private int $_idPlayer;
    private string $_firstName;
    private string $_lastName;
    private string $_birthDate;
    private Pays $_nationality;
    private array $_careers;

    # Constructeur
    public function __construct($idPlayer, $firstName, $lastName, $birthDate, $nationality){
        $this->_idPlayer = $idPlayer;
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = $birthDate;
        $this->_nationality = $nationality; 
        $this->_careers = [];
    }

    # toString
    public function __toString() {
        return "{$this->_firstName} {$this->_lastName} ({$this->_nationality->getName()}, {$this->_birthDate})";
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

    public function getBirthDate() {
        return $this->_birthDate;
    }

    public function getNationality() {
        return $this->_nationality;
    }

    public function getCareers() {
        return $this->_careers;
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

    public function setBirthDate($birthDate) {
        $this->_birthDate = $birthDate;
    }

    public function setNationality($pays) {
        $this->_nationality = $pays;
    }

    public function addCareer($career) {
        $this->_careers[] = $career;
    }

}
