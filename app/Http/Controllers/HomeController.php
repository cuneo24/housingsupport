<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Update;

class HomeController extends Controller
{
    public function show(){
        $update = Update::find(1);
        return view('index')->with(['update' => $update]);
    }

    public function showAdmin(){
        $update = Update::find(1);
        return view('/admin/update')->with(['update' => $update]);
    }

    public function edit(){
        $update = Update::find(1);
        return view('/admin/edit_update')->with(['update' => $update]);
    }

    public function update(Request $request){
        $update = Update::find(1);
        $update->update = $request->update;
        $update->save();

        $alert = 'Home update has been successfully updated!';

        return redirect('/admin/home')->with(['alertUp' => $alert]);
    }
}
