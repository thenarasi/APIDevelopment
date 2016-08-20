<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index() {
		$users = User::all ();
		
		return response ()->json ( $users );
	}
	public function getUser($id) {
	    
	    print_r($id);
		$user = User::find ( $id );
		
		return response ()->json ( $user );
	}
	public function createUser(Request $request) {
		$user = User::create ( $request->all () );
		
		return response ()->json ( $user );
	}
	public function deleteUser($id) {
		$user = User::find ( $id );
		$user->delete ();
		
		return response ()->json ( 'deleted' );
	}
	public function updateUser(Request $request, $id) {
		
		print_r($request);exit;
		$user = User::find ( $id );
		$user->name = $request->input ( 'name' );
		$user->email = $request->input ( 'email' );
		$user->save ();
		print_r($user);
		
		return response ()->json ( $user );
	}
}
?>