
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-12">Our Sponsors</h1>

            @foreach (config('sponsors.tiers') as $tierId => $tier)
                <div class="mb-16">
                    <h2 class="text-3xl font-semibold text-center mb-8 text-gray-800">{{ $tier['name'] }} Sponsors</h2>

                    @if (count($tier['sponsors']) > 0)
                        <div class="grid grid-cols-1 {{ $tierId === 'silver' ? 'sm:grid-cols-2 md:grid-cols-3' : '' }} gap-8 justify-items-center">
                            @foreach ($tier['sponsors'] as $sponsor)
                                <a href="{{ $sponsor['url'] }}"
                                   target="_blank"
                                   class="block {{ $tierId === 'platinum' ? 'w-96 h-48' : ($tierId === 'gold' ? 'w-80 h-40' : 'w-64 h-32') }}
                                  bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <img src="{{ asset('images/sponsors/' . $sponsor['image']) }}"
                                             alt="{{ $sponsor['name'] }}"
                                             class="max-w-full max-h-full object-contain"
                                             title="{{ $sponsor['name'] }}">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="grid grid-cols-1 {{ $tierId === 'silver' ? 'sm:grid-cols-2 md:grid-cols-3' : '' }} gap-8 justify-items-center">
                            @for ($i = 0; $i < ($tierId === 'silver' ? 3 : 1); $i++)
                                <div class="{{ $tierId === 'platinum' ? 'w-96 h-48' : ($tierId === 'gold' ? 'w-80 h-40' : 'w-64 h-32') }}
                                    bg-gray-100 rounded-lg shadow-lg p-6 flex items-center justify-center">
                                    <p class="text-gray-400 text-center">Available {{ $tier['name'] }} Slot</p>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>
            @endforeach

            <!-- Become a Sponsor Section -->
            <div class="flex flex-col items-center text-center">
                <h2 class="text-2xl font-semibold mb-4">Become a Sponsor</h2>
                <p class="text-gray-600 mb-6">Support the Greek Laravel community and showcase your brand!</p>
            </div>
        </div>
    </div>
</x-app-layout>
