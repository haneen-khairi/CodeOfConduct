<?php

namespace App\Models;

use App\Contracts\MediaItem;

class Audio implements MediaItem
{
    public function getLength(): int
    {
        return $this->length;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}