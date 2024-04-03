<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\File;

class ImagesController extends Controller
{
    public function index($real){
        try{
            $files = File::files(resource_path().'/img/'.$real);
            $images = [];
            foreach($files as $img){
                $images[] = $img->getRelativePathname();
            }
            return view('image')->with(['images'=>$images,'real'=>$real]);
        }catch(Exception $e){
            return redirect(route('realisations'));
        }
    }
}
