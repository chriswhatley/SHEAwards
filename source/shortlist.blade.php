@extends('_layouts.master', 
	['page_title' => 'Awards Shortlist', 
	'meta_title' => 'The Awards Shortlist for the 2020 Safety & Health Excellence Awards', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'SHE Awards 2024 Shortlists', 'background_image' => 'header-b'])
       
        <section class="container mx-auto py-10 px-6 ">

	    	<div class="mt-6 flex flex-wrap">

				@foreach($shortlists as $award)
					@include('_components.card-component')
				@endforeach

	    	</div>

		</section>

@endsection