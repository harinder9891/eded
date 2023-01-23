<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\Enquiry;
use App\Models\Course;
use App\Models\Category;
use App\Models\RelatedClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Enquiry\StoreEnquiry;

class IndexController extends Controller
{
    public function index()
    {
        $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        $course = Course::where('status','1')->get();
        $popular = RelatedClass::where('type','popular')->get();
        $categories = Category::where('status','1')->get();
        $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.index',compact('course','latestCourse','popular','categories','categoriesWithCourses'));
    }

    public function categories($slug = null)
    {
        if (!is_null($slug)) {
            $category = Category::where('slug',$slug)->first();
            if(is_null($category)) $products = collect();
            $products = Course::where('category_id',$category->id)->paginate(6);
            return view('frontend.category-products',compact('products'));
        }
        // $categories = Category::with('course')->paginate(20);
        // return view('frontend.products',compact('categories'));
    }

    public function products($slug = null)
    {
        if (!is_null($slug)) {
            $product = Course::where('slug',$slug)->first();
            return view('frontend.product-details',compact('product'));
        }
        $categories = Category::with('course')->paginate(20);
        return view('frontend.products',compact('categories'));
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function enquiry($slug = null)
    {
        $selectedProduct=0;
        if (!is_null($slug)) {
            $selectedProduct = Course::where('slug',$slug)->first()->id??$selectedProduct;
        }
        $products = Course::select('id','course_title')->get();
        return view('frontend.enquiry',compact('products','selectedProduct'));
    }

    public function submitEnquiry(StoreEnquiry $request){
        $storeEnquiry = Enquiry::create($request->all());
        return !!$storeEnquiry ?
        redirect()->back()->with('success','Enquiry Submitted'):
        redirect()->back()->with('error',"Enquiry can't be submitted");
    }
}
