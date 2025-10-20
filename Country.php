<?php
class Country {
    private string $_countryName;
    private array $_teams;

    public function __construct(string $countryName){
        $this->_countryName = $countryName;
        $this->_teams = [];
    }

    public function getCountryName() {
        return $this->_countryName; 
    }

    public function addTeam(Team $team){$this->_teams[] = $team; 
    }
    public function getTeams(){ return $this->_teams; }

    // Affiche toutes les équipes d’un pays
    public function displayTeams() {
        echo "<div class='uk-card uk-card-overlay country'>";
        echo "<h3>{$this->_countryName}</h3>";

        if (count($this->_teams) == 0) {
            echo "<p>Aucune équipe enregistrée.</p>";
        } else {
            echo "<ul>";
            foreach ($this->_teams as $team) {
                echo "<li>{$team->getTeamName()} ({$team->getCreationDate()})</li>";
            }
            echo "</ul>";
        }

        echo "</div>";
    }

    public function __toString() {
        return $this->_countryName;
    }
}
