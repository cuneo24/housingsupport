<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{
    public function show()
    {
        $partners = Partner::orderBy('name')->get();

        return view('partners')->with(['partners' => $partners]);
    }

    public function showAdmin()
    {
        $partners = Partner::orderBy('name')->get();

        return view('/admin/partners')->with(['partners' => $partners]);
    }

    public function add()
    {
        return view('admin/create_partner');
    }

    function store(Request $request)
    {
        $partner = new Partner();

        $arrayP = [$request->name, $request->website_url, $request->description];

        for($i=0; $i<count($arrayP); $i++){
            if(is_null($arrayP[$i])){
                $arrayP[$i] = 'N/A';
            }
        }

        $partner->name = $arrayP[0];
        $partner->website_url = $arrayP[1];
        $partner->description = $arrayP[2];

        $partner->save();

        $alert = $partner->name . ' has been successfully added!';

        return redirect('/admin/partners')->with(['alertUp' => $alert]);
    }

    public function delete($id)
    {
        $partner = Partner::find($id);
        $partnerName = $partner->name;
        $alert = $partnerName . ' has been deleted.';
        $partner->destroy($id);

        return redirect('/admin/partners')->with(['alertDown' => $alert]);
    }

    public function delConfirm($id)
    {
        $partner = Partner::find($id);
        $alert = 'Are you sure you wish to delete ' . $partner->name . '?';

        return view('/admin/delete_partner')->with(['partner' => $partner, 'alertDown' => $alert]);
    }

    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('/admin/edit_partner')->with(['partner' => $partner]);
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        $arrayP = [$request->name, $request->website_url, $request->description];

        for($i=0; $i<count($arrayP); $i++){
            if(is_null($arrayP[$i])){
                $arrayP[$i] = 'N/A';
            }
        }

        $partner->name = $arrayP[0];
        $partner->website_url = $arrayP[1];
        $partner->description = $arrayP[2];

        $partner->save();

        $alert = $partner->name . ' has been successfully updated!';

        return redirect('/admin/partners')->with(['alertUp' => $alert]);
    }
}
