<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center space-x-4">
      <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
      <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
    </div>
  </div>
</nav>