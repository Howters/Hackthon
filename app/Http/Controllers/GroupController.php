<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
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
      
        $validated = $request->validate([
                'line' => 'unique:leaders',
                'email' => 'unique:leaders',
                'whatsapp'=> 'unique:leaders',
                // 'binus' => 'required|in:Binusian,Non-Binusian',
                // 'flazz' => 'required_if:binus,Binusian|file|mimes:pdf,jpg,jpeg,png|max:5000',
                // 'ktp' => 'required_if:binus,Non-Binusian|file|mimes:pdf,jpg,jpeg,png|max:5000',
                
        ],[
                'line.unique' => 'Line ID has already been taken.',
                'email.unique' => 'Email has already been taken.',
                'whatsapp.unique'=> 'Whatsapp number has already been taken.',
        ]);
       

        
        

      

        if($request->binus=="yes"){
            $group = Group::create([
        
                'name'=>$request->groupName,
                'password' =>  bcrypt($request->pass),
                'binusian'=> 1
               
              
            ]);
            $group->leader_id = $group->id;
            $group->save();

            $extension_cv = $request -> file('cv')->getClientOriginalExtension();
            $extension_flazz= $request -> file('flazz')->getClientOriginalExtension();
            $filename_cv = $request -> name.'_'."cv".'.'.$extension_cv;
            $filename_flazz = $request -> name.'_'."flazz".'.'.$extension_flazz;
            $request->file('cv')->storeAs('/public/Product/', $filename_cv);
            $request->file('flazz')->storeAs('/public/Product/', $filename_flazz);
            Leader::create([
    
                'name'=>$request->name,
                'email'=>$request->email,
                'whatsapp'=>$request->whatsapp,
                'line'=>$request->line,
                'github'=>$request->git,
                'birth_place'=>$request->birth_place,
                'birth_date'=> $request->birth_date,
                'cv'=>$filename_cv,
                'flazz'=>$filename_flazz,

               
                
            ]);
            Auth::login($group);
            return redirect()->intended('dashboard');

        }
        else{
            $group = Group::create([
        
                'name'=>$request->groupName,
                'password' =>  bcrypt($request->pass),
                
               
              
            ]);
            $group->leader_id = $group->id;
            $group->save();
            $extension_cv = $request -> file('cv')->getClientOriginalExtension();
        
            $extension_ktp = $request -> file('ktp')->getClientOriginalExtension();
            $filename_cv = $request -> name.'_'."cv".'.'.$extension_cv;
     
            $filename_ktp = $request -> name.'_'."ktp".'.'.$extension_ktp;
    
            $request->file('cv')->storeAs('/public/Product/', $filename_cv);
   
            $request->file('ktp')->storeAs('/public/Product/', $filename_ktp);
            Leader::create([
    
                'name'=>$request->name,
                'email'=>$request->email,
                'whatsapp'=>$request->whatsapp,
                'line'=>$request->line,
                'github'=>$request->git,
                'birth_place'=>$request->birth_place,
                'birth_date'=> $request->birth_date,
                'cv'=>$filename_cv,
                'ktp'=>$filename_ktp,
                
            ]);
            Auth::login($group);
            return redirect()->intended('dashboard');
            
        }

    
        

        $url = action([LeaderController::class, 'store']);
        return redirect()->action([LeaderController::class, 'store']);
        //
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
        //
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
        
    }
}
