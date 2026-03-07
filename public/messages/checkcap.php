<?php defined('CONTROL') or die('Acesso negado')?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><script id="tailwind-config">
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
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      body {
        background-color: #000000;
        margin: 0;
        padding: 0;
      }
      .neon-border {
        box-shadow: 0 0 10px rgba(244, 192, 37, 0.4), inset 0 0 5px rgba(244, 192, 37, 0.2);
        border: 1px solid #f4c025;
      }
      .amber-glow {
        text-shadow: 0 0 15px rgba(244, 192, 37, 0.6);
      }
    </style>
</head>
<body class="bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-x-hidden p-6">
<div class="layout-container flex w-full max-w-[960px] flex-col items-center">
<!-- Icon Section -->
<div class="flex items-center justify-center mb-8">
<div class="relative flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-8xl amber-glow font-light" style="font-variation-settings: 'wght' 200;">
                    error_outline
                </span>
</div>
</div>
<!-- Content Section -->
<div class="layout-content-container flex flex-col items-center text-center px-4">
<h1 class="text-primary tracking-wide text-[40px] md:text-[56px] font-light leading-tight pb-6 amber-glow">
                Pedido Não Efetuado
            </h1>
<div class="max-w-[600px]">
<p class="text-primary/80 text-lg md:text-xl font-light leading-relaxed mb-12">
                    Lamentamos, mas não foi possível processar sua solicitação no momento. <br class="hidden md:block"/>
                    Por favor, tente novamente mais tarde ou entre em contato com nosso suporte exclusivo.
                </p>
</div>
<!-- Action Section -->
<div class="flex flex-col items-center gap-8 w-full max-w-[400px]">
<a href="index.php?page=carrinho">

<button class="neon-border group relative flex min-w-[280px] cursor-pointer items-center justify-center overflow-hidden rounded-none h-14 px-8 bg-transparent text-primary text-sm font-bold tracking-[0.2em] transition-all duration-300 hover:bg-primary hover:text-black">
<span class="truncate uppercase">Tentar Novamente</span>
</button>

</a>
<a class="text-primary/60 hover:text-primary text-xs font-medium tracking-[0.15em] uppercase transition-colors duration-300 decoration-primary/30 underline-offset-8 underline" href="index.php?page=collection">
                    Voltar à Boutique
                </a>
</div>
</div>
<!-- Subtle Brand Detail -->
<div class="mt-24">
<p class="text-primary/20 text-[10px] tracking-[0.4em] uppercase">
                Intenso Cheiro © 2026
            </p>
</div>
</div>
</div>
<!-- Decorative background elements -->
<div class="fixed inset-0 pointer-events-none overflow-hidden opacity-20">
<div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/10 blur-[120px] rounded-full"></div>
<div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-primary/5 blur-[120px] rounded-full"></div>
</div>