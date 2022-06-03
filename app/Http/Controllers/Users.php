<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Session;

class Users extends Controller
{
    function list() {
		$data = Session::get('loginData');
		$list = Product::all();
		return view ('productlist', ['product' => $list->take(19)]);
	}
	function create() {
		return view ('create');
	}
	function loginsubmit(Request $req) {
		$response = User::select('id', 'name')->where([
			['email', '=', $req->email],
			['password', '=', md5($req->password)]
		])->get();
		Session::put('loginData', $req->input());
		if (!empty($response)) {
			return redirect('list');
		}
	}
	
	function createsubmit(Request $req) {
		$model = new User();
		$model->name = $req->name;
		$model->email = $req->email;
		$model->password = md5($req->password);
		Session::put('loginData', $req->input());
		if ($model->save()) {
			return redirect('list');
		}
		
	}
}
