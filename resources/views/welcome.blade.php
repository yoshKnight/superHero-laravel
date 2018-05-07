
@extends('app')
@section('content')
<div class="container">
	<div class="content">
		<div class="title">Superheros Database</div>
		<!-- <div class="quote">{{ Inspiring::quote() }}</div> -->
		<div class="sections">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/superheros') }}">List</a></li>
				<li><a href="{{ url('/superheros/create') }}">Create</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
			</ul>
		</div>
	</div>
</div>
@endsection
