<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;

class ResidenceController extends Controller
{
    public function show(){
        $residences = Residence::get();
        return view('residences')->with(['residences' => $residences]);
    }

    public function showAdmin(){
        $residences = Residence::get();
        return view('admin/residences')->with(['residences' => $residences]);
    }

    public function add(){
        return view('admin/create_residence');
    }

    public function store(Request $request){
        $residence = new Residence();

        $residence->name = $request->name;
        $residence->picture_url = $request->picture_url;
        $residence->program = $request->program;
        $residence->provider = $request->provider;
        $residence->street = $request->street;
        $residence->city = $request->city;
        $residence->state = $request->state;
        $residence->zip = $request->zip;
        $residence->year_acquired = $request->year_acquired;
        $residence->year_built = $request->year_built;
        $residence->units = $request->units;
        $residence->land_area = $request->land_area;
        $residence->living_area = $request->living_area;
        $residence->zoning = $request->zoning;
        $residence->other = $request->other;
        $residence->book = $request->book;
        $residence->page = $request->page;
        $residence->map_parcel = $request->map_parcel;
        $residence->hidden = $request->hidden;

        $residence->save();

        $alert = $residence->name . ' has been successfully added.';

        return redirect('/admin/residences')->with(['alert' => $alert]);
    }

    public function delete($id)
    {
        $residence = Residence::find($id);
        $residenceName = $residence->name;
        $alert = $residenceName . ' has been deleted.';
        $residence->destroy($id);

        return redirect('/admin/residences')->with(['alert' => $alert]);
    }

    public function delConfirm($id){
        $residence = Residence::find($id);
        $alert = 'Are you sure you wish to delete ' . $residence->name . '?';
        return view('/admin/delete_residence')->with(['residence' => $residence, 'alert' => $alert]);
    }
}
