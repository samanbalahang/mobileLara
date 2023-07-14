<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!isset(Auth::user()->id)){
            return view('thepublic.authenticate.login');
        }else{
            return redirect()->route('index');
        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $username   =   $request->name;
        $userEmail  =   $request->email;
        $password   =   $request->password;
        $theuser = new User;
        $login = $theuser::where("name",$username)->where("email",$userEmail)->first();
        if(isset($login)){
            $hashedPassword = $login->password;
            $id = $login->id;
            $name = $login->name;
            if (Hash::check($password, $hashedPassword)) {
                Auth::attempt(['id'=> $id,'name'=>$name,'email' => $userEmail, 'password' => $password,'active'=>1]);
                $request->session()->regenerate();
                echo "done";
                echo Auth::user()->id;
                return redirect()->route('index');
                // return redirect()->intended('index');
            }else{
               echo "Hash::check";     
            }
        }else{
            echo "isset(login)";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
