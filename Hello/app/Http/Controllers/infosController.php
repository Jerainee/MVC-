<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;     //query builder
use App\infos;    //eloquent	
class infosController extends Controller
{
     public function AddData(){
     	return view ('add_data');
     }

     public function InsertData(Request $request){
    /* 	$data=array ();
     	$data['name']=$request->name;
     	$data['address']=$request->address;
     	$data['mobile']=$request->mobile;
     	$data['status']=$request->status;

     	DB::table('infos')
     	->insert($data);

     	return view('add_data');*/

     	$infos=new infos;
     	$infos->name=$request->name;
     	$infos->address=$request->address;
     	$infos->mobile=$request->mobile;
     	$infos->status=$request->status;
     	$infos->save();
     	return view('index');
     }

      public function AllData(){

     	/*$infos=DB::table('infos')
     			->get();*/
     	$infos=infos::all();
     	return view ('all_data')->with('all_data',$infos);
     }

     public function DeleteData($id){    

     	/*DB::table('infos')
     		   ->where('id',$id)
     		   ->delete();
     	return view ('index');*/

     	infos::find($id)->delete();
     	return view('index');

     }

     public function ShowData($id,$action){

		/*$con=DB::table('infos')
			->where('id',$id)
			->first();*/
			$con=infos::find($id)->first();
			return view($action.'_data')->with(['single_con'=>$con,'single_view'=>$con]);    

     }

     public function UpdateData(Request $request, $id) {

     	$infos=infos::find($id);
     	$infos->name=$request->name;
     	$infos->address=$request->address;
     	$infos->mobile=$request->mobile;
     	$infos->status=$request->status;
     	$infos->save();

     	return view('index');

     }




}

