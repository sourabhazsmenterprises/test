<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Symptoms;

class SymptomsController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('symptoms_access'), 403);

        $symptoms=Symptoms::all();

        return view('backend.symptoms.index', compact('symptoms'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('symptoms_create'), 403);

        return view('backend.symptoms.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('symptoms_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new symptoms;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
        
        $reg->save();

        return redirect('admin/symptoms/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('symptoms_edit'), 403);
        $symptoms= Symptoms::find($id);

        return view('backend.symptoms.edit', compact('symptoms'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('symptoms_edit'), 403);
         
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
         Symptoms::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/symptoms/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('symptoms_show'), 403);
         $value =  Symptoms::find($id);
        
        return view('backend.symptoms.show', compact('value'));
    }

    public function destroy($symptoms)
    {
        
      //  abort_unless(\Gate::allows('symptoms_delete'), 403);

        Symptoms::where('id',$symptoms)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Symptoms::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
