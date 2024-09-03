<div class="w-full flex flex-col md:w-1/2">
	
	<div class="flex-1 bg-gray-200 m-4 p-6 rounded-md">

		<div class="text-center">			
			<div class="flex justify-center">
				<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $award->icon }}.svg" alt="Icon">	
			</div>
			
			<h3 class="mt-2 text-xl text-grey-800 font-semibold uppercase">{{ $award->title }}</h3>										
		</div>
		
		<ul class="mt-3 ml-4 sm:ml-6 md:ml-6 list-disc">
			@foreach($award->nominees as $nominee)
				<li class="inline-flex items-start w-full text-md">
					<svg class="mt-1 mr-3 w-4 h-4 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">                               
                        <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"></path>
                    </svg>
					<div>{{ $nominee }}</div>
				</li>
			@endforeach
		</ul>

		@if($award->sponsor)
			<div class="mt-12 text-md text-center">Sponsored by</div>
			<div class="mt-4 flex justify-center">
				<img class="h-20 w-auto max-w-sm" src="{{ $page->baseUrl }}/assets/images/sponsors/awards/{{ str_replace(' ', '-', $award->sponsor) }}.svg" alt="{{ $award->sponsor }}">
			</div>
		@endif
	</div>
</div>
		

		
