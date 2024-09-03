@extends('_layouts.master', 
	['page_title' => 'SHE Awards Gallery', 
	'meta_title' => 'SHE Awards Gallery', 
	'meta_description' => 'Highlights from the 2019 Safety & Health Excellence Awards, held at the Vox, Resorts World, Birmingham'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Gallery', 'background_image' => 'header-d'])

		<section class="container mx-auto px-6">  
			
			<div class="text-lg mt-6 flex flex-wrap items-center">
				<div class="w-full md:w-3/5">
					<p class="md:text-xl font-semibold">Highlights from the 2022 Safety &amp; Health Excellence Awards, held at the Vox, Resorts World, Birmingham.</p>
					<p class="mt-6">For the complete set of images from the Havi Photobooth, <a href="https://www.simplebooth.com/gallery/oRWn4WjACc48-she-awards-06-04-2022" target="_blank" rel="noopener" class="font-bold text-yellow-500">please click here</a>.</p>
				</div>
			 
				<div class="w-full md:w-2/5 mt-2 md:mt-0 text-center">
					<span class="text-base">Sponsored by</span>
					<div class="w-full flex justify-center">
						<img src="https://she-awards.com/uploads/sheawards/awards/sponsors/carousel/havi.svg" alt="Havi" class="w-full sm:w-96 h-auto">	
					</div>
				</div>	
			</div>	

		    <div class="grid grid-cols-3 gap-4">
		    	@for( $i = 1; $i <= 50; $i++ )
		    		<img alt='SHE Awards 2022: Photo {{$i}}' class='rounded-lg overflow-hidden border-8 border-gray-200 object-fit w-full' src='https://she-awards.com/uploads/sheawards/asset/Archive-202204141514581649945698/{{$i}}.jpg'> 								
		    	@endfor
		    </div>
	
		</section>	

		@include('_partials.collage')
	</main>

@endsection