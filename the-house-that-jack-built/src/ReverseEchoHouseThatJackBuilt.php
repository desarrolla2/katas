<?php

namespace Kata;

class ReverseEchoHouseThatJackBuilt extends TheHouseThatJackBuilt
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

    /**
     * @return array
     */
    protected function getVerses(): array
    {
        return $this->getReverseVerses();
    }
}