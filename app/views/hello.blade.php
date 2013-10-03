@extends('layout')
@section('content')

<section class='contentSignUp'>
<div class='wrapSignUp'>
{{ Form::open (array(
	'route'        => 'user/signup',
	'autocomplete' => 'off'
)) }}
	{{ Form::text('fName', Input::old('fName'), array(
		'placeholder' => 'First name'
	)) }}
	{{ Form::text('sName', Input::old('sName'), array(
		'placeholder' => 'Last name'
	)) }}
	{{ Form::text('email', Input::old('email'), array(
		'placeholder' => 'Email'
	)) }}
	{{ Form::password('password', array(
		'placeholder' => 'Password'
	)) }}
	<br />
	<span class="contentSignUpNabla">&#9661;</span>
	{{ Form::select('day', array(
		'null' => 'Day',
		1  => 1,
		2  => 2,
		3  => 3,
		4  => 4,
		5  => 5,
		6  => 6,
		7  => 7,
		8  => 8,
		9  => 9,
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13,
		14 => 14,
		15 => 15,
		16 => 16,
		17 => 17,
		18 => 18,
		19 => 19,
		20 => 20,
		21 => 21,
		22 => 22,
		23 => 23,
		24 => 24,
		25 => 25,
		26 => 26,
		27 => 27,
		28 => 28,
		29 => 29,
		30 => 30,
		31 => 31
	), 'null') }}
	<span class="contentSignUpNabla">&#9661;</span>
	{{ Form::select('month', array(
		'null'      => 'Month',
		'january'   => 'January',
		'february'  => 'February',
		'march'     => 'March',
		'april'     => 'April',
		'may'       => 'May',
		'june'      => 'June',
		'july'      => 'July',
		'august'    => 'August',
		'september' => 'September',
		'october'   => 'October',
		'november'  => 'November',
		'december'  => 'December'
	), 'null') }}
	<span class="contentSignUpNabla">&#9661;</span>
	{{ Form::select('year', array(
		'null' => 'Year',
		1990   => 1990,
		1991   => 1991,
		1992   => 1992,
		1993   => 1993
	), 'null') }}
	<br />
	<div class='contentSignUpGenderWrap'>
		<label for='male'>Male&nbsp;</label>
		<input type='radio' name='gender' value='male' id='male' />
	</div>
	<div class='contentSignUpGenderWrap'>
		<label for='female'>Female&nbsp;</label>
		<input type='radio' name='gender' value='female' id='female' />
	</div>

	@if ( $errors = $errors->all() )
		<div class='error'>
		@foreach( $errors as $error )
			{{ $error . '<br />' }}
		@endforeach
		</div>
	@endif



	{{ Form::submit('Sign up') }}
{{ Form::close() }}

</div>
</section>

@stop