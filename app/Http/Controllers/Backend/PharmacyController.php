<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmacyController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('pharmacy_access'), 403);

        $pharmacy=Pharmacy::all();

        return view('backend.pharmacy.index', compact('pharmacy'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('pharmacy_create'), 403);

        return view('backend.pharmacy.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('pharmacy_create'), 403);
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new pharmacy;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
        
        $reg->save();

        return redirect('admin/pharmacy/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('pharmacy_edit'), 403);
        $pharmacy= Pharmacy::find($id);

        return view('backend.pharmacy.edit', compact('pharmacy'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('pharmacy_edit'), 403);
         
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
         Pharmacy::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/pharmacy/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('pharmacy_show'), 403);
         $value =  Pharmacy::find($id);
        
        return view('backend.pharmacy.show', compact('value'));
    }

    public function destroy($pharmacy)
    {
        
      //  abort_unless(\Gate::allows('pharmacy_delete'), 403);

        Pharmacy::where('id',$pharmacy)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Pharmacy::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
