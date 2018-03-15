<?php

namespace Kata;

class ReverseHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    protected function getVerses()
    {
        return array_reverse(parent::getVerses());
    }
}