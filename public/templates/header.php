
<?php

if(!empty($_GET['prod'])){

//dados de produto
$numprod=$prod;

$produto= new Produto('true');
$dados=$produto->GetProdutoData($numprod);

echo '<pre>';
print_r($dados);
echo '</pre>';
if($dados==null){

header('Location:../public/index.php?page=notfound');
exit();

}

}

?>


<!DOCTYPE html>
<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Intenso Cheiro | A fragrância que marca presença</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;family=Playfair+Display:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style type="text/tailwindcss">
        @layer utilities {
            .gold-gradient-text {
                background: linear-gradient(to bottom, #f4c025 0%, #d4a017 50%, #f4c025 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .nav-blur {
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
            }
            .bokeh {
                position: absolute;
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(244, 192, 37, 0.05) 0%, rgba(244, 192, 37, 0) 70%);
                border-radius: 50%;
                pointer-events: none;
            }
            .perfume-card-hover:hover .product-overlay {
                opacity: 1;
            }
            .transition-smooth {
                transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .mobile-menu-open {
                overflow: hidden;
            }

            .gold-gradient {
            background: linear-gradient(135deg, #f4c025 0%, #dfa818 100%);
        }
        .gold-border {
            border: 1px solid rgba(244, 192, 37, 0.2);
        }
        .gold-border-thin {
            border: 1px solid rgba(244, 192, 37, 0.4);
        }
        .step-active {
            @apply text-primary;
        }
        .step-line {
            height: 2px;
            background: rgba(244, 192, 37, 0.1);
        }
        .step-line-active {
            background: #f4c025;
            box-shadow: 0 0 10px rgba(244, 192, 37, 0.5);
        }
        .glow-gold {
            box-shadow: 0 0 15px rgba(244, 192, 37, 0.6);
        }
        .glow-gold-vibrant {
            box-shadow: 0 0 20px rgba(244, 192, 37, 0.8), 0 0 40px rgba(244, 192, 37, 0.3);
        }
        .text-glow-gold {
            text-shadow: 0 0 10px rgba(244, 192, 37, 0.7);
        }

        .gold-glow {
            filter: drop-shadow(0 0 15px rgba(244, 192, 37, 0.4));
        }
        .metallic-gold {
            background: linear-gradient(135deg, #f4c025 0%, #b88a0e 100%);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #000;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #f4c025;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
        }
        .thumb-input:checked + .thumb-label {
            @apply border-primary opacity-100 ring-1 ring-primary/30;
        }
        .volume-input:checked + .volume-label {
            @apply bg-primary text-black border-primary font-bold;
        }
        #img-1:checked ~ .main-gallery .main-img-1 { display: block; }
        #img-1:checked ~ .main-gallery .main-img-2, #img-1:checked ~ .main-gallery .main-img-3 { display: none; }
        #img-2:checked ~ .main-gallery .main-img-2 { display: block; }
        #img-2:checked ~ .main-gallery .main-img-1, #img-2:checked ~ .main-gallery .main-img-3 { display: none; }
        #img-3:checked ~ .main-gallery .main-img-3 { display: block; }
        #img-3:checked ~ .main-gallery .main-img-1, #img-3:checked ~ .main-gallery .main-img-2 { display: none; }
        #cart-modal-toggle:checked ~ #cart-modal-overlay {
            display: flex;
        }
        body:has(#cart-modal-toggle:checked) {
            overflow: hidden;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
        #main-price-container {
            transition: opacity 0.2s ease-in-out;
        }

        .luxury-select {
            @apply bg-transparent border-b border-primary/30 text-primary text-[10px] uppercase tracking-[0.2em] py-2 px-2 focus:ring-0 focus:border-primary cursor-pointer appearance-none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23f4c025'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.2rem center;
            background-size: 0.8rem;
            min-width: 140px;
        }

        .search-input {
            @apply bg-transparent border border-primary/30 text-white text-[10px] uppercase tracking-[0.2em] py-2.5 px-4 focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all;
        }

        #cart-modal-toggle:checked ~ #modal-overlay {
            @apply flex opacity-100 pointer-events-auto;
        }

        }

        :root {
            --neon-gold: #f4c025;
            --neon-glow: rgba(244, 192, 37, 0.25);
            --neon-glow-hover: rgba(244, 192, 37, 0.6);
        }
        body {
            font-family: 'Newsreader', serif;
            background-color: #000000;
        }
        .luxury-text-shadow {
            text-shadow: 0px 0px 20px rgba(244, 192, 37, 0.5);
        }
        .neon-card {
            box-shadow: 0 0 20px var(--neon-glow);
            border: 1px solid rgba(244, 192, 37, 0.1);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .neon-card:hover {
            box-shadow: 0 0 35px var(--neon-glow-hover);
            border: 1px solid rgba(244, 192, 37, 0.5);
        }
        .exclusive-badge {
            background: linear-gradient(135deg, #f4c025 0%, #d4a017 50%, #f4c025 100%);
            box-shadow: 0 0 15px rgba(244, 192, 37, 0.8);
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .modal-neon {
            box-shadow: 0 0 60px rgba(244, 192, 37, 0.25);
            border: 1px solid rgba(244, 192, 37, 0.3);
        }
        .checkmark-glow {
            filter: drop-shadow(0 0 8px rgba(244, 192, 37, 0.8));
        }
        .glass-overlay {
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(12px);
        }#success-modal-toggle:checked ~ #success-modal {
            display: flex;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#f4c025",
                "background-light": "#f8f8f5",
                "background-dark": "#050505",
                "neutral-dark": "#121212",
                "accent-gold": "#d4a017",
              },
              fontFamily: {
                "display": ["Manrope", "sans-serif"],
                "serif": ["Playfair Display", "serif"],
              },
            },
          },
        }
    </script>
</head>
<body class="bg-background-dark font-display text-slate-200 overflow-x-hidden selection:bg-primary selection:text-background-dark">
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
<div class="bokeh top-[-10%] left-[-5%]"></div>
<div class="bokeh top-[40%] right-[-10%]"></div>
<div class="bokeh bottom-[-10%] left-[20%]"></div>
</div>
<header class="fixed top-0 left-0 w-full z-50 nav-blur bg-black/80 border-b border-white/10">
<div class="container mx-auto px-6 h-20 md:h-24 flex justify-between items-center">
<div class="flex-1 flex items-center">
  <img
    src="assets/img/logo.png"
    alt="Logo"
    class="max-h-40 object-contain"
  />
</div>

<nav class="hidden lg:flex items-center space-x-12">
<a class="font-serif text-lg text-white hover:text-primary transition-colors tracking-wide" href="index.php?page=home">Início</a>
<a class="font-serif text-lg text-white hover:text-primary transition-colors tracking-wide" href="index.php?page=collection">Produtos</a>
<a class="font-serif text-lg text-white hover:text-primary transition-colors tracking-wide" href="index.php?page=contato">Contacto</a>
<a class="font-serif text-lg text-white hover:text-primary transition-colors tracking-wide" href="index.php?page=sobre">Sobre</a>
</nav>
<div class="flex-1 flex items-center justify-end space-x-4 md:space-x-6">

<a href="index.php?page=carrinho">

<button class="hidden sm:block p-2 hover:text-primary transition-colors relative group text-white">
<span class="material-symbols-outlined text-2xl">shopping_cart</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-primary rounded-full border border-black group-hover:scale-110 transition-transform"></span>
</button>

</a>
<button aria-label="Menu" class="lg:hidden p-2 text-primary focus:outline-none hover:scale-110 transition-transform" onclick="document.getElementById('mobile-nav').classList.remove('translate-x-full')">
<span class="material-symbols-outlined text-3xl font-light">menu</span>
</button>
</div>
</div>
</header>
<div class="fixed inset-0 bg-background-dark z-[60] transform translate-x-full transition-transform duration-500 lg:hidden" id="mobile-nav">
<div class="flex flex-col h-full">
<div class="flex justify-between items-center px-6 h-20 md:h-24 border-b border-white/10">
<div class="flex-1 flex items-center">
  <img
    src="assets/img/logo.png"
    alt="Logo"
    class="max-h-40 object-contain"
  />
</div>
<button class="text-primary" onclick="document.getElementById('mobile-nav').classList.add('translate-x-full')">
<span class="material-symbols-outlined text-4xl">close</span>
</button>
</div>
<nav class="flex flex-col items-center justify-center flex-grow space-y-8 p-6">
<a class="font-serif text-3xl text-white hover:text-primary" href="index.php?page=home&local=#" onclick="document.getElementById('mobile-nav').classList.add('translate-x-full')">Início</a>
<a class="font-serif text-3xl text-white hover:text-primary" href="index.php?page=collection&local=#" onclick="document.getElementById('mobile-nav').classList.add('translate-x-full')">Produtos</a>
<a class="font-serif text-3xl text-white hover:text-primary" href="index.php?page=contato&local=#" onclick="document.getElementById('mobile-nav').classList.add('translate-x-full')">Contacto</a>
<a class="font-serif text-3xl text-white hover:text-primary" href="index.php?page=sobre&local=#" onclick="document.getElementById('mobile-nav').classList.add('translate-x-full')">Sobre</a>
<div class="pt-12">
<a href="index.php?page=carrinho"><button class="bg-primary text-background-dark px-10 py-4 text-[10px] font-bold uppercase tracking-widest">Ver Carrinho</button></a>
</div>
</nav>
</div>
</div>