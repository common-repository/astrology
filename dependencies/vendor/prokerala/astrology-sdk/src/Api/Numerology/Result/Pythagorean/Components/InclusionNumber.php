<?php

namespace Prokerala\Api\Numerology\Result\Pythagorean\Components;

class InclusionNumber
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Inclusion[]
     */
    private $inclusion;
    /**
     * @param Inclusion[] $inclusion
     */
    public function __construct(string $name, array $inclusion)
    {
        $this->name = $name;
        $this->inclusion = $inclusion;
    }
    /**
     * @return Inclusion[]
     */
    public function getInclusion(): array
    {
        return $this->inclusion;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
