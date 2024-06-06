<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    <!-- Desktop -->
    <x-nav-link :href="route('chirps.index')" :active="request()->routeIs('chirps.index')">
        {{ __('Chirps') }}
    </x-nav-link>
    <!-- Mobile -->
    <!-- <x-responsive-nav-link :href="route('chirps.index')" :active="request()->routeIs('chirps.index')">
        {{ __('Chirps') }}
    </x-responsive-nav-link> -->
</div>