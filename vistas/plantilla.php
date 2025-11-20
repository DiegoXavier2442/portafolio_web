<?php
// AL INICIO DEL ARCHIVO plantilla.php (antes del HTML)
require_once "controladores/formulario.controlador.php";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Xavier Barros Conde - Portafolio Frontend</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Chakra Petch', 'sans-serif'],
                    }
                }
            }
        }
    </script>

 


</head>
<body class="bg-[#151515]">

<!-- Navigation Bar Desktop -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#1F1F1F]/95 backdrop-blur-md border-b border-[#3A3A3A]/50 shadow-lg hidden md:block">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-16 lg:h-20">
            
            <!-- Logo/Name -->
            <a href="#inicio" class="flex items-center gap-2 group">
                <span class="text-xl lg:text-2xl font-bold font-display text-white group-hover:text-[#FF7AC6] transition-colors duration-300">
                    DX<span class="text-[#00FFFF]">.</span>
                </span>
            </a>

            <!-- Desktop Navigation -->
            <ul class="flex items-center gap-2">
                <li>
                    <a 
                        href="#inicio" 
                        class="px-4 py-2 text-base text-[#B0B0B0] hover:text-white font-medium transition-colors duration-300 relative group"
                    >
                        <span class="relative z-10">Inicio</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] opacity-0 group-hover:opacity-10 rounded-lg transition-opacity duration-300"></span>
                    </a>
                </li>
                <li>
                    <a 
                        href="#proyectos" 
                        class="px-4 py-2 text-base text-[#B0B0B0] hover:text-white font-medium transition-colors duration-300 relative group"
                    >
                        <span class="relative z-10">Proyectos</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] opacity-0 group-hover:opacity-10 rounded-lg transition-opacity duration-300"></span>
                    </a>
                </li>
                <li>
                    <a 
                        href="#stack" 
                        class="px-4 py-2 text-base text-[#B0B0B0] hover:text-white font-medium transition-colors duration-300 relative group"
                    >
                        <span class="relative z-10">Stack</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] opacity-0 group-hover:opacity-10 rounded-lg transition-opacity duration-300"></span>
                    </a>
                </li>
                <li>
                    <a 
                        href="#educacion" 
                        class="px-4 py-2 text-base text-[#B0B0B0] hover:text-white font-medium transition-colors duration-300 relative group"
                    >
                        <span class="relative z-10">Educación</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] opacity-0 group-hover:opacity-10 rounded-lg transition-opacity duration-300"></span>
                    </a>
                </li>
                <li>
                    <a 
                        href="#contacto" 
                        class="ml-2 group relative inline-flex items-center justify-center gap-2 px-5 py-2 rounded-lg font-semibold text-sm text-white bg-[#282828] border-2 border-transparent overflow-hidden transition-all duration-300 hover:scale-105"
                    >
                        <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] -z-10"></span>
                        <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                        <span class="relative z-10">Contacto</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Bottom Navigation -->
<nav class="fixed bottom-0 left-0 right-0 z-50 bg-[#1F1F1F]/95 backdrop-blur-md border-t border-[#3A3A3A]/50 shadow-lg md:hidden">
    <div class="container mx-auto px-2">
        <ul class="flex items-center justify-around h-16">
            <li class="flex-1">
                <a 
                    href="#inicio" 
                    class="nav-link flex flex-col items-center justify-center gap-1 py-2 text-[#B0B0B0] hover:text-[#FF7AC6] transition-colors duration-300"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="text-xs font-medium">Inicio</span>
                </a>
            </li>
            <li class="flex-1">
                <a 
                    href="#proyectos" 
                    class="nav-link flex flex-col items-center justify-center gap-1 py-2 text-[#B0B0B0] hover:text-[#FF7AC6] transition-colors duration-300"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span class="text-xs font-medium">Proyectos</span>
                </a>
            </li>
            <li class="flex-1">
                <a 
                    href="#stack" 
                    class="nav-link flex flex-col items-center justify-center gap-1 py-2 text-[#B0B0B0] hover:text-[#00FFFF] transition-colors duration-300"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    <span class="text-xs font-medium">Stack</span>
                </a>
            </li>
            <li class="flex-1">
                <a 
                    href="#educacion" 
                    class="nav-link flex flex-col items-center justify-center gap-1 py-2 text-[#B0B0B0] hover:text-[#00FFFF] transition-colors duration-300"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="text-xs font-medium">Educación</span>
                </a>
            </li>
            <li class="flex-1">
                <a 
                    href="#contacto" 
                    class="nav-link flex flex-col items-center justify-center gap-1 py-2 text-[#B0B0B0] hover:text-[#FF7AC6] transition-colors duration-300"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-xs font-semibold">Contacto</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Spacer para compensar el navbar fixed -->
