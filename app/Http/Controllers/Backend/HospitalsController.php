<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Hospitals;

class HospitalsController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('hospitals_access'), 403);

        $hospitals=Hospitals::all();

        return view('backend.hospitals.index', compact('hospitals'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('hospitals_create'), 403);

        return view('backend.hospitals.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('hospitals_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new hospitals;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
        
        $reg->save();

        return redirect('admin/hospitals/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('hospitals_edit'), 403);
        $hospitals= Hospitals::find($id);

        return view('backend.hospitals.edit', compact('hospitals'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('hospitals_edit'), 403);
         
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
         Hospitals::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/hospitals/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('hospitals_show'), 403);
         $value =  Hospitals::find($id);
        
        return view('backend.hospitals.show', compact('value'));
    }

    public function destroy($hospitals)
    {
        
      //  abort_unless(\Gate::allows('hospitals_delete'), 403);

        Hospitals::where('id',$hospitals)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Hospitals::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
