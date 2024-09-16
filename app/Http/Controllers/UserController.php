<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function create(){
        return view('users.create_user');
    }
    public function store(StoreUserRequest $request)
    {
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'specialization' => $request->specialization,
        ]);
        ImageHelper::handleFileUpload($request, $user);

        return redirect()->route('users.index');
    }
}
