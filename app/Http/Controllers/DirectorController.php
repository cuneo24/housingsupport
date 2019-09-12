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

        $director->fname = $request->fname;
        $director->lname = $request->lname;
        $director->position = $request->position;
        $director->description = $request->description;

        $director->save();

        $alert = $director->name . ' has been successfully added.';

        return redirect('/admin/directors')->with(['alert' => $alert]);
    }

    public function delete($id)
    {
        $director = Director::find($id);
        $directorName = $director->fname . $director->lname;
        $alert = $directorName . ' has been deleted.';
        $director->destroy($id);

        return redirect('/admin/directors')->with(['alert' => $alert]);
    }

    public function delConfirm($id){
        $director = Director::find($id);
        $alert = 'Are you sure you wish to delete ' . $director->fname . ' ' . $director->lname . '?';
        return view('/admin/delete_director')->with(['director' => $director, 'alert' => $alert]);
    }

    public function edit($id){
        $director = Director::find($id);
        return view('/admin/edit_director')->with(['director' => $director]);
    }

    public function editConfirm($id){
        $director = Director::find($id);
        $alert = 'Are you sure you wish to save these changes to ' . $director->fname . ' ' . $director->lname . '?';
        return view('/admin/edit_director')->with(['director' => $director, 'alert' => $alert]);
    }

    public function update(Request $request, $id){
    }
}
