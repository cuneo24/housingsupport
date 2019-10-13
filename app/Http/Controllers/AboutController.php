<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function show(){
        $about = About::find(1);
        return view('/about')->with(['about' => $about]);
    }

    public function showAdmin(){
        $about = About::find(1);
        return view('/admin/about')->with(['about' => $about]);
    }

    public function edit(){
        $about = About::find(1);
        return view('/admin/edit_about')->with(['about' => $about]);
    }

    public function update(Request $request){
        $about = About::find(1);
        $about->firstp = $request->firstp;
        $about->secondp = $request->secondp;
        $about->thirdp = $request->thirdp;
        $about->fourthp = $request->fourthp;
        $about->fifthp = $request->fifthp;
        $about->sixthp = $request->sixthp;
        $about->seventhp = $request->seventhp;
        $about->eigthp = $request->eigthp;
        $about->ninthp = $request->ninthp;
        $about->tenthp = $request->tenthp;

        $about->save();

        $alert = 'About has been successfully updated!';

        return redirect('/admin/about')->with(['alertUp' => $alert]);
    }
}
