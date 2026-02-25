<?php defined('CONTROL') or die('Acesso negado')?>
<!DOCTYPE html>

<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Limite de Mensagens Diário Luxo - Intenso Cheiros</title>
<!-- Google Fonts: Newsreader for Luxury Serif feel -->
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f4c025",
                        "background-light": "#f8f8f5",
                        "background-dark": "#000000", // Pure black as requested
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"]
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
        .gold-neon-glow {
            text-shadow: 0 0 10px rgba(244, 192, 37, 0.5), 0 0 20px rgba(244, 192, 37, 0.3);
        }
        .gold-button-glow {
            box-shadow: 0 0 15px rgba(244, 192, 37, 0.4);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 48;
        }
    </style>
</head>
<body class="bg-background-dark text-slate-100 font-display selection:bg-primary selection:text-background-dark">
<div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-hidden bg-background-dark">
<!-- Background decorative element: subtle gradient to break total flat black -->
<div class="absolute inset-0 bg-gradient-to-b from-primary/5 to-transparent pointer-events-none"></div>
<div class="layout-container relative z-10 flex h-full grow flex-col items-center justify-center px-6 py-12">
<div class="layout-content-container flex flex-col max-w-[640px] w-full items-center text-center">
<!-- Central Icon with Neon Gold Glow -->
<div class="mb-10 flex items-center justify-center">
<div class="relative">
<!-- Outer soft glow ring -->
<div class="absolute inset-0 rounded-full bg-primary/20 blur-2xl"></div>
<span class="material-symbols-outlined text-[80px] text-primary gold-neon-glow leading-none select-none" data-icon="hourglass_empty">
                            hourglass_empty
                        </span>
</div>
</div>
<!-- Main Heading -->
<h1 class="text-primary tracking-tight text-[40px] md:text-[56px] font-light leading-tight mb-6 italic">
                    Limite de Mensagens Atingido
                </h1>
<!-- Body Message -->
<div class="max-w-[480px] mb-12">
<p class="text-slate-400 text-lg md:text-xl font-extralight leading-relaxed">
                        Para mantermos a excelência e exclusividade do nosso atendimento personalizado, atingiu o limite de mensagens diárias. 
                        <span class="block mt-4 text-slate-500 italic">Por favor, tente novamente amanhã.</span>
</p>
</div>
<!-- Call to Action Button -->
<div class="flex flex-col sm:flex-row gap-4 items-center justify-center">
<a href="index.php?page=home">
<button class="flex min-w-[280px] cursor-pointer items-center justify-center overflow-hidden rounded-none h-14 px-10 bg-primary text-background-dark text-sm font-bold uppercase tracking-[0.2em] transition-all hover:bg-white hover:text-black gold-button-glow">
<span class="truncate">Voltar para a Boutique</span>
</button>
</a>
</div>
<!-- Brand Submark -->
<div class="mt-20 opacity-30">
<p class="text-[10px] tracking-[0.5em] uppercase text-primary">Intenso Cheiro</p>
</div>
</div>
</div>
<!-- Optional: Ambient light flares at corners -->
<div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/10 rounded-full blur-[100px]"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full blur-[100px]"></div>
</div>
</body></html>