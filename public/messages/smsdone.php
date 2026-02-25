<?php defined('CONTROL') or die('Acesso negado')?>
<!DOCTYPE html>

<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mensagem Enviada | Intenso Cheiros</title>
<!-- Google Fonts: Newsreader for that serif luxury feel -->
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
                        "background-dark": "#000000", // Overriding to pure black per request
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
<style>.gold-glow {
    filter: drop-shadow(0 0 15px rgba(244, 192, 37, 0.4))
    }
.bg-noise {
    background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAdnOV4HZ1sPDNAOKE1w6u4MFB5oDAaB_xvXRxfj6l5a2cSqHPmKdGUy295qi8KPVmDRLwN4SmDZo2dn8n9fSWTPPVrdPqkMONLEDJNXy9pvVw0653cHoP41G6cZb33CY1PsP2RsiAEasWzGJQ5RnZmWQRUl3M4o9_OoRSSEyRtGNH78WZOQTJYeR1IYLZsAJt1rXKGVRlZZREJF2LLc3IZ1KB2B4HXfF8j_BVHugyZk-BAQ2BD34htfi2HNz_Oj57SaFUpvtphBQ);
    opacity: 0.03
    }</style>
</head>
<body class="bg-background-dark font-display antialiased selection:bg-primary selection:text-black overflow-hidden">
<!-- Background Texture for Depth -->
<div class="fixed inset-0 bg-noise pointer-events-none"></div>
<!-- Main Container -->
<main class="relative flex flex-col items-center justify-center min-h-screen w-full px-6 py-12">
<div class="max-w-2xl w-full flex flex-col items-center text-center">
<!-- Success Icon with Glow -->
<div class="relative mb-12">
<div class="flex items-center justify-center w-32 h-32 rounded-full border border-primary/20 gold-glow bg-primary/5">
<span class="material-symbols-outlined text-primary text-6xl" style="font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 48;">
                        mail
                    </span>
<!-- Small absolute checkmark overlay -->
<div class="absolute bottom-2 right-2 bg-primary rounded-full p-1 border-4 border-black">
<span class="material-symbols-outlined text-black text-xl font-bold">
                            check
                        </span>
</div>
</div>
</div>
<!-- Content Section -->
<div class="space-y-6">
<h1 class="text-primary text-4xl md:text-6xl font-light tracking-tight leading-tight">
                    Sua mensagem foi entregue
                </h1>
<div class="w-16 h-[1px] bg-primary/40 mx-auto my-8"></div>
<p class="text-primary/70 text-lg md:text-xl font-light max-w-md mx-auto leading-relaxed">
                    Nosso concierge analisará sua solicitação e entrará em contato em breve.
                </p>
</div>
<!-- Call to Action -->
<div class="mt-16">
<a class="group relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-medium tracking-widest text-black transition duration-300 ease-out border-2 border-primary rounded-lg bg-primary hover:bg-black hover:text-primary" href="index.php?page=home">
<span class="absolute inset-0 flex items-center justify-center w-full h-full text-black duration-300 -translate-x-full bg-primary group-hover:translate-x-0 ease">
<span class="material-symbols-outlined mr-2">arrow_back</span>
</span>
<span class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease">
                        VOLTAR AO SITE
                    </span>
<span class="relative invisible">VOLTAR AO SITE</span>
</a>
</div>
</div>
<!-- Subtle Branding Element -->
<div class="absolute bottom-12 left-0 right-0 flex justify-center opacity-20">
<div class="text-primary tracking-[0.5em] text-xs uppercase">
                Intenso Cheiro • Maison de Parfum
            </div>
</div>
</main>
<!-- Optional Visual Decoration: Light leak/gradient for ambiance -->
<div class="fixed top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/5 blur-[120px] rounded-full pointer-events-none"></div>
<div class="fixed bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-primary/5 blur-[120px] rounded-full pointer-events-none"></div>
</body></html>