<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Prokerala\Api\Astrology\Traits;

/**
 * @internal
 */
trait StringableTrait
{
    public function __toString()
    {
        return $this->name;
    }
}
