<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{
    public function show(){
        $partners = Partner::orderBy('name')->get();
        return view('partners')->with(['partners' => $partners]);
    }

    public function showAdmin(){
        $partners = Partner::orderBy('name')->get();
        return view('/admin/partners')->with(['partners' => $partners]);
    }

    public function add(){
        return view('admin/create_partner');
    }

    function store(Request $request){
        $partner = new Partner();

        $partner->name = $request->name;
        $partner->logo_url = $request->logo_url;
        $partner->website_url = $request->website_url;
        $partner->description = $request->description;

        $partner->save();

        $alert = $partner->name . ' has been successfully added.';

        return redirect('/admin/partners')->with(['alert' => $alert]);
    }

    public function delete($id)
    {
        $partner = Partner::find($id);
        $partnerName = $partner->name;
        $alert = $partnerName . ' has been deleted.';
        $partner->destroy($id);

        return redirect('/admin/partners')->with(['alert' => $alert]);
    }

    public function delConfirm($id){
        $partner = Partner::find($id);
        $alert = 'Are you sure you wish to delete ' . $partner->name . '?';
        return view('/admin/delete_partner')->with(['partner' => $partner, 'alert' => $alert]);
    }
}
