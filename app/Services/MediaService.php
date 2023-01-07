<?php

namespace App\Services;

use App\Models\Media;

class MediaService
{
    public function __construct(public Media $mediaModel)
    {
    }
}
