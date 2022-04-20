<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Blogs;
use Carbon\Carbon;
use DB;

class DiseaseController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('blogs_access'), 403);

        $blogs=DB::table('disease')->where('deleted_at',null)->orderby('id','desc')->get();

        return view('backend.disease.index', compact('blogs'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('blogs_create'), 403);

        return view('backend.disease.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('blogs_create'), 403);
		 DB::table('disease')->insert([
             'disease'=>$req->disease,
           
        ]);

        return redirect('admin/disease/');
    }

    public function edit($id)
    {

       // abort_unless(\Gate::allows('blogs_edit'), 403);
        $blogs= Blogs::find($id);

        return view('backend.blogs.edit', compact('blogs'));
    }

    public function update(Request $req, $id)
    {
       // abort_unless(\Gate::allows('blogs_edit'), 403);
         
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
         Blogs::where('id',$id)->update([
             'image'=>$path,
             'name'=>$req->name,
             'describtion'=>$req->describtion,
             
        ]);

         return redirect('admin/blogs/');
    }

    public function show($id)
    {
       // abort_unless(\Gate::allows('blogs_show'), 403);
         $value =  Blogs::find($id);
        
        return view('backend.blogs.show', compact('value'));
    }

    public function destroy($blogs)
    {
        
      //  abort_unless(\Gate::allows('blogs_delete'), 403);

      DB::table('disease')->where('id',$blogs)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Blogs::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
