<?php
namespace Halimtuhu\ArrayImages;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class FieldController extends BaseController
{
    /**
     * upload selected images
     *
     * @param Request $request
     * @return array
     */
    public function upload(Request $request)
    {
        $disk = $request->disk ? $request->disk : 'local';
        $path = $request->path ? $request->path : '/';
        $images = $request->images;
        $data = array();

        foreach ($images as $image)
        {
            $savedImage = Storage::disk($disk)
                ->putFile($path, $image);

            $data[] = [
                'name' => $savedImage,
                'url' => Storage::disk($disk)->url($savedImage),
            ];
        }

        return $data;
    }

    public function delete(Request $request)
    {
        $image = $request->get('image');
        Storage::delete($image);
        return Response::json(['message' => $image . ' was deleted successfully.' ]);
    }
}
