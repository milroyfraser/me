<section class="py-10 md:py-16 bg-white">
    <x-container>
        <x-recommendations-header />
        <div class="grid md:grid-cols-2 gap-6 mt-16">
            @foreach($recommendations as $recommendation)
                <x-recommendation-card :recommendation="$recommendation" />
            @endforeach
        </div>
    </x-container>
</section>
