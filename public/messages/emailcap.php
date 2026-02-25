<?php defined('CONTROL') or die('Acesso negado')?>
<!DOCTYPE html>

<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,300;0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"/>
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
              "display": ["Newsreader", "serif"]
            },
            borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      .glow-primary {
        filter: drop-shadow(0 0 8px rgba(244, 192, 37, 0.4));
      }
      .neon-border {
        box-shadow: 0 0 15px rgba(244, 192, 37, 0.2);
      }
    </style>
</head>
<body class="bg-background-dark font-display text-white antialiased selection:bg-primary selection:text-black">
<div class="relative flex h-screen w-full flex-col items-center justify-center bg-background-dark overflow-hidden">
<!-- Abstract Background Detail -->
<div class="absolute inset-0 opacity-20 pointer-events-none">
<div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/10 rounded-full blur-[120px]"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px]"></div>
</div>
<div class="layout-container relative z-10 flex w-full max-w-[600px] flex-col items-center px-6 text-center">
<!-- Central Iconography -->
<div class="relative mb-10 flex items-center justify-center">
<div class="relative flex h-24 w-24 items-center justify-center rounded-full border border-primary/30 bg-primary/5 neon-border glow-primary">
<span class="material-symbols-outlined text-primary text-5xl leading-none">mail</span>
<!-- Small Info Badge -->
<div class="absolute -top-1 -right-1 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-background-dark">
<span class="material-symbols-outlined text-lg font-bold">info</span>
</div>
</div>
</div>
<!-- Content Block -->
<div class="flex flex-col gap-4">
<h1 class="text-primary text-4xl md:text-5xl font-bold tracking-tight leading-tight glow-primary">
                    E-mail Já Cadastrado
                </h1>
<p class="text-white/70 text-lg md:text-xl font-normal leading-relaxed max-w-md mx-auto italic">
                    Você já faz parte do nosso círculo restrito. 
                    <span class="block mt-2 not-italic text-white/50 text-base">Continue explorando nossas fragrâncias exclusivas.</span>
</p>
</div>
<!-- Action Area -->
<div class="mt-12 flex w-full justify-center">
<a href="index.php?page=collection">
<button class="group relative flex min-w-[280px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 px-8 bg-primary text-background-dark text-base font-bold uppercase tracking-widest transition-all hover:scale-[1.02] hover:shadow-[0_0_20px_rgba(244,192,37,0.5)] active:scale-95">
<span class="relative z-10">VER COLEÇÃO PRIVADA</span>
</button>
</a>
</div>
<!-- Branding Subtext -->
<div class="mt-16 flex flex-col items-center gap-2 opacity-40">
<div class="h-px w-12 bg-primary/50"></div>
<span class="text-[10px] uppercase tracking-[0.4em] font-light">Intenso Cheiro</span>
</div>
</div>
</div>
</body></html>