<?php
/**
 * Created by PhpStorm.
 * User: hkd
 * Date: 18.09.16
 * Time: 9:52
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Note extends Model
{
    protected $fillable = ['id', 'title', 'description', 'img', 'updated_at'];

    public function file_save($files)
    {
        if($files){
            //Проверка расширений загружаемых изображений
            if ($files->getMimeType() == "image/gif" || $files->getMimeType() == "image/png" ||
                $files->getMimeType() == "image/jpg" || $files->getMimeType() == "image/jpeg"
            ) {
                $blacklist = array(".php", ".phtml", ".php3", ".php4");
                foreach ($blacklist as $item) {
                    if (preg_match("/$item\$/i", $files->getMimeType())) {
                        return false;
                    }
                }
                $filename = time() . '.' . $files->getClientOriginalExtension();

                $path = public_path('profilepics/' . $filename);

                Image::make($files->getRealPath())->resize(350, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path);

                return $filename;
            } else
                return false;

        } else
            return false;

        }
}