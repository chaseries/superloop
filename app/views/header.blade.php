@section('header')
	<header class='header'>
		<div class='headerWrap'>

		@if (Auth::check())

		<a href='/superstring'><img src='images/logoHeader.png' class='logoHeader' width='127' height='23' /></a>

<!-- 		<div class='searchWrap'>

			<i class='icon-search'></i>

			{{ Form::open (array(
				'route' => '/search',
				'autocomplete' => 'off'
			)) }}

			<input type='search' placeholder='Search' />

			<button class='searchButton'>
				<i class='icon-play-circle'></i>
			</button>

			{{ Form::close() }}
		</div>
 -->
		<div class='utilities'>
			<div class='name'><a href='/profile'>{{ Auth::user()->fName }}</a></div>

			<div class='profilePicHeaderPlaceholder'>
			</div>

			<div class='action'>
			<a href="#">
				<i class='icon-globe utilitiesIcons'></i>
			</a>
				<ul>
					<li>
						<img src='/images/addFriendIcon.png' />You have 3 new friend requests
					</li>
					<li>
						List item test
					</li>
					<li>
						And one more
					</li>
					<li>
						Block user
					</li>
				</ul>			

			</div>

			<div class='action'>
			<a href="#">
				<i class='icon-cog utilitiesIcons'></i>
			</a>
				<ul>
					<li>
						<img src='/images/addFriendIcon.png' />You have 3 new friend requests
					</li>
					<li>
						List item test
					</li>
					<li>
						And one more
					</li>
					<li>
						Block user
					</li>
				</ul>			

			</div>

			<a href="{{ URL::route('user/logout') }}">
				<i class='icon-off utilitiesIcons'></i>
			</a>
		</div> <!-- utilities -->

			<i class='icon-reorder'></i>

		@else

		<img src='images/logoHeader.png' class='logoHeaderNoAuth' width='127' height='23' />

		<div class='headerLoginWrap'>

			{{ Form::open ([
				'route'        => 'user/login',
				'autocomplete' => 'off'
				]) }}
					{{ Form::text('email', Input::old('email'), [
						'placeholder' => 'Email'
					]) }}

					{{ Form::password('password', [
						'placeholder' => 'Password'
					]) }}

					<!-- {{ Form::submit('') }} -->
					<button type='submit'><i class='icon-play-circle'></i></button>
			{{ Form::close() }}
		</div> <!-- headerLoginWrap -->
		@endif
		</div> <!-- headerWrap -->
	</header>
@show