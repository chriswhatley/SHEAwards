@extends('_layouts.master', 
	['page_title' => 'Register to attend', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.', 
	'meta_description' => 'Join more than 550 of your peers by celebrating excellence at the industry’s biggest networking evening of the year.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Register To Attend', 'background_image' => 'header-d'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-6 mx-auto">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">Register now for to The Safety &amp; Health Excellence Awards.</p>
					<p class="mt-6 md:mt-6">The Safety &amp; Health Excellence Awards will take place on {{ $page->awardsDate }} and will be taking place {{ strtolower($page->awardsLocation) }}.</p>									
				</div>
				<div class="xl:mt-3">
							
					<div class="w-full attendee-tickets bg-top bg-cover rounded-md overflow-hidden h-64 md:h-72 lg:h-84 xl:h-96 mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8"></div>
			
					<p class="mt-6">Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.</p>					
					<p class="mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus quos hic placeat, laborum quod, incidunt consequuntur a quidem fugit doloremque aliquid non, fuga ut reiciendis deleniti blanditiis vitae. Voluptatem!</p>
					<p class="mt-6 font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Repellat accusantium ex voluptates itaque amet dolore suscipit provident neque dolor repudiandae. Vitae nesciunt accusamus, facilis officiis aliquam ipsam alias ducimus, et.</p>
					<p class="mt-6 font-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
					<div class="text-center">
						<a href="{{ $page->awardURL }}" target="_blank" class="btn-primary inline-flex items-center justify-center mt-6 text-md sm:text-sm md:text-md">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
								<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>
							Register Now
						</a>
					</div>

						
				</div>

			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection