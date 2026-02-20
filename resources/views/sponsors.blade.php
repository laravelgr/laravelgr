
<x-app-layout>
    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-2 text-gray-900">Our Sponsors</h1>
            <p class="text-center text-gray-500 mb-12 text-sm">The companies that make our community possible</p>

            @foreach (config('sponsors.tiers') as $tierId => $tier)
                <div class="mb-14">
                    {{-- Tier label --}}
                    <div class="flex items-center justify-center gap-3 mb-8">
                        <div class="h-px flex-1 max-w-24
                            {{ $tierId === 'platinum' ? 'bg-gradient-to-r from-transparent to-gray-300' : ($tierId === 'gold' ? 'bg-gradient-to-r from-transparent to-amber-200' : 'bg-gradient-to-r from-transparent to-gray-200') }}">
                        </div>
                        <span class="text-xs font-bold tracking-[0.25em] uppercase
                            {{ $tierId === 'platinum' ? 'text-gray-700' : ($tierId === 'gold' ? 'text-amber-600' : 'text-gray-400') }}">
                            {{ $tier['name'] }}
                        </span>
                        <div class="h-px flex-1 max-w-24
                            {{ $tierId === 'platinum' ? 'bg-gradient-to-l from-transparent to-gray-300' : ($tierId === 'gold' ? 'bg-gradient-to-l from-transparent to-amber-200' : 'bg-gradient-to-l from-transparent to-gray-200') }}">
                        </div>
                    </div>

                    @if (count($tier['sponsors']) > 0)
                        <div class="grid gap-5 justify-items-center
                            {{ $tierId === 'platinum' ? 'grid-cols-1 sm:grid-cols-2' : ($tierId === 'gold' ? 'grid-cols-1 sm:grid-cols-2' : 'grid-cols-1 sm:grid-cols-2 md:grid-cols-3') }}">
                            @foreach ($tier['sponsors'] as $sponsor)
                                <a href="{{ $sponsor['url'] }}"
                                   target="_blank"
                                   rel="noopener"
                                   class="group relative block w-full rounded-xl p-6 transition-all duration-300
                                       {{ $tierId === 'platinum'
                                           ? 'bg-white border border-gray-100 shadow-sm hover:shadow-lg hover:border-gray-200 hover:-translate-y-0.5 min-h-40'
                                           : ($tierId === 'gold'
                                               ? 'bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-amber-100 hover:-translate-y-0.5 min-h-32'
                                               : 'bg-white border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 min-h-24') }}">
                                    <div class="w-full h-full flex items-center justify-center
                                        {{ $tierId === 'platinum' ? 'min-h-28' : ($tierId === 'gold' ? 'min-h-20' : 'min-h-16') }}">
                                        <img src="{{ asset('images/sponsors/' . $sponsor['image']) }}"
                                             alt="{{ $sponsor['name'] }}"
                                             class="max-w-full object-contain transition-transform duration-300 group-hover:scale-105
                                                {{ $tierId === 'platinum' ? 'max-h-28' : ($tierId === 'gold' ? 'max-h-20' : 'max-h-16') }}"
                                             title="{{ $sponsor['name'] }}">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="grid gap-5 justify-items-center
                            {{ $tierId === 'silver' ? 'grid-cols-1 sm:grid-cols-2 md:grid-cols-3' : 'grid-cols-1' }}">
                            @for ($i = 0; $i < ($tierId === 'silver' ? 3 : 1); $i++)
                                <div class="w-full rounded-xl border-2 border-dashed border-gray-200 p-6 flex items-center justify-center
                                    {{ $tierId === 'platinum' ? 'min-h-40' : ($tierId === 'gold' ? 'min-h-32' : 'min-h-24') }}">
                                    <p class="text-gray-300 text-sm">Available {{ $tier['name'] }} Slot</p>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>
            @endforeach

            {{-- Become a Sponsor Section --}}
            <div class="flex flex-col items-center text-center pt-4 pb-2">
                <p class="text-gray-500 text-sm">Interested in supporting the Greek Laravel community?</p>
                <p class="text-gray-400 text-xs mt-1">Get in touch to learn about sponsorship opportunities</p>
            </div>
        </div>
    </div>
</x-app-layout>
