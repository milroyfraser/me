<footer class="py-10 md:py-16 bg-sky-100 bg-no-repeat bg-right-bottom border-b-4 border-sky-900 mt-auto" style="background-image: url('/img/me-transparent-bg.png')">
    <x-container>
        <div class="text-center">
            <h1 class="font-medium text-sky-900 text-4xl md:text-5xl">Thank you!</h1>
            <p class="text-gray-600 my-10">
                If you are here, There is something special I would like to share with you.
                <x-link url="#">Interested?</x-link>
            </p>
            <x-follow-me />
            <p class="text-gray-600 text-xs mt-10">Copyright © {{ now()->format('Y') }} Milroy Fraser.</p>
            <p class="text-sky-900 text-xs mt-2">
                <small>
                    <a href="#" data-interval="days">{{ now()->diffInDays('2031-01-21 23:59:59') }}</a>
                    <a href="#" data-interval="weeks">{{ now()->diffInWeeks('2031-01-21 23:59:59') }}</a>
                    <a href="#" data-interval="months">{{ now()->diffInMonths('2031-01-21 23:59:59') }}</a>
                    <a href="#" data-interval="years">{{ now()->diffInYears('2031-01-21 23:59:59') }}</a>
                </small>
            </p>
        </div>
    </x-container>
</footer>
