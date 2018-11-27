<?php
/**
 * Created by PhpStorm.
 * User: joao.albuquerque
 * Date: 26/11/2018
 * Time: 12:22
 */

namespace Tdd;


class Fibonacci
{
    public function getFib($n)
    {
        return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    }
}