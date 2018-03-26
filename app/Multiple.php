<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Multiple
 *
 * @author aamador
 */
class Multiple {
    /**
     * function to obtain the divisor of a number between 3 or 5, 
     * if it is divisible it must be 0
     * 
     * @param int $sequence
     * @return string return type message
     */
    public function isMultiple($sequence)
    {
        $response = $sequence; //Print the number that is not divisible between 3 and 5
        $multipleofthree = $this->isMultipleDivisor($sequence, 3);
        $multipleoffive = $this->isMultipleDivisor($sequence, 5);
        while (!$multipleofthree){$response = 'Linio'; break;} //while the number is multiples of 3, change the number by the word Linio
        while (!$multipleoffive){$response = 'IT'; break;} //while the number is multiples of 5, change the number by the word IT
        if(!$multipleofthree && !$multipleoffive) {$response='Linianos';} //if the number is multiples of 3 and 5 change the number by the word Linianos
        return $response;
    }    
    /**
     * 
     * @param int $numeric
     * @param int $divisor
     * @return numeric
     */
    public function isMultipleDivisor($numeric,$divisor)
    {
        return $numeric % $divisor; 
    }
}
