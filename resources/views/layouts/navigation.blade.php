<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 flex justify-center items-center" style="height: 120px";>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" >
                        <div class="space-x-2">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            {{ __('Contactos') }}
                        </div>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" >
                        <div class="space-x-2">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            {{ __('Instituciones') }}
                        </div>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" >
                        <div class="space-x-2">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            {{ __('Categorías') }}
                        </div>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" >
                        <div class="space-x-2">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            {{ __('Subcategorías') }}
                        </div>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" >
                        <div class="space-x-2">
                            <i class="fa fa-th-list" aria-hidden="true"></i>
                            {{ __('Divisiones') }}
                        </div>
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48" class="border">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border  text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        {{-- <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link> --}}
                        <x-dropdown-link :href="route('profile.edit')" class="flex align-center gap-2">
                            <i class="fa fa-users" aria-hidden="true"></i><span>{{ __('Usuario') }}</span>
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')" class="flex align-center gap-2">
                            <i class="fa fa-check" aria-hidden="true"></i><span>{{ __('Roles') }}</span>
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')" class="flex align-center gap-2">
                            <i class="fa fa-unlock" aria-hidden="true"></i><span>{{ __('Permisos') }}</span>
                        </x-dropdown-link>
                        <hr>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
