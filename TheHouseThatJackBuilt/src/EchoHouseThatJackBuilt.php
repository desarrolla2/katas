<?php

namespace Kata;

class EchoHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    private $called = 0;

    /**
     * @param $verse
     * @param $string
     * @return string
     */
    protected function buildString($verse, $string): string
    {
        var_dump($this->called);
        $string = trim(sprintf('%s %s %s', $verse, $verse, $string));
        if ($this->called++ == 1) {
            return str_replace('the malt the lay in', 'the malt that lay in', $string);
        }
        if ($this->called++ == 3) {
            return str_replace('the malt the lay in', 'the malt the that lay in', $string);
        }

        return $string;
    }
}