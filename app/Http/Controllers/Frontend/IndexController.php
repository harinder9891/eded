<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\Enquiry;
use App\Models\Course;
use App\Models\FooterFormData;
use App\Models\Category;
use App\Models\RelatedClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Enquiry\StoreEnquiry;

class IndexController extends Controller
{
    public function index()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.index');
    }
  
    public function portfolio()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.portfolio');
    }
  
    public function webpage()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.web-d');
    }
    public function bc()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.business-consultation');
    }
    public function digitmarket()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.digital-marketing');
    }
    public function whoweare()
    {
        // $latestCourse = Course::latest()->limit(12)->where('status','1')->get();
        // $course = Course::where('status','1')->get();
        // $popular = RelatedClass::where('type','popular')->get();
        // $categories = Category::where('status','1')->get();
        // $categoriesWithCourses = Category::with('course')->paginate(20);
        return view('frontend.who-we-are');
    }

    public function savemaildata(Request $request){
        $formdata = FooterFormData::create([
         
        'email'=> $request->email,
        'phone'=> $request->phone,
        'message'=> $request->message,
        'service'=> $request->service,
        'budget'=> $request->budget,
        'pagename'=> $request->pagename,
        ]);

        $id = $formdata->id;

return 1;

    }
    public function thankyou(){
        return redirect('/');
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
