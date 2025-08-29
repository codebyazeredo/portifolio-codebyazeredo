<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($categories as $category)
            <div class="bg-gray-100 p-6 rounded-2xl shadow-md transform transition hover:scale-105 hover:shadow-lg flex flex-col">
                
                <div class="flex items-center mb-6 border-b border-gray-200 pb-3">
                    @if(!empty($category['icon']))
                        <i class="{{ $category['icon'] }} text-blue-600 text-3xl mr-3"></i>
                    @endif
                    <h3 class="text-2xl font-semibold text-gray-900">{{ $category['name'] }}</h3>
                </div>

                <div class="space-y-4">
                    @foreach($category['skills'] as $skill)
                        @if(!empty($skill['level']))
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="flex items-center text-gray-800 font-medium">
                                        @if(!empty($skill['icon']))
                                            <i class="{{ $skill['icon'] }} text-blue-600 mr-2"></i>
                                        @endif
                                        {{ $skill['name'] }}
                                    </span>
                                    <span class="text-sm text-gray-500 font-semibold">{{ $skill['level'] }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill['level'] }};"></div>
                                </div>
                            </div>
                        @else
                            <div class="flex items-center text-gray-700 bg-white border rounded-lg px-3 py-2 hover:bg-blue-100 transition">
                                @if(!empty($skill['icon']))
                                    <i class="{{ $skill['icon'] }} text-blue-600 mr-2"></i>
                                @endif
                                <span class="font-medium">{{ $skill['name'] }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
