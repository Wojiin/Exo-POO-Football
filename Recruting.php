<?php
class Recruting {
    private int $_seasonStart;
    private int $_seasonEnd;
    private Team $_team;
    private Player $_player;

    public function __construct(int $seasonStart, int $seasonEnd, Team $team, Player $player){
        $this->_seasonStart = $seasonStart;
        $this->_seasonEnd = $seasonEnd;
        $this->_team = $team;
        $this->_player = $player;

        $team->addRecruting($this);
        $player->addRecruting($this);
    }

    public function getSeasonStart() { return $this->_seasonStart; }
    public function getSeasonEnd() { return $this->_seasonEnd; }
    public function getTeam() { return $this->_team; }
    public function getPlayer() { return $this->_player; }

    public function __toString() {
        return "{$this->_player} - {$this->_team} ({$this->_seasonStart}-{$this->_seasonEnd})";
    }
}
