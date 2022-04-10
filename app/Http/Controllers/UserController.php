<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\createUserRequest;
use App\Http\Requests\updateUserRequest;
use Illuminate\Support\Facades\Hash;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        $roles = Role::all();
        return view('users.index', compact('users', 'roles'));
    }

    public function fetchUser(User $user)
    {
        return response()->json([
            'status' => true,
            'data' => $user
        ]);
    }
    
    public function destroy(User $user)
    {
        // check permission
        $user->delete();
        return view('users.index');
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
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole($request->role);

        if ($user) {
            toast('User Created Successfully', 'success');
            return redirect()->back();
        }
        toast('Operation Failed, Please try again', 'error');
        return redirect()->back();
    }

    public function UpdateUser(updateUserRequest $request, User $user)
    {
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone_number = $request->phone_number;
        $user->designation = $request->designation;
        $user->employee_id = $request->employee_id;
        $user->email = $request->email;
        $user->username = Hash::make($request->username);

        $user->save();

        $user->syncRoles($request->role);
        toast('User Created Successfully', 'success');
        return redirect()->back();
    }
}
