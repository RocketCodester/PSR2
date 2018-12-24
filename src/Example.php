<?php

declare(strict_types=1);
namespace PSR2\Example;

class Example
{
    const FOO = 'foo';

    public function getSomething()
    {
        return 'something interesting was loaded here';
    }

    public static function otherThing($bar)
    {
        if ($bar === false) {
            return 56;
        }
        if ($bar === true) {
            return 45;
        }
    }
}
