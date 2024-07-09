<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('guest:role')->except('logout');

    }

    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Users::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'role' => 'user'
        ]);
        
        return redirect('/login')->with('status', 'Data user berhasil dibuat');
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

    public function authenticate(Request $request)
    {       
            $credentials = $request->validate([
                'email' => ['required'],
                'password' => ['required'],
            ]);

        if (Auth::guard('role')->attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::guard('role')->user();
            if ($user->role == 'admin') {
                return redirect()->intended('/cms');
            } else{
                return redirect()->intended('/cms/pengguna');
            }
        }
        dd('failed');
        // return back()->with('status-failed', 'login failed : Username and password not valid');
    }

    public function logout()
    {
        if (Auth::guard('role')->check()) {
            Auth::guard('role')->logout();
            return redirect('/')->with('danger', 'Anda berhasil logout');
        }
    }
}
