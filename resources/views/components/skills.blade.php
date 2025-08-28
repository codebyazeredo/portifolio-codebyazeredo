<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($categories as $category)
            <div class="bg-gray-100 p-6 rounded-lg card-hover transition hover:scale-105">
                <div class="flex items-center mb-4">
                    @if(!empty($category['icon']))
                        <i class="{{ $category['icon'] }} text-blue-600 text-2xl mr-3"></i>
                    @endif
                    <h3 class="text-xl font-bold text-gray-900">{{ $category['name'] }}</h3>
                </div>

                <div class="space-y-3">
                    @foreach($category['skills'] as $skill)
                        @if(!empty($skill['level']))
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700">{{ $skill['name'] }}</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar bg-blue-600 h-2 rounded-full" style="width: {{ $skill['level'] }};"></div>
                                </div>
                            </div>
                        @else
                            <span class="inline-block bg-white px-3 py-1 rounded-full text-sm text-gray-700 mr-2 mb-2">
                                {{ $skill['name'] }}
                            </span>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
