<?php

$s = '()';

class Problem2 {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s) : bool
	{
        return true;
    }
}

$problem = new Problem2;
var_dump($problem->isValid($s));