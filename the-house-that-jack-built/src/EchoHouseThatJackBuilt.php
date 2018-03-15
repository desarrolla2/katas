<?php

namespace Kata;

class EchoHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    /**
     * @param string $verse
     * @param string $string
     * @return string
     */
    protected function buildString(string $verse, string $string): string
    {
        return $this->buildEchoString($verse, $string);
    }
}