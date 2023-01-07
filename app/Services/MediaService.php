<?php

namespace App\Services;

use App\Models\Media;
use Illuminate\Http\UploadedFile;

class MediaService
{
    public function __construct(public Media $mediaModel)
    {
    }
    public function create(UploadedFile $file, int $info_id)
    {
        $media = new Media();
        $filename = $file->getRealPath();
        $type = $file->getClientOriginalExtension();
        $name = file_get_contents($filename);
        $media->filename = base64_encode($name);
        $media->ext = $type;
        $media->info_id = $info_id;
        $media->save();
        return $media;
    }
}
