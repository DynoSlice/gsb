<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Nexmo\User\User;
use Auth;
use App\Mission;
use App\Hebergement;
use Image;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
		}
		
    public function profile(){
		$id = \Auth::user()->id;
		$Missions=\App\Mission::where('user_id',$id)->get();
		$Hebergements=\App\Hebergement::where('user_id',$id)->get();
		$Pressings=\App\pressing::where('user_id',$id)->get();
		$Registers=\App\User::all();
		$Articles=\App\Article::where('user_id',$id)->get();
		$Competences=\App\Competence::where('user_id',$id)->get();
		return view('profiles.profil',compact('Missions','Hebergements','Pressings','Registers','Articles','Competences'));
	}
	
	public function calendar(){
    	return view('profiles.calendar');
    }

    public function avatar(Request $request){
			//verifie que l'avatar existe et bien uploads
    	if($request->hasFile('avatar')){
				$avatar = $request->file('avatar');
				//change son nom pour eviter les doublons
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
				$user->avatar = $filename;
    		$user->save();
			}
		
			$id = \Auth::user()->id;
			$Missions=\App\Mission::where('user_id',$id)->get();
			$Hebergements=\App\Hebergement::where('user_id',$id)->get();
			$Pressings=\App\pressing::where('user_id',$id)->get();
			$Registers=\App\User::all();
			$Articles=\App\Article::where('user_id',$id)->get();
			$Competences=\App\Competence::where('user_id',$id)->get();
			return view('profiles.profil',compact('Missions','Hebergements','Pressings','Registers','Articles','Competences'));


    }
}
