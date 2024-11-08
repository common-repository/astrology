<?php

namespace Prokerala\Api\Numerology\Result\Pythagorean\Components;

class PlanesOfExpressionNumber
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var PlanesOfExpression[]
     */
    private $expression;
    /**
     * @param string $name
     * @param PlanesOfExpression[] $expression
     */
    public function __construct(string $name, array $expression)
    {
        $this->name = $name;
        $this->expression = $expression;
    }
    /**
     * @return PlanesOfExpression[]
     */
    public function getExpression(): array
    {
        return $this->expression;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
