<?php

namespace Tdd;

use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    /**
     * @dataProvider roundRevealAndResultProvider
     */
    public function testRoundWinner($expected, $player1, $player2)
    {
        $rockPaperScissors = new RockPaperScissors();
        $this->assertEquals($expected, $rockPaperScissors->round($player1, $player2));
    }

    public function roundRevealAndResultProvider()
    {
        return [
            'rock wins scissors' => ['expected' => RockPaperScissors::ROCK, 'player1' => RockPaperScissors::ROCK, 'player2' => RockPaperScissors::SCISSORS],
            'scissors loss with rock' => ['expected' => RockPaperScissors::ROCK, 'player1' => RockPaperScissors::SCISSORS, 'player2' => RockPaperScissors::ROCK],
            'scissors wins paper' => ['expected' => RockPaperScissors::SCISSORS, 'player1' => RockPaperScissors::SCISSORS, 'player2' => RockPaperScissors::PAPER],
            'paper loss with scissors' => ['expected' => RockPaperScissors::SCISSORS, 'player1' => RockPaperScissors::PAPER, 'player2' => RockPaperScissors::SCISSORS],
            'paper wins rock' => ['expected' => RockPaperScissors::PAPER, 'player1' => RockPaperScissors::PAPER, 'player2' => RockPaperScissors::ROCK],
            'rock loss with paper' => ['expected' => RockPaperScissors::PAPER, 'player1' => RockPaperScissors::ROCK, 'player2' => RockPaperScissors::PAPER],
            'two rocks draw' => ['expected' => RockPaperScissors::DRAW, 'player1' => RockPaperScissors::ROCK, 'player2' => RockPaperScissors::ROCK],
            'two scissors draw' => ['expected' => RockPaperScissors::DRAW, 'player1' => RockPaperScissors::SCISSORS, 'player2' => RockPaperScissors::SCISSORS],
            'two papers draw' => ['expected' => RockPaperScissors::DRAW, 'player1' => RockPaperScissors::PAPER, 'player2' => RockPaperScissors::PAPER]
        ];
    }


}