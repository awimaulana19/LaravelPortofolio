<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Portofolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index (User $user) {
        $datas = Portofolio::Where('user_id', $user->id)->first();
        $projects = Project::Where('user_id', $user->id)->take(6)->get();

        foreach ($projects as $project) {
            $pendek = Str::limit($project->isi, 200, '...');
            $project->isi = $pendek;
        }
        
        return view('template',[
            "data" => $datas,
            "project" => $projects
        ]);
    }

    public function dashboard(){
        $data = Auth::user();
        $akun = Portofolio::Where('user_id', $data['id'])->first();

        return view('dashboard.profile', [
            "title" => "Profile",
            "data" => $akun,
            "profile" => $data
        ]);
    }

    public function portfolio(){
        $data = Auth::user();
        $akun = Portofolio::Where('user_id', $data['id'])->first();

        return view('dashboard.infoportfolio', [
            "title" => "Portofolio",
            "data" => $akun,
            "profile" => $data
        ]);
    }
    
    public function exp(){
        $data = Auth::user();
        $akun = Portofolio::Where('user_id', $data['id'])->first();

        return view('dashboard.infopengalaman', [
            "title" => "Portofolio",
            "data" => $akun,
            "profile" => $data
        ]);
    }

    public function jenis($id)
    {
        $data = Portofolio::Where('id', $id)->first();

        return view('dashboard.portofolio', [
            "title" => "Portofolio",
            "portofolio" => $data
        ]);
    }

    public function datadiri(){
        $data = Auth::user();
        $akun = Portofolio::Where('user_id', $data['id'])->first();

        return view('dashboard.datadiri', [
            "title" => "Data Diri",
            "data" => $akun,
            "profile" => $data
        ]);
    }

    public function profil($id)
    {
        $data = Portofolio::Where('id', $id)->first();

        return view('dashboard.profil', [
            "title" => "Profil",
            "portofolio" => $data
        ]);
    }

    public function pendidikan($id)
    {
        $data = Portofolio::Where('id', $id)->first();

        return view('dashboard.pendidikan', [
            "title" => "Pendidikan Formal",
            "portofolio" => $data
        ]);
    }

    public function kontak($id)
    {
        $data = Portofolio::Where('id', $id)->first();

        return view('dashboard.kontak', [
            "title" => "Kontak/Sosmed",
            "portofolio" => $data
        ]);
    }

    public function pengalaman($id)
    {
        $data = Portofolio::Where('id', $id)->first();

        return view('dashboard.pengalaman', [
            "title" => "Pengalaman",
            "portofolio" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::Where('id', $id)->first();

        $validateData = $request->validate([
            'template' => 'max:255',
            'background' => 'max:255',
            'deskripsi' => 'max:1000',
            'portfolio' => 'max:50',
            'gambar' => 'image|file|max:5024',
            'ttl' => 'date',
            'pendidikan' => 'max:30',
            'alamat' => 'max:50',
            'sd' => 'max:50',
            'smp' => 'max:50',
            'sma' => 'max:50',
            'ig' => 'max:30',
            'email' => 'email:dns',
            'twitter' => 'max:30',
            'wa' => 'numeric|min_digits:10|starts_with:62',
            'exp' => 'integer|min:0',
            'client' => 'integer|min:0',
            'study' => 'integer|min:0',
            'project' => 'integer|min:0',
            'certificate' => 'integer|min:0'
        ]);

        if ($request->gambar) {
            if($request->gambarLama){
                Storage::delete($request->gambarLama);
            }
            $validateData ['gambar'] = $request->file('gambar')->store('gambar-foto');
        }

        if($request->background){
            if($request->background == 2){
                $validateData ['background'] = "css/bg.css";
            }elseif($request->background == 3){
                $validateData ['background'] = "css/bgbiru.css";
            }elseif($request->background == 4){
                $validateData ['background'] = "css/bgpink.css";
            }elseif($request->background == 5){
                $validateData ['background'] = "css/bgjingga.css";
            }else{
                $validateData ['background'] = " ";
            }
        }

        Portofolio::where('id', $portofolio->id)->update($validateData);

        if (request()->is('portofolio*')) {   
            return redirect('/portofolio')->with('success', 'Portofolio Berhasil Diupdate');
        }
        if (request()->is('datadiri*')) {
            return redirect('/datadiri')->with('success', 'Data Diri Berhasil Diupdate');
        }
        if (request()->is('pengalaman*')) {
            return redirect('/pengalaman')->with('success', '   Pengalaman Berhasil Diupdate');
        }
    }

    public function show(Project $project){
        $data = Portofolio::Where('user_id', $project->user_id)->first();

        return view('projectshow', [
            "data" => $data,
            "posting" => $project
        ]);
    }

    public function all(User $user){
        $data = Portofolio::Where('user_id', $user->id)->first();
        $projects = Project::Where('user_id', $data['id'])->get();
        
        return view('allproject',[
            "data" => $data,
            "project" => $projects
        ]);
    }
}
