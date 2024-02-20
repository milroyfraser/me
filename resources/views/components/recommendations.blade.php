<section class="py-10 md:py-16 bg-white">
    <div class="container max-w-screen-xl mx-auto px-4">
        <x-recommendations-header />
        <div class="grid md:grid-cols-2 gap-6 mt-16">
            @foreach($recommendations as $recommendation)
                <x-recommendation-card :recommendation="$recommendation" />
            @endforeach
        </div>
    </div>
</section>
