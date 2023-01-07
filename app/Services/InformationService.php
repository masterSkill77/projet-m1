<?php

namespace App\Services;

use App\Models\Information;

class InformationService
{
    public function __construct(public MediaService $mediaService, public Information $informationModel)
    {
    }
}
