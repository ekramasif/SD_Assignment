<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Illuminate\Support\Str;
use Image;
class UploadController extends Controller
{
    public function upload(){
        $images = ImageModel::all();
        return view('upload', compact('images'));
    }
    public function uploadimage(Request $request){
          $title=  $request->title;
          $slug = Str::of($title)->slug('-');
          $alttext = $request->title;
          
          $originalImage = $request->file('filename');
          $thumbnailImage = Image::make($originalImage);

          $thumbnailPath = Public_path().'/thumbnail/';
          $originalPath = public_path().'/images/';

          $temp = $originalImage->getClientOriginalName();
          $temp_ext = explode(".", $temp);
          $ext = end($temp_ext);

          $filename = time().'.'.$ext;

          $thumbnailImage->save($originalPath.$filename);

          $thumbnailImage->resize(150,150);
          $thumbnailImage->save($thumbnailPath.$filename); //time().$originalImage->getClientOriginalName()

          $imagemodel = new ImageModel();
          $imagemodel->title = $title;
          $imagemodel->slug = $slug;
          $imagemodel->alttext = $alttext;
          $imagemodel->filename = $filename;   
          if($imagemodel->save()){
            return redirect()-> back()->with('msg', 'Your images has been successfully Upload');
          }
          
    }
}
