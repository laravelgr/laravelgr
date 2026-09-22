<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Greek Community</title>
    <link rel="icon" type="image/png" href="/favicon.png">
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
                <img src="{{ asset('images/laravel-greece-logo.png') }}" alt="Laravel Greece" class="h-10 sm:h-14 w-auto">
            </div>
            <div class="flex items-center justify-center gap-2 text-slate-400 dark:text-slate-500 text-xs tracking-wide">
                <span>Proudly supported by</span>
                <a href="https://www.laravel.com" class="hover:opacity-80 transition-opacity">
                    <x-laravel-logo-inc style="width: 2.5rem; height: 2.5rem;" />
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
                @php
                    $upcoming = collect(config('meetup.next_events'))
                        ->filter(fn ($event) => \Carbon\Carbon::parse($event['event_date'])->isFuture())
                        ->sortBy('event_date');
                @endphp
                @if($upcoming->isNotEmpty())
                    <div class="flex flex-wrap gap-2">
                        @foreach($upcoming as $event)
                            <a href="{{ $event['event_url'] }}" target="_blank"
                               class="inline-flex items-center gap-2 text-xs font-medium text-[#1261A0] dark:text-white bg-[#1261A0]/10 dark:bg-[#1261A0]/20 border border-[#1261A0]/20 dark:border-[#1261A0]/30 rounded-lg px-3 py-2 hover:bg-[#1261A0]/15 dark:hover:bg-[#1261A0]/30 transition-colors">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#1261A0] dark:bg-[#4a9ede] animate-pulse shrink-0"></span>
                                {{ \Carbon\Carbon::parse($event['event_date'])->format('d/m/Y H:i') }} &mdash; {{ $event['event_text'] }}
                            </a>
                        @endforeach
                    </div>
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
                    Catch up on previous talks on our <a href="https://www.youtube.com/@laravelgreece776/featured" target="_blank" class="text-[#1261A0] dark:text-[#4a9ede] hover:text-[#0e4f82] dark:hover:text-[#6db5f0] transition-colors">YouTube channel</a>.
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
                <span class="inline-flex items-center rounded-md px-2 py-1 dark:bg-white/90">
                    <x-certification-logo style="width: 9.6rem; height: 2.4rem;" />
                </span>
            </a>
        </div>

    </div>
</div>

</body>
</html>
