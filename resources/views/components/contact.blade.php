<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-white mb-4">{{ $title }}</h2>
        <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
        @if($subtitle)
            <p class="text-blue-100 mt-4 text-lg">{{ $subtitle }}</p>
        @endif
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach($contacts as $contact)
            @if(isset($contact['href']))
                <a href="{{ $contact['href'] }}"
                   class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg text-center hover:bg-opacity-20 transition card-hover">
                    <i class="{{ $contact['icon'] }} text-yellow-400 text-3xl mb-4"></i>
                    <h3 class="text-white font-semibold mb-2">{{ $contact['label'] }}</h3>
                    <p class="text-blue-100">{{ $contact['value'] }}</p>
                </a>
            @else
                <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg text-center">
                    <i class="{{ $contact['icon'] }} text-yellow-400 text-3xl mb-4"></i>
                    <h3 class="text-white font-semibold mb-2">{{ $contact['label'] }}</h3>
                    <p class="text-blue-100">{{ $contact['value'] }}</p>
                </div>
            @endif
        @endforeach
    </div>

    @if(!empty($socials))
        <div class="text-center mt-12">
            <h3 class="text-white text-xl font-semibold mb-6">Conecte-se comigo</h3>
            <div class="flex justify-center space-x-6">
                @foreach($socials as $social)
                    <a href="{{ $social['href'] }}" target="_blank"
                       class="bg-white bg-opacity-10 backdrop-blur-sm p-4 rounded-lg hover:bg-opacity-20 transition">
                        <i class="{{ $social['icon'] }} text-white text-2xl"></i>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</div>