<div class="h-16 lg:h-20 hidden md:block"></div>
<div class="h-16 md:hidden"></div>



    <!-- Hero Section -->
    <div class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-24" id="inicio" >
        <div class="flex flex-col lg:flex-row-reverse items-start gap-6 sm:gap-8 lg:gap-12 max-w-6xl mx-auto">
            
            <!-- Header: Profile Image + Badge (Mobile & Tablet) -->
            <div class="flex items-center gap-3 lg:hidden w-full">
                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full overflow-hidden border-2 border-[#B0B0B0] shadow-xl shadow-[#FFFFFF]/10 transition-transform duration-300 hover:scale-105 flex-shrink-0">
                    <img 
                        src="diego_xavier.jpg" 
                        alt="Diego Xavier Barros Conde"
                        class="w-full h-full object-cover"
                    />
                </div>
                <a 
                    href="https://www.linkedin.com/in/tu-perfil-linkedin" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="group relative inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg font-semibold text-xs sm:text-sm text-white bg-[#282828] border-2 border-transparent overflow-hidden transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl whitespace-nowrap"
                    style="background-clip: padding-box;"
                >
                    <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] -z-10"></span>
                    <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                    <span class="relative z-10">
                        Disponible para trabajar
                    </span>
                </a>
            </div>

            <!-- Profile Image (Desktop only) -->
            <div class="hidden lg:block flex-shrink-0">
                <div class="w-80 h-80 rounded-full overflow-hidden border-4 border-[#B0B0B0] shadow-2xl shadow-[#FFFFFF]/10 transition-transform duration-300 hover:scale-105 object-center">
                    <img 
                        src="diego_xavier.jpg" 
                        alt="Diego Xavier Barros Conde"
                        class="w-full h-full object-cover "
                    />
                </div>
            </div>

            <!-- Hero Content -->
            <div class="flex-1 w-full lg:text-left">
                <!-- Badge (Desktop only) -->
                <a 
                    href="https://www.linkedin.com/in/tu-perfil-linkedin" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="hidden lg:inline-flex group relative items-center justify-center gap-2 px-4 py-2 rounded-lg font-semibold text-sm text-white bg-[#282828] border-2 border-transparent overflow-hidden transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl mb-6"
                    style="background-clip: padding-box;"
                >
                    <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] -z-10"></span>
                    <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                    <span class="relative z-10">
                        Disponible para trabajar
                    </span>
                </a>
                
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-display text-white mb-4 sm:mb-6 leading-tight">
                    Hey, soy <span class="bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] bg-clip-text text-transparent">Diego Xavier</span>
                </h1>
                
                <p class="text-lg sm:text-xl text-[#B0B0B0] mb-3 sm:mb-4">
                    Estudiante de <span class="text-white font-semibold">Tecnologías de la Información</span> en la UTPL
                </p>
                
                <p class="text-base sm:text-lg text-[#B0B0B0] mb-6 sm:mb-8 max-w-2xl lg:mx-0">
                    Desarrollador Frontend con experiencia en HTML5, CSS3, Bootstrap, PHP y MySQL. 
                    Especializado en crear interfaces web responsivas y accesibles con atención al detalle y enfoque en la experiencia de usuario.

                </p>

                <p class="text-base sm:text-lg text-[#B0B0B0] mb-6 sm:mb-8 max-w-2xl lg:mx-0">
                    Apasionado por el trabajo y obsesionado con aprender. 
                    Siempre buscando nuevos desafíos que me impulsen a superarme.
                    
                </p>
                <p class="text-base sm:text-lg text-[#B0B0B0] mb-6 sm:mb-8 max-w-2xl lg:mx-0">
                   En mis ratos libres me gusta jugar videojuegos principalmente CS:GO. 
                   Esta página está inspirada en el estilo del arma Printstream. 
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-3 sm:gap-4 lg:justify-start">
                    <a
                        href="mailto:diegoxavier20022020@gmail.com"
                        class="group relative inline-flex items-center justify-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-semibold text-sm sm:text-base text-white bg-[#282828] border-2 border-transparent overflow-hidden transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
                        style="background-clip: padding-box;"
                    >
                        <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] -z-10"></span>
                        <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                        <span class="relative flex items-center gap-2 z-10 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            Contáctame
                        </span>
                    </a>

                    <a
                        href="https://github.com/DiegoXavier2442"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group relative inline-flex items-center justify-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-semibold text-sm sm:text-base text-white bg-[#282828] border-2 border-[#3A3A3A] overflow-hidden transition-all duration-300 hover:scale-105 hover:border-transparent shadow-lg hover:shadow-xl"
                        style="background-clip: padding-box;"
                    >
                        <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></span>
                        <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                        <span class="relative flex items-center gap-2 z-10 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                                <path d="M9 18c-4.51 2-5-2-7-2"/>
                            </svg>
                            GitHub
                        </span>
                    </a>

                    <a
                        href="CV - Diego Xavier Barros Conde_Machala.pdf"
                        download="CV_Diego_Xavier_Barros_Conde.pdf"
                        class="group relative inline-flex items-center justify-center gap-2 px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-semibold text-sm sm:text-base text-white bg-[#282828] border-2 border-[#3A3A3A] overflow-hidden transition-all duration-300 hover:scale-105 hover:border-transparent shadow-lg hover:shadow-xl"
                        style="background-clip: padding-box;"
                    >
                        <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#00FFFF] to-[#FF7AC6] opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></span>
                        <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                        <span class="relative flex items-center gap-2 z-10 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="7 10 12 15 17 10"/>
                                <line x1="12" x2="12" y1="15" y2="3"/>
                            </svg>
                            Descargar CV
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="flex justify-center py-4">
        <svg class="w-5 h-5 sm:w-6 sm:h-6 animate-bounce text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1v12m0 0 4-4m-4 4L1 9"/>
        </svg>
    </div>

    <!-- Projects Section -->
    <div class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-24" id="proyectos">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white mb-8 sm:mb-12 text-center">
               <span class="text-[#FF7AC6]">&lt;</span> Proyectos <span class="text-[#00FFFF]">/&gt;</span>
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Proyecto 1 -->
                <article class="group bg-[#282828] rounded-xl overflow-hidden border-2 border-[#3A3A3A] hover:border-[#FF7AC6] transition-all duration-300 shadow-md hover:shadow-[#FF7AC6]/30 hover:scale-[1.02]">
                    <a href="#modal1-img1" class="relative block overflow-hidden aspect-video bg-[#1F1F1F] cursor-zoom-in">
                        <img 
                            src="img/proyecto_blog1.jpg"
                            alt="Blog MVC - Proyecto completo"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                        />
                    </a>
                    
                    <div class="p-5 sm:p-6 relative">
                        <h3 class="text-lg sm:text-xl font-bold font-display text-white mb-2">
                            Blog MVC Dinámico
                        </h3>
                        <p class="text-[#B0B0B0] text-sm sm:text-base mb-4">
                            Blog dinámico desarrollado con arquitectura MVC, sistema de autenticación de usuarios y gestión de contenido mediante panel administrativo seguro.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-[#1F1F1F] text-[#01ff16] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">PÚBLICO</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">HTML5</span>
                            <span class="bg-[#1F1F1F] text-[#00FFFF] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">PHP</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">SQL</span>
                            <span class="bg-[#1F1F1F] text-[#00FFFF] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">Bootstrap</span>
                        </div>

                        <a 
                            href="https://github.com/DiegoXavier2442/blog_securyte"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 text-[#FF7AC6] hover:text-[#00FFFF] transition-colors duration-300 text-sm font-semibold"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                                <path d="M9 18c-4.51 2-5-2-7-2"/>
                            </svg>
                            Ver repositorio
                        </a>
                    </div>
                </article>

                <!-- Proyecto 2 -->
                <article class="group bg-[#282828] rounded-xl overflow-hidden border-2 border-[#3A3A3A] hover:border-[#00FFFF] transition-all duration-300 shadow-md hover:shadow-[#00FFFF]/30 hover:scale-[1.02]">
                    <a href="#modal2-img1" class="relative block overflow-hidden aspect-video bg-[#1F1F1F] cursor-zoom-in">
                        <img 
                            src="img/Portafolio_web.jpg"
                            alt="Portafolio Web Personal"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                        />
                    </a>
                    
                    <div class="p-5 sm:p-6 relative">
                        <h3 class="text-lg sm:text-xl font-bold font-display text-white mb-2">
                            Portafolio Web Personal
                        </h3>
                        <p class="text-[#B0B0B0] text-sm sm:text-base mb-4">
                            Portafolio personal responsivo que muestra proyectos y habilidades técnicas con diseño moderno inspirado en la estética CS2 Printstream.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-[#1F1F1F] text-[#01ff16] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">PÚBLICO</span>
                            <span class="bg-[#1F1F1F] text-[#00FFFF] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">HTML</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">PHP</span>
                            <span class="bg-[#1F1F1F] text-[#00FFFF] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">SQL</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">Tailwind</span>
                        </div>

                        <a 
                            href="https://github.com/DiegoXavier2442/portafolio_web"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 text-[#00FFFF] hover:text-[#FF7AC6] transition-colors duration-300 text-sm font-semibold"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                                <path d="M9 18c-4.51 2-5-2-7-2"/>
                            </svg>
                            Ver repositorio
                        </a>
                    </div>
                </article>

                <!-- Proyecto 3 -->
                <article class="group bg-[#282828] rounded-xl overflow-hidden border-2 border-[#3A3A3A] hover:border-[#FF7AC6] transition-all duration-300 shadow-md hover:shadow-[#FF7AC6]/30 hover:scale-[1.02]">
                    <a href="#modal3-img1" class="relative block overflow-hidden aspect-video bg-[#1F1F1F] cursor-zoom-in">
                        <img 
                            src="img/Imagen1.png"
                            alt="Editor Monaco - Implementación"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                        />
                    </a>
                    
                    <div class="p-5 sm:p-6 relative">
                        <h3 class="text-lg sm:text-xl font-bold font-display text-white mb-2">
                            Implementación – Editor de código Monaco
                        </h3>
                        <p class="text-[#B0B0B0] text-sm sm:text-base mb-4">
                            Editor de código Monaco con funcionalidades avanzadas: resaltado de sintaxis, autocompletado y soporte multi-lenguaje.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-[#1F1F1F] text-[#ff0000] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">PRIVADO</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">HTML5</span>
                            <span class="bg-[#1F1F1F] text-[#00FFFF] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">JavaScript</span>
                            <span class="bg-[#1F1F1F] text-[#FF7AC6] px-3 py-1 rounded-full text-xs font-medium border border-[#3A3A3A]">CSS3</span>
                        </div>

                        <div class="inline-flex items-center gap-2 text-[#B0B0B0] text-sm font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            Repositorio privado
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

   <div class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-24 bg-gradient-to-b "id="stack">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white mb-4 text-center">
            Stack <span class="bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] bg-clip-text text-transparent">Tecnológico</span>
        </h2>
        <p class="text-center text-[#B0B0B0] mb-12 max-w-2xl mx-auto">
            Tecnologías y herramientas que domino para crear soluciones web completas
        </p>

       <!-- Grid de categorías -->
<div class="grid md:grid-cols-2 gap-8" >
    <!-- Frontend -->
    <div class="bg-[#282828] rounded-xl p-6 sm:p-8 border-2 border-[#3A3A3A] hover:border-[#FF7AC6] transition-all duration-300 shadow-lg">
        <h3 class="text-xl sm:text-2xl font-bold font-display text-white mb-6 flex items-center gap-2">
            <span class="text-[#FF7AC6]">&lt;</span>
            Frontend
            <span class="text-[#FF7AC6]">/&gt;</span>
        </h3>
        <div class="grid grid-cols-3 gap-4">
            <!-- HTML5 -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">HTML5</span>
            </div>

            <!-- CSS3 -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">CSS3</span>
            </div>

            <!-- Tailwind -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Tailwind</span>
            </div>

            <!-- Bootstrap -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Bootstrap</span>
            </div>
        </div>
    </div>

    <!-- Backend -->
    <div class="bg-[#282828] rounded-xl p-6 sm:p-8 border-2 border-[#3A3A3A] hover:border-[#00FFFF] transition-all duration-300 shadow-lg">
        <h3 class="text-xl sm:text-2xl font-bold font-display text-white mb-6 flex items-center gap-2">
            <span class="text-[#00FFFF]">{</span>
            Backend
            <span class="text-[#00FFFF]">}</span>
        </h3>
        <div class="grid grid-cols-3 gap-4">
            <!-- PHP -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">PHP</span>
            </div>

            <!-- MySQL -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">MySQL</span>
            </div>
        </div>
    </div>

    <!-- Herramientas -->
    <div class="bg-[#282828] rounded-xl p-6 sm:p-8 border-2 border-[#3A3A3A] hover:border-[#FF7AC6] transition-all duration-300 shadow-lg">
        <h3 class="text-xl sm:text-2xl font-bold font-display text-white mb-6 flex items-center gap-2">
            <span class="text-[#FF7AC6]">&lt;</span>
            Herramientas
            <span class="text-[#FF7AC6]">/&gt;</span>
        </h3>
        <div class="grid grid-cols-3 gap-4">
            <!-- Git -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Git</span>
            </div>

            <!-- GitHub -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" class="w-full h-full invert"/>
                </div>
                <span class="text-white text-xs font-semibold">GitHub</span>
            </div>

            <!-- VS Code -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">VS Code</span>
            </div>

            <!-- Figma -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Figma</span>
            </div>
        </div>
    </div>

    <!-- Aprendiendo -->
    <div class="bg-[#282828] rounded-xl p-6 sm:p-8 border-2 border-[#3A3A3A] hover:border-[#00FFFF] transition-all duration-300 shadow-lg">
        <h3 class="text-xl sm:text-2xl font-bold font-display text-white mb-6 flex items-center gap-2">
            <span class="text-[#00FFFF]">(</span>
            Aprendiendo
            <span class="text-[#00FFFF]">)</span>  
        </h3>
        <div class="grid grid-cols-3 gap-4">
            <!-- JavaScript -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">JavaScript</span>
            </div>

            <!-- React -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">React</span>
            </div>

            <!-- Java -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Java</span>
            </div>

            <!-- Laravel -->
            <div class="group flex flex-col items-center gap-2 p-3 rounded-lg bg-[#1F1F1F] hover:bg-[#3A3A3A] transition-all duration-300 hover:scale-105">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-full h-full"/>
                </div>
                <span class="text-white text-xs font-semibold">Laravel</span>
            </div>
        </div>
    </div>
</div>


    </div>            
</div>
                 
    <!-- Modales Proyecto 1 -->
    <div id="modal1-img1" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal1-img3" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/proyecto_blog1.jpg" 
                alt="Blog MVC - Vista principal"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal1-img2" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                1 / 3
            </div>
        </div>
    </div>

    <div id="modal1-img2" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal1-img1" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/proyecto_blog2.jpg" 
                alt="Blog MVC - Panel admin"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal1-img3" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                2 / 3
            </div>
        </div>
    </div>

    <div id="modal1-img3" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal1-img2" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/proyecto_blog3.jpg" 
                alt="Blog MVC - Sistema de posts"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal1-img1" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                3 / 3
            </div>
        </div>
    </div>

    <!-- Modales Proyecto 2 -->
    <div id="modal2-img1" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal2-img3" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/Portafolio_web.jpg" 
                alt="Portafolio Web - Vista completa"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal2-img2" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                1 / 3
            </div>
        </div>
    </div>

    <div id="modal2-img2" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal2-img1" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/portafolio_web2.jpg" 
                alt="Portafolio Web - Sección proyectos"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal2-img3" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                2 / 3
            </div>
        </div>
    </div>

    <div id="modal2-img3" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center group">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <a href="#modal2-img2" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            
            <img 
                src="img/portafolio_web3.jpg" 
                alt="Portafolio Web - Responsive"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
            
            <a href="#modal2-img1" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white/50 hover:text-white rounded-full p-2 sm:p-3 transition-all duration-300 opacity-0 group-hover:opacity-100 z-10">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/30 text-white/70 px-3 py-1.5 rounded-full text-xs font-medium">
                3 / 3
            </div>
        </div>
    </div>

    <!-- Modal Proyecto 3 -->
    <div id="modal3-img1" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden target:flex items-center justify-center p-4">
        <div class="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center">
            <a href="#" class="absolute -top-10 sm:-top-12 right-0 text-white/60 hover:text-white transition-colors duration-300 z-20">
                <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
            
            <img 
                src="img/Imagen1.png" 
                alt="Editor Monaco - Vista completa"
                class="w-full h-full object-contain rounded-lg border-2 border-white/10 shadow-2xl"
            />
        </div>
    </div>

    

    <!-- Education Section -->
    <div class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-2" id="educacion">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white mb-8 sm:mb-12 text-center">
                Educación
            </h2>

            <div class="bg-[#282828] rounded-xl p-5 sm:p-6 lg:p-8 border-2 border-[#3A3A3A] max-w-3xl mx-auto shadow-md hover:border-[#FF7AC6] transition-all duration-300 hover:shadow-[#FF7AC6]/30 hover:scale-[1.02]">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4 gap-2">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-bold font-display text-white mb-2">
                            Universidad Técnica Particular de Loja (UTPL)
                        </h3>
                        <p class="text-white font-semibold text-base sm:text-lg">Tecnologías de la Información</p>
                        <p class="text-[#B0B0B0] text-sm sm:text-base">Loja, Ecuador</p>
                    </div>
                    <span class="text-[#B0B0B0] font-semibold text-sm sm:text-base whitespace-nowrap">5.º Ciclo</span>
                </div>
                <div class="mt-4 sm:mt-6">
                    <p class="text-white font-semibold mb-2 text-sm sm:text-base">Materias cursadas:</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-[#1F1F1F] text-[#B0B0B0] px-3 py-1 rounded-full text-xs sm:text-sm border border-[#3A3A3A]">Programación Web</span>
                        <span class="bg-[#1F1F1F] text-[#B0B0B0] px-3 py-1 rounded-full text-xs sm:text-sm border border-[#3A3A3A]">Fundamentos de BD</span>
                        <span class="bg-[#1F1F1F] text-[#B0B0B0] px-3 py-1 rounded-full text-xs sm:text-sm border border-[#3A3A3A]">Algoritmos</span>
                        <span class="bg-[#1F1F1F] text-[#B0B0B0] px-3 py-1 rounded-full text-xs sm:text-sm border border-[#3A3A3A]">Ingeniería de Software</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
<section  id="contacto" aria-label="Contacto" class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-24">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white mb-4 text-center">
            <span class="text-[#FF7AC6]">&lt;</span> Contacto <span class="text-[#00FFFF]">/&gt;</span>
        </h2>
        <p class="text-center text-[#B0B0B0] mb-8 sm:mb-12 max-w-2xl mx-auto">
            ¿Tienes un proyecto en mente? Escríbeme y trabajemos juntos
        </p>

        <div class="bg-[#282828] rounded-xl p-6 sm:p-8 lg:p-10 border-2 border-[#3A3A3A] shadow-lg hover:border-[#FF7AC6] transition-all duration-300">
    
    <?php
    $csrfToken = ControladorFormularios::ctrGenerarTokenCSRF();
    
    // MOSTRAR MENSAJES
    if(isset($mensajeFormulario)) {
        if($mensajeFormulario == "exito") {
            echo '
            <div class="mb-6 flex items-start p-4 bg-gradient-to-r from-[#00FFFF]/10 to-[#00FFFF]/5 border-2 border-[#00FFFF] rounded-lg animate-pulse">
                <svg class="w-6 h-6 text-[#00FFFF] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <h3 class="text-[#00FFFF] font-bold text-lg">¡Mensaje enviado!</h3>
                    <p class="text-white mt-1">Tu mensaje ha sido enviado correctamente. Te responderé pronto.</p>
                </div>
            </div>';
        } elseif($mensajeFormulario == "spam") {
            echo '
            <div class="mb-6 flex items-start p-4 bg-gradient-to-r from-[#FF7AC6]/10 to-[#FF7AC6]/5 border-2 border-[#FF7AC6] rounded-lg">
                <svg class="w-6 h-6 text-[#FF7AC6] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <h3 class="text-[#FF7AC6] font-bold text-lg">Espera un momento</h3>
                    <p class="text-white mt-1">Por favor espera 5 minutos antes de enviar otro mensaje.</p>
                </div>
            </div>';
        } elseif($mensajeFormulario == "error" || $mensajeFormulario == "validacion_error") {
            echo '
            <div class="mb-6 flex items-start p-4 bg-gradient-to-r from-red-500/10 to-red-500/5 border-2 border-red-500 rounded-lg">
                <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <h3 class="text-red-500 font-bold text-lg">Error</h3>
                    <p class="text-white mt-1">Verifica que todos los campos estén correctos e intenta de nuevo.</p>
                </div>
            </div>';
        } elseif($mensajeFormulario == "csrf_error") {
            echo '
            <div class="mb-6 flex items-start p-4 bg-gradient-to-r from-red-500/10 to-red-500/5 border-2 border-red-500 rounded-lg">
                <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <div>
                    <h3 class="text-red-500 font-bold text-lg">Error de seguridad</h3>
                    <p class="text-white mt-1">Token inválido. Por favor recarga la página.</p>
                </div>
            </div>';
        }
    }
    ?>
    
   <form method="POST" action="index.php#formulario-contacto" class="space-y-6">
    <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
        
        <!-- Nombre -->
        <div>
            <label for="nombre" class="block text-white font-semibold mb-2 text-sm sm:text-base">
                Nombre completo <span class="text-[#FF7AC6]">*</span>
            </label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre_completo" 
                required
                value="<?php echo ($mensajeFormulario == 'exito') ? '' : (isset($_POST['nombre_completo']) ? htmlspecialchars($_POST['nombre_completo']) : ''); ?>"
                placeholder="Tu nombre"
                class="w-full px-4 py-3 bg-[#1F1F1F] border-2 border-[#3A3A3A] rounded-lg text-white placeholder-[#B0B0B0] focus:border-[#FF7AC6] focus:outline-none transition-colors duration-300"
            />
        </div>

        <!-- Correo -->
        <div>
            <label for="correo" class="block text-white font-semibold mb-2 text-sm sm:text-base">
                Correo electrónico <span class="text-[#FF7AC6]">*</span>
            </label>
            <input 
                type="email" 
                id="correo" 
                name="email" 
                required
                value="<?php echo ($mensajeFormulario == 'exito') ? '' : (isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''); ?>"
                placeholder="tu@email.com"
                class="w-full px-4 py-3 bg-[#1F1F1F] border-2 border-[#3A3A3A] rounded-lg text-white placeholder-[#B0B0B0] focus:border-[#00FFFF] focus:outline-none transition-colors duration-300"
            />
        </div>

        <!-- Asunto -->
        <div>
            <label for="asunto" class="block text-white font-semibold mb-2 text-sm sm:text-base">
                Asunto <span class="text-[#FF7AC6]">*</span>
            </label>
            <input 
                type="text" 
                id="asunto" 
                name="asunto" 
                required
                value="<?php echo ($mensajeFormulario == 'exito') ? '' : (isset($_POST['asunto']) ? htmlspecialchars($_POST['asunto']) : ''); ?>"
                placeholder="¿Sobre qué quieres hablar?"
                class="w-full px-4 py-3 bg-[#1F1F1F] border-2 border-[#3A3A3A] rounded-lg text-white placeholder-[#B0B0B0] focus:border-[#FF7AC6] focus:outline-none transition-colors duration-300"
            />
        </div>

        <!-- Descripción -->
        <div>
            <label for="descripcion" class="block text-white font-semibold mb-2 text-sm sm:text-base">
                Descripción <span class="text-[#FF7AC6]">*</span>
            </label>
            <textarea 
                id="descripcion" 
                name="descripcion" 
                required
                rows="6"
                placeholder="Cuéntame más sobre tu proyecto o consulta..."
                class="w-full px-4 py-3 bg-[#1F1F1F] border-2 border-[#3A3A3A] rounded-lg text-white placeholder-[#B0B0B0] focus:border-[#00FFFF] focus:outline-none transition-colors duration-300 resize-vertical"
            ><?php echo ($mensajeFormulario == 'exito') ? '' : (isset($_POST['descripcion']) ? htmlspecialchars($_POST['descripcion']) : ''); ?></textarea>
        </div>

        <!-- Botón Enviar -->
        <div class="flex justify-center sm:justify-start">
            <button 
                type="submit"
                class="group relative inline-flex items-center justify-center gap-2 px-8 py-3 rounded-lg font-semibold text-base text-white bg-[#282828] border-2 border-transparent overflow-hidden transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
            >
                <span class="absolute inset-0 rounded-lg p-[2px] bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] -z-10"></span>
                <span class="absolute inset-[2px] bg-[#282828] rounded-lg group-hover:bg-[#1F1F1F] transition-colors duration-300 -z-10"></span>
                <span class="relative flex items-center gap-2 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m22 2-7 20-4-9-9-4Z"/>
                        <path d="M22 2 11 13"/>
                    </svg>
                    Enviar mensaje
                </span>
            </button>
        </div>

    </form>
</div>


     
        
    </div>
</section>
   <!-- https://icon-sets.iconify.design/?query=VS+Code-->
    <!-- Footer -->
    <footer class="bg-[#1F1F1F] text-[#B0B0B0] text-center py-6 sm:py-8 mt-12 sm:mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <p class="text-sm sm:text-base">&copy; 2025 Diego Xavier Barros Conde. Todos los derechos reservados.</p>
            <p class="mt-2 text-xs sm:text-sm">Diseñado con <span class="bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] bg-clip-text text-transparent font-bold">❤️</span> y inspirado en <span class="bg-gradient-to-r from-[#FF7AC6] to-[#00FFFF] bg-clip-text text-transparent font-bold">CS2 Printstream</span>.</p>
        </div>
    </footer>

</body>
</html>
