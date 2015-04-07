<?php

class UsersController extends BaseController {
	public function getIndex()
	{
		return View::make('users.index');
	}
/////////////////////////////////////////////////////////////

	public function postEmail()
	{
		$rules = [
		'email'=>'required|email',
		];

		$validation = Validator::make(Input::only('email'), $rules);

		if ($validation->fails())
		{
			return Response::json(['멋진 당신의 이메일을 적어주세요.']);
		}
		else
		{
			$check = DB::table('user')->where('email', Input::get('email'))->pluck('email');	

			if ($check == Input::get('email'))
			{
				return Response::json(['사용 불가능한 이메일 입니다.']);
			}
			else
			{
				return Response::json(['사용가능한 이메일 입니다.']);
			}
		}
	}


/////////////////////////////////////////////////////////////

	public function postPass()
	{
		$rules = [
		'password'=>'required|min:1',
		];

		$validation = Validator::make(Input::only('password'), $rules);

		if ($validation->fails())
		{
			return Response::json(['창의적이고 멋진 비밀번호를 입력해주세요!']);
		}
		else
		{
			$memberPw = Input::get('password');

			if (    preg_match('/^[0-9A-Za-z~!@#$%^&*]{8,20}$/', $memberPw)
				 && preg_match('/\d/', $memberPw)
				 && preg_match('/[a-zA-Z]/', $memberPw) )
			{
				return Response::json(['사용 가능한 창의적이고 멋진 비밀번호입니다.']);
			}
			else 
			{
			    return Response::json(['비밀번호는 영문, 숫자 조합의 8자 이상 20자 이하만 가능합니다.']);
			}
		}
	}
///////////////////////////////////////////////////////////////////

	public function postNick()
	{
		$rules = [
		'nick'=>'required|min:2',
		];

		$validation = Validator::make(Input::only('nick'), $rules);

		if ($validation->fails()){
			return Response::json(['당신의 특별한 이름을 적어주세요.']);
		}else{
			$check = DB::table('user')->where('nick', Input::get('nick'))->pluck('nick');	

			if ($check == Input::get('nick'))
			{
				return Response::json(['좀더 특별한 이름을 생각해보세요.']);
			}
			else
			{
				return Response::json(['와 정말 이쁘고 멋진 이름이네요!']);
			}
		}
	}

//////////////////////////////////////////////////////////////////////

	public function postRegister()
	{
		$rules = [
		'email'=>'required|email',
		'password'=>'required|min:8',
		'nick'=>'required|min:2',
		'sex'=>'required'
		];

		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails())
		{
			return Response::json($validation->errors()->toArray());
		}
		else
		{
			DB::table('user')->insert(
				[
				'email' => Input::get('email'),
				'pass'  => sha1( Input::get('password') ),
				'nick'  => $kr_name,
				'sex'   => Input::get('sex')
				]);
			return Response::json(['Registration is complete!']);
		}
	}
}
