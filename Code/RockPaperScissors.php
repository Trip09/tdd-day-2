<?php
/**
 * Created by PhpStorm.
 * User: joao.albuquerque
 * Date: 26/11/2018
 * Time: 12:22
 */

namespace Tdd;


class RockPaperScissors
{
    const DRAW = 'draw';
    const ROCK = 'rock';
    const SCISSORS = 'scissors';
    const PAPER = 'paper';

    public function round(string $player1, string $player2): string
    {
        if ($this->hasRock($player1, $player2) && $this->hasScissors($player1, $player2)) {
            return self::ROCK;
        }

        if ($this->hasPaper($player1, $player2) && $this->hasScissors($player1, $player2)) {
            return self::SCISSORS;
        }

        if ($this->hasPaper($player1, $player2) && $this->hasRock($player1, $player2)) {
            return self::PAPER;
        }

        return self::DRAW;
    }

    private function hasRock(string $player1, string $player2): string
    {
        return ($player1 === self::ROCK || $player2 === self::ROCK);
    }

    private function hasScissors(string $player1, string $player2): string
    {
        return ($player1 === self::SCISSORS || $player2 === self::SCISSORS);
    }

    private function hasPaper(string $player1, string $player2): string
    {
        return ($player1 === self::PAPER || $player2 === self::PAPER);
    }
}