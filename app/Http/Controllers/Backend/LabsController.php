<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Labs;

class LabsController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('labs_access'), 403);

        $labs=Labs::all();

        return view('backend.labs.index', compact('labs'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('labs_create'), 403);

        return view('backend.labs.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('labs_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new labs;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
        
        $reg->save();

        return redirect('admin/labs/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('labs_edit'), 403);
        $labs= Labs::find($id);

        return view('backend.labs.edit', compact('labs'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('labs_edit'), 403);
         
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
         Labs::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/labs/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('labs_show'), 403);
         $value =  Labs::find($id);
        
        return view('backend.labs.show', compact('value'));
    }

    public function destroy($labs)
    {
        
      //  abort_unless(\Gate::allows('labs_delete'), 403);

        Labs::where('id',$labs)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Labs::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
