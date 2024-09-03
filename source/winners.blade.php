@extends('_layouts.master', 
	['page_title' => 'Award Winners', 
	'meta_title' => 'The Awards Winners for the 2024 Safety & Health Excellence Awards', 
	'meta_description' => 'Join more than 700p of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'SHE Awards 2024 Winners', 'background_image' => 'header-c'])
       
        <section class="container mx-auto py-10 px-6 ">

	    	<div class="mt-6 flex flex-wrap">

				@foreach($winners as $award)
					@include('_components.card-component')
				@endforeach

	    	</div>

		</section>

@endsection