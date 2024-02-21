@php
    /** @var \App\Dtos\Recommendation $recommendation */
@endphp

<x-guest-layout>
    <x-top-nav />

    <x-container>
        <div class="md:px-60">
            <a class="inline-flex items-center mt-10" target="_blank" href="{{ $recommendation->linkedin }}">
                <img alt="testimonial" src="{{ $recommendation->image }}" class="w-16 h-16 rounded-full flex-shrink-0 object-cover object-center border-4 border-sky-100">
                <span class="flex-grow flex flex-col pl-4">
                <span class="font-semibold text-sky-900">{{ $recommendation->name }}</span>
                <span class="text-gray-600 text-sm">{{ $recommendation->title }}</span>
            </span>
            </a>
            @foreach($recommendation->body as $paragraph)
                <p class="leading-relaxed my-6 text-gray-800">
                    {{ $paragraph }}
                </p>
            @endforeach

            <x-link url="https://linkedin.com/in/milroyfraser" external>
                <p class="uppercase text-xs font-semibold py-8 tracking-widest">Connect with me on LinkedIn</p>
            </x-link>
        </div>
    </x-container>
</x-guest-layout>
