<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBannerImagesRequest;
use App\Http\Requests\StoreBannerImagesRequest;
use App\Http\Requests\UpdateBannerImagesRequest;
use Illuminate\Http\Request;
use App\Models\BannerImage;

class BannerImagesController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('bannerimage_access'), 403);

        $bannerimage=  BannerImage::all();

        return view('backend.bannerimage.index', compact('bannerimage'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('bannerimage_create'), 403);

        return view('backend.bannerimage.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('bannerimage_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new BannerImage;
        
        $reg->image=$path;
        $reg->tittle=$req->tittle;
        $reg->links=$req->links;
         $reg->content_active =$req->active;
        $reg->save();

        return redirect('admin/bannerimages/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('bannerimage_edit'), 403);
        $bannerimage= BannerImage::find($id);

        return view('backend.bannerimage.edit', compact('bannerimage'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('bannerimage_edit'), 403);
         
        if($req->hasFile('image')){
            $file = $req->file('image');
            $filename = 'image'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../public/upload');
            $file->move($destinationPath, $filename);
            $path = 'upload/'.$filename;
          }
          else{
              $path=$req->image;
          }
         BannerImage::where('id',$id)->update([
             'image'=>$path,
             'tittle'=>$req->tittle,
             'links'=>$req->links,
             'content_active'=>$req->active
        ]);

         return redirect('admin/bannerimages/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('bannerimage_show'), 403);
         $value =  BannerImage::find($id);
        
        return view('backend.bannerimage.show', compact('value'));
    }

    public function destroy($bannerimage)
    {
        
      //  abort_unless(\Gate::allows('bannerimage_delete'), 403);

        BannerImage::where('id',$bannerimage)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        BannerImage::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
