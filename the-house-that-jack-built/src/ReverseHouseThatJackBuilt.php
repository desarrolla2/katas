<?php

namespace Kata;

class ReverseHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    /**
     * @return array
     */
    protected function getVerses(): array
    {
        return $this->getReverseVerses();
    }
}