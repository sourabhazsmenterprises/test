<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Blogs;
use Carbon\Carbon;

class BlogsController extends Controller
{
   
    public function index()
    {
        //abort_unless(\Gate::allows('blogs_access'), 403);

        $blogs=Blogs::all();

        return view('backend.blogs.index', compact('blogs'));
    }

    public function create()
    {
       // abort_unless(\Gate::allows('blogs_create'), 403);

        return view('backend.blogs.create');
    }

    public function store(Request $req)
    {
       // abort_unless(\Gate::allows('blogs_create'), 403);
		 $dates = Carbon::now('Asia/Kolkata')->toDatestring();
       
        $file = $req->file('image');
        $filename = 'image'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../public/upload');
        $file->move($destinationPath, $filename);
        $path = 'upload/'.$filename;

        $reg = new blogs;
        
        $reg->image=$path;
        $reg->name=$req->name;
        $reg->describtion=$req->describtion;
		$reg->date=$dates;
        
        $reg->save();

        return redirect('admin/blogs/');
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

        Blogs::where('id',$blogs)->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Blogs::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
