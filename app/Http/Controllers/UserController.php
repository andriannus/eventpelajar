<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\VerifyUser;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
    	$email = $request->input('email');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
    	$institution = $request->input('institution');

    	$user = new User([
    		'first_name' => $first_name,
            'last_name' => $last_name,
    		'email' => $email,
            'password' => bcrypt($password),
            'gender' => $gender,
            'birthday' => $birthday,
    		'institution' => $institution,
		]);
		
		$verifyUser = new VerifyUser([
			'user_id' => $user->id,
			'token' => bcrypt($email),
		]);

    	if ($user->save()) {			
			if ($verifyUser->save()) {
				$user->signin = [
					'href' => 'api/v1/user/signin',
					'method' => 'POST',
					'params' => 'email, password'
				];

				$response = [
					'success' => true,
					'message' => 'User Created',
					'data' => $user,
					'verified' => $verifyUser,
				];

				// Mail::to($user->email)->send(new VerifyMail($user));

				return response()->json($response, 201);
			}

			$response = [
				'success' => false,
				'message' => 'Error during creation',
			];
	
			return response()->json($response, 404);
    	}

    	$response = [
    		'success' => false,
    		'message' => 'Error during creation',
    	];

    	return response()->json($response, 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function report()
    {
        //
    }

    public function makeItPrivate()
    {
        //
    }

    public function getAllEvents()
    {
        //
    }

    public function getAllFollowings()
    {
        //
    }

    public function getAllFollowers()
    {
        //
    }

    public function getAllLoves()
    {
        //
    }
}
