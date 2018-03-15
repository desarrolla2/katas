<?php

namespace Kata;

class TheHouseThatJackBuilt
{
    private $verses = [
        'the house that Jack built',
        'the malt that lay in',
        'the rat that ate',
        'the cat that killed',
        'the dog that worried',
    ];

    /**
     * @return array
     */
    public function song(): array
    {
        $string = '';
        $result = [];
        foreach ($this->getVerses() as $verse) {
            $string = $this->buildString($verse, $string);
            $result[] = sprintf('This is %s.', $string);
        }

        return $result;
    }

    /**
     * @param string $verse
     * @param string $string
     * @return string
     */
    protected function buildEchoString(string $verse, string $string): string
    {
        $string = trim(sprintf('%s %s %s', $verse, $verse, $string));

        return $string;
    }

    /**
     * @param string $verse
     * @param string $string
     * @return string
     */
    protected function buildString(string $verse, string $string): string
    {
        return trim(sprintf('%s %s', $verse, $string));
    }

    /**
     * @return array
     */
    protected function getReverseVerses(): array
    {
        return array_reverse($this->verses);
    }

    /**
     * @return array
     */
    protected function getVerses(): array
    {
        return $this->verses;
    }
}