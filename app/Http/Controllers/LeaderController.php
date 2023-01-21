<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'leaderCv' => 'required|file|mimes:pdf,jpg,jpeg,png',
        //     'leaderFlazz' => 'required|file|mimes:pdf,jpg,jpeg,png',
        //     'leaderKtp' => 'required|file|mimes:pdf,jpg,jpeg,png',

        // ],[
        //     'leaderCv.required' => 'CV is required',
        //     'leaderCv.mimes' => 'CV should be in pdf,jpg,jpeg,png format',
        //     'leaderFlazz.required' => 'Flazz Card is required',
        //     'leaderFLazz.mimes' => 'Flazz Card should be in pdf,jpg,jpeg,png format',
        //     'leaderKtp.required' => 'ID Card is required',
        //     'leaderKtp.mimes' => 'ID Card should be in pdf,jpg,jpeg,png format'
        // ]);
        // $extension_cv = $request -> file('leaderCv')->getClientOriginalExtension();
        // $extension_flazz= $request -> file('leaderFlazz')->getClientOriginalExtension();
        // $extension_ktp = $request -> file('leaderKtp')->getClientOriginalExtension();
        // $filename_cv = $request -> leaderName.'_'."cv".'.'.$extension_cv;
        // $filename_flazz = $request -> leaderName.'_'."flazz".'.'.$extension_flazz;
        // $filename_ktp = $request -> leaderName.'_'."ktp".'.'.$extension_ktp;

        // $request->file('leaderCv')->storeAs('/public/Product/', $filename_cv);
        // $request->file('leaderFlazz')->storeAs('/public/Product/', $filename_flazz);
        // $request->file('leaderKtp')->storeAs('/public/Product/', $filename_ktp);
        // Leader::create([

        //     'name'=>$request->leaderName,
        //     'email'=>$request->leaderEmail,
        //     'whatsapp'=>$request->leaderWa,
        //     'line'=>$request->leaderLine,
        //     'github'=>$request->leaderGit,
        //     'birth_place'=>$request->leaderPlace,
        //     'birth_date'=> $request->leaderDate,
        //     'cv'=>$filename_cv,
        //     'flazz'=>$filename_flazz,
        //     'ktp'=>$filename_ktp,
            
        // ]);
        // return redirect('/');

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
    public function edit(Request $request)
    {
        $validated = $request->validate([
           
            'bukti' => 'required|file|mimes:pdf,jpg,jpeg,png',

        ],[
            'bukti.required' => 'CV is required',
            'bukti.mimes' => 'CV should be in pdf,jpg,jpeg,png format',
            
        ]);
        $extension_bukti = $request-> file('bukti')->getClientOriginalExtension();
        $filename_bukti = $request->name.'_'."bukti".'.'.$extension_bukti;
      
        
        
        $request->file('bukti')->storeAs('/public/Product/', $filename_bukti);
        $id = Auth::user()->id;

        $leader = Leader::findOrFail($id);
        $leader->update([

            'bukti'=>$filename_bukti,
            
        ]);
        return redirect('/payment');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
