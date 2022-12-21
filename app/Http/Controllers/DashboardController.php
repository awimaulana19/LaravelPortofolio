<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.project', [
            "title" => "My Project",
            "data" => Project::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.createproject', [
            "title" => "Create Project"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'image|file|max:5024',
            'isi' => 'required'
        ]);

        if ($request->gambar) {
            $validateData ['gambar'] = $request->file('gambar')->store('gambar-project');
        }

        $validateData ['user_id'] = Auth::user()->id;

        Project::create($validateData);

        return redirect('/project')->with('success', 'Project Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::Where('id', $id)->first();
        return view('dashboard.showproject', [
            "title" => "Project",
            "data" => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::Where('id', $id)->first();
        return view('dashboard.editproject', [
            "title" => "Edit Project",
            "data" => $project
        ]);
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
        $project = Project::Where('id', $id)->first();

        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'image|file|max:5024',
            'isi' => 'required'
        ]);

        if ($request->file('gambar')) {
            if($request->gambarLama){
                Storage::delete($request->gambarLama);
            }
            $validateData ['gambar'] = $request->file('gambar')->store('gambar-project');
        }

        $validateData ['user_id'] = Auth::user()->id;

        Project::where('id', $project->id)->update($validateData);

        return redirect('/project')->with('success', 'Project Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::Where('id', $id)->first();

        if($project->gambar){
            Storage::delete($project->gambar);
        }
        Project::destroy($project->id);

        return redirect('/project')->with('success', 'Project Berhasil Dihapus');
    }
}
