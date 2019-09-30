<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorController extends Controller
{
    public function show(){
        $directors = Director::get();
        return view('directors')->with(['directors' => $directors]);
    }

    public function showAdmin(){
        $directors = Director::get();
        return view('/admin/directors')->with(['directors' => $directors]);
    }

    public function add(){
        return view('admin/create_director');
    }

    public function store(Request $request){
        $director = new Director();

        $arrayD = [$request->fname, $request->lname, $request->position, $request->description];

        for($i=0; $i<count($arrayD); $i++){
            if(is_null($arrayD[$i])){
                $arrayD[$i] = 'N/A';
            }
        }

        $director->fname = $arrayD[0];
        $director->lname = $arrayD[1];
        $director->position = $arrayD[2];
        $director->description = $arrayD[3];

        $director->save();

        $alert = $director->fname . ' ' . $director->lname . ' has been successfully added!';

        return redirect('/admin/directors')->with(['alertUp' => $alert]);
    }

    public function delete($id)
    {
        $director = Director::find($id);
        $directorName = $director->fname . ' ' . $director->lname;
        $alert = $directorName . ' has been deleted.';
        $director->destroy($id);

        return redirect('/admin/directors')->with(['alertDown' => $alert]);
    }

    public function delConfirm($id){
        $director = Director::find($id);
        $alert = 'Are you sure you wish to delete ' . $director->fname . ' ' . $director->lname . '?';
        return view('/admin/delete_director')->with(['director' => $director, 'alertDown' => $alert]);
    }

    public function edit($id){
        $director = Director::find($id);
        return view('/admin/edit_director')->with(['director' => $director]);
    }

    public function update(Request $request, $id){
        $director = Director::find($id);

        $arrayD = [$request->fname, $request->lname, $request->position, $request->description];

        for($i=0; $i<count($arrayD); $i++){
            if(is_null($arrayD[$i])){
                $arrayD[$i] = 'N/A';
            }
        }

        $director->fname = $arrayD[0];
        $director->lname = $arrayD[1];
        $director->position = $arrayD[2];
        $director->description = $arrayD[3];

        $director->save();

        $alert = $director->fname . ' ' . $director->lname . ' has been successfully updated!';

        return redirect('/admin/directors')->with(['alertUp' => $alert]);
    }
}
