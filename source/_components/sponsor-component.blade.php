<div class='w-full font-bold uppercase'>
 	<a href='#' onclick='event.preventDefault();' class='cursor-pointer'>
        <div class='h-full w-full p-4 rounded-md font-bold uppercase bg-gray-200 hover:bg-gray-800 hover:text-white transition duration-300 ease-in-out' title='{{ $sponsor->name }}'>
            <div class='flex items-center justify-center object-center object-scale-down p-3 bg-white rounded-md overflow-hidden' style="height:125px;">
                <img class="" src="{{ $page->baseUrl }}/assets/images/sponsors/carousel/{{ $sponsor->logo }}.svg" alt="Logo : {{ $sponsor->name }} ">
            </div>
            <div class="mt-4">{{ $sponsor->name }}</div>
            <div class="font-normal text-sm">{{ $sponsor->sponsorship }}</div>         
        </div>
    </a>
</div>
