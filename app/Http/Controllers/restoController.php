<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Session;
use Crypt;



class restoController extends Controller
{
    public function index(){
    	return view('home');
    }
    public function list(){
    	$data =  Restaurant::all();
    	return view('list',["data"=>$data]);
    }
    public function add(Request $request){
    	$resto = new Restaurant;
    	$resto->name = $request->name;
    	$resto->email = $request->email;
    	$resto->address = $request->address;
    	$resto->save();
    	$request->session()->flash('status','Restaurant Submitted SuccessFully !..');
    	return redirect('list');
    }
    public function delete($id){

    	 Restaurant::find($id)->delete();
    	Session::flash('status','Restaurant Deleted SuccessFully !..');
    	return redirect('list');

    }
    public function edit($id){

		$data =  Restaurant::find($id);
		return view('edit',['data'=>$data]);
    }
    public function update(Request $request){
    	$resto = Restaurant::find($request->input('id'));
    	$resto->name = $request->input('name');
    	$resto->email = $request->input('email');
    	$resto->address = $request->input('address');
    	$resto->save();
    	$request->session()->flash('status','Restaurant Updated SuccessFully !..');
    	return redirect('list');
    }
    public function register(Request $request){

    	//echo Crypt::encrypt('123@abc');
    	//return $request->input('name');
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password =Crypt::encrypt($request->input('password'));
    	$user->contact = $request->input('contact');
   $user->save();
   $request->session()->put('user',$request->input('name'));
    	return redirect('/');
    	
    }

    public function login(Request $request){
    	$user =  User::where("email",$request->input('email'))->get();
    	if(Crypt::deCrypt($user[0]->password)==$request->input('password')){
    	 $request->session()->put('user',$user[0]->name);
    	
    	return redirect('/');
    }
    }
}
