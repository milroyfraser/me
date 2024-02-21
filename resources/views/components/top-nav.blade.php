<div class="bg-sky-100 py-10">
    <x-container>
        <nav class="md:ml-auto flex flex-wrap items-center font-semibold text-xs text-sky-950 uppercase tracking-widest justify-center">
            @unless(request()->routeIs('home'))
                <a href="/" class="mr-5 hover:text-sky-800 underline underline-offset-2">Home</a>
            @endunless
            <a href="#" class="mr-5 hover:text-sky-800 underline underline-offset-2">Secret of L<span class="text-pink-700">♥</span>ve</a>
            <a href="#" class="mr-5 hover:text-sky-800 underline underline-offset-2">Blog</a>
            <a href="#" class="mr-5 hover:text-sky-800 underline underline-offset-2">Podcast</a>
            <a href="#" class="mr-5 hover:text-sky-800 underline underline-offset-2">Gaming</a>
        </nav>
    </x-container>
</div>
