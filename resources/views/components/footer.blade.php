<footer class="bg-gray-900 text-white py-6">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-2">
        <p>&copy; 2025 codebyazeredo® Todos os direitos reservados.</p>
        <div class="flex justify-center space-x-4">
            @if(!empty($links))
                @foreach($links as $link)
                    <a href="{{ $link['href'] }}" class="text-gray-400 hover:text-yellow-400 transition text-sm">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</footer>
