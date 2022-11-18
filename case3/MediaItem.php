<?php

namespace App\Contracts;

interface MediaItem
{
    public function getLength(): int;

    public function getName(): string;

    public function getType(): string;

    public function getUrl(): string;
}