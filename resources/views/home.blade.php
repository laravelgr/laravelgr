<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Greek Community</title>
    <link href="https://fonts.bunny.net/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Sora', sans-serif;
            background: #f1f5f9;
        }
        @media (prefers-color-scheme: dark) {
            body {
                background: radial-gradient(ellipse at 50% 0%, #0f172a, #070b14 70%);
            }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(14px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.5s ease-out both; }
        .d1 { animation-delay: 50ms; }
        .d2 { animation-delay: 100ms; }
        .d3 { animation-delay: 150ms; }
        .d4 { animation-delay: 200ms; }
        .d5 { animation-delay: 300ms; }
    </style>
</head>
<body class="antialiased min-h-screen text-slate-700 dark:text-slate-200">

<div class="flex items-center justify-center min-h-screen px-5 py-10 sm:py-16">
    <div class="w-full max-w-2xl">

        {{-- Header --}}
        <div class="text-center mb-10 sm:mb-14 fade-up">
            <div class="flex justify-center mb-5">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10 sm:h-14 w-auto">
                    <g clip-path="url(#clip0)" fill="#1261A0">
                        <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                    </g>
                </svg>
            </div>
            <div class="flex items-center justify-center gap-2 text-slate-400 dark:text-slate-500 text-xs tracking-wide">
                <span>Proudly supported by</span>
                <a href="https://www.laravel.com" class="hover:opacity-80 transition-opacity">
                    <x-laravel-logo-inc class="w-5 h-5" />
                </a>
            </div>
        </div>

        {{-- Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">

            {{-- Slack --}}
            <div class="rounded-xl border border-gray-200 dark:border-white/5 bg-white dark:bg-white/[0.03] p-5 sm:p-6 hover:border-gray-300 dark:hover:border-white/10 transition-all duration-300 fade-up d1">
                <div class="flex items-center gap-2.5 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-slate-500 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                    <h2 class="text-gray-900 dark:text-white font-semibold text-sm">Slack</h2>
                </div>
                <p class="text-gray-500 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                    Our daily communication hub. <a href="https://join.slack.com/t/laravelgreece/shared_invite/zt-1hr7depv6-iexqPts7C3GQbcgpk2wfzQ" target="_blank" class="text-[#1261A0] dark:text-[#4a9ede] hover:text-[#0e4f82] dark:hover:text-[#6db5f0] transition-colors">Sign up for free</a> and instantly connect with the community.
                </p>
            </div>

            {{-- Meetups --}}
            <div class="rounded-xl border border-gray-200 dark:border-white/5 bg-white dark:bg-white/[0.03] p-5 sm:p-6 hover:border-gray-300 dark:hover:border-white/10 transition-all duration-300 fade-up d2">
                <div class="flex items-center gap-2.5 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-slate-500 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <h2 class="text-gray-900 dark:text-white font-semibold text-sm">Meetups</h2>
                </div>
                <p class="text-gray-500 dark:text-slate-400 text-xs sm:text-sm leading-relaxed mb-3">
                    For the past ten years, meeting in person and broadcasting live. One of the most active communities worldwide with official Laravel Inc. support.
                </p>
                @if(\Carbon\Carbon::parse(config('meetup.next_event.event_date'))->isFuture())
                    <a href="{{ config('meetup.next_event.event_url') }}" target="_blank"
                       class="inline-flex items-center gap-2 text-xs font-medium text-[#1261A0] dark:text-white bg-[#1261A0]/10 dark:bg-[#1261A0]/20 border border-[#1261A0]/20 dark:border-[#1261A0]/30 rounded-lg px-3 py-2 hover:bg-[#1261A0]/15 dark:hover:bg-[#1261A0]/30 transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#1261A0] dark:bg-[#4a9ede] animate-pulse shrink-0"></span>
                        {{ \Carbon\Carbon::parse(config('meetup.next_event.event_date'))->format('d/m/Y H:i') }} &mdash; {{ config('meetup.next_event.event_text') }}
                    </a>
                @endif
            </div>

            {{-- Past Events --}}
            <div class="rounded-xl border border-gray-200 dark:border-white/5 bg-white dark:bg-white/[0.03] p-5 sm:p-6 hover:border-gray-300 dark:hover:border-white/10 transition-all duration-300 fade-up d3">
                <div class="flex items-center gap-2.5 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-slate-500 shrink-0">
                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <h2 class="text-gray-900 dark:text-white font-semibold text-sm">Past Events</h2>
                </div>
                <p class="text-gray-500 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                    Catch up on previous talks on our <a href="https://www.youtube.com/channel/UCXgd0om3ZNufW8GocLUH23Q/videos" target="_blank" class="text-[#1261A0] dark:text-[#4a9ede] hover:text-[#0e4f82] dark:hover:text-[#6db5f0] transition-colors">YouTube channel</a>.
                </p>
            </div>

            {{-- Newsletter --}}
            <div class="rounded-xl border border-gray-200 dark:border-white/5 bg-white dark:bg-white/[0.03] p-5 sm:p-6 hover:border-gray-300 dark:hover:border-white/10 transition-all duration-300 fade-up d4">
                <div class="flex items-center gap-2.5 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-slate-500 shrink-0">
                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                    </svg>
                    <h2 class="text-gray-900 dark:text-white font-semibold text-sm">Newsletter</h2>
                </div>
                <p class="text-gray-500 dark:text-slate-400 text-xs sm:text-sm leading-relaxed">
                    Never miss an event. <a href="https://laravel.gr/s/subscribe" target="_blank" class="text-[#1261A0] dark:text-[#4a9ede] hover:text-[#0e4f82] dark:hover:text-[#6db5f0] transition-colors">Subscribe to our mailing list</a> &mdash; the only sure way to stay in the loop.
                </p>
            </div>
        </div>

        {{-- Footer --}}
        <div class="flex flex-col sm:flex-row items-center justify-between mt-8 sm:mt-10 gap-4 fade-up d5">
            <a href="{{ route('sponsors') }}"
               class="inline-flex items-center gap-2 text-sm font-medium text-white px-5 py-2.5 rounded-full hover:brightness-110 transition-all duration-300"
               style="background-color: #FF2D20;">
                Our Sponsors
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-4 h-4">
                    <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </a>
            <a href="https://www.certificationforlaravel.com/" target="_blank"
               class="flex items-center gap-2.5 text-gray-400 dark:text-slate-500 text-xs hover:text-gray-500 dark:hover:text-slate-400 transition-colors">
                <span>Partnered with</span>
                <span class="rounded-md px-2 py-1 dark:bg-white/90">
                    <x-certification-logo class="w-24 h-6" />
                </span>
            </a>
        </div>

    </div>
</div>

</body>
</html>
