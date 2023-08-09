@extends('layouts.app')

@section('content')

<h1>Blog Posts</h1>

<a href="/lsapp/public/myposts/create" class="btn btn-primary">
    Create Post
</a>
		<header class="blog-header lh-1 py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<a class="btn btn-success" id="subscribeLink" >Subscribe</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
                    <div class="search-container">
                        <input type="text" class="search-input" id="searchInput" placeholder="Search">
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <path d="M22.21 20.79l-5.36-5.36C17.42 13.55 18 11.85 18 10c0-4.41-3.59-8-8-8S2 5.59 2 10s3.59 8 8 8c1.85 0 3.55-.58 5.01-1.57l5.36 5.36L22.21 20.79zM10 18C5.59 18 2 14.41 2 10S5.59 2 10 2s8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                        </svg>
                      </div>
				</div>
			</div>
		</header>
<div id="contentu">
		<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 btn btn-primary" href="#world">World</a>
				<a class="p-2 btn btn-primary" href="#us">U.S.</a>
				<a class="p-2 btn btn-primary" href="#tech">Technology</a>
				<a class="p-2 btn btn-primary" href="#design">Design</a>
				<a class="p-2 btn btn-primary" href="#culture">Culture</a>
				<a class="p-2 btn btn-primary" href="#business">Business</a>
				<a class="p-2 btn btn-primary" href="#politics">Politics</a>
				<a class="p-2 btn btn-primary" href="#opinion">Opinion</a>
				<a class="p-2 btn btn-primary" href="#science">Science</a>
				<a class="p-2 btn btn-primary" href="#health">Health</a>
				<a class="p-2 btn btn-primary" href="#style">Style</a>
				<a class="p-2 btn btn-primary" href="#travel">Travel</a>
			</nav>
		</div>
<br/><br/>

	<main class="container">

		<div class="row mb-2">

               @if(count($myposts) > 0)
                    @foreach($myposts as $post)
			<div class="col-md-6">
				<div
					class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-primary" id="world">World</strong>
                        <h3 class="mb-0"> {{$post->title}} </h3>
						<div class="mb-1 text-muted"> Written at {{$post->created_at}} by {{$post->user->name}}. </div>
						<p class="card-text mb-auto">
                            {{$post->description}}
                        </p>
						<a style="text-decoration: none;" href="/lsapp/public/myposts/{{$post->id}}">Continue reading</a>
					</div>

                    <div class="col-auto d-none d-lg-block">
                        <img src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"
                         alt="Thumbnail" width="200" height="250" class="bd-placeholder-img">
                    </div>

				</div>
			</div>

                           @endforeach

                    {{$myposts->links()}}
                    @else
                    No Posts found.
                    @endif
		</div>

		<div class="row g-5">
			<div class="col-md-8">
				<h3 class="pb-4 mb-4 fst-italic border-bottom">
					From the Firehose
				</h3>

				<article class="blog-post" id="science">
					<h2 class="blog-post-title mb-1">Lizards</h2>
					<p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

					<p>Ever heard of these tiny creates? Let's talk a little about them.</p>
					<hr>
					<p>Lizards can be best described as a diverse group of reptiles known for
                        their scaly bodies, clawed feet, and ability to adapt to various habitats. With their
                        elongated bodies and tails, lizards exhibit remarkable agility and are skilled climbers, runners,
                        and swimmers. They are known for their diverse range of sizes,
                        colors, and patterns, captivating observers with their fascinating behavior and unique characteristics.</p>


					<h2>Chameleons.</h2>
					<p>What about chameleons? The most feared creatures around East African Countries?</p>
					<h3>Something about them.</h3>
					<p>Chameleons can be best described as remarkable reptiles known for their unique ability
                        to change color. With their independently rotating eyes, zygodactyl feet, and prehensile tail,
                         chameleons are expert climbers and possess excellent camouflage skills.
                         They are primarily arboreal creatures, found in a variety of habitats,
                         and are known for their elongated bodies, distinctive crests or casques,
                          and remarkable tongue projection to capture prey with precision.</p>


				</article>

				<article class="blog-post" id="travel">
					<h2 class="blog-post-title mb-1">Sport Bikes.</h2>
					<p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

					<p>Let's talk about Sportbikes.</p>

					<p>
                        Sportbikes, also known as superbikes, are high-performance motorcycles designed for speed,
                         agility, and thrilling riding experiences. With their aerodynamic fairings, aggressive
                          riding positions, and powerful engines, sportbikes offer exceptional acceleration and top speeds,
                           making them ideal for racing and spirited riding on paved roads. They often feature advanced suspension systems, responsive braking,
                        and cutting-edge technology, providing riders with precise control and exhilarating performance on both the track and the street.
                    </p>

				</article>

				<article class="blog-post" id="tech">
					<h2 class="blog-post-title mb-1">Artificial Intelligence.</h2>
					<p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

					<p>What do you understand by Artificial Intelligence.</p>

					<p>Artificial Intelligence (AI) refers to the simulation of human intelligence in machines that are programmed
                         to perform tasks with a level of autonomy. It encompasses various techniques and approaches that enable
                          computers to perceive, reason, learn, and make decisions similar to humans. AI applications range
                           from voice assistants and recommendation systems to complex problem-solving,
                        image recognition, and autonomous vehicles, with the goal of augmenting human capabilities and improving efficiency in various domains.</p>
				</article>



			</div>

			<div class="col-md-4">
				<div class="position-sticky" style="top: 2rem;">
					<div class="p-4">
						<h4 class="fst-italic">Elsewhere</h4>
						<ol class="list-unstyled">
							<li><a href="https://github.com/gachirimwangi">GitHub</a></li>
							<li><a href="https://twitter.com/gdaniels_ke">Twitter</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100021556124106" target="">Facebook</a></li>
						</ol>
					</div>
				</div>
			</div>


	</main>
</div>
	<footer class="blog-footer">

			<a href="#">Back to top</a>
		</p>
	</footer>



@endsection


<!--
To display the image.
   <div class="col-md-4 col-sm-4">
            <img style="width: 100%;" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"
        </div>
-->
