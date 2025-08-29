<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus de Azeredo - Desenvolvedor Full Stack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])
    <link rel="icon" type="png" sizes="32x32" href="{{ asset('images/icon.png') }}">
    
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
            subtitle="Desenvolvedor de Software Full Stack Web com experiência técnica nas linguagens PHP, Java e JavaScript, além de Frameworks como Laravel, Laminas e Spring Boot." 
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
            :paragraphs="[
                'Sou desenvolvedor Full Stack com experiência em aplicações web, atuando com Java (Spring Boot), PHP (Laravel, Laminas) e JavaScript.',
                'No front-end, desenvolvo interfaces modernas e responsivas utilizando HTML, CSS, Tailwind, Bootstrap e jQuery e Javascript. No back-end, Desenvolvo desde o zero APIs REST, microsserviços e soluções em tempo real com WebSockets, integrando bancos de dados relacionais como MySQL, Oracle e SQL Server, além de trabalhar em ambientes cloud (AWS e Azure).',
                'Meu foco é sempre entregar soluções escaláveis, seguras e alinhadas às necessidades do cliente.'
            ]"

            :skills="[
                ['icon' => 'fas fa-database', 'label' => 'Modelagem & Bancos de Dados'],
                ['icon' => 'fas fa-code', 'label' => 'Desenvolvimento Back-end (PHP & Java)'],
                ['icon' => 'fas fa-laptop-code', 'label' => 'Desenvolvimento Front-end'],
                ['icon' => 'fas fa-project-diagram', 'label' => 'APIs REST & Integrações'],
                ['icon' => 'fas fa-shield-alt', 'label' => 'Boas Práticas & Segurança']
            ]"    
        />
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
                    'Atuo ativamente no desenvolvimento de produto e manutenção evolutiva de sistemas web voltados à area da gestão pública',
                    'Uso de PHP, Java, MySQL, APIs REST, Laravel, Laminas, MySQL'
                ],
                'skills' => ['PHP', 'Java', 'Laravel', 'Laminas', 'MySQL', 'APIs REST']
            ],
            [
                'position' => 'Desenvolvedor de Software',
                'company' => 'Exon Sistemas e Consultoria',
                'status' => '',
                'period' => 'Período anterior',
                'mode' => 'Presencial',
                'description' => [
                    'Atuei no desenvolvimento e manutenção evolutiva de sistemas web voltados à indústrias de grande porte',
                    'Usei de PHP, Laravel, JavaScript, jQuery e SQL Server'
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
                    ['name' => 'PHP', 'level' => '90%', 'icon' => 'fab fa-php'],
                    ['name' => 'Java', 'level' => '85%', 'icon' => 'fab fa-java'],
                    ['name' => 'JavaScript', 'level' => '80%', 'icon' => 'fab fa-js'],
                ]
            ],
            [
                'name' => 'Frameworks',
                'icon' => 'fas fa-cogs',
                'skills' => [
                    ['name' => 'Spring Boot', 'icon' => 'fas fa-leaf'], 
                    ['name' => 'Laravel', 'icon' => 'fab fa-laravel'],
                    ['name' => 'Laminas', 'icon' => 'fas fa-stream'],   
                    ['name' => 'jQuery', 'icon' => 'fas fa-code'],      
                ]
            ],
            [
                'name' => 'Front-end',
                'icon' => 'fas fa-paint-brush',
                'skills' => [
                    ['name' => 'HTML5', 'icon' => 'fab fa-html5'],
                    ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt'],
                    ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap'],
                    ['name' => 'Tailwind', 'icon' => 'fas fa-wind'], 
                ]
            ],
            [
                'name' => 'Banco de Dados',
                'icon' => 'fas fa-database',
                'skills' => [
                    ['name' => 'MySQL', 'icon' => 'fas fa-database'],
                    ['name' => 'Oracle', 'icon' => 'fas fa-database'],
                    ['name' => 'PostgreSQL', 'icon' => 'fas fa-database'],
                    ['name' => 'SQL Server', 'icon' => 'fas fa-database'],
                ]
            ],
            [
                'name' => 'Ferramentas',
                'icon' => 'fas fa-tools',
                'skills' => [
                    ['name' => 'Git', 'icon' => 'fab fa-git-alt'],
                    ['name' => 'Docker', 'icon' => 'fab fa-docker'],
                    ['name' => 'Postman', 'icon' => 'fas fa-paper-plane'],
                ]
            ],
            [
                'name' => 'Cloud',
                'icon' => 'fas fa-cloud',
                'skills' => [
                    ['name' => 'AWS', 'icon' => 'fab fa-aws'],
                    ['name' => 'Azure', 'icon' => 'fab fa-microsoft'],
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
        ['href' => 'https://github.com/codebyazeredo', 'icon' => 'fab fa-github'],
        ['href' => 'https://www.instagram.com/matheusaazeredo/#', 'icon' => 'fab fa-instagram'],
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