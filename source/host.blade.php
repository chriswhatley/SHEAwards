@extends('_layouts.master', 
	['page_title' => 'Celebrity Host', 
	'meta_title' => 'The 2021 Safety & Health Excellence Awards MasterOf Ceremonieses - Alan Dedicote', 
	'meta_description' => 'We are delighted to announce that Alan Dedicote will be this year\'s Awards\' Master Of Ceremonies.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Master Of Ceremonies', 'background_image' => 'header-c'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="w-full lg:w-4/5 mx-auto mt-6">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce The ‘Voice of the Balls’ and Radio 2’s Chief Network Announcer Alan Dedicote as Master Of Ceremonies of this year's Awards.</p>
				</div>
				<div class="">
					<p class="mt-4 md:mt-6 md:pr-4 font-semibold">The ‘Voice of the Balls’ and Radio 2’s Chief Network Announcer also presides over Strictly Come Dancing. Deadly Alancoat regales audiences with a stream of quips, out-takes and tips on how to maximise your chances in the National Lottery. And he’s a polished corporate quizmaster.</p>									
		
					<div class="float-left w-full h-72 md:w-1/3 md:h-56 lg:w-2/5 lg:h-84 mr-8 my-4 host-bio bg-top bg-cover rounded-md overflow-hidden"></div>
			
					<p class="mt-6">
						Alan Dedicoat became known to millions of viewers as 'The Voice of the Balls', providing instant commentary for the National Lottery Draw for over 20 years. He is also the voice of Strictly Come Dancing, and its US sister show Dancing with the Stars, and became a popular part of breakfast across the country as foil to Terry Wogan's banter on his Radio 2 show.
					</p>
					<p class="mt-6">
						Alan originally trained to be a lawyer but was seduced by hospital radio into a career in broadcast sing. Several years on local stations were followed by a move to London and Radio 2, eventually becoming the network's Chief Announcer where he spent almost 30 years.
					</p>
					<p class="mt-6">
						As well as live voice overs and speaking after dinner, Alan is a natural quizmaster. With a stream of quips, he maintains perfect order as he tests teams on everything from classic pop hits, national flags to company logos and even knowledge of their own industry.
					</p>

					<div class="mt-6 text-center md:text-center">
						<div class="w-full md:inline-flex md:w-2/5 xl:w-1/4">
			        		<a href="/nominate" class="btn-primary w-4/5 max-w-xs">
			        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			        				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
			        			</svg>
			        			Make A Nomination
			        		</a>
			        	</div>

			        	<div class="w-full mt-4 md:inline-flex md:mt-0 md:w-2/5 xl:w-1/4">
			        		<a href="{{ $page->awardsURL }}" target="_blank" rel="noopener" class="btn-primary w-4/5 max-w-xs">
			        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
			        			</svg>
			        			Register To Attend
			        		</a>
			        	</div>
					</div>
		            
										
				</div>				
			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection