<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Response;
use Redirect,View;
use Input,DB;
use Image;
class img extends Model
{

    public function upload_img($file,$url_path,$rule)
    {

        if($file->isValid()){

        $clientName = $file -> getClientOriginalName();
        $tmpName = $file ->getFileName();

        $realPath = $file -> getRealPath();

        $extension = $file -> getClientOriginalExtension();

        if(!in_array($extension,$rule)){

            return 'format jpg,png,gif';
        }

        $mimeTye = $file -> getMimeType();

        $newName = md5(date("Y-m-d H:i:s").$clientName).".".$extension;
        $path = $file -> move($url_path,$newName);

                $namePath = $url_path.'/'.$newName;

                 if ($extension != 'gif') {
                    $this->reduceSize($url_path.'/'.$newName);
        }

                return $namePath;
        // return ['name' => $newName,'path' => $namePath];
        }
    }
     public function reduceSize($newName) {

        $image = Image::make($newName);

         $image->resize(300, null, function($constraint) {

           $constraint->aspectRatio();

            $constraint->upsize();
        });

        $image->save();
    }

}
