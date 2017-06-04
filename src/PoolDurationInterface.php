<?php

/**
 * @copyright  Copyright (c) Flipbox Digital Limited
 * @license    https://github.com/flipbox/stash-cache/blob/master/LICENSE
 * @link       https://github.com/flipbox/stash-cache
 */

namespace Flipbox\Stash;

/**
 * @author Flipbox Factory <hello@flipboxfactory.com>
 * @since 1.0.0
 */
interface PoolDurationInterface extends \Stash\Interfaces\PoolInterface
{
    /**
     * Set the cache duration
     *
     * @param int|\DateInterval $duration
     * @return static
     */
    public function setItemDuration($duration);

    /**
     * Return the cache duration
     *
     * @return null|int|\DateInterval
     */
    public function getItemDuration();
}
