<?php

namespace App\Service;

Class AgeCalculator
{
    public function ageDifference(): int
    {
        $date = new \DateTime('1993-03-19');
        $newdate = new \DateTime();
        return $date->diff($newdate)->y;
    }
}