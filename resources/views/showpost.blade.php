@extends('template')

@section('content')

<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{$post->title}}</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="{{asset('images/'.$post->photo)}}" alt="" /></a>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>

								<h2>Comments</h2>
								<br>

								<section>
									<h3>john</h3>
									<p>fjksdhfjkseghjfgwejkfjebfjwejfvwejhb</p>
								</section>

								<br>
								<section>
									<h3>james</h3>
									<p>erfewrewrwehsdkjfbjkbf</p>
									<a href="#">Edit</a>&nbsp;
									<a href="#">Delete</a>
								</section>

								
								<br>
								<form>
									<label>Comment</label>
									<textarea></textarea>
									<input type="submit" value="Post">
								</form>



					
							</article>
		
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

	

@stop