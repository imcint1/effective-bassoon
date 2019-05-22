<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\User;
use App\Auth;
use App\Role;
use App\Permission;

use Session;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::get();
        return view('users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ]);
        
        $user = User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=> bcrypt($request['password'])
        ]);
        
        $roles = $request['roles'];
        
        if(isset($roles)){
            foreach($roles as $role){
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }
        
        return redirect()->route('users.index')->with('success', 'User successfully added.');
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
        return redirect('users');
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
        $user = User::findOrFail($id);
        $roles = Role::get();
        
        return view('users.edit', compact('user','roles'));
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
        $user = User::findOrFail($id);
        Log::info($user);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$user->id,
            'password'=>'required|min:8|confirmed'
        ]);
        
        
        $user->fill([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=> bcrypt($request['password'])         
        ]);
        $user->save();
        
        $roles = $request['roles'];
        
        
        if(isset($roles)){
            $user->roles()->sync($roles);
        }
        else{
            $user->roles()->detach();
        }
        
        return redirect()->route('users.index')->with('success', 'User successfully edited.');
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
        $user = User::findOrFail($id);
        $name = $user->name;
        $user->delete();
        flash('User '. $name . 'was deleted. RIP')->warning();
        return redirect()->route('users.index');
    }
}
