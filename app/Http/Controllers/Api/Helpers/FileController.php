<?php

namespace App\Http\Controllers\Api\Helpers;

use App\Http\Controllers\Controller;
use App\Models\File\File;
use App\Models\File\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;
use Vimeo\Vimeo;

class FileController extends Controller
{
    const IMAGE = "image";
    const VIDEO = "video";

    public function file(Request $request)
    {
        $key = null;
        if ($request->hasFile(self::IMAGE)) {
            $request->validate([
                'image' => 'required|mimetypes:image/png,image/jpeg|max:60000'
            ]);
            $key = self::IMAGE;
        }elseif ($request->hasFile(self::VIDEO)){
            $request->validate([
                'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:60000'
            ]);
            $key = self::VIDEO;
        }

        return $this->fileStore($request, $key);
    }

    private function fileStore(Request $request, ?string $key)
    {
        if($key != null){
            $file = new File;

            $compFile = $this->getCompFile($request, $key);

            //Store FILE
            $path = $this->storeFile($request, $key, $compFile);

            //Store infos in DataBase
            $file->file = $compFile;
            //TODO -> Criar instancia PATH e FILETYPE no objeto FILE
            if ($file->save()) {
                return response([
                    'status' => true,
                    'message' => $key . ' Saved Successfully in ' . $path
                ], 200);
            } else {
                return response([
                    'status' => false,
                    'message' => 'Something Went Wrong'
                ], 400);
            }
        }

        return response([
            'status' => false,
            'message' => 'The FileType is not supported'
        ], 400);
    }

    /**
     * @param Request $request
     * @param string $key
     * @return string
     */
    private function getCompFile(Request $request, string $key): string
    {
        $completeFileName = $request->file($key)->getClientOriginalName();
        $extension = $request->file($key)->getClientOriginalExtension();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $compFile = str_replace(' ', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        return $compFile;
    }

    /**
     * @param Request $request
     * @param string $key
     * @param string $compFile
     * @return false|string
     */
    private function storeFile(Request $request, string $key, string $compFile): string|false
    {
        $path = $request->file($key)->storeAs('public/' . $key, $compFile);
        $this->storeVimeo($key, $compFile);

        return $path;
    }

    /**
     * @param string $key
     * @param string $compFile
     * @throws \Vimeo\Exceptions\VimeoRequestException
     * @throws \Vimeo\Exceptions\VimeoUploadException
     */
    private function storeVimeo(string $key, string $compFile): void
    {
        $vimeo = new Vimeo(
            getenv("VIMEO_CLIENT"),
            getenv("VIMEO_SECRET"),
            getenv("VIMEO_ACCESS"));
//        $pathVimeo = "storage/" . $key . "/" . $compFile;
        $pathVimeo = "storage/image/home&lock_screen-963692260_1636814530.png";
        $array = [
            "name" => "NameTest",
            "description" => "TestDescription"];
//        dd($array);
        $response = $vimeo->upload($pathVimeo, $array);
    }
}
