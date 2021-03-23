@extends('_layouts.master', 
	['page_title' => 'Make A nomination', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.', 
	'meta_description' => 'Join more than 550 of your peers by celebrating excellence at the industry’s biggest networking evening of the year.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Make A Nomination', 'background_image' => 'header-a'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-6 mx-auto">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">Submit a nomination for this year's Safety &amp; Health Excellence Awards.</p>
					<p class="mt-6 font-semibold">Please make sure you have properly read the categories and criteria before entering. The criteria is different for each category and you are able to enter multiple categories. You can also enter more than once in each category, provided they are different entries.</p>									
					<p class="mt-6 text-center font-bold text-xl">DEADLINE FOR ENTRIES: {{ $page->nominationDeadline }}</p>
				</div>
				<div class="xl:mt-3">
					<div class="w-full attendee-tickets bg-top bg-cover rounded-md overflow-hidden h-64 md:h-72 lg:h-84 xl:h-96 mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8"></div>
					<p class="mt-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id itaque vitae molestiae iusto voluptatum incidunt reprehenderit quia culpa ipsa maiores, iure cum deserunt voluptatem quos nam, sunt, quidem reiciendis voluptatibus.</p>					
					<p class="mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus quos hic placeat, laborum quod, incidunt consequuntur a quidem fugit doloremque aliquid non, fuga ut reiciendis deleniti blanditiis vitae. Voluptatem!</p>
					<p class="mt-6 font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Repellat accusantium ex voluptates itaque amet dolore suscipit provident neque dolor repudiandae. Vitae nesciunt accusamus, facilis officiis aliquam ipsam alias ducimus, et.</p>
				</div>

			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection