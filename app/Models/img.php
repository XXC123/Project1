<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Response;
use Redirect,View;
use Input,DB;
class img extends Model
{

    public function upload_img($file,$url_path,$rule)
    {

        if($file->isValid()){

        $clientName = $file -> getClientOriginalName();
        $tmpName = $file ->getFileName();

        $realPath = $file -> getRealPath();

        $entension = $file -> getClientOriginalExtension();

        if(!in_array($entension,$rule)){

            return 'format jpg,png,gif';
        }

        $mimeTye = $file -> getMimeType();

        $newName = md5(date("Y-m-d H:i:s").$clientName).".".$entension;
        $path = $file -> move($url_path,$newName);

                $namePath = $url_path.'/'.$newName;

                return $namePath;
        // return ['name' => $newName,'path' => $namePath];
        }
    }

}
