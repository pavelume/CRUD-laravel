<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;



class CrudController extends Controller
{
    public function showData(){
       // $showData = Crud::all();
        //$showData = Crud::paginate(5);
        $showData = Crud::simplepaginate(5);
        return view('show_data',compact('showData'));
    }
    public function addData(){
        return view('add_data');
    }

    public function storeData(Request  $request){

        $rules = [

            'name'=>'required|max:50',
            'email'=>'required|max:50',
            'phone'=>'required|max:11',
            
        ];

        $this->validate ($request , $rules);

        //sending data to database 

        $crud = new Crud();
        $crud ->name = $request ->name;
        $crud ->email = $request ->email;
        $crud ->phone = $request ->phone;
        $crud ->address = $request ->address;

        $crud ->save();

        Session::flash('msg','Data added sucessfully');


        return redirect ('/');
    }

    public function editData($id=null){
        $editData = Crud::find($id);
        return view('edit_data',compact('editData'));
    }

    public function updateData(Request  $request,$id){

        $rules = [

            'name'=>'required|max:50',
            'email'=>'required|max:50',
            'phone'=>'required|max:11',
            
        ];

        $this->validate ($request , $rules);

        //sending data to database 

        $crud =Crud::find($id);
        $crud ->name = $request ->name;
        $crud ->email = $request ->email;
        $crud ->phone = $request ->phone;
        $crud ->address = $request ->address;

        $crud ->save();

        Session::flash('msg','Data updated sucessfully');


        return redirect ('/');
    }

    public function deleteData($id=null){
        $deleteData = Crud::find($id);
        $deleteData->delete();
        Session::flash('msg','Data delete sucessfully');

        return redirect ('/');
    }
}

