<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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

        $image = $request->file('picture_url');
        $new_name = $image->getClientOriginalName();
        $image->move(public_path('images'), $new_name);

        $residence->name = $request->name;
        $residence->picture_url = 'images/' . $image->getClientOriginalName();
        $residence->program = $request->program;
        $residence->provider = $request->provider;
        $residence->street = $request->street;
        $residence->city = $request->city;
        $residence->state = $request->state;
        $residence->zip = $request->zip;
        $residence->year_acquired = $request->year_acquired;
        $residence->year_built = $request->year_built;
        $residence->land_area = $request->land_area;
        $residence->living_area = $request->living_area;
        $residence->other = $request->other;

        if(array_key_exists('hidden', $request->toArray())){
            $residence->hidden = 1;
        }
        else{
            $residence->hidden = 0;
        }

        $residence->save();

        $alert = $residence->name . ' has been successfully added!';

        return redirect('/admin/residences')->with(['alertUp' => $alert]);
    }

    public function delete($id)
    {
        $residence = Residence::find($id);
        $residenceName = $residence->name;
        $alert = $residenceName . ' has been deleted.';
        $residence->destroy($id);

        return redirect('/admin/residences')->with(['alertDown' => $alert]);
    }

    public function delConfirm($id){
        $residence = Residence::find($id);
        $alert = 'Are you sure you wish to delete ' . $residence->name . '?';
        return view('/admin/delete_residence')->with(['residence' => $residence, 'alertDown' => $alert]);
    }

    public function edit($id)
    {
        $residence = Residence::find($id);

        return view('/admin/edit_residence')->with(['residence' => $residence]);
    }

    public function update(Request $request, $id){
        $residence = Residence::find($id);

        if(is_null($request->picture_url) == false)
        {
            $image = $request->file('picture_url');
            $new_name = $image->getClientOriginalName();
            $image->move(public_path('images'), $new_name);
            $residence->picture_url = 'images/' . $image->getClientOriginalName();
        }

        $residence->name = $request->name;
        $residence->program = $request->program;
        $residence->provider = $request->provider;
        $residence->street = $request->street;
        $residence->city = $request->city;
        $residence->state = $request->state;
        $residence->zip = $request->zip;
        $residence->year_acquired = $request->year_acquired;
        $residence->year_built = $request->year_built;
        $residence->land_area = $request->land_area;
        $residence->living_area = $request->living_area;
        $residence->other = $request->other;

        if(array_key_exists('hidden', $request->toArray())){
            $residence->hidden = 1;
        }
        else{
            $residence->hidden = 0;
        }

        $residence->save();

        $alert = $residence->name . ' has been successfully updated!';

        return redirect('/admin/residences')->with(['alertUp' => $alert]);
    }

}
