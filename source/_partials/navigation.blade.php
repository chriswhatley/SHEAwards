<header class="fixed w-full px-3 py-4 lg:px-12 lg:py-6 bg-black text-white flex justify-between z-20">            
        
    <a href="{{ $page->baseUrl }}">
        <img src="{{ $page->baseUrl }}/assets/images/layout/she-awards-2021-logo.svg" alt="The SHE Awards 2021" class="h-16 lg:h-24 w-auto">
    </a>                
        
    <nav class="flex">

        <div class="flex content-center text-white text-sm" @click.away="open = false" x-on:keydown.escape="open = false">                
            
            <div class="hidden lg:flex">
                <div class="mr-12 text-center">
                    In conjunction with
                    <img src="{{ $page->baseUrl }}/assets/images/layout/header-bsif.svg" alt="BSIF" class="w-32 mt-3">
                </div>                        

                <div class="mr-16 text-center">
                    Headline sponsor
                    <img src="{{ $page->baseUrl }}/assets/images/layout/header-lyreco.svg" alt="Lyreco" class="w-32 mt-3">
                </div>                                                
            </div>
                  
            <button @click="open = !open" class="z-20 text-yellow-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-none" aria-label="Mobile Navigation Menu">                                       
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 22 22" class="w-6 h-6 lg:w-8 lg:h-8 transition-transform duration-200 transform">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>                    
                </svg>                       
            </button>     
            
            {{-- Overlay --}}
            <div class="z-10 fixed inset-0 transition-opacity focus:outline-none focus:border-0 focus:shadow-outline-none"
                @click="open = !open"
                x-show="open"
                x-transition:enter="transition duration-200 transform ease-in-out"
                x-transition:enter-start="opacity-0"
                x-transition:leave="transition duration-200 transform ease-in-out"
                x-transition:leave-end="opacity-0"
            >
                <div tabindex="0" class="absolute inset-0 bg-black opacity-75 focus:outline-none focus:border-0 focus:shadow-outline-none"></div>
            </div>       

            {{-- Nav Menu --}}
            <div class="z-20 fixed top-0 right-0">                    
               <div 
                    class="w-screen md:w-64 h-screen z-40 origin-top-right bg-black text-white text-md transform shadow-lg"                    
                    x-show="open"                    
                    x-transition:enter="transition duration-300 transform ease-in-out"
                    x-transition:enter-start="translate-x-full"
                    x-transition:leave="transition duration-300 transform ease-in-out"
                    x-transition:leave-end="translate-x-full"
                >                   
			
					<div class="relative my-6">
						<div class="w-4/5 pl-3 md:pl-6">
							<img src="{{ $page->baseUrl }}/assets/images/layout/she-awards-2021-logo.svg" alt="The SHE Awards 2021" class="w-18" @click="open = !open">		                    			
						</div>
						<div class="absolute top-0 right-0 md:hidden w-1/5 sm:pr-4 flex justify-end pt-2 pr-2">
							<button @click="open = !open" class="relative top-0 right-0 z-20 text-yellow-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-none">                                       
				                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 22 22" class="w-6 h-6 lg:w-8 lg:h-8 transition-transform duration-200 transform">
				                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
				                </svg>                       
				            </button> 
						</div>
					</div>

                    <ul>
                        <li>
                            <a href="{{ $page->baseUrl }}" class="nav-item">                                
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/>
                                </svg>
                                Home
                            </a>
                        </li>                            
                        <li>
                        	<a href="{{ $page->nominationURL }}" class="nav-item">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                                </svg>
                        		The Awards
                        	</a>
                        </li>                                                            
                        <li>
                        	<a href="{{ $page->nominationURL }}" class="nav-item">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
                                </svg>
                        		Make A Nomination
                        	</a>
                        </li>                            
                        <li>
                        	<a href="{{ $page->baseUrl }}/charity" class="nav-item">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/>
                                </svg>
                        		Charity Partner
                        	</a>
                        </li>                            
                        <li>
                            <a href="{{ $page->baseUrl }}/sponsors" class="nav-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M15 9a3 3 0 0 0 3-3h2a5 5 0 0 1-5.1 5 5 5 0 0 1-3.9 3.9V17l5 2v1H4v-1l5-2v-2.1A5 5 0 0 1 5.1 11H5a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3V4H2v2H0V2h5V0h10v2h5v4h-2V4h-3v5z"/>
                                </svg>
                                Sponsors
                            </a>
                        </li>
                        <li>
                            <a href="{{ $page->baseUrl }}/sponsorship" class="nav-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M7.667 12H2v8H0V0h12l.333 2H20l-3 6 3 6H8l-.333-2z"/>
                                </svg>
                                Sponsorship
                            </a>
                        </li>
                        <li>
                        	<a href="{{ $page->baseUrl }}/faq" class="nav-item">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">                                    
                                    <path d="M18 11v7a2 2 0 0 1-4 0v-5h-2V3a3 3 0 0 1 3-3h3v11zM4 10a2 2 0 0 1-2-2V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v4h1V1a1 1 0 0 1 2 0v7a2 2 0 0 1-2 2v8a2 2 0 0 1-4 0v-8z"/>
                                </svg>
                        		FAQ's
                        	</a>
                        </li>                            
                        <li>
                        	<a href="{{ $page->baseUrl }}/contact" class="nav-item">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
                                </svg>
                        		Contact Us
                        	</a>
                        </li>                            
                        <li>
                        	<a href="{{ $page->awardsURL }}" class="nav-item bg-yellow-500">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 -mt-1 mr-3">
                                    <path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                </svg>
                        		Register To Attend
                        	</a>
                        </li>                            
                    </ul>                          
                    
                </div> 
            </div>                
        </div>
    </nav>

</header> 