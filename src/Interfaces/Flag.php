<?php
declare(strict_types=1);

namespace MyApp\Interfaces;


interface Flag
{
    public function isEnabled(): bool;
}