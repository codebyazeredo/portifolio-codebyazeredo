<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus de Azeredo - Desenvolvedor Full Stack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])
</head>

@php
    date_default_timezone_set('America/Sao_Paulo');
    $hour = (int) date('H');
    if ($hour >= 5 && $hour < 12) {
        $greeting = 'Bom dia';
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = 'Boa tarde';
    } else {
        $greeting = 'Boa noite';
    }
@endphp

<body class="bg-gray-100">
    <x-navbar logo="images/logo.png" :links="[
        '#home' => 'Início',
        '#about' => 'Sobre',
        '#experience' => 'Experiência',
        '#skills' => 'Habilidades',
        '#projects' => 'Projetos',
        '#contact' => 'Contato'
    ]" />

    <section id="home" class="gradient-bg min-h-screen flex items-center">
        <x-hero 
            name="Matheus de Azeredo" 
            title="{{ $greeting }}, eu sou"
            subtitle="Desenvolvedor de Software Full Stack Web & IoT PHP/Laravel/Laminas, Java/Spring e JavaScript"
            location="Criciúma, SC" 
            :ctaPrimary="['href' => '#contact', 'label' => 'Entre em Contato']"
            :ctaSecondary="['href' => 'https://github.com/codebyazeredo', 'label' => 'Ver Projetos no GitHub']" 
            :socials="[
                ['href' => 'https://linkedin.com/in/codebyazeredo', 'icon' => 'fab fa-linkedin'],
                ['href' => 'https://github.com/codebyazeredo', 'icon' => 'fab fa-github'],
                ['href' => 'mailto:matheus.azeredo.pro@gmail.com', 'icon' => 'fas fa-envelope']
            ]" />
    </section>

    <section id="about" class="py-20 bg-white">
        <x-about 
            title="Sobre Mim" 
            :paragraphs="
                [
                'Sou desenvolvedor Full Stack com experiência em aplicações web e projetos de IoT, atuando com Java (Spring Boot), PHP (Laravel, Laminas) e JavaScript.',
                'No front-end, utilizo HTML, CSS, Tailwind, Bootstrap e jQuery para interfaces responsivas e dinâmicas. No back-end, desenvolvo APIs REST, WebSockets e microsserviços em cloud (AWS e Azure), com bancos MySQL, Oracle e SQL Server.',
                'Em IoT, trabalho com Arduino, C e MQTT para automações e sistemas embarcados. Busco sempre soluções eficientes, escaláveis e que atendam às necessidades reais dos clientes.'
            ]" 
            :skills="[
                ['icon' => 'fas fa-server', 'label' => 'Desenvolvimento Back-end'],
                ['icon' => 'fas fa-laptop-code', 'label' => 'Desenvolvimento Front-end'],
                ['icon' => 'fas fa-microchip', 'label' => 'Microserviços & Cloud'],
                ['icon' => 'fas fa-cloud', 'label' => 'RestFull APIs']
            ]" />
    </section>

    <section id="experience" class="py-20 bg-gray-100">
        <x-experience :experiences="
        [
            [
                'position' => 'Desenvolvedor de Software',
                'company' => 'Branet Tecnologia e Consultoria',
                'status' => 'Atual',
                'period' => 'Mar/2025 - Atual (6 meses)',
                'mode' => 'Remoto',
                'description' => [
                    'Desenvolvimento, manutenção evolutiva e corretiva de sistemas voltados à gestão pública',
                    'Uso de PHP, Java, MySQL, APIs REST, Laravel e POO'
                ],
                'skills' => ['PHP', 'Java', 'Laravel', 'MySQL', 'APIs REST']
            ],
            [
                'position' => 'Desenvolvedor de Software',
                'company' => 'Exon Sistemas e Consultoria',
                'status' => '',
                'period' => 'Período anterior',
                'mode' => 'Presencial',
                'description' => [
                    'Desenvolvimento e manutenção de sistemas corporativos',
                    'Uso de PHP, Laravel, JavaScript, jQuery e SQL Server'
                ],
                'skills' => ['PHP', 'Laravel', 'JavaScript', 'jQuery', 'SQL Server']
            ]
        ]" />
    </section>

    <section id="skills" class="py-20 bg-white">
        <x-skills :categories="
            [
            [
                'name' => 'Linguagens',
                'icon' => 'fas fa-code',
                'skills' => [
                    ['name' => 'Java', 'level' => '90%'],
                    ['name' => 'PHP', 'level' => '85%'],
                    ['name' => 'JavaScript', 'level' => '80%'],
                ]
            ],
            [
                'name' => 'Frameworks',
                'icon' => 'fas fa-cogs',
                'skills' => [
                    ['name' => 'Spring Boot'],
                    ['name' => 'Laravel'],
                    ['name' => 'Laminas'],
                    ['name' => 'jQuery']
                ]
            ],
            [
                'name' => 'Front-end',
                'icon' => 'fas fa-paint-brush',
                'skills' => [
                    ['name' => 'HTML5'],
                    ['name' => 'CSS3'],
                    ['name' => 'Tailwind'],
                    ['name' => 'Bootstrap']
                ]
            ],
            [
                'name' => 'Banco de Dados',
                'icon' => 'fas fa-database',
                'skills' => [
                    ['name' => 'MySQL'],
                    ['name' => 'Oracle'],
                    ['name' => 'PostgreSQL'],
                    ['name' => 'SQL Server']
                ]
            ],
            [
                'name' => 'Ferramentas',
                'icon' => 'fas fa-tools',
                'skills' => [
                    ['name' => 'Git'],
                    ['name' => 'Docker'],
                    ['name' => 'Postman']
                ]
            ],
            [
                'name' => 'Cloud & IoT',
                'icon' => 'fas fa-cloud',
                'skills' => [
                    ['name' => 'AWS'],
                    ['name' => 'Azure'],
                    ['name' => 'Arduino'],
                    ['name' => 'MQTT']
                ]
            ]
        ]" />
    </section>

    <section id="projects" class="py-20 bg-gray-50">
        <x-projects :projects="[
        ['name' => 'Bet-atleticas', 'description' => 'Sistema MVC feito com Laravel apenas para fins didáticos que simula apostas esportivas nas competições entre atléticas universitarias', 'url' => 'https://github.com/codebyazeredo/bet-atleticas', 'status' => 'Em andamento'],
        ['name' => 'EasyFuel-API', 'description' => 'Api em JAVA para um aplicativo mobile com foco em consultar preços mais baratos de combustíveis na sua região', 'url' => 'https://github.com/codebyazeredo/easyfuel-api', 'status' => 'Em andamento'],
        ['name' => 'oracle-notas-fiscais', 'description' => 'Microsserviço em Javascript para busca e captura de dados de determinadas notas fiscais integrado no banco oracle (utilizando em ambiente real com suas devidas alterações)', 'url' => 'https://github.com/codebyazeredo/oracle-notas-fiscais', 'status' => 'Finalizado']
    ]" />
    </section>

    <section id="contact" class="py-20 gradient-bg">
        <x-contact :contacts="[
        ['label' => 'Email', 'value' => 'matheus.azeredo@hotmail.com', 'href' => 'mailto:matheus.azeredo@hotmail.com', 'icon' => 'fas fa-envelope'],
        ['label' => 'Telefone ou Whatsapp', 'value' => '+55 48 99803-3577', 'href' => 'https://wa.me/5548998033577?text=Ol%C3%A1%2C%20vi%20seu%20portif%C3%B3lio%20e%20gostaria%20de%20entrar%20em%20contato', 'icon' => 'fas fa-phone'],
        ['label' => 'Localização', 'value' => 'Criciúma, SC', 'icon' => 'fas fa-map-marker-alt']
    ]" :socials="[
        ['href' => 'https://linkedin.com/in/codebyazeredo', 'icon' => 'fab fa-linkedin'],
        ['href' => 'https://github.com/codebyazeredo', 'icon' => 'fab fa-github']
    ]" />
    </section>

    <x-footer :links="[
        ['label' => 'Início', 'href' => '#home'],
        ['label' => 'Sobre', 'href' => '#about'],
        ['label' => 'Experiência', 'href' => '#experience'],
        ['label' => 'Habilidades', 'href' => '#skills'],
        ['label' => 'Contato', 'href' => '#contact'],
    ]" />

</body>

<script src="//unpkg.com/alpinejs" defer></script>