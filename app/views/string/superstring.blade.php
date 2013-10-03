@extends('layout')
@section('content')

	<div class='coverPhoto'>
	</div>

	<div class="contentWrap">

	<div class='titleString'>
		
		<h2>Superstring</h2>

		<div class='basicActions dropdown'>
			<ul>
				<li>
					<img src='/images/cogIcon.png' />
					View Actions
				</li>

				<li>
					<ul>
						<li>
							Submit a story
						</li>
						<li>
							This is a test
						</li>
						<li>
							For list-type thingies
						</li>
						<li>
							View all strings
						</li>
					</ul>

				</li>
			</ul>

		</div> <!-- basicActions -->

	</div>

	<div id='addStory'>
	</div>

	<div class='storySortActions'>
		<ul>
			<li>
				CURRENT
			</li>
			<li>
				TOP
			</li>
			<li>
				RISING
			</li>
			<li>
				NEW
			</li>
		</ul>
	</div>

	<div class='story'>

		<div class='votingWrap'>
			<div class='upvote'>
			</div>

			<span>
				3423
			</span>

			<div class='downvote'>
			</div>
		</div> <!-- votingWrap -->

		<div class='imageWrap'>
			<img src='images/5cmpers.jpg'>
		</div>

		<div class='infoWrap'>
			<h3>
				<a href='#'>an adversary with the resources of the NSA? </a>
			</h3>
			<h4 class='byline'>
			Posted by <a href="#">George Stephanopolous</a> to <a href="#">Technology</a> at 3:33 am.
			</h4>
		</div> <!-- infoWrap -->

	</div> <!-- story -->

	<div class='story'>
		<div class='votingWrap'>
			<div class='upvote'>
			</div>

			<span>
				3423
			</span>

			<div class='downvote'>
			</div>
		</div> <!-- votingWrap -->

		<div class='infoWrap'>
			<h3>
				<a href='#'>Facebook makes people unhappy and lonely, while your mom does the opposite</a>
			</h3>
			<h4 class='byline'>
				Posted by <a href="#">George Stephanopolous</a> to <a href="#">Technology</a> at 3:33 am.
			</h4>
		</div> <!-- infoWrap -->

	</div> <!-- story -->

	<div class='story'>

		<div class='votingWrap'>
			<div class='upvote'>
			</div>

			<span>
				3423
			</span>

			<div class='downvote'>
			</div>
		</div> <!-- votingWrap -->

		<div class='imageWrap'>
			<img src='images/5cmpers.jpg'>
		</div>

		<div class='infoWrap'>
			<h3>
				<a href='#'>My uncle runs an applesauce factory and constantly sends me packs of a huauce factory and constantly sends me packs of a huauce factory and constantly sends me packs of a huauce factory and constantly sends me packs of a hundred. Needless to say, I've become addicted.</a>
			</h3>
			<h4 class='byline'>
			Posted by <a href="#">George Stephanopolous</a> to <a href="#">Technology</a> at 3:33 am.
			</h4>
		</div> <!-- infoWrap -->

	</div> <!-- story -->

	</div>
@stop