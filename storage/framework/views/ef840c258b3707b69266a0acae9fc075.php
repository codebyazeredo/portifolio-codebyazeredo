<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus de Azeredo - Desenvolvedor Full Stack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/welcome.css', 'resources/js/welcome.js']); ?>
<?php
    date_default_timezone_set('America/Sao_Paulo');
    $hour = (int) date('H');
    if ($hour >= 5 && $hour < 12) {
        $greeting = 'Bom dia';
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = 'Boa tarde';
    } else {
        $greeting = 'Boa noite';
    }
?>

<body class="bg-gray-100">
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve(['logo' => 'images/logo.png','links' => [
        '#home' => 'Início',
        '#about' => 'Sobre',
        '#experience' => 'Experiência',
        '#skills' => 'Habilidades',
        '#projects' => 'Projetos',
        '#contact' => 'Contato'
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>

    <section id="home" class="gradient-bg min-h-screen flex items-center">
        <?php if (isset($component)) { $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $attributes; } ?>
<?php $component = App\View\Components\Hero::resolve(['name' => 'Matheus de Azeredo','title' => ''.e($greeting).', eu sou','subtitle' => 'Desenvolvedor de Software Full Stack Web com experiência técnica nas linguagens PHP, Java e JavaScript, além de Frameworks como Laravel, Laminas e Spring Boot.','location' => 'Criciúma, SC','ctaPrimary' => ['href' => '#contact', 'label' => 'Entre em Contato'],'ctaSecondary' => ['href' => 'https://github.com/codebyazeredo', 'label' => 'Ver Projetos no GitHub'],'socials' => [
                ['href' => 'https://linkedin.com/in/codebyazeredo', 'icon' => 'fab fa-linkedin'],
                ['href' => 'https://github.com/codebyazeredo', 'icon' => 'fab fa-github'],
                ['href' => 'mailto:matheus.azeredo.pro@gmail.com', 'icon' => 'fas fa-envelope']
            ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Hero::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $attributes = $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $component = $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
    </section>

    <section id="about" class="py-20 bg-white">
        <?php if (isset($component)) { $__componentOriginalcabc30373012b73333ffad1027234353 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcabc30373012b73333ffad1027234353 = $attributes; } ?>
<?php $component = App\View\Components\About::resolve(['title' => 'Sobre Mim','paragraphs' => [
                'Sou desenvolvedor Full Stack com experiência em aplicações web, atuando com Java (Spring Boot), PHP (Laravel, Laminas) e JavaScript.',
                'No front-end, desenvolvo interfaces modernas e responsivas utilizando HTML, CSS, Tailwind, Bootstrap e jQuery e Javascript. No back-end, Desenvolvo desde o zero APIs REST, microsserviços e soluções em tempo real com WebSockets, integrando bancos de dados relacionais como MySQL, Oracle e SQL Server, além de trabalhar em ambientes cloud (AWS e Azure).',
                'Meu foco é sempre entregar soluções escaláveis, seguras e alinhadas às necessidades do cliente.'
            ],'skills' => [
                ['icon' => 'fas fa-database', 'label' => 'Modelagem & Bancos de Dados'],
                ['icon' => 'fas fa-code', 'label' => 'Desenvolvimento Back-end (PHP & Java)'],
                ['icon' => 'fas fa-laptop-code', 'label' => 'Desenvolvimento Front-end'],
                ['icon' => 'fas fa-project-diagram', 'label' => 'APIs REST & Integrações'],
                ['icon' => 'fas fa-shield-alt', 'label' => 'Boas Práticas & Segurança']
            ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\About::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcabc30373012b73333ffad1027234353)): ?>
<?php $attributes = $__attributesOriginalcabc30373012b73333ffad1027234353; ?>
<?php unset($__attributesOriginalcabc30373012b73333ffad1027234353); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcabc30373012b73333ffad1027234353)): ?>
<?php $component = $__componentOriginalcabc30373012b73333ffad1027234353; ?>
<?php unset($__componentOriginalcabc30373012b73333ffad1027234353); ?>
<?php endif; ?>
    </section>

    <section id="experience" class="py-20 bg-gray-100">
        <?php if (isset($component)) { $__componentOriginal0c669f320aeb206c46df99f7e6de67eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c669f320aeb206c46df99f7e6de67eb = $attributes; } ?>
<?php $component = App\View\Components\Experience::resolve(['experiences' => 
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
        ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('experience'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Experience::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c669f320aeb206c46df99f7e6de67eb)): ?>
<?php $attributes = $__attributesOriginal0c669f320aeb206c46df99f7e6de67eb; ?>
<?php unset($__attributesOriginal0c669f320aeb206c46df99f7e6de67eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c669f320aeb206c46df99f7e6de67eb)): ?>
<?php $component = $__componentOriginal0c669f320aeb206c46df99f7e6de67eb; ?>
<?php unset($__componentOriginal0c669f320aeb206c46df99f7e6de67eb); ?>
<?php endif; ?>
    </section>

    <section id="skills" class="py-20 bg-white">
        <?php if (isset($component)) { $__componentOriginal93c5b0c85d2de99823d99dc7a272a5e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93c5b0c85d2de99823d99dc7a272a5e9 = $attributes; } ?>
<?php $component = App\View\Components\Skills::resolve(['categories' => 
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
        ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('skills'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Skills::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93c5b0c85d2de99823d99dc7a272a5e9)): ?>
<?php $attributes = $__attributesOriginal93c5b0c85d2de99823d99dc7a272a5e9; ?>
<?php unset($__attributesOriginal93c5b0c85d2de99823d99dc7a272a5e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93c5b0c85d2de99823d99dc7a272a5e9)): ?>
<?php $component = $__componentOriginal93c5b0c85d2de99823d99dc7a272a5e9; ?>
<?php unset($__componentOriginal93c5b0c85d2de99823d99dc7a272a5e9); ?>
<?php endif; ?>
        
    </section>

    <section id="projects" class="py-20 bg-gray-50">
        <?php if (isset($component)) { $__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f = $attributes; } ?>
<?php $component = App\View\Components\Projects::resolve(['projects' => [
        ['name' => 'Bet-atleticas', 'description' => 'Sistema MVC feito com Laravel apenas para fins didáticos que simula apostas esportivas nas competições entre atléticas universitarias', 'url' => 'https://github.com/codebyazeredo/bet-atleticas', 'status' => 'Em andamento'],
        ['name' => 'EasyFuel-API', 'description' => 'Api em JAVA para um aplicativo mobile com foco em consultar preços mais baratos de combustíveis na sua região', 'url' => 'https://github.com/codebyazeredo/easyfuel-api', 'status' => 'Em andamento'],
        ['name' => 'oracle-notas-fiscais', 'description' => 'Microsserviço em Javascript para busca e captura de dados de determinadas notas fiscais integrado no banco oracle (utilizando em ambiente real com suas devidas alterações)', 'url' => 'https://github.com/codebyazeredo/oracle-notas-fiscais', 'status' => 'Finalizado']
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Projects::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f)): ?>
<?php $attributes = $__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f; ?>
<?php unset($__attributesOriginalaabcbc41a52d6e58374a1dab995b9e4f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f)): ?>
<?php $component = $__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f; ?>
<?php unset($__componentOriginalaabcbc41a52d6e58374a1dab995b9e4f); ?>
<?php endif; ?>
    </section>

    <section id="contact" class="py-20 gradient-bg">
        <?php if (isset($component)) { $__componentOriginal0f175370cc19626e362f7b4cb5002ea7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f175370cc19626e362f7b4cb5002ea7 = $attributes; } ?>
<?php $component = App\View\Components\Contact::resolve(['contacts' => [
        ['label' => 'Email', 'value' => 'matheus.azeredo@hotmail.com', 'href' => 'mailto:matheus.azeredo@hotmail.com', 'icon' => 'fas fa-envelope'],
        ['label' => 'Telefone ou Whatsapp', 'value' => '+55 48 99803-3577', 'href' => 'https://wa.me/5548998033577?text=Ol%C3%A1%2C%20vi%20seu%20portif%C3%B3lio%20e%20gostaria%20de%20entrar%20em%20contato', 'icon' => 'fas fa-phone'],
        ['label' => 'Localização', 'value' => 'Criciúma, SC', 'icon' => 'fas fa-map-marker-alt']
    ],'socials' => [
        ['href' => 'https://linkedin.com/in/codebyazeredo', 'icon' => 'fab fa-linkedin'],
        ['href' => 'https://github.com/codebyazeredo', 'icon' => 'fab fa-github'],
        ['href' => 'https://www.instagram.com/matheusaazeredo/#', 'icon' => 'fab fa-instagram'],
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Contact::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f175370cc19626e362f7b4cb5002ea7)): ?>
<?php $attributes = $__attributesOriginal0f175370cc19626e362f7b4cb5002ea7; ?>
<?php unset($__attributesOriginal0f175370cc19626e362f7b4cb5002ea7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f175370cc19626e362f7b4cb5002ea7)): ?>
<?php $component = $__componentOriginal0f175370cc19626e362f7b4cb5002ea7; ?>
<?php unset($__componentOriginal0f175370cc19626e362f7b4cb5002ea7); ?>
<?php endif; ?>
    </section>

    <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve(['links' => [
        ['label' => 'Início', 'href' => '#home'],
        ['label' => 'Sobre', 'href' => '#about'],
        ['label' => 'Experiência', 'href' => '#experience'],
        ['label' => 'Habilidades', 'href' => '#skills'],
        ['label' => 'Contato', 'href' => '#contact'],
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>

</body>

<script src="//unpkg.com/alpinejs" defer></script><?php /**PATH C:\laragon\www\portifolio-codebyazeredo\resources\views/welcome.blade.php ENDPATH**/ ?>