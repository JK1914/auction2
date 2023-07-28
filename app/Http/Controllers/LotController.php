<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\User;
use Carbon\Carbon;
use App\Services\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LotController extends Controller
{
    public function myLots()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $name = $user->name;

        $lots = $user->lots;
        
        return view('lot.user_lots', compact('name', 'lots'));
    }

    public function list()
    {
        $lots = Lot::all();
        return view('alllots', compact('lots'));
    }

    public function changePrice(Request $request)
    {
        $userId = Auth::user()->id;
        $id = $request->id;
        $price = $request->min_price;        

        $lot = Lot::find($id);
        if ($lot->end_date > Carbon::now() && $lot->min_price < $price) {
            $lot->update([
                'min_price' => $price,
                'win_user_id' => $userId
            ]);

            return redirect()->route('lotsIndex');
        }
        return redirect()->route('lotsIndex');
    }

    public function lotsWin()
    {
        $id = Auth::user()->id;
        $lots = Lot::where('win_user_id', $id)->where('end_date', '<', Carbon::now())->get();
        $name = Auth::user()->name;

        Service::add($lots);

        return view('lot.win', compact('name', 'lots'));
    }

    public function current(){
        $id = Auth::user()->id;
        $lots = Lot::where('win_user_id', $id)->where('end_date', '>', Carbon::now())->get();
        $name = Auth::user()->name;
        return view('lot.win', compact('name', 'lots'));
    }

    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $name = Auth::user()->name;
            $lots = Lot::where('user_id', '!=', $id)->get();  
            Service::add($lots);
            //return response()->json($lots, 200);
            return view('lot.index', compact('name', 'lots'));
        }
        $lots = Lot::all();
        Service::add($lots);        
        return view('lot.index', ['name' => 'гость'], compact('lots'));
    }

    public function addLotForm()
    {
        return view('lot.add');
    }

    public function addLotStore(Request $request)
    {
        $id = Auth::user()->id;
        $lot = Lot::create([
            'title' => $request->title,
            'image_path' => "storage/" . $request->file('image_path')->store('uploads', 'public'),
            'description' => $request->description,
            'min_price' => $request->min_price,
            'end_date' => $request->end_date,
            'user_id' => $id,
        ]);
        return redirect()->route('lotsIndex')->with('success', 'Лот добавлен!');
    }

    public function search(Request $request)
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $name = Auth::user()->name;
            $s = $request->s;
            $user_name = 'name';
            
            $lots = Lot::where('title', 'ilike', '%' . $s . '%')->where('user_id', '!=', $id)->get();
            Service::add($lots);    
            return view('lot.index', compact('name', 'lots'));
        }

        $s = $request->s;
        $lots = Lot::where('title', 'ilike', '%' . $s . '%')->get(); 
        for($i=0;$i<count($lots);$i++){
            $user = User::where('id', $lots[$i]->user_id)->first()->name;
            $lot=$lots[$i]['name']=$user;                
        }    
        return view('lot.index', ['name' => 'гость'], compact('lots'));
    }
}
