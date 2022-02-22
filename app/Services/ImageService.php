<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService {
  public static function upload($imageFile, $folerName) {
    $fileName = uniqid(rand() . '_');
    $extension = $imageFile->extension();
    $fileNameToStore = $fileName . '.' . $extension;
    $resizedImage 
        = InterventionImage::make($imageFile)
        ->resize(1920, 1080)
        ->encode();
    Storage::put('public/' . $folerName . '/' . $fileNameToStore, $resizedImage);

    return  $fileNameToStore;
  }
}