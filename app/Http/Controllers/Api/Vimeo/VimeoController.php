<?php

namespace App\Http\Controllers\Api\Vimeo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use Vimeo\Laravel\VimeoManager;

class VimeoController extends Controller
{



    public function create()
    {
    }

    public function store(Request $request, VimeoManager $vimeo)
    {
        $request->validate([
//            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:60000'
//            'name'=>'require|name',
//            'description'=>'require|description',
        ]);

        return response($request);

        $uri = $vimeo->upload( "Teste", $request);
//            $request->video(),
//            [
//            'name' => $request->title,
//            'description' => $request->description
//            ]

        return $uri;
    }
}
