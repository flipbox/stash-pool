<?php

/**
 * @copyright  Copyright (c) Flipbox Digital Limited
 * @license    https://github.com/flipbox/stash-cache/blob/master/LICENSE
 * @link       https://github.com/flipbox/stash-cache
 */

namespace Flipbox\Stash\Tests;

use Flipbox\Stash\Pool;

/**
 * @author Flipbox Factory <hello@flipboxfactory.com>
 * @since 1.0.0
 */
class PoolTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function durationTest()
    {
        $duration = 3600;
        $pool = new Pool();
        $pool->setItemDuration($duration);
        $this->assertEquals($duration, $pool->getItemDuration());
    }
}
