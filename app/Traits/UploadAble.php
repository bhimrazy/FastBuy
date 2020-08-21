<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/**
 * Trait UploadAble
 * @package App\Traits
 */
trait UploadAble
{

    /**
     * @param UploadedFile $file
     * @param null $folder
     * @param string $disk
     * @param null $filename
     * @param null $width
     * @param null $height
     * @return false|string
     */
    public function uploadOne(UploadedFile $file, $folder = null, $width=null, $height=null,$disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25)."." . $file->getClientOriginalExtension();
        $upload=$file->storeAs(
            'uploads/'.$folder,
            $name,
            $disk
        );
        if(substr($file->getMimeType(), 0, 5)== 'image' && $width>240 && $height){
            Image::make(public_path("storage/{$upload}"))->resize($width, $height)->save();
//            Image::make(public_path("storage/{$upload}"))->resize($width, $height, function ($constraint) {
//                $constraint->aspectRatio();
//            })->save();
        }
        return $upload;
    }

    /**
     * @param null $path
     * @param string $disk
     */
    public function deleteOne($path = null, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }
}
