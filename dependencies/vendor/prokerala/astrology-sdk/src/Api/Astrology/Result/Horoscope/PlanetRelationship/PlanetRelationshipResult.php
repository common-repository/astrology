<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Prokerala\Api\Astrology\Result\Horoscope\PlanetRelationship;

use Prokerala\Api\Astrology\Result\ResultInterface;
use Prokerala\Api\Astrology\Traits\Result\RawResponseTrait;
final class PlanetRelationshipResult implements ResultInterface
{
    use RawResponseTrait;
    /**
     * @var \Prokerala\Api\Astrology\Result\Horoscope\PlanetRelationship\PlanetRelationship
     */
    private $planetRelationship;
    public function __construct(\Prokerala\Api\Astrology\Result\Horoscope\PlanetRelationship\PlanetRelationship $planetRelationship)
    {
        $this->planetRelationship = $planetRelationship;
    }
    public function getPlanetRelationship(): \Prokerala\Api\Astrology\Result\Horoscope\PlanetRelationship\PlanetRelationship
    {
        return $this->planetRelationship;
    }
}
