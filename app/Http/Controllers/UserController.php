<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ImageModel;
use Intervention\Image\ImageManagerStatic as Image;
//use Intervention\Image\ImageManagerStatic as Image;
//use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function profile(){

    	return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();//uploads/avatars/
    		Image::make($avatar)->resize(300, 300)->save( public_path('/storage/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
		}
		
		if($request->has('name')){
			
		$request->validate([
            'name' => [ 'string', 'max:255','unique:users'],
		]);

		$user = Auth::user();
		$user->name = $request->input('name');
		$user->save();
		}

		if($request->has('email') ){
			
			$request->validate([
				'email' => ['string', 'email', 'max:255', 'unique:users'],
			]);
	
			$user = Auth::user();
			$user->email = $request->input('email');
			$user->save();
			}
		

    	return view('profile', array('user' => Auth::user()) );
	}

	/*public function update_name(Request $request){

    	// Handle the user upload of avatar
    	$request->validate([
            'name' => 'required|min:3',
		]);

		$user = Auth::user();
		$user->name = $request->input('name');
		$user->save();

    	return view('profile', array('user' => Auth::user()) );
	}*/
	

}
