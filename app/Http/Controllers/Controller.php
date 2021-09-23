<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function imageupload($image = null, $folder = null)
    {
        $image_one = $image;
        if ($image_one) {
            $image_name = time() . '.' . $image_one->getClientOriginalExtension();
            $image_full_name = $image_name;
            $destination_path = 'uploads/' . $folder . '/';
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);
            if ($success) {

                return $image_url;
            }
            return false;
        }

    }

}
