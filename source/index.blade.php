@extends('_layouts.master', 
	['page_title' => 'Home', 
	'meta_title' => 'The Safety & Health Excellence Awards 2024', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])


@section('content')

    {{-- Video Background Colour Overlay --}}
    <div class="absolute top-0 left-0 md:h-96 lg:h-160 w-full z-10 highlight-border-bottom" style="background-color:rgba(21,45,59,0.66);"></div>
    
    {{-- Video Background --}}
    <div class="hidden md:block md:h-96 lg:h-160 overflow-hidden z-0">
		<video playsinline="" autoplay="" muted="" loop="" poster="assets/video/she-awards-background-poster-compressed.jpg" class="w-full object-cover">
			<source src="/assets/video/16569476834489.webm" type="video/webm" />
			<source src="/assets/video/16569475346506.mp4" type="video/mp4" />
		</video>
	</div>

    {{-- Hero Image --}}
    <div class="z-20 block w-full h-screen bg-cover bg-top hero md:hidden"></div>
    
    {{-- 'Hero' block content --}}
    <header class="absolute top-0 flex items-center text-center w-full h-full lg:h-160 pt-8 md:pt-10 lg:pt-32 md:h-96 md:items-center z-10">
        <div class="mx-auto leading-tight tracking-tight uppercase font-bold text-white">
            <div class="text-lg sm:text-md lg:text-2xl">Welcome To</div>
            <h1 class="mt-2 px-2 text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                The Safety &amp; Health Excellence Awards
                <span class="block mx-auto mt-2 lg:mt-0 px-4 text-sm lg:text-xl tracking-wide">1<sup class="lg:text-xs">st</sup> May 2024 <span class="hidden sm:inline"> &#8226; </span><br class="block sm:hidden" /> {{ $page->awardsLocation }}</span>
            </h1>           
            <div class="mt-6 sm:mt-8 text-center">
        		<a href="{{ $page->awardsURL }}" target="_blank" rel="noopener" class="btn-primary w-3/4 md:w-1/3  max-w-xs text-md sm:text-sm md:text-md lg:text-lg">
        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        			</svg>
        			Book Your Tickets
        		</a>

        		<a href="{{ $page->nominationURL }}" class="btn-primary w-3/4 md:w-1/3  max-w-xs text-md mt-6 md:mt-0 md:ml-6 sm:text-sm md:text-md lg:text-lg">
        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
        				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
        			</svg>
        			Make A Nomination
        		</a>
        	</div>  
        </div>
    </header>  

    {{-- Main Content --}}
    <main class="relative bg-white w-full z-10">
        
        <section class="container mx-auto py-10 px-6 lg:px-20">
            <div class="text-center">
                <h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">THE SAFETY & HEALTH EXCELLENCE AWARDS</h2>
                <h3 class="text-base lg:text-xl mt-6 font-semibold">
                    Join more than 700 of your peers for a not to be missed evening that celebrates excellence in safety and health!
                </h3>
            </div>

            <div class="md:flex mt-6">
            	<div class="md:w-1/2 md:px-4">
            		The Safety & Health Excellence Awards return for the sixth year running after successfully attracting more than 200 entries and 525 guests in 2023. The Awards celebrate innovation and achievements in the health and safety sector.
            	</div>
            	<div class="md:w-1/2 mt-6 md:mt-0 md:px-4">
            		The ceremony will encompass the long-established British Safety Industry Federation (BSIF) Awards that promote the importance of innovation and underline the highest standards of excellence within occupational safety and health.
            	</div>
            </div>

            <div class="sm:flex justify-center mt-6 text-white">
            	
            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="{{ $page->baseUrl }}/nominate" class="btn-primary w-full text-md sm:text-sm lg:text-lg">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline md:inline w-4 h-4 mr-2">
            				<path d="M15 9a3 3 0 0 0 3-3h2a5 5 0 0 1-5.1 5 5 5 0 0 1-3.9 3.9V17l5 2v1H4v-1l5-2v-2.1A5 5 0 0 1 5.1 11H5a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3V4H2v2H0V2h5V0h10v2h5v4h-2V4h-3v5z"/>
            			</svg>
            			<span class="hidden sm:inline md:hidden">Awards</span>
            			<span class="inline sm:hidden md:inline">Award Categories</span>
            		</a>
            	</div>

            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="{{ $page->nominationURL }}" class="btn-primary w-full mt-2 sm:mt-0 text-md sm:text-sm lg:text-lg">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline md:inline w-4 h-4 mr-2">
            				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
            			</svg>
            			<span class="hidden sm:inline md:hidden">Nominate</span>
            			<span class="inline sm:hidden md:inline">Make A Nomination</span>
            		</a>
            	</div>

            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="{{ $page->baseUrl }}/sponsorship" class="btn-primary w-full mt-2 sm:mt-0 text-md sm:text-sm lg:text-lg">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline md:inline w-4 h-4 mr-2">
            				<path d="M7.667 12H2v8H0V0h12l.333 2H20l-3 6 3 6H8l-.333-2z"/>
            			</svg>
            			Sponsorship
            		</a>
            	</div>

            </div>
        </section>
           
        <section class="w-full bg-yellow-500 text-white stats">
        	<div class="container mx-auto grid grid-cols-2 sm:grid-cols-4 gap-6 py-8 font-bold uppercase">
        		
        		<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">700</h3>
	        		<span class="block text-md md:text-xl">Guests</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">16</h3>
	        		<span class="block text-md md:text-xl">Award<br />Categories</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">8</h3>
	        		<span class="block text-md md:text-xl">Sponsorship<br />Opportunities</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">1</h3>
	        		<span class="block text-md md:text-xl">Celebrity <br />Host</span>
	        	</div>

			</div>        	
        </section>

        
     	<section class="w-full">

			{{-- Small/medium screen host section --}}
			{{-- <div class="flex lg:hidden">
	        	<div class="h-96 md:h-100 w-full md:w-1/2 p-6">
	        		<div class="w-full h-full bg-cover bg-center bg-no-repeat host"></div>
	        	</div>

				<div class="w-full md:w-1/2 px-6 pt-6 pb-8 flex items-center">				
					<div>
						<h3 class="text-md sm:text-2xl font-bold leading-relaxed tracking-tight uppercase">Master Of Ceremonies<br /> Dara Ó Briain</h3>
						<p class="mt-3">We are delighted to announce that well-known presenter Dara Ó Briain will host this year's Awards.</p>        											    		            	

		            	<div class="mt-6 text-center">
		            		<a href="{{ $page->baseUrl }}/host" class="btn-primary w-4/5 max-w-xs">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
		            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
		            			</svg>
		            			Find Out More
		            		</a>
		            	</div>

					</div>
				</div>
			</div> --}}

			<div class="flex lg:hidden">

			<div class="w-full h-120 md:w-1/2 md:h-100 p-6 bg-contain bg-no-repeat bg-white host flex items-center md:flow-root text-right md:text-center relative">
				{{-- <h3 class="sm:hidden absolute right-0 mr-6 mb-6 text-xl sm:text-3xl font-bold leading-normal tracking-tight uppercase">Master Of Ceremonies<br> Dara Ó Briain</h3> --}}
			</div>

			<div class="w-full md:w-1/2 md:flex md:items-center p-6">

				<div class="">
					<div>
						<h3 class="text-xl font-bold leading-normal tracking-tight uppercase">Master Of Ceremonies<br> Dara Ó Briain</h3>
						<p class="md:w-full mt-4">We are delighted to announce that well-known presenter Dara Ó Briain will host this year's Awards.</p>	
					</div>

					<div>
						<a href="/sponsors" class="block pt-4">
							<div class="flex justify-center">
								<div class="w-6">
									<img class="mr-4 h-6 w-6 fill-current text-yellow-500" src="{{ $page->baseUrl }}/assets/images/icons/artist.svg" alt="Icon">
								</div>
								<div class="mt-1 ml-2 font-semibold uppercase">
									Host Sponsor
								</div>
							</div>
							<img class="mx-auto w-3/5 max-w-xs md:w-1/3 mt-6 md:mt-0" src="{{ $page->baseUrl }}/assets/images/layout/safety-rocks-host-sponsor.svg" alt="Safety Rocks">
						</a>

						<div class="mt-6 text-center">
							<a href="/host" class="btn-primary w-4/5 max-w-xs">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
									<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"></path>
								</svg>
								Find Out More
							</a>
						</div>
					</div>

				</div>

			</div>

		</div>
        				
			<div class="lg:flex">

				{{-- Large screen host section --}}		 
	        	<div class="hidden lg:flex lg:w-1/2 items-end mt-6 pb-10 bg-no-repeat bg-cover bg-top host">
				<div class="px-10 w-full">

					<div class="lg:w-1/2 float-right">
						<h3 class="lg:text-2xl xl:hidden font-bold leading-tight tracking-tight uppercase"><span class="block text-base font-semibold">Master Of Ceremonies</span> Dara Ó Briain</h3>

						<div class="lg:mt-3">
							<h3 class="hidden xl:block xl:text-2xl font-bold leading-tight tracking-tight uppercase">Master Of Ceremonies<br> Dara Ó Briain</h3>
							<p class="mt-3">We are delighted to announce that well-known presenter Dara Ó Briain will host this year’s Awards.</p>
						</div>

						<div class="w-full">
							<div class="flex justify-center">
								<a href="/sponsors" class="pt-4">
									<div class="mx-auto w-6">
										<img class="mr-4 h-6 w-6 fill-current" src="{{ $page->baseUrl }}/assets/images/icons/artist.svg" alt="Icon">
									</div>
									<div class="mt-1 ml-2 font-semibold uppercase">
										Host Sponsor
									</div>
								</a>
							</div>
							
							<img class="mx-auto lg:w-32 xl:w-56" src="{{ $page->baseUrl }}/assets/images/layout/safety-rocks-host-sponsor.svg" alt="Safety Rocks">

							<div class="hidden xl:block text-center">
								<a href="/host" class="btn-primary mt-8 xl:w-3/5 max-w-xs">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
										<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"></path>
									</svg>
									Find out more
								</a>
							</div>

						</div>

					</div>

					<div class="text-center xl:hidden">
						<a href="/host" class="btn-primary mt-6 lg:w-4/5 xl:w-1/3 max-w-xs">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
								<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"></path>
							</svg>
							Find out more
						</a>
					</div>
				</div>
			</div>
			
				<div class="lg:flex lg:w-1/2">
					<div class="w-full bg-gray-800">
						{{-- Gallery --}}
						<div class="px-6 py-16 ">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">SHE Awards Gallery</h3>
			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/gallery" class="btn-primary w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
			            			</svg>
			            			View Gallery
			            		</a>
			            	</div>					
						</div>        		

		        		<div class="w-full flex h-56">
		        			<div class="w-1/2 sm:w-1/3 h-auto gallery-tile-a"></div>
		        			<div class="hidden sm:block sm:w-1/3 h-auto gallery-tile-b"></div>
		        			<div class="w-1/2 sm:w-1/3 h-auto gallery-tile-c"></div>
		        		</div>        		
		        	</div>
				</div>

			</div>
      				
			<div class="md:flex">
				<div class="md:flex md:w-1/2">
					<div class="w-full">
						{{-- Awards Categories --}}
						<div class="px-6 py-16 bg-gray-800">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">Don't Miss Out!</h3>				    	   	
							<div class="mt-3 text-center">
								<p class="text-white">Join more than 700 of your peers for a not to be missed evening that celebrates excellence in safety and health.</p>
							</div>
							
			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/nominate" class="btn-primary w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
			            			</svg>
			            			Book Your Tickets
			            		</a>
			            	</div>				
						</div>        		
			
						{{-- Sponsorship --}}
		        		<div class="px-6 py-16 bg-yellow-500">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">SHE Awards Sponsorship</h3>
		            		<div class="mt-3 text-center">
								<p class="text-white">Associate your brand with excellence and reach thousands of industry professionals before, during and after the event.</p>
							</div>

			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/sponsorship" class="btn-primary bg-gray-800 w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M7.667 12H2v8H0V0h12l.333 2H20l-3 6 3 6H8l-.333-2z"/>
			            			</svg>
			            			<span class="hidden sm:inline-block">View</span> Sponsorship Packages
			            		</a>
			            	</div>
						</div>          		
		        	</div>
				</div>

				{{-- Charity Partner --}}
				<div class="w-full md:w-1/2 items-center">			
	        		<div class="py-12 md:py-6 lg:pt-12 px-6 lg:px-12 w-full">        			        			
	        			<div class="sm:flex"> 
	        				<div class="sm:w-2/3 xl:pt-5">
	        					<h3 class="text-center sm:text-left lg:text-2xl font-bold leading-tight tracking-tight uppercase">Charity Partner</h3>
	        					<p class="mt-6 md:mt-4 lg:mt-6 sm:pr-4 md:pr-6">We are delighted to announce that the Lighthouse Construction Industry Charity this year's SHE Awards charity partner.</p>	
	        				</div>	    
	        				<img src="{{ $page->baseUrl }}/assets/images/layout/lighthouse-charity.svg" alt="The Lighthouse Club" class="my-6 sm:my-0 mx-auto w-40 md:w-32 xl:w-48 h-auto">
	        			</div>
		        		<p class="mt-6 sm:mt-4 lg:mt-6">The Lighthouse Club is the only charity that provides financial and emotional support to the construction community and their families who have suffered an injury, illness or just need some extra support.</p>        		
		        		<div class="mt-10 sm:mt-6 lg:mt-10 text-center">
		            		<a href="{{ $page->baseUrl }}/charity" class="btn-primary w-4/5 max-w-xs">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
		            				<path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/>
		            			</svg>
		            			Find Out More
		            		</a>
		            	</div>
	        		</div>        	
	        	</div>    	

			</div>          	  
       	</section>

		{{-- Video --}}
		<section x-data="{ open: false }" x-init="$watch('open', value => stopVideo())" class="bg-cover bg-top overflow-hidden highlights-video highlight-border-bottom">

			@include('_components/modal', ['videoID' => 'btY0gIzLk4I'])
	        
			<div class="container mx-auto px-6 py-24 text-white text-center max-w-screen-md">
				<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">
	                DON’T MISS OUT ON THE INDUSTRY’S MUST ATTEND EVENT OF THE YEAR
				</h2>
	            <p class="text-base lg:text-xl mt-6 font-semibold">
					The Safety & Health Excellence Awards evening will attract more than 700 guests from the health, safety and fire sectors. You will be treated to a VIP reception, sumptuous three course meal and table wine, live magic acts, entertainment, live music and dancefloor.
	            </p>

	            {{-- Small screeen point user to YouTube directly --}}
	            <div class="md:hidden mt-10 text-center">
	        		<a href="https://www.youtube.com/watch?v=58nrVWRAZ-A&feature=emb_title" target="_blank" rel="noopener" class="btn-primary w-4/5 max-w-xs">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
	        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
	        			</svg>
	        			Awards Highlights
	        		</a>
	        	</div>

	        	{{-- Tablet or larger screen, embed YouTube vid in modal --}} 
	        	<div class="hidden md:block mt-12 text-center">
	        		<button @click="open = true" class="btn-primary w-4/5 max-w-xs">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
	        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
	        			</svg>
	        			Awards Highlights
	        		</button>
	        	</div>      			
			</div>
		</section>        
      
  		{{-- Sponsors Carousel --}}
        <div class="hidden md:flex items-center justify-center bg-white">
			@include('_partials/sponsor-carousel')
        </div>

    
        {{-- Organiser By --}}
        <section class="mx-auto pt-8 px-6 lg:px-20 bg-gray-200">
            <div class="text-center">
                <h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Brought To You By</h2>                
                <div class="py-6 flex">
                	<div class="px-3 w-1/2 md:w-1/3 md:ml-auto flex justify-center">
                		<img class="h-24 md:h-40" src="assets/images/organisers/western-business-media.svg" alt="Western Business Media">
                	</div>
                	<div class="px-3 w-1/2 md:w-1/3 md:mr-auto flex justify-center">
                		<img class="h-24 md:h-40" src="assets/images/organisers/hsm.svg" alt="Health & Safety Matters">
                	</div>
                	{{-- <div class="px-3 w-1/3 flex justify-center">
                		<img class="h-24 md:h-40" src="assets/images/organisers/fsm.svg" alt="Fire Safety Matters">
                	</div> --}}
                </div>
            </div>
        </section>
     
    </main>

@endsection
