<a href="{{ $url }}" @if(isset($external) && $external) target="_blank" @endif class="text-sky-900 hover:text-sky-600 transition ease-in-out duration-500">
    {{ $slot }}
</a>
