@extends('template')

@section('content')

		@foreach($posts as $post)
		
<!--
		<?php 
			echo "<pre>";
			print_r($post);
			echo "</pre>";
			?>
-->
		<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#">{{$post->title}}</a></h2>
						<p>{{$post->subtitle}}</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01">{{ date('d/m/y G:i:s',strtotime($post->created_at))}}</time>
						<a href="" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<a href="{{url('posts/'.$post->id)}}" class="image featured"><img src="{{asset('images/'.$post->photo)}}" alt="" /></a>
				<p>{{$post->content}}</p>
				<footer>
					<ul class="actions">
						<li><a href="{{url('posts/'.$post->id)}}" class="button big">Continue Reading</a></li>
					</ul>
				
				</footer>
			</article>
		@endforeach

				
			<!-- Pagination -->
		<ul class="actions pagination">
			<li><a href="" class="disabled button big previous">Previous Page</a></li>
			<li><a href="#" class="button big next">Next Page</a></li>
		</ul>

	

@stop