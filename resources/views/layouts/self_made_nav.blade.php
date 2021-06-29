<!--insert into navaigation layout this-->
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('video')" :active="request()->routeIs('video')">
        ビデオ通話
    </x-nav-link>
</div>