<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\Course\SubmitProductRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->paginate(10);
        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::select()->get();
        return view('backend.team.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmitProductRequest $request)
    {
       
        if (isset($request->image)) {
            $image = $this->fileToUpload($request['image'], '/uploads/product/images');
        }
        $teams = Team::create([
            'member_name' => $request->member_name,
            'designation' => $request->designation,
            'image' => !!$request->image ? $image : $request->image,
            'about' => $request->about,
           
        ]);

        $id = $teams->id;


        return !!$teams ? redirect('admin/team')->with('success', 'Team Member Added Successfully') :
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
        $teams = Team::find($id);
        return $teams;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $teams = $this->show($team->id);

        return view('backend.team.edit', compact('teams'));
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
        $details = [
            'member_name' => $request->member_name,
            'designation' => $request->designation,
            'about' => $request->about,
        ];
       

        if (isset($request->image)) {
            $image = $this->fileToUpload($request['image'], '/uploads/product/images');
            $details['image'] = $image;
        }
        $update = Team::where('id', $id)->update($details);
        return !!$update ? redirect('admin/team')->with('success', 'Team Memer Details Updated Successfully') :
            redirect()->back()->with('error', "Can't be updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function fileToUpload($file, $path)
    {
        $fileName = uniqid() . time() . '.' . str_replace(' ', '_', $file->getClientOriginalName());

        $file->move(public_path($path), $fileName);

        return $path . "/" . $fileName;
    }

    public function destroy($id)
    {
        $delete = Team::destroy($id);

        return $delete == 1
            ? redirect()
            ->back()
            ->with('success', 'Team Member Deleted')
            : redirect()
            ->back()
            ->with('error', 'Team Member cant be deleted');
    }

    public function deleteBulk(Request $request)
    {
        $delete = Team::destroy($request->deleteIds);

        return !!$delete ? response()->json(['success' => $delete . " All Team Member deleted Successfully"]) :
            response()->json(['success' => "No Team Member deleted"]);
    }
}
