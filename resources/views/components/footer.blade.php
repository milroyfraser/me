<footer class="py-10 md:py-16 bg-sky-100 bg-no-repeat bg-right-bottom" style="background-image: url('/img/me-transparent-bg.png')">
    <div class="container max-w-screen-xl mx-auto px-4">
        <div class="text-center">
            <h1 class="font-medium text-gray-700 text-4xl md:text-5xl mb-5">Thank you!</h1>
            <p class="text-gray-500 mb-20">
                If you are here, There is something special I would like to share with you.
                <x-link url="#">Interested?</x-link>
            </p>
            <x-follow-me />
            <p class="text-gray-500 text-xs mt-20">Copyright © {{ now()->format('Y') }} Milroy Fraser.</p>
            <p class="text-sky-900 text-xs mt-2">
                <small>
                    <a href="#">{{ now()->diffInDays('2031-01-21 23:59:59') }}</a>
                    <a href="#">{{ now()->diffInWeeks('2031-01-21 23:59:59') }}</a>
                    <a href="#">{{ now()->diffInMonths('2031-01-21 23:59:59') }}</a>
                    <a href="#">{{ now()->diffInYears('2031-01-21 23:59:59') }}</a>
                </small>
            </p>
        </div>
    </div>
</footer>
