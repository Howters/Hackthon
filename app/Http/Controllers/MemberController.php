<?php

namespace App\Http\Controllers;

use App\Models\Member;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
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
        $group= Auth::user();
        //
        $validated = $request->validate([
            'line' => [
                'required',
                Rule::unique('leaders'),
                Rule::unique('members'),
            ],
            'email' => [
                'required',
                Rule::unique('leaders'),
                Rule::unique('members'),
            ],
            'whatsapp' => [
                'required',
                Rule::unique('leaders'),
                Rule::unique('members'),
            ],
            
            'flazz' => 'file|mimes:pdf,jpg,jpeg,png|max:5000',
            'ktp' => 'file|mimes:pdf,jpg,jpeg,png|max:5000',
            
    ],[
            'line.unique' => 'Line ID has already been taken.',
            'email.unique' => 'Email has already been taken.',
            'whatsapp.unique'=> 'Whatsapp number has already been taken.',
    ]);
   

    
    

//   return $group;
  if($group->memberCount!=3){

    

    if($group->binusian==1){
        
        $extension_cv = $request -> file('cv')->getClientOriginalExtension();
        $extension_flazz= $request -> file('flazz')->getClientOriginalExtension();
        $filename_cv = $request -> name.'_'."cv".'.'.$extension_cv;
        $filename_flazz = $request -> name.'_'."flazz".'.'.$extension_flazz;
        $request->file('cv')->storeAs('/public/Product/', $filename_cv);
        $request->file('flazz')->storeAs('/public/Product/', $filename_flazz);
       $member = Member::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'whatsapp'=>$request->whatsapp,
            'line'=>$request->line,
            'github'=>$request->github,
            'birth_place'=>$request->birth_place,
            'birth_date'=> $request->birth_date,
            'cv'=>$filename_cv,
            'flazz'=>$filename_flazz,

           
            
        ]);  
        $member->group_id = $group->id;
        $group->memberCount++;
        $member->save();
        $group->save();

      
        return redirect('/dashboard');

      

    }
    else{
       
        $extension_cv = $request -> file('cv')->getClientOriginalExtension();
    
        $extension_ktp = $request -> file('ktp')->getClientOriginalExtension();
        $filename_cv = $request -> name.'_'."cv".'.'.$extension_cv;
 
        $filename_ktp = $request -> name.'_'."ktp".'.'.$extension_ktp;

        $request->file('cv')->storeAs('/public/Product/', $filename_cv);

        $request->file('ktp')->storeAs('/public/Product/', $filename_ktp);
        $member = Member::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'whatsapp'=>$request->whatsapp,
            'line'=>$request->line,
            'github'=>$request->github,
            'birth_place'=>$request->birth_place,
            'birth_date'=> $request->birth_date,
            'cv'=>$filename_cv,
            'ktp'=>$filename_ktp,
            
        ]);
        $member->group_id = $group->id;
        $group->memberCount++;
        $member ->save();
        $group->save();
        return redirect('/dashboard');
        
    }

    }
    else{

        return redirect('/dashboard');
        
    }

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
        //
    }
}
