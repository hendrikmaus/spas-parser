<?php

namespace Hmaus\Spas\Parser\Options;

class Repetition
{
    /**
     * Whether to repeat this request
     * @var bool
     */
    public $repeat = false;

    /**
     * How often was this request repeated
     * Starts counting at 1, i.e. count = 2 == ran 2 times
     * @var int
     */
    public $count = 0;

    /**
     * How often should the request be repeated
     * Starts counting at 1, i.e. times = 2 == will run 2 times
     * @var int
     */
    public $times = 0;
}
