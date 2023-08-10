<header x-data="{ navbarOpen: false }" class="flex w-full items-center bg-white">
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <span class="text-2xl text-pink-400 uppercase font-extrabold">Tall</span>
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen ? 'navbarTogglerActive' : ''" id="navbarToggler" class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                    </button>
                    <nav :class="!navbarOpen ? 'hidden' : ''" id="navbarCollapse" class="absolute z-40 right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex">
                            <li>
                                <a href="/" wire:navigate.hover class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">Home</a>
                            </li>
                            <li>
                                <a href="/blogs" wire:navigate.hover class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">Blog</a>
                            </li>
                            <li>
                                <a href="/contact" wire:navigate.hover class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                    @if (Route::has('login'))
                        @auth
                        <button> {{auth()->user()->name}} </button>
                        <form method="POST" action="{{route('user.logout')}}">
                            @csrf
                            <button type="submit" class="text-dark flex hover:text-primary py-3 px-7 text-base font-medium">
                                <svg fill="none" stroke="currentColor" class="w-5 h-5" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                                </svg>
                                Logout
                            </button>
                        </form>
                        @else
                        <a href="/login" wire:navigate.hover class="text-dark hover:text-primary py-3 px-7 text-base font-medium">Login</a>
                        @if (Route::has('register'))
                        <a href="/register" wire:navigate.hover class="bg-primary rounded-lg py-3 px-7 text-base font-medium text-white hover:bg-opacity-90">Sign Up</a>
                        @endif
                    @endauth

                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
