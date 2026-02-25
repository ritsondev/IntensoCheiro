<?php defined('CONTROL') or die('Acesso negado')?>
<!DOCTYPE html>
<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Convite Aceito | Intenso Cheiros</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f4c025",
                        "background-light": "#f8f8f5",
                        "background-dark": "#000000",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            background-color: #000000;
            overflow: hidden;
        }
        
        /* Particle Background Simulation */
        .particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: radial-gradient(circle, #f4c025 0%, rgba(244, 192, 37, 0) 70%);
            border-radius: 50%;
            opacity: 0.4;
            filter: blur(1px);
        }

        /* Gold Neon Glow Effect */
        .neon-border {
            box-shadow: 0 0 5px #f4c025, 0 0 15px rgba(244, 192, 37, 0.5);
            border: 1px solid #f4c025;
            transition: all 0.3s ease;
        }

        .neon-border:hover {
            box-shadow: 0 0 10px #f4c025, 0 0 30px rgba(244, 192, 37, 0.8);
            background-color: rgba(244, 192, 37, 0.1);
        }

        /* Subtle vertical drift simulation */
        @keyframes floatUp {
            from { transform: translateY(0); opacity: 0; }
            50% { opacity: 0.5; }
            to { transform: translateY(-100vh); opacity: 0; }
        }

        .particle-1 { width: 4px; height: 4px; left: 10%; bottom: -5%; animation: floatUp 15s linear infinite; }
        .particle-2 { width: 2px; height: 2px; left: 30%; bottom: -5%; animation: floatUp 20s linear infinite 2s; }
        .particle-3 { width: 5px; height: 5px; left: 50%; bottom: -5%; animation: floatUp 18s linear infinite 5s; }
        .particle-4 { width: 3px; height: 3px; left: 70%; bottom: -5%; animation: floatUp 25s linear infinite 1s; }
        .particle-5 { width: 4px; height: 4px; left: 90%; bottom: -5%; animation: floatUp 22s linear infinite 4s; }
        .particle-6 { width: 2px; height: 2px; left: 20%; bottom: -5%; animation: floatUp 12s linear infinite 7s; }
        .particle-7 { width: 6px; height: 6px; left: 80%; bottom: -5%; animation: floatUp 19s linear infinite 3s; }
        .particle-8 { width: 3px; height: 3px; left: 45%; bottom: -5%; animation: floatUp 28s linear infinite 8s; }
    </style>
</head>
<body class="font-display bg-background-dark text-white selection:bg-primary/30">
<!-- Background Elements -->
<div class="particles-container">
<div class="particle particle-1"></div>
<div class="particle particle-2"></div>
<div class="particle particle-3"></div>
<div class="particle particle-4"></div>
<div class="particle particle-5"></div>
<div class="particle particle-6"></div>
<div class="particle particle-7"></div>
<div class="particle particle-8"></div>
</div>
<!-- Main Content Wrapper -->
<div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6 text-center">
<!-- Luxury Confirmation Section -->
<div class="max-w-2xl w-full flex flex-col items-center space-y-8">
<!-- Success Mark -->
<div class="mb-2 opacity-80">
<span class="material-symbols-outlined text-primary text-5xl font-light">
                    verified
                </span>
</div>
<!-- Headline -->
<div class="space-y-4">
<h1 class="text-primary text-5xl md:text-7xl font-light tracking-[0.2em] uppercase leading-tight">
                    Convite Aceito
                </h1>
<div class="h-[1px] w-24 bg-primary/40 mx-auto"></div>
</div>
<!-- Message -->
<p class="text-white/70 text-lg md:text-xl font-extralight tracking-widest max-w-lg leading-relaxed">
                O seu e-mail foi registrado em nosso círculo restrito. 
                <span class="block mt-2">Você receberá nossas novidades em breve.</span>
</p>
<!-- Call to Action -->
<div class="pt-8">
<a href="index.php?page=collection">

<button class="neon-border flex min-w-[280px] cursor-pointer items-center justify-center rounded-none h-14 px-8 bg-transparent text-primary text-sm font-bold leading-normal tracking-[0.3em] uppercase group">
<span class="truncate">Explorar Fragrâncias</span>
<span class="material-symbols-outlined ml-2 text-primary transition-transform group-hover:translate-x-1">
                        arrow_forward
                    </span>
</button>

</a>
</div>
</div>
<!-- Atmospheric Image Overlay (Subtle Gradient/Texture) -->
<div class="fixed inset-0 pointer-events-none opacity-20" style="background: radial-gradient(circle at center, rgba(244, 192, 37, 0.05) 0%, transparent 70%);">
</div>
</div>
<!-- Background Sensory Element -->
<div class="fixed bottom-0 left-0 w-full h-1/3 opacity-30 pointer-events-none">
<div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Abstrato de fumaça dourada em fundo preto" style="background-image: linear-gradient(to top, #000, transparent), url('https://lh3.googleusercontent.com/aida-public/AB6AXuDiFnbmpLZiRNdFSeIbpBSrWGYp3Ri7lvr4WYUBz5-Qsana1HeMaFRVP2ZnEM_DkhEUeJUr3I40lfR8--IGETVk5cMkLFl0XVaLPjFR14kuqdbHPo3-ntl-tNI6qTyX_ZrunwUpJcWeUXHlr9vc-aRj4-WsUioQdhFVW-eRgisRgcrshvo4paLFUcDqbRjoHMxK0PHe-l8v1tozhgJNtYu7PBIeGrW4rG9hJ7r-sCF9F77JD2WQ3G-J3JBfEA7WUSK7qW6QUJFGBg');">
</div>
</div>