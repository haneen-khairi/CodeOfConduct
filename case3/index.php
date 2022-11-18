<?php

switch ($item->getType()) {
    case 'audio':
        $media = new stdClass;
        $media->type = 'audio';
        $media->duration = $item->getLength();
        $media->name = $item->getName();
        $media->url = $item->getUrl();
    case 'video':
        $media = new stdClass;
        $media->type = 'video';
        $media->duration = $item->getVideoLength();
        $media->name = $item->getTitle();
        $media->url = $item->getUrl();
}
return '<a href="'.$media->url.'" class="'.$media->type.'" data-duration="'.$media->duration.'">'.$media->name.'</a>';


return '<a href="'.$item->getUrl().'" class="'.$item->getType().'" data-duration="'.$item->getLength().'">'.$media->getName().'</a>';