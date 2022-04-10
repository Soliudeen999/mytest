<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\createUserRequest;
use App\Http\Requests\updateUserRequest;
use Illuminate\Support\Facades\Hash;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    public function index()
    {
        return view('dashboard', ['users' => User::all(), 'roles' => Role::all()]);
    }

    public function fetchUser(User $user)
    {
        return response()->json([
            'status' => true,
            'data' => User::where('id', $user->id)->with('roles')->first()
        ]);
    }
    
    public function destroy(User $user)
    {   
        foreach($user->roles as $role)
        {
            $user->removeRole($role);
        }
        toast('User Deleted Successfully', 'success');
        $user->delete();
        return redirect()->back();
    }

    public function create(createUserRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone_number' => $request->phone_number,
            'designation' => $request->designation,
            'employee_id' => $request->employee_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        if ($user) {
            toast('User Created Successfully', 'success');
            return redirect()->back();
        }
        toast('Operation Failed, Please try again', 'error');
        return redirect()->back();
    }

    public function UpdateUser(Request $request, User $user)
    {
        $user->update([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone_number' => $request->phone_number,
            'designation' => $request->designation,
            'employee_id' => $request->employee_id,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        $user->syncRoles($request->role);
        toast('User Updated Successfully', 'success');
        return redirect()->back();
    }
}
