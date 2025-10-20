<?php
class Team {
    private string $_teamName;
    private string $_creationDate;
    private Country $_country;
    private array $_recrutings;

    public function __construct(string $teamName, string $creationDate, Country $country){
        $this->_teamName = $teamName;
        $this->_creationDate = $creationDate;
        $this->_country = $country;
        $this->_recrutings = [];
        $country->addTeam($this);
    }

    public function getTeamName() {
         return $this->_teamName; 
        }

    public function getCreationDate() {
         return $this->_creationDate; 
        }

    public function getCountry() {
         return $this->_country; 
        }

    public function addRecruting(Recruting $recruting) {
         $this->_recrutings[] = $recruting; 
        }

    public function getRecrutings() {
         return $this->_recrutings; 
    }

    // Affiche tous les joueurs d'une équipe
    public function displayPlayers() {
        echo "<div class='uk-card uk-card-overlay team'>";
        echo "<h3>{$this->_teamName}</h3>";
        echo "<p>{$this->_country->getCountryName()} - Créé en {$this->_creationDate}</p>";

        if (count($this->_recrutings) == 0) {
            echo "<p>Aucun joueur recruté.</p>";
        } else {
            echo "<ul>";
            foreach ($this->_recrutings as $recruting) {
                $player = $recruting->getPlayer();
                $age = $player->calculAge();
                echo "<li>{$player->getFirstName()} {$player->getLastName()} ({$age} ans, {$player->getCountry()->getCountryName()})</li>";
            }
            echo "</ul>";
        }

        echo "</div>";
    }

    public function __toString() {
        return "{$this->_teamName} ({$this->_creationDate})";
    }
}
