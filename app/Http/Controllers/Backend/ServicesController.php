<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('services_access'), 403);

        $services=Services::all();

        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('services_create'), 403);

        return view('backend.services.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('services_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new services;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
        
        $reg->save();

        return redirect('admin/services/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('services_edit'), 403);
        $services= Services::find($id);

        return view('backend.services.edit', compact('services'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('services_edit'), 403);
         
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
         Services::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/services/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('services_show'), 403);
         $value =  Services::find($id);
        
        return view('backend.services.show', compact('value'));
    }

    public function destroy($services)
    {
        
      //  abort_unless(\Gate::allows('services_delete'), 403);

        Services::where('id',$services)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Services::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
