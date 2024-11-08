<?php

declare (strict_types=1);
namespace Prokerala\Api\Astrology\Result\Element;

class Bhava
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $number;
    public function __construct(int $id, string $name, int $number)
    {
        $this->id = $id;
        $this->name = $name;
        $this->number = $number;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getNumber(): int
    {
        return $this->number;
    }
}
