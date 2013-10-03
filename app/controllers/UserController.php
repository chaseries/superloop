<?php

use Illuminate\Support\MessageBag;

class UserController extends Controller
{
	public function loginAction()
	{
		$errors = new MessageBag();

		if ($old = Input::old('errors')) {
			$errors = $old;
		}

		$data = array('errors' => $errors);

		if (Input::server('REQUEST_METHOD') == "POST") {
			$validator = Validator::make(Input::all(), array(
				'email'    => 'required',
				'password' => 'required'
				));

			if ($validator->passes()) {
				$credentials = array(
					'email'    => Input::get('email'),
					'password' => Input::get('password')
				);

				if (Auth::attempt($credentials)) {
					return Redirect::route('/profile');
				}
			}

			$data['errors'] = new MessageBag(array(
				'passwords' => array(
					'Email address and/or password invalid.'
				)));

			$data['email'] = Input::get('email');

			return Redirect::route('/')->withInput($data);
		}

		return View::make('/', $data);
	}

	public function requestAction()
	{
		$data = array(
			'requested' => Input::old('requested')
		);

		if (Input::server('REQUEST_METHOD') == 'POST') {
			$validator = Validator::make(Input::all(), array(
				'email' => 'required'
			));

			if ($validator->passes()) {
				$credentials = array(
					'email' => Input::get('email')
				);

				Password::remind($credentials,
					function($message, $user)
					{
						$message->from('chase@example.com');
					}
				);

				$data['requested'] = true;

				return Redirect::route('user/request')->withInput($data);
			}
		}

		return View::make('request', $data);
	}

	public function resetAction()
	{
		$token = '?token=' . Input::get('token');

		$errors = new MessageBag();

		if ($old = Input::old('errors')) {
			$errors = $old;
		}

		$data = array(
			'tokens' => $token,
			'errors' => $errors
		);

		if (Input::server('REQUEST_METHOD') == 'POST') {
			$validator = Validator::make(Input::all(), array(
				'email'                 => 'required|email',
				'password'              => 'required|min:6',
				'password_confirmation' => 'same:password',
				'token'                 => 'exists:token, token'
			));

			if ($validator->passes()) {
				$credentials = array(
					'email' => Input::get('email')
				);

				Password::reset($credentials, function($user, $password)
				{
					$user->password = Hash::make($password);
					$user->save();

					Auth::login($user);

					return Redirect::route('/profile');
				});
			}

			$data['email'] = Input::get('email');
			$data['errors'] = $validator->errors();

			return Redirect::to(URL::route('user/reset') . $token)
				->withInput($data);
		}
		return Redirect::to(URL::route('user/reset') . $token)
			->withInput($data);
	}

	public function profileAction()
	{
		return View::make('user/profile');
	}

	public function aboutAction()
	{
		return View::make('user/about');
	}

	public function genderAction()
	{
		DB::table('users')
		->where('id', Auth::user()->id)
		->update(array(
			'gender' => $_POST['gender']
		));

		return Redirect::route('/about');
	}

	public function relationshipAction()
	{
		DB::table('users')
			->where('id', Auth::user()->id)
			->update(array(
			'relationshipStatus' => $_POST['relationshipStatus']
		));

		return Redirect::route('/about');
	}

	public function educationAction()
	{
		DB::table('users')
		->where('id', Auth::user()->id)
		->update(array(
			'educationInstitution' => $_POST['educationInstitution'],
			'educationYear' => $_POST['educationYear'],
			'educationSubject' => $_POST['educationSubject']
		));

		return Redirect::route('/about');
	}

	public function workplaceAction()
	{
		DB::table('users')
		->where('id', Auth::user()->id)
		->update(array(
			'workplace' => $_POST['workplace']
		));

		return Redirect::route('/about');
	}

	public function aboutGeneralAction()
	{
		DB::table('users')
		->where('id', Auth::user()->id)
		->update(array(
			'aboutGeneral' => $_POST['aboutGeneral']
		));

		return Redirect::route('/about');
	}

	public function aboutQuotesAction()
	{
		DB::table('users')
		->where('id', Auth::user()->id)
		->update(array(
			'aboutQuotes' => $_POST['aboutQuotes']
		));

		return Redirect::route('/about');
	}

	public function superstringAction()
	{
		return View::make('string/superstring');
	}

	public function logoutAction()
	{
		Auth::logout();
		return Redirect::route('/');
	}

	public function signupAction()
	{

		$validator = Validator::make(Input::all(), array(
			'fName'       => 'required|min:2',
			'sName'       => 'required|min:2',
			'email'       => 'required|email|unique:users',
			'password'    => 'required|min:6',
			'day'         => 'required',
			'month'       => 'required',
			'year'        => 'required',
			'gender'      => 'required'
		), array(
			'fName.required'    => 'Hey, you forgot to tell me your first name!',
			'fName.min'         => 'Please use your full first name.',
			'sName.required'    => 'Hey, you forgot to tell me your last name!',
			'sName.min'         => 'Please use your full last name.',
			'email.required'    => 'Hey, you forgot to tell me your email address!',
			'email.unique'      => 'That email address has already been taken.',
			'email.email'       => 'Please enter a valid email address',
			'password.required' => 'Hey, you forgot to tell me your password!',
			'day.required'      => 'Why day were you born?',
			'month.required'    => 'What month were you born?',
			'year.required'     => 'What year were you born?',
			'gender.required'   => 'Hey, you forgot to tell me if you\'re male or female!'
		));

		if( $validator->passes() ) {

				DB::table('users')->insert(array(
					'fName'      => $_POST['fName'],
					'sName'      => $_POST['sName'],
					'email'      => $_POST['email'],
					'password'   => Hash::make($_POST['password']),
					'day'        => $_POST['day'],
					'month'      => $_POST['month'],
					'year'       => $_POST['year'],
					'gender'     => $_POST['gender']
				));

				$credentials = array(
					'email' => $_POST['email'],
					'password' => $_POST['password']
				);

				if (Auth::attempt($credentials)) {
					return Redirect::route('/profile');
				}

		} elseif( $validator->fails() ) {

			return Redirect::to(URL::route('/'))->withErrors($validator);
		}

		return Redirect::to(URL::route('/'));
	}
}