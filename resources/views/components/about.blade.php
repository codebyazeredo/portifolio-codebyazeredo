<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <div>
            @foreach($paragraphs as $paragraph)
                <p class="text-lg text-gray-800 mb-6 leading-relaxed">
                    {{ $paragraph }}
                </p>
            @endforeach
        </div>

        <div class="bg-gray-100 p-8 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Especialidades</h3>
            <div class="space-y-4">
                @foreach($skills as $skill)
                    <div class="flex items-center">
                        <i class="{{ $skill['icon'] }} text-blue-600 text-xl mr-4"></i>
                        <span class="text-gray-700">{{ $skill['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
