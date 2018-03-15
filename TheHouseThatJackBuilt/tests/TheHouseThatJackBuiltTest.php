<?php

namespace Kata\Tests;

use Kata\EchoHouseThatJackBuilt;
use Kata\ReverseEchoHouseThatJackBuilt;
use Kata\ReverseHouseThatJackBuilt;
use Kata\TheHouseThatJackBuilt;
use PHPUnit\Framework\TestCase;

class TheHouseThatJackBuiltTest extends TestCase
{
    /** @test */
    public function songs_the_echo_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = new EchoHouseThatJackBuilt();

        $this->assertEquals(
            [

                'This is the house that Jack built the house that Jack built.',
                'This is the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
                'This is the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
                'This is the cat that killed the cat that killed the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
                'This is the dog that worried the dog that worried the cat that killed the cat that killed the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
            ],
            $theHouseThatJackBuilt->song()
        );
    }

    /** @test */
    public function songs_the_regular_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = new TheHouseThatJackBuilt();

        $this->assertEquals(
            [
                'This is the house that Jack built.',
                'This is the malt that lay in the house that Jack built.',
                'This is the rat that ate the malt that lay in the house that Jack built.',
                'This is the cat that killed the rat that ate the malt that lay in the house that Jack built.',
                'This is the dog that worried the cat that killed the rat that ate the malt that lay in the house that Jack built.',
            ],
            $theHouseThatJackBuilt->song()
        );
    }

    /** @test */
    public function songs_the_reverse_echo_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = new ReverseEchoHouseThatJackBuilt();

        $this->assertEquals(
            [
                'This is the dog that worried the dog that worried.',
                'This is the cat that killed the cat that killed the dog that worried the dog that worried.',
                'This is the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.',
                'This is the malt that lay in the malt that lay in the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.',
                'This is the house that Jack built the house that Jack built the malt that lay in the malt that lay in the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.',
            ],
            $theHouseThatJackBuilt->song()
        );
    }

    /** @test */
    public function songs_the_reverse_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = new ReverseHouseThatJackBuilt();

        $this->assertEquals(
            [
                'This is the dog that worried.',
                'This is the cat that killed the dog that worried.',
                'This is the rat that ate the cat that killed the dog that worried.',
                'This is the malt that lay in the rat that ate the cat that killed the dog that worried.',
                'This is the house that Jack built the malt that lay in the rat that ate the cat that killed the dog that worried.',
            ],
            $theHouseThatJackBuilt->song()
        );
    }
}