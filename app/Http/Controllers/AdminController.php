<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $name = Auth::user()->name;
        $lots = Lot::all();
        return view('admin.main', compact('name', 'lots'));
    }

    public function edit(Lot $lot){        
        return view('admin.edit', compact('lot'));
    }

    public function update(Request $request, Lot $lot){        
        $data = $request->validate([
            'title' => 'string',
            'image_path' => 'required',
            'description' => 'required',
            'min_price' => 'int',  
            'end_date' => 'required',    
            'user_id' => 'int',
        ]);
        $data['image_path'] = "storage/" . $request->file('image_path')->store('uploads', 'public');
        $lot->update($data);
        return redirect()->route('lotsIndex');
    }

    public function destroy(Lot $lot){ 
        $lot->delete();
        return redirect()->route('admin.index');
    }

    public function users(){
        $id = Auth::user()->id;
        $users = User::where('id', '!=', $id)->get();        
        return view('admin.users', compact('users'));
    }

    public function block($id){
        $user = User::where('id',$id)->update(['is_active'=>'0']);       
        return redirect()->route('lotsIndex');
    }
}
