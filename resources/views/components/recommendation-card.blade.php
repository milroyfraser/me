@php
    /** @var \App\Dtos\Recommendation $recommendation */
@endphp

<a href="{{ route('recommendation.show', $recommendation->slug) }}" class="mb-2 p-4 hover:bg-sky-50 rounded-xl cursor-pointer">
    <div class="inline-flex items-center">
        <img alt="testimonial" src="{{ $recommendation->image }}" class="w-16 h-16 rounded-full flex-shrink-0 object-cover object-center border-4 border-sky-100">
        <span class="flex-grow flex flex-col pl-4">
            <span class="font-semibold text-sky-900">{{ $recommendation->name }}</span>
            <span class="text-gray-600 text-sm">{{ $recommendation->title }}</span>
        </span>
    </div>
    <p class="leading-relaxed my-6 text-gray-800">
        {{ $recommendation->summery() }}
    </p>
</a>
