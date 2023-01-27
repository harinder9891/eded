<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->paginate(10);
        return view('backend.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job = Job::where('status', '=', '0')->get();
        return view('backend.job.create', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('working');
       // dd($request->all());
        $jobs = Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'experience' => $request->experience,
            'area' => $request->area,
           
        ]);

        $id = $jobs->id;


        return !!$jobs ? redirect('admin/jobs')->with('success', 'Job Created Successfully') :
            redirect()->back()->with('error', "Can't be created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::find($id);
        return $jobs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $job = $this->show($job->id);

        return view('backend.job.edit', compact('job'));
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $details = [
            'title' => $request->title,
            'description' => $request->description,
            'experience' => $request->experience,
            'area' => $request->area,
        ];
        $update = Job::where('id', $id)->update($details);
        return !!$update ? redirect('admin/jobs')->with('success', 'Job Updated Successfully') :
            redirect()->back()->with('error', "Can't be updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Job::destroy($id);

        return $delete == 1
            ? redirect()
            ->back()
            ->with('success', 'Job Deleted')
            : redirect()
            ->back()
            ->with('error', 'Job cant be deleted');
    }

    public function deleteBulk(Request $request)
    {
        $delete = Job::destroy($request->deleteIds);

        return !!$delete ? response()->json(['success' => $delete . " All Jobs deleted Successfully"]) :
            response()->json(['success' => "No Job deleted"]);
    }
}
