<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-4">Projetos</h2>
    <div class="w-20 h-1 bg-blue-600 mx-auto mb-12"></div>
        <p class="text-gray-700 mb-12 text-lg">
            Aqui estão alguns projetos públicos que desenvolvi. Clique em qualquer card para conferir mais no meu GitHub.
        </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
        <a href="{{ $project['url'] }}" target="_blank"
            class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl hover:scale-105 transform transition flex flex-col justify-between relative h-full">

            @if(isset($project['status']))
            @php
                switch($project['status']) {
                    case 'Rodando': $statusColor = 'bg-green-200 text-green-800'; break;
                    case 'Em andamento': $statusColor = 'bg-yellow-200 text-yellow-800'; break;
                    case 'Pausado': $statusColor = 'bg-red-200 text-red-800'; break;
                    case 'Finalizado': $statusColor = 'bg-green-200 text-green-800'; break;
                    default: $statusColor = 'bg-gray-200 text-gray-800';
                }
            @endphp
            <span class="absolute top-3 right-3 px-2 py-0.5 text-xs font-semibold rounded-full {{ $statusColor }}">
                {{ $project['status'] }}
            </span>
            @endif

            <div>
                <h3 class="text-gray-900 font-semibold text-xl mb-2">{{ $project['name'] }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ $project['description'] }}</p>
            </div>
            <div class="mt-auto flex items-center justify-center gap-2">
                <span class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
                    <i class="fab fa-github text-white bg-blue-600 rounded-full p-1"></i>
                    Ver no GitHub
                </span>
            </div>
        </a>
        @endforeach
    </div>
</div>
