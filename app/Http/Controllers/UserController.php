<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "Form page" for the application and
	| is configured to only allow guests
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Load the Json File.
	 *
	 * @return array
	 */
	public function getIndex() {
		$people = json_decode(file_get_contents('simple.json'));
		return view('welcome',array('people'=>$people));
	}

    /**
     * Request Input from Form user.
     *
     * @return array
     */
    public function postIndex(Request $request) {

        $people = $request->input('people');

        foreach (array_chunk($people, 3) as $key => $value):
            $userArr[] = array('id'=> $value[0]['id'], 'firstname'=> $value[1]['firstname'], 'surname'=> $value[2]['surname']);
        endforeach;

        //to write into Json file (simple.json)
        file_put_contents('simple.json', json_encode($userArr));

        return redirect('/');
    }


}
