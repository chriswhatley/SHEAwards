---
pagination:
    collection: awards
    perPage: 15
---

@extends('_layouts.master', 
	['page_title' => 'Awards Categories', 
	'meta_title' => 'Associate your brand with excellence at The Safety & Health Excellence Awards', 
	'meta_description' => 'Reach thousands of industry professionals before, during and after the event, network with the industry’s most influential people and a unique opportunity to position your organisation as an industry leader!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'The Awards', 'background_image' => 'header-a'])
       
        <section class="container mx-auto py-10 px-6">

        	<div class="w-full text-center">
	    		<p>Please make sure you have properly read the categories and criteria before entering. The criteria is different for each category and you are able to enter multiple categories. You can also enter more than one product in each category provided they are different products or services.</p>
	    		<p class="mt-4 text-center font-semibold">
		    		<a href="{{ $page->nominationURL }}" class="btn-primary w-3/4 max-w-xs text-md sm:text-sm md:text-md lg:text-lg">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
	        				<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
	        			</svg>
	        			Make a nomination
	        		</a>
	        	</p>
				<p class="mt-4 text-center font-semibold">DEADLINE FOR ENTRIES: {{ $page->nominationDeadline }} at 11:59PM.</p>
	    	</div>

			<div class="mt-12 flex flex-wrap">
				@foreach ($pagination->items as $award)

					@include('_components.award-component')

					@if ($award != $pagination->items->last())
			            <hr class="border-b my-10">
			        @endif

				@endforeach
			</div>
		 	

		</section>

@endsection