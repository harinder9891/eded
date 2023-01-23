<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\SubmitCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')
        ->paginate(10);
        return view('backend.category.index', ['categories'=>$categories]);
    }


    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmitCategoryRequest $request)
    {
        if(isset($request->image_file)){
            $image = $this->fileToUpload($request['image_file']);

            $request->merge(['image' => $image]);
        }

        if(!isset($request->slug)){
            $slug = preg_replace('/[^A-Za-z0-9\-]/','',str_replace(" ","-",strtolower($request->category)));

            $uniqueSlug = $this->uniqueSlug($slug);

            $request->merge(['slug' => $uniqueSlug]);
        } else {
            $slug = preg_replace('/[^A-Za-z0-9\-]/','',str_replace(" ","-",strtolower($request->slug)));

            $uniqueSlug = $this->uniqueSlug($slug);

            $request->merge(['slug' => $uniqueSlug]);
        }
        $store = Category::create($request->all());

        return $store ?
        redirect()->route('admin.categories.index')->with('success','Category has succesfully added.'):
        redirect()->route('admin.categories.index')->with('error',"Category can't be added.");
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
        $category = Category::find($id);
        return view('backend.category.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        if(isset($request->image_file)){
            $image = $this->fileToUpload($request['image_file']);

            $request->merge(['image' => $image]);
        }

        if(!isset($request->slug)){
            $slug = preg_replace('/[^A-Za-z0-9\-]/','',str_replace(" ","-",strtolower($request->category)));

            $uniqueSlug = $this->updateUniqueSlug($slug,$id);

            $request->merge(['slug' => $uniqueSlug]);
        } else {
            $slug = preg_replace('/[^A-Za-z0-9\-]/','',str_replace(" ","-",strtolower($request->slug)));

            $uniqueSlug = $this->updateUniqueSlug($slug,$id);

            $request->merge(['slug' => $uniqueSlug]);
        }
        $update = Category::where('id',$id)->update($request->except(['_token','_method','image_file']));

        return $update == 1 ?
        redirect()->route('admin.categories.index')->with('success','Category has succesfully updated.'):
        redirect()->route('admin.categories.index')->with('error',"Category can't be updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::destroy($id);

        return $delete == 1 ? redirect()->route('admin.categories.index')
        ->with('success','Category has been succesfully deleted.'):
        redirect()->route('admin.categories.index')
        ->with('error','Category cant be deleted.');
    }

    public function deleteBulk(Request $request){
        $delete = Category::destroy($request->deleteIds);

        return !!$delete ? response()->json(['success' => $delete." records deleted Successfully"]):
            response()->json(['success' => "No record deleted"]);
    }

    public function uniqueSlug($slug){
        $i = 1;
        $uniqueSlug = $slug;
        do {
            $exist = Category::where('slug',$uniqueSlug)->exists();

            if($exist)
            $uniqueSlug = $slug."-".$i;
            $i++;
        } while ($exist == true);

        return $uniqueSlug;
    }

    public function updateUniqueSlug($slug,$id){
        $i = 1;
        $uniqueSlug = $slug;
        do {
            $exist = Category::where('slug',$uniqueSlug)->where('id','!=',$id)->exists();

            if($exist)
            $uniqueSlug = $slug."-".$i;
            $i++;
        } while ($exist == true);

        return $uniqueSlug;
    }

    public function fileToUpload($file)
    {
        $fileName = uniqid().time().'.'.str_replace(' ', '_', $file->getClientOriginalName());

        $file->move(public_path('uploads/categories'), $fileName);

        return '/uploads/categories/'.$fileName;

    }
}
