<?php
class Career {
    # Attributs
    private Player $_player;
    private Team $_team;
    private int $_startYear;

    # Constructeur
    public function __construct($player, $team, $startYear){
        $this->_player = $player;
        $this->_team = $team;
        $this->_startYear = $startYear;
        $player->addCareer($this);
        $team->addPlayer($player);
    }

    # toString
public function __toString() {
    return "{$this->_player->getFirstName()} {$this->_player->getLastName()} {$this->_team->getName()} ({$this->_startYear})";
}


    # Getters
    public function getPlayer() {
        return $this->_player;
    }

    public function getPlayerFirstName() {
        return $this->_player->getFirstName();
    }

    public function getPlayerLastName() {
        return $this->_player->getLastName();
    }

    public function getTeam() {
        return $this->_team;
    }

    public function getStartYear() {
        return $this->_startYear;
    }
}
