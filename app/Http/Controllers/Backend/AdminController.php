<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request){
        return view('admin.dashboard');
    }
    public function Profile(){
        return view('admin.profileview');
    } 
    public function Update(Request $request){
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'max:100'],
            'phone' => ['required', 'max:100'],
            'image'=> ['image', 'max:2048']
        ]);

        $user = Auth::user();

        if()
    }
}
