@extends('_layouts.master', 
	['page_title' => 'Celebrity Host', 
	'meta_title' => 'The 2021 Safety & Health Excellence Awards MasterOf Ceremonieses - Alan Dedicote', 
	'meta_description' => 'We are delighted to announce that Alan Dedicote will be this year\'s Awards\' Master Of Ceremonies.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Master Of Ceremonies', 'background_image' => 'header-c'])

		{{-- <section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="w-full lg:w-4/5 mx-auto mt-6">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce The ‘Voice of the Balls’ and Radio 2’s Chief Network Announcer Alan Dedicote as Master Of Ceremonies of this year's Awards.</p>
				</div>
				<div class="">
					<p class="mt-4 md:mt-6 md:pr-4 font-semibold">He has been a well known voice across BBC output for over 30 years, and was a regular sidekick to the late Sir Terry Wogan on Radio 2's "Wake Up to Wogan" breakfast programme where he was most commonly known as "Deadly".</p>									
		
					<div class="float-left w-full h-72 md:w-1/3 md:h-56 lg:w-2/5 lg:h-84 mr-8 my-4 host-bio bg-top bg-cover rounded-md overflow-hidden"></div>
			
					<p class="mt-6">
						He was educated at King Edward VI School for Boys in Birmingham, and the University of Birmingham.
					</p>
					<p class="mt-6">
						His radio career took off at BBC Pebble Mill where he worked as a station assistant for BBC Radio Birmingham, and then he spent four more years in Plymouth and Exeter as a producer/presenter for BBC Radio Devon.
					</p>
					<p class="mt-6">
						In 1987 Alan joined the Presentation Department of Radio 2 at Broadcasting House in London, voicing trails and promotions. Since 1995 he has been providing live commentary for the National Lottery draws, while in the US he is the voice-over announcer for ABC's Dancing with the Stars (the US version of Strictly Come Dancing), which he has done since 2005.
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
		</section>	 --}}

		<section class="container mx-auto px-6">  

		<div class="w-full my-6">
			<p class="text-lg md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce that well-known presenter Dara Ó Briain will host this year’s Awards.</p>
		</div>

		<div class="">
			<div class="w-full h-84 mb-6 sm:float-right sm:w-1/2 sm:mb-0 sm:ml-6 md:h-84 lg:h-100 lg:mb-4 xl:w-1/3 host-bio bg-center bg-contain bg-no-repeat"></div>

			<p class="md:pr-4 font-semibold">Dara Ó Briain has earned a reputation as the most versatile of presenters and one of the finest comedians in the business. He is as quick-witted in cabaret as he was playing maestro of Mock the Week, equally at home on the Apollo stage or chatting to physicists and astronauts.</p>
			<p class="mt-4 md:mt-6 md:pr-4">He has sold out shows all over the world, from Melbourne to Shanghai. In his first appearance at the Just for Laughs Festival in Montreal, he made such an impact that space had to be made for him in the gala bill hosted by Joan Rivers.</p>
			<p class="mt-4 md:mt-6 md:pr-4">Dara started his career in television as a children’s presenter on RTÉ whilst performing his first stand-up gigs on the Irish comedy circuit, after studying at University College, Dublin, where he read Mathematical Physics.</p>
			<p class="mt-4 md:mt-6 md:pr-4">His many TV credits range from Stargazing to The Apprentice: You're Fired! He's interviewed Stephen Hawking, fronted revivals of Robot Wars and Blockbusters, enjoyed road trips with Ed Byrne, boating with Rory McGrath and Griff Rhys Jones, and hosted Channel 4’s quiz show One and Six Zero’s.</p>
			<p class="mt-4 md:mt-6 md:pr-4">Dara is also one of the most sought-after award show hosts in Britain, and has regularly hosted the BAFTA Games Awards.</p>
			<p class="mt-4 md:mt-6 md:pr-4">Since writing his bestselling bookTickling the English, Dara has published a string of books designed to engage children in science. His book Beyond the Stars, was nominated for the Blue Peter Book Award for Best Non-Fiction. The follow up Secret Science – The Amazing World Beyond your Eyes, was released to critical acclaim. His third children’s book Is There Anybody Out There? Is an illustrated helpful guide to sort out what is science fiction and what is science fact.</p>

		</div>

		<div class="mx-auto my-12 text-center md:text-center">
			<a href="/sponsors">
				<div class="flex justify-center">
					<div class="w-6">
						<img class="mr-4 h-6 w-6 fill-current text-yellow-500" src="{{ $page->baseUrl }}/assets/images/icons/artist.svg" alt="Icon">
					</div>
					<div class="mt-1 ml-2 font-semibold uppercase">
						Host Sponsor
					</div>	
				</div>
				<img class="mx-auto max-w-xs" src="{{ $page->baseUrl }}/assets/images/layout/safety-rocks-host-sponsor.svg" alt="Safety Rocks">
			</a>
		</div>	 

		<div class="mx-auto my-12 text-center md:text-center">
			<a href="/award-categories" class="btn-primary max-w-sm">
    			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
    				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
    			</svg>
    			Make A Nomination
    		</a>

			<a href="{{ $page->awardsURL }}" target="_blank" class="btn-primary max-w-sm mt-6 sm:mt-0 sm:ml-6">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
					<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
				</svg>
				Book Tickets Now
			</a>
		</div>

	</section>

		@include('_partials.collage')
	</main>

@endsection