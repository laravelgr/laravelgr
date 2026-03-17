
<x-app-layout>
    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-2 text-gray-900 dark:text-white">Our Sponsors</h1>
            <p class="text-center text-gray-500 dark:text-slate-400 mb-12 text-sm">The companies that make our community possible</p>

            @foreach (config('sponsors.tiers') as $tierId => $tier)
                <div class="mb-20">
                    {{-- Tier label --}}
                    <div class="flex items-center justify-center gap-3 mb-8 pt-4">
                        <div class="h-px flex-1 max-w-24
                            {{ $tierId === 'platinum' ? 'bg-gradient-to-r from-transparent to-gray-300 dark:to-slate-600' : ($tierId === 'gold' ? 'bg-gradient-to-r from-transparent to-amber-200 dark:to-amber-700' : 'bg-gradient-to-r from-transparent to-gray-200 dark:to-slate-700') }}">
                        </div>
                        <span class="text-xs font-bold tracking-[0.25em] uppercase
                            {{ $tierId === 'platinum' ? 'text-gray-700 dark:text-slate-300' : ($tierId === 'gold' ? 'text-amber-600 dark:text-amber-400' : 'text-gray-400 dark:text-slate-500') }}">
                            {{ $tier['name'] }}
                        </span>
                        <div class="h-px flex-1 max-w-24
                            {{ $tierId === 'platinum' ? 'bg-gradient-to-l from-transparent to-gray-300 dark:to-slate-600' : ($tierId === 'gold' ? 'bg-gradient-to-l from-transparent to-amber-200 dark:to-amber-700' : 'bg-gradient-to-l from-transparent to-gray-200 dark:to-slate-700') }}">
                        </div>
                    </div>

                    @if (count($tier['sponsors']) > 0)
                        <div class="{{ $tierId === 'platinum' ? 'grid grid-cols-1 sm:grid-cols-2 gap-5' : ($tierId === 'gold' ? 'flex flex-wrap justify-center gap-4' : 'flex flex-wrap justify-center gap-3') }}">
                            @foreach ($tier['sponsors'] as $sponsor)
                                <a href="{{ $sponsor['url'] }}"
                                   target="_blank"
                                   rel="noopener"
                                   class="group relative block rounded-xl transition-all duration-300
                                       {{ $tierId === 'platinum'
                                           ? 'w-full bg-white border border-gray-50 shadow-sm hover:shadow-lg hover:border-gray-100 hover:-translate-y-0.5 min-h-40 p-6'
                                           : ($tierId === 'gold'
                                               ? 'w-96 h-48 bg-white border border-gray-50 shadow-sm hover:shadow-md hover:border-amber-100 hover:-translate-y-0.5 p-6'
                                               : 'w-36 h-16 bg-white border border-gray-50 shadow-sm hover:shadow-md hover:-translate-y-0.5 p-2') }}">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <img src="{{ asset('images/sponsors/' . $sponsor['image']) }}"
                                             alt="{{ $sponsor['name'] }}"
                                             class="max-w-full object-contain transition-transform duration-300 group-hover:scale-105
                                                {{ $sponsor['size'] ?? ($tierId === 'platinum' ? 'max-h-28' : ($tierId === 'gold' ? 'max-h-28' : 'max-h-8')) }}"
                                             title="{{ $sponsor['name'] }}">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="grid gap-5 justify-items-center
                            {{ $tierId === 'silver' ? 'grid-cols-1 sm:grid-cols-2 md:grid-cols-3' : 'grid-cols-1' }}">
                            @for ($i = 0; $i < ($tierId === 'silver' ? 3 : 1); $i++)
                                <div class="w-full rounded-xl border-2 border-dashed border-gray-200 dark:border-slate-600 p-6 flex items-center justify-center
                                    {{ $tierId === 'platinum' ? 'min-h-40' : ($tierId === 'gold' ? 'min-h-32' : 'min-h-24') }}">
                                    <p class="text-gray-300 dark:text-slate-500 text-sm">Available {{ $tier['name'] }} Slot</p>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>
            @endforeach

            {{-- Become a Sponsor Section --}}
            <div class="flex flex-col items-center text-center pt-4 pb-2">
                <p class="text-gray-500 dark:text-slate-400 text-sm">Interested in supporting the Greek Laravel community?</p>
                <p class="text-gray-400 dark:text-slate-500 text-xs mt-1">Get in touch to learn about sponsorship opportunities</p>
            </div>
        </div>
    </div>
</x-app-layout>
