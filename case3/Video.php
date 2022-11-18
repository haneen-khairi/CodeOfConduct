<?php

namespace App\Models;

use App\Contracts\MediaItem;

class Video implements MediaItem
{
    public function getLength(): int
    {
        return $this->getVideoLength();
    }

    public function getName(): string
    {
        return $this->getTitle();
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