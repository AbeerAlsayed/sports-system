<?php

namespace App\Helpers;

use App\Models\Image;
use App\Models\Sport;
use Illuminate\Http\Request;

class ImageHelper
{
    public static function handleFileUpload(Request $request, Sport $sport)
    {
        if ($request->hasFile('url')) {
            $files = $request->file('url');

            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs('images', $filename, 'public');
                Image::create([
                    'imageable_id' => $sport->id,
                    'imageable_type' => Sport::class,
                    'url' => $path,
                ]);
            }
        }
    }

}
