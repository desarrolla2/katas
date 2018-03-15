<?php

namespace Kata;

class TheHouseThatJackBuilt
{
    public function song(): array
    {
        $string = '';
        $result = [];
        foreach ($this->getVerses() as $verse) {
            $string = $this->buildString($verse, $string);
            var_dump($string);
            $result[] = sprintf('This is %s.', $string);
        }

        return $result;
    }

    /**
     * @param $verse
     * @param $string
     * @return string
     */
    protected function buildString($verse, $string): string
    {
        return trim(sprintf('%s %s', $verse, $string));
    }

    protected function getVerses()
    {
        return [
            'the house that Jack built',
            'the malt the lay in',
            'the rat that ate',
            'the cat that killed',
            'the dog that worried',
        ];
    }
}