<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\SubmitProductRequest;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\SliderImages;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->get();
        return view('backend.product.index', compact('products'));
    }


    public function create()
    {
        $product = Product::where('status', '=', '1')->get();
        return view('backend.product.create', compact('product'));
    }


    public function store(SubmitProductRequest $request)
    {
        if (isset($request->product_image)) {
            $product_image = $this->fileToUpload($request['product_image'], '/uploads/product/images');
        }

        if (!isset($request->slug)) {
            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", strtolower($request->title)));

            $uniqueSlug = $this->uniqueSlug($slug);

            $request->merge(['slug' => $uniqueSlug]);
        } else {
            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", strtolower($request->slug)));

            $uniqueSlug = $this->uniqueSlug($slug);

            $request->merge(['slug' => $uniqueSlug]);
        }

        $store_product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => !!$request->product_image ? $product_image : $request->product_image,
            'seo_title' => $request->seo_title,
            'summary' => $request->summary,
            'keywords' => $request->keywords,
            'slug' => $request->slug,
            'extra_seo' => $request->extra_seo,
            'status' => '1'
        ]);

        $id = $store_product->id;


        return !!$store_product ? redirect('admin/products')->with('success', 'Product Created Successfully') :
            redirect()->back()->with('error', "Can't be created");
    }


    public function edit(Product $product)
    {
        $product = $this->show($product->id);

        return view('backend.product.edit', compact('product'));
    }

    public function update(UpdateCourseRequest $request, $id)
    {
        $details = [
            'category_id' => $request->category_id,
            'course_title' => $request->product_title,
            'price' => $request->price,
            'ratings' => $request->ratings,
            'availability' => $request->availability,
            'course_description' => $request->product_description,
            'course_details' => $request->product_details,
            'seo_title' => $request->seo_title,
            'summary' => $request->summary,
            'keywords' => $request->keywords,
            'extra_seo' => $request->extra_seo,
            // 'is_special' => $request->is_special
        ];

        if (isset($request->product_image)) {
            $courseImage = $this->fileToUpload($request['product_image'], '/uploads/course/images');
            $details['course_image'] = $courseImage;
        }

      

        if (!isset($request->slug)) {
            $title = Product::select('course_title')->where('id', $id)->first();

            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", strtolower($title->course_title)));

            $uniqueSlug = $this->updateUniqueSlug($slug, $id);

            $request->merge(['slug' => $uniqueSlug]);
        } else {
            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", strtolower($request->slug)));

            $uniqueSlug = $this->updateUniqueSlug($slug, $id);

            $request->merge(['slug' => $uniqueSlug]);
        }
        $details['slug'] = $uniqueSlug;
        $update = Product::where('id', $id)->update($details);
        return !!$update ? redirect('admin/products')->with('success', 'Product Updated Successfully') :
            redirect()->back()->with('error', "Can't be updated");
    }


    public function deleteImage($id)
    {
        $delete = SliderImages::destroy($id);

        return $delete == 1
            ? redirect()
            ->back()
            ->with('success', 'Image Deleted')
            : redirect()
            ->back()
            ->with('error', 'Image cant be deleted');
    }


    public function show($id)
    {
        $product_id = Product::find($id);
        return $product_id;
    }

    public function destroy($id)
    {
        $delete = Product::destroy($id);

        return $delete == 1
            ? redirect()
            ->back()
            ->with('success', 'Product Deleted')
            : redirect()
            ->back()
            ->with('error', 'Product cant be deleted');
    }

    public function deleteBulk(Request $request)
    {
        $delete = Product::destroy($request->deleteIds);

        return !!$delete ? response()->json(['success' => $delete . " records deleted Successfully"]) :
            response()->json(['success' => "No record deleted"]);
    }

    public function deleteBulkEnquiries(Request $request)
    {
        $delete = Enquiry::destroy($request->deleteIds);

        return !!$delete ? response()->json(['success' => $delete . " records deleted Successfully"]) :
            response()->json(['success' => "No record deleted"]);
    }


    public function uniqueSlug($slug)
    {
        $i = 1;
        $uniqueSlug = $slug;
        do {
            $exist = Product::where('slug', $uniqueSlug)->exists();

            if ($exist) {
                $uniqueSlug = $slug . "-" . $i;
            }
            $i++;
        } while ($exist == true);

        return $uniqueSlug;
    }

    public function updateUniqueSlug($slug, $id)
    {
        $i = 1;
        $uniqueSlug = $slug;
        do {
            $exist = Product::where('slug', $uniqueSlug)
                ->where('id', '!=', $id)
                ->exists();

            if ($exist) {
                $uniqueSlug = $slug . "-" . $i;
            }
            $i++;
        } while ($exist == true);

        return $uniqueSlug;
    }

    public function fileToUpload($file, $path)
    {
        $fileName = uniqid() . time() . '.' . str_replace(' ', '_', $file->getClientOriginalName());

        $file->move(public_path($path), $fileName);

        return $path . "/" . $fileName;
    }

    public function enquiry()
    {
        $enquiries = Enquiry::get();
        return view('backend.enquiry.index', compact('enquiries'));
    }
}
