<div class="mb-2 rounded-lg p-4">
    <div class="h-full p-4 rounded">
        <a class="inline-flex items-center" target="_blank" href="{{ $recommendation['linkedin'] }}">
            <img alt="testimonial" src="{{ $recommendation['image'] }}" class="w-16 h-16 rounded-full flex-shrink-0 object-cover object-center border-4 border-sky-100">
            <span class="flex-grow flex flex-col pl-4">
                <span class="font-semibold text-sky-900">{{ $recommendation['name'] }}</span>
                <span class="text-gray-600 text-sm">{{ $recommendation['title'] }}</span>
            </span>
        </a>
        <p class="leading-relaxed my-6 text-gray-800">
            {{ str($recommendation['body'])->limit(200) }} <x-link url="#">read <span>&#8690;</span></x-link>
        </p>
    </div>
</div>
