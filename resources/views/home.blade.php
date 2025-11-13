<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola Fundamental - Educação de Qualidade</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|nunito:400,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">E</span>
                </div>
                <span class="text-xl font-bold text-gray-800">Escola Fundamental</span>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#inicio" class="text-gray-700 hover:text-blue-600 transition">Início</a>
                <a href="#sobre" class="text-gray-700 hover:text-blue-600 transition">Sobre</a>
                <a href="#cursos" class="text-gray-700 hover:text-blue-600 transition">Cursos</a>
                <a href="#depoimentos" class="text-gray-700 hover:text-blue-600 transition">Depoimentos</a>
                <a href="#contato" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Contato</a>
            </div>
            <button class="md:hidden text-gray-700" id="mobile-menu-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white border-t" id="mobile-menu">
            <div class="container mx-auto px-4 py-4 flex flex-col space-y-3">
                <a href="#inicio" class="text-gray-700 hover:text-blue-600 transition">Início</a>
                <a href="#sobre" class="text-gray-700 hover:text-blue-600 transition">Sobre</a>
                <a href="#cursos" class="text-gray-700 hover:text-blue-600 transition">Cursos</a>
                <a href="#depoimentos" class="text-gray-700 hover:text-blue-600 transition">Depoimentos</a>
                <a href="#contato" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-center">Contato</a>
            </div>
        </div>
    </header>

    <!-- Hero Section - Z-Pattern Start -->
    <section id="inicio" class="pt-24 pb-12 md:pt-32 md:pb-20">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- Left: Hero Content -->
                <div class="animate-fade-in-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Educação de <span class="text-blue-600">Qualidade</span> para o Futuro
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8">
                        Formando cidadãos conscientes e preparados para os desafios do amanhã através de uma educação completa e humanizada.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contato" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition shadow-lg hover:shadow-xl">
                            Matricule-se Agora
                        </a>
                        <a href="#sobre" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-50 transition">
                            Conheça Nossa Escola
                        </a>
                    </div>
                </div>
                <!-- Right: Hero Image -->
                <div class="animate-fade-in-right">
                    <img 
                        src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=800&h=600&fit=crop" 
                        alt="Crianças estudando" 
                        class="w-full h-auto rounded-2xl shadow-2xl"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- About Section - Z-Pattern Continue -->
    <section id="sobre" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left: About Image -->
                <div class="order-2 md:order-1 animate-fade-in-left">
                    <img 
                        src="https://images.pexels.com/photos/159775/library-la-trobe-study-students-159775.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" 
                        alt="Sala de aula moderna" 
                        class="w-full h-auto rounded-2xl shadow-xl"
                        loading="lazy"
                    >
                </div>
                <!-- Right: About Content -->
                <div class="order-1 md:order-2 animate-fade-in-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Sobre Nossa <span class="text-green-600">Escola</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Há mais de 20 anos, nossa escola se dedica a oferecer uma educação de excelência, combinando tradição e inovação pedagógica.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Nossa missão é formar alunos críticos, criativos e éticos, preparados para enfrentar os desafios do século XXI com confiança e responsabilidade.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                            <div class="text-gray-700">Alunos</div>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg">
                            <div class="text-3xl font-bold text-green-600 mb-2">50+</div>
                            <div class="text-gray-700">Professores</div>
                        </div>
                        <div class="bg-yellow-50 p-6 rounded-lg">
                            <div class="text-3xl font-bold text-yellow-600 mb-2">20+</div>
                            <div class="text-gray-700">Anos de Experiência</div>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <div class="text-3xl font-bold text-purple-600 mb-2">15+</div>
                            <div class="text-gray-700">Cursos Oferecidos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="cursos" class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Nossos <span class="text-blue-600">Cursos</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Oferecemos uma ampla variedade de cursos para atender às necessidades educacionais de cada aluno.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up">
                    <img 
                        src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&h=400&fit=crop" 
                        alt="Educação Infantil" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Educação Infantil</h3>
                        <p class="text-gray-600 mb-4">Desenvolvimento integral da criança através de atividades lúdicas e criativas.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s">
                    <img 
                        src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&h=400&fit=crop" 
                        alt="Ensino Fundamental I" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ensino Fundamental I</h3>
                        <p class="text-gray-600 mb-4">Base sólida em português, matemática e ciências com metodologia inovadora.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
                <!-- Course Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s">
                    <img 
                        src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&h=400&fit=crop" 
                        alt="Ensino Fundamental II" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ensino Fundamental II</h3>
                        <p class="text-gray-600 mb-4">Preparação completa para o ensino médio com foco em todas as disciplinas.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
                <!-- Course Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.3s">
                    <img 
                        src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&h=400&fit=crop" 
                        alt="Atividades Extracurriculares" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Atividades Extracurriculares</h3>
                        <p class="text-gray-600 mb-4">Esportes, artes, música e muito mais para o desenvolvimento completo.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
                <!-- Course Card 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s">
                    <img 
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" 
                        alt="Aulas de Reforço" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Aulas de Reforço</h3>
                        <p class="text-gray-600 mb-4">Apoio individualizado para alunos que precisam de atenção especial.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
                <!-- Course Card 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.5s">
                    <img 
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop" 
                        alt="Programa Bilíngue" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Programa Bilíngue</h3>
                        <p class="text-gray-600 mb-4">Fluência em inglês desde cedo com metodologia internacional.</p>
                        <a href="#contato" class="text-blue-600 font-semibold hover:text-blue-700">Saiba mais →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="depoimentos" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    O que os <span class="text-green-600">Pais Dizem</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    A opinião de quem confia na nossa escola para a educação dos filhos.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg animate-fade-in-up">
                    <div class="flex items-center mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" 
                            alt="Maria Silva" 
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <div class="font-semibold text-gray-900">Maria Silva</div>
                            <div class="text-sm text-gray-600">Mãe da Ana</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "A escola superou todas as minhas expectativas. Minha filha está se desenvolvendo muito bem e adora ir para a escola todos os dias."
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        ★★★★★
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg animate-fade-in-up" style="animation-delay: 0.1s">
                    <div class="flex items-center mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" 
                            alt="João Santos" 
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <div class="font-semibold text-gray-900">João Santos</div>
                            <div class="text-sm text-gray-600">Pai do Pedro</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "Professores dedicados, estrutura excelente e metodologia inovadora. Recomendo sem hesitação!"
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        ★★★★★
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" 
                            alt="Carla Oliveira" 
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <div class="font-semibold text-gray-900">Carla Oliveira</div>
                            <div class="text-sm text-gray-600">Mãe da Sofia</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "A atenção individualizada e o carinho dos professores fazem toda a diferença. Minha filha está muito feliz!"
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        ★★★★★
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section - Z-Pattern End -->
    <section id="contato" class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Left: Contact Form -->
                <div class="animate-fade-in-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Entre em <span class="text-blue-600">Contato</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Preencha o formulário abaixo e nossa equipe entrará em contato o mais breve possível.
                    </p>
                    <form class="space-y-6">
                        <div>
                            <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome Completo</label>
                            <input 
                                type="text" 
                                id="nome" 
                                name="nome" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="Seu nome"
                            >
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="seu@email.com"
                            >
                        </div>
                        <div>
                            <label for="telefone" class="block text-gray-700 font-semibold mb-2">Telefone</label>
                            <input 
                                type="tel" 
                                id="telefone" 
                                name="telefone" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="(00) 00000-0000"
                            >
                        </div>
                        <div>
                            <label for="mensagem" class="block text-gray-700 font-semibold mb-2">Mensagem</label>
                            <textarea 
                                id="mensagem" 
                                name="mensagem" 
                                rows="4" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="Sua mensagem aqui..."
                            ></textarea>
                        </div>
                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition shadow-lg hover:shadow-xl"
                        >
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
                <!-- Right: Contact Info & Image -->
                <div class="animate-fade-in-right">
                    <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Informações de Contato</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Endereço</div>
                                    <div class="text-gray-600">Rua das Flores, 123<br>Centro - São Paulo, SP</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Telefone</div>
                                    <div class="text-gray-600">(11) 1234-5678</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">E-mail</div>
                                    <div class="text-gray-600">contato@escolafundamental.com.br</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img 
                        src="https://images.pexels.com/photos/159775/library-la-trobe-study-students-159775.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" 
                        alt="Escola moderna" 
                        class="w-full h-auto rounded-2xl shadow-xl"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">E</span>
                        </div>
                        <span class="text-xl font-bold">Escola Fundamental</span>
                    </div>
                    <p class="text-gray-400">
                        Educação de qualidade para formar cidadãos do futuro.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#inicio" class="hover:text-white transition">Início</a></li>
                        <li><a href="#sobre" class="hover:text-white transition">Sobre</a></li>
                        <li><a href="#cursos" class="hover:text-white transition">Cursos</a></li>
                        <li><a href="#contato" class="hover:text-white transition">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Cursos</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#cursos" class="hover:text-white transition">Educação Infantil</a></li>
                        <li><a href="#cursos" class="hover:text-white transition">Fundamental I</a></li>
                        <li><a href="#cursos" class="hover:text-white transition">Fundamental II</a></li>
                        <li><a href="#cursos" class="hover:text-white transition">Extracurriculares</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Redes Sociais</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Escola Fundamental. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>

