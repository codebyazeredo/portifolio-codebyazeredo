<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    </div>

    <div class="space-y-8">
        @foreach($experiences as $exp)
            <div class="bg-white p-8 rounded-lg shadow-lg card-hover transition transform hover:scale-105">
                <div class="flex flex-wrap justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">{{ $exp['position'] }}</h3>
                        <p class="text-blue-600 font-semibold">{{ $exp['company'] }}</p>
                    </div>
                    <div class="text-right">
                        @if(!empty($exp['status']))
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">{{ $exp['status'] }}</span>
                        @endif
                        @if(!empty($exp['period']))
                            <p class="text-gray-600 mt-1">{{ $exp['period'] }}</p>
                        @endif
                        @if(!empty($exp['mode']))
                            <p class="text-gray-1000 text-sm">{{ $exp['mode'] }}</p>
                        @endif
                    </div>
                </div>

                <div class="text-gray-700 space-y-2">
                    @foreach($exp['description'] as $desc)
                        <p>• {{ $desc }}</p>
                    @endforeach
                </div>

                <div class="flex flex-wrap gap-2 mt-4">
                    @foreach($exp['skills'] as $skill)
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
