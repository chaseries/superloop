@extends('layout')
@section('content')

	<div class='coverPhoto'>
	</div>

	<div class="contentWrap">

	<div class='namePlateProfile'>
		<h2>{{ Auth::user()->fName . ' ' . Auth::user()->sName }}</h2>
	</div>

	<div class='basicInfoWrapProfile'>
		<div class='defaultPicProfile'>
			<img src='images/lion.jpg' class='defaultPicProfile'>
		</div>



		<div class='basicActions'>
			
			<div class='action'>	
				<img src='/images/addFriendIcon.png' />
				<span>Add Friend</span>
			</div>

			<div class='action'>
				<img src='/images/cogIcon.png' />
				<span>View Actions</span>
				<ul>
					<li>
						Send message
					</li>
					<li>
						Block user
					</li>
				</ul>

			</div> <!-- action -->
		</div> <!-- basicActions -->
	</div> <!-- basicInfoWrapProfile -->

	<aside class='aboutProfile'>
		<i class='icon-pencil'></i>
		<h3>About {{ Auth::user()->fName }}</h3>
		<p>
			{{ Auth::user()->aboutGeneral }}
		</p>

		<h3>Favorite Quotes</h3>

		<p>
			<pre>{{ Auth::user()->aboutQuotes }}</pre>
		</p>

		<a href='/about'>
		<div>
			<span>View More</span><i class='icon-caret-right'></i>
		</div>
		</a>
	</aside>

	<div class='friendsProfile'>
		<img src='images/friends.jpg' class='friendsProfile'>
		<div class='friendsOverlayProfile'>
			<span>View all friends</span>
		</div>
	</div>

	<div class='photosProfile'>
		<img src='images/photos.jpg' class='photosProfile'>
		<div class='photosOverlayProfile'>
			<span>View all photos</span>
		</div>
	</div>

	<div class='mapProfile'>
		<ul>
			<li>
				{{ Auth::user()->workplace }}
			</li>
			<li>
				{{ Auth::user()->city }}, {{ Auth::user()->province }}
			</li>
			<li>
				{{ Auth::user()->country }}
			</li>
		</ul>
		<i class='icon-map-marker'></i>
	<img src="http://maps.googleapis.com/maps/api/staticmap?center=-15.800513,-47.91378&zoom=11&size=600x90&sensor=false">

	</div>

	<div class='wallProfile'>
		<div class='timelineStructure'>
		</div>

		<div class='commentProfile'>
			<textarea placeholder="Say something"></textarea>

			<img src='/images/attachmentIconPicture.png'>
			<img src='/images/attachmentIconVideo.png' id='attachmentIconVideo'>
			
			<button type='submit'>POST</button>
		</div>
	</div>

	</div>
<script>
$(document).ready(function()
{
	$('html').css('background-color', '#f9f9f9');
});

</script>
@stop