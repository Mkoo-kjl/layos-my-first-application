<nav>
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
</nav>
