<?php
class Player {
    private string $_firstName;
    private string $_lastName;
    private string $_birthDate;
    private Country $_country;
    private array $_recrutings;

    public function __construct(string $firstName, string $lastName, string $birthDate, Country $country){
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = $birthDate;
        $this->_country = $country;
        $this->_recrutings = [];
    }

    public function getFirstName() { return $this->_firstName; }
    public function getLastName() { return $this->_lastName; }
    public function getCountry() { return $this->_country; }
    public function addRecruting(Recruting $r) { $this->_recrutings[] = $r; }
    public function getRecrutings() { return $this->_recrutings; }

    public function calculAge() {
        $birthDate = new DateTime($this->_birthDate);
        $today = new DateTime();
        return $today->diff($birthDate)->y;
    }

    // Affiche toutes les équipes d’un joueur
    public function displayTeams() {
        echo "<div class='uk-card uk-card-overlay country'>";
        echo "<h3>{$this->_firstName} {$this->_lastName}</h3>";
        echo "<p>{$this->calculAge()} ans - {$this->_country->getCountryName()}</p>";

        if (count($this->_recrutings) === 0) {
            echo "<p>Aucune équipe enregistrée.</p>";
        } else {
            echo "<ul>";
            foreach ($this->_recrutings as $r) {
                $team = $r->getTeam();
                echo "<li>{$team->getTeamName()} ({$r->getSeasonStart()} - {$r->getSeasonEnd()})</li>";
            }
            echo "</ul>";
        }

        echo "</div>";
    }

    public function __toString() {
        return "{$this->_firstName} {$this->_lastName} ({$this->calculAge()} ans)";
    }
}
