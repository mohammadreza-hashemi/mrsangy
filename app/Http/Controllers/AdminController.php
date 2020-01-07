<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use App\User;

class AdminController extends Controller
{
    public function uploadImage($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/images/{$year}/";
        $filename = $file->getClientOriginalName();

        $file = $file->move(public_path($imagePath) , $filename);

        $sizes = ["300" , "600" , "900"];
        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $filename);
        $url['thumb'] = $url['images'][$sizes[0]];

        return $url;
    }
    //intervention images resize
    private function resize($path , $sizes , $imagePath , $filename)
    {
        $images['original'] = $imagePath . $filename;
        foreach ($sizes as $size) {
            $images[$size] = $imagePath . "{$size}_" . $filename;

            Image::make($path)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;
    }


    public function users(){
        $users=User::paginate(5);
        return view('admin.users.users',['users'=>$users]);
      }
      

}
