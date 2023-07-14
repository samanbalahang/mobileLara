<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashMediaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        if(isset($medias)){
        //    return view("dashboard.media.index", compact("medias"));
              return view("dashboard.media.index", compact("medias"));
        }else{
            // return view("dashboard.media.index");
            return view("dashboard.media.index");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("dashboard.media.create");
        return view("dashboard.media.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('indeximg');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =$this->randomNum() .'.'.$extension;
        $file->move('uploads/madias/', $filename);
        $finaldes = 'uploads/madias/'.$filename;
        $a = $request;
        $a['image_path']=$finaldes;
        // unset($a['ImgP']);
        Media::create($a->all());
        return redirect(route("media.index"));
    }

    public function saveFile($request){
        // $file = $request->file('indeximg');
        $themedia = new Media();
        $file  = $request;
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =$this->randomNum() .'.'.$extension;
        $file->move('uploads/madias/', $filename);
        $finaldes = 'uploads/madias/'.$filename;
        // $a = $request;
        // $a['image_path']=$finaldes;
        $themedia->image_path = $finaldes;
        // unset($a['ImgP']);
        if($themedia->save()){
            // return true;
            return $themedia->id;
        }else{
            return false;
        }
    }

    public function randomNum(){
        $first = rand(1,100);
        $sec = rand(100,1000);
        $final = rand($first,$sec);
        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alfabetsize = intval(count($alafabet)-1);
        $alfrand = rand(0,$alfabetsize);

        $alf = $alafabet[$alfrand];
        $alfrand = rand(0,$alfabetsize);
        $alf = strval($alf).$alafabet[$alfrand];
        $alfrand = rand(0,$alfabetsize);
        $alf = strval($alf).strval($alafabet[$alfrand]);
        return strval($final) . "-".$alf."-". strval(time());
    }
    public function dropMedia(Request $request){
        $file = $request->file('file');
        if(!is_array($file)){
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$this->randomNum() .'.'.$extension;
            $file->move('uploads/madias/', $filename);
            $finaldes = 'uploads/madias/'.$filename;
            $a = $request;
            $a['image_path']=$finaldes;
            $media = new Media;
            $media->image_path = $a['image_path'];
            $media->save();
            // $theGallery = new Gallery;
            // $theGallery->uri = "test";
            // $theGallery->save();
            return $media->id;
        }else{
            // $id = [];
            // $theGallery = new Gallery;
            // $theGallery->uri = "";
            // $theGallery->save();
            // $galleryId = $theGallery->id;
            // $thisgallery = Gallery::find($galleryId);
            // foreach($file as $pic){
            //     $extension = $pic->getClientOriginalExtension(); // getting image extension
            //     $filename =$this->randomNum() .'.'.$extension;
            //     $pic->move('uploads/madias/', $filename);
            //     $finaldes = 'uploads/madias/'.$filename;
            //     $a = $request;
            //     $a['image_path']=$finaldes;
            //     $media = new Media;
            //     $media->image_path = $a['image_path'];
            //     $media->save(); 
            //     $mediaId = $media->id;
            //     $thismedia = Media::find($mediaId);
            //     $theGallery->medias()->attach($thismedia);
            //     array_push($id,$media->id);
            // }
            // return $theGallery->id;
        }
    }

    /*------------------------------
    |
    |
    // summerNoteMedia
    |
    |
    --------------------------------*/
    public function summerNoteMedia(Request $request){
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =$this->randomNum() .'.'.$extension;
        $file->move('uploads/madias/', $filename);
        $finaldes = 'uploads/madias/'.$filename;
        $a = $request;
        $a['image_path']=$finaldes;
        $media = new Media;
        $media->image_path = $a['image_path'];
        $media->save();
        return $finaldes;
     }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
