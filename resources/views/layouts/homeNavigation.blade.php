<nav x-data="{ open: false }" class="bg-color2/70 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex justify-between items-center w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>    

                <!-- Navigation Links -->
                <div class="hidden  justify-center items-center space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-homepage-nav-link :href="url('/')" :active="request()->url() === url('/')">
                        {{ __('Home') }}
                    </x-homepage-nav-link>
                    <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Profile') }}
                    </x-homepage-nav-link>
                    <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('About Us') }}
                    </x-homepage-nav-link>
                    <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Carrer') }} 
                    </x-homepage-nav-link>
                    <x-dropdown align="right" >
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white focus:outline-none transition ease-in-out duration-150">
                                Others
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :color="'text-white'" :href="route('profile.edit')">
                                {{ __('Contact') }}
                            </x-dropdown-link>
                            
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Kupon') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="sm:flex gap-4 hidden">
                   <a href="{{route('login')}}" class="bg-color2 h-max rounded-full px-6 py-2 text-white cursor-pointer font-semibold hover:bg-transparent hover:text-white transition-all ease-in-out duration-300 hover:outline hover:outline-color2 text-xs">Sign In</a>
                   <a href="{{route('register')}}" class="bg-color3 h-max rounded-full px-6 py-2 text-white cursor-pointer font-semibold hover:text-white hover:bg-transparent transition-all ease-in-out duration-300 hover:outline hover:outline-color3 text-xs">Sign Up</a>
                </div>
            </div> 


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :textColor="'text-white'" :href="url('/')" :active="request()->url() === url('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            
            
            <x-responsive-nav-link :textColor="'text-white'" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :textColor="'text-white'" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :textColor="'text-white'" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Carrer') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :textColor="'text-white'" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :textColor="'text-white'" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Kupon') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :textColor="'text-white'" :href="route('login')">
                    {{ __('Sign Up') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :textColor="'text-white'" :href="route('register')">
                    {{ __('Sign In') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>
