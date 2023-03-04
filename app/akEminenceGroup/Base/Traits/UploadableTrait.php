<?php
namespace App\akEminenceGroup\Base\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait UploadableTrait {

    public function upload(UploadedFile $file): string {

        $filename = Str::random() . '.' . $file->getClientOriginalExtension();

        $file->storeAs( 'uploads' , $filename, 'uploads');

        return $filename;
    }

}