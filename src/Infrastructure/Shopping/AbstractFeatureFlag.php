<?php
declare(strict_types=1);

namespace MyApp\Infrastructure\Shopping;


use MyApp\Interfaces\Flag;


abstract class AbstractFeatureFlag implements Flag
{
    /**
     * @var bool
     */
    private $enabled;

    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}
