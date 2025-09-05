<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
   public function users() {
    $users = User::all();
    return view('admin.index', compact('users'));

   }

   public function view($id) 
{
    $user = User::findOrFail($id);
    return view('admin.view', compact('user'));

   }

   public function edit($id)
{
    $user = User::findOrFail($id); 
    return view('admin.edit', compact('user')); 

   }

  public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'role' => 'required|string',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role; // ← Make sure this line exists
    $user->save();

    return redirect()->route('admin.index')->with('success', 'User updated successfully.');
}

     public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }

    public function products()
{

}

}


