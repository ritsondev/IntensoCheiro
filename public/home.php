<?php defined('CONTROL') or die('Acesso negado')?>
<main class="relative z-10">
<section class="relative min-h-screen flex items-center justify-center pt-24 overflow-hidden" id="hero">
<div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="order-2 lg:order-1 text-center lg:text-left">
<div class="inline-flex items-center space-x-4 mb-8">
<span class="h-px w-12 bg-primary/50"></span>
<span class="text-primary tracking-[0.5em] text-[10px] uppercase font-bold">A arte dos cosméticos</span>
</div>
<h1 class="font-serif text-4xl sm:text-5xl md:text-7xl lg:text-8xl leading-[1.05] mb-8 font-bold text-white">
                    Intenso <span class="italic font-normal">Cheiro</span> – <br/>
<span class="gold-gradient-text">A fragrância que marca presença</span>
</h1>
<p class="text-base md:text-lg text-slate-400 max-w-xl mx-auto lg:mx-0 mb-12 font-light leading-relaxed">
                    Desvende a essência do luxo. Elaborada com os extratos botânicos mais raros do mundo para indivíduos que definem sofisticação através do seu perfume.
                </p>
<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-8">
<a class="group relative px-12 py-5 bg-primary text-background-dark font-bold text-xs uppercase tracking-widest transition-all duration-300 hover:shadow-[0_0_40px_rgba(244,192,37,0.3)] w-full sm:w-auto" href="#collection">
                        Descobrir Coleção
                    </a>
<a class="px-12 py-5 border border-primary/20 text-white font-bold text-xs uppercase tracking-widest transition-all duration-300 hover:bg-white hover:text-background-dark w-full sm:w-auto" href="#story">
                        O Mestre Perfumista
                    </a>
</div>
</div>
<div class="order-1 lg:order-2 relative flex justify-center items-center">
<div class="absolute w-[90%] h-[90%] bg-primary/10 blur-[150px] rounded-full"></div>
<div class="relative z-10 transition-transform duration-700 hover:scale-105">
<img alt="Iconic Perfume Bottle" class="w-[280px] sm:w-[320px] md:w-[480px] lg:w-[550px] h-auto object-contain drop-shadow-[0_35px_35px_rgba(0,0,0,0.6)]" src=".\assets\img\p4.png"/>
</div>
<div class="absolute right-0 top-1/4 bg-black/40 backdrop-blur-xl border border-white/10 p-5 rounded-sm hidden xl:block translate-x-12">
<p class="text-[10px] tracking-widest text-primary font-bold uppercase mb-2">Oud &amp; Saffron</p>
<p class="text-xs font-light text-slate-300 italic">"O Padrão de Ouro"</p>
</div>
</div>
</div>
<div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center space-y-4 opacity-40">
<div class="w-px h-20 bg-gradient-to-b from-primary to-transparent"></div>
</div>
</section>
<section class="py-32 bg-neutral-dark/40 border-y border-white/5 relative overflow-hidden" id="highlights">
<div class="container mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-16">
<div class="text-center md:text-left space-y-6 group">
<div class="w-16 h-16 border border-primary/20 flex items-center justify-center mb-8 mx-auto md:mx-0 group-hover:border-primary transition-smooth">
<span class="material-symbols-outlined text-primary text-3xl">eco</span>
</div>
<h3 class="font-serif text-2xl font-bold tracking-tight text-white">Botânicos Raros</h3>
<p class="text-slate-400 text-sm leading-relaxed font-light">Provenientes dos cantos ocultos do mundo, desde a Baunilha de Madagascar ao Sândalo Indiano.</p>
</div>
<div class="text-center md:text-left space-y-6 group">
<div class="w-16 h-16 border border-primary/20 flex items-center justify-center mb-8 mx-auto md:mx-0 group-hover:border-primary transition-smooth">
<span class="material-symbols-outlined text-primary text-3xl">history_edu</span>
</div>
<h3 class="font-serif text-2xl font-bold tracking-tight text-white">Arte Artesanal</h3>
<p class="text-slate-400 text-sm leading-relaxed font-light">Cosméticos artesanais criados com cuidado, ingredientes selecionados e propósito, unindo beleza, bem-estar e arte à mão puro.</p>
</div>
<div class="text-center md:text-left space-y-6 group">
<div class="w-16 h-16 border border-primary/20 flex items-center justify-center mb-8 mx-auto md:mx-0 group-hover:border-primary transition-smooth">
<span class="material-symbols-outlined text-primary text-3xl">verified</span>
</div>
<h3 class="font-serif text-2xl font-bold tracking-tight text-white">Rastro de Assinatura</h3>
<p class="text-slate-400 text-sm leading-relaxed font-light">Projetados para uma longevidade excecional, os nossos aromas permanecem vibrantes por 24 horas na pele.</p>
</div>
</div>
</div>
</section>
<section class="py-32" id="collection">
<div class="container mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
<div class="max-w-2xl text-center md:text-left w-full">
<h2 class="font-serif text-4xl md:text-6xl font-bold mb-6 text-white">Coleções <span class="text-primary italic font-normal">Exclusivas</span></h2>
<p class="text-slate-400 font-light">Explore as nossas coleções curadas, cada frasco contando uma história única de poder, graça e sedução.</p>
</div>
<div class="flex space-x-4 w-full md:w-auto justify-center">
<a href="index.php?page=collection"><button class="px-6 sm:px-8 py-3 text-[10px] tracking-[0.3em] uppercase border border-white/10 hover:border-primary transition-colors text-white">Todos os Aromas</button></a>
<a href="index.php?page=exclusive"><button class="px-6 sm:px-8 py-3 text-[10px] tracking-[0.3em] uppercase border border-white/10 hover:border-primary transition-colors text-white">Edição Limitada</button></a>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

<a href="index.php?page=produto&prod=1">

<div class="group perfume-card-hover cursor-pointer">
<div class="relative aspect-[4/5] bg-neutral-dark mb-6 overflow-hidden border border-white/5 transition-smooth group-hover:border-primary/30">
<img alt="Oud Imperial" class="w-full h-full object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition-smooth" src=".\assets\img\p7.png"/>
<div class="product-overlay absolute inset-0 bg-background-dark/60 opacity-0 flex items-center justify-center transition-smooth">
<span class="px-8 py-3 bg-white text-background-dark text-[10px] font-bold uppercase tracking-widest">Vista Rápida</span>
</div>
</div>
<div class="text-center">
<p class="text-[10px] tracking-[0.3em] uppercase text-primary font-bold mb-2">Shades of Bliss – Eau de Parfum</p>
<h4 class="font-serif text-2xl font-bold mb-2 text-white">Mistura Solar</h4>
<p class="text-slate-500 font-light text-sm italic mb-4">Quente, Luminoso, Feminino</p>
<p class="text-lg font-serif text-primary">45.000kz</p>
</div>
</div>

</a>

<a href="index.php?page=produto&prod=2">

<div class="group perfume-card-hover cursor-pointer">
<div class="relative aspect-[4/5] bg-neutral-dark mb-6 overflow-hidden border border-white/5 transition-smooth group-hover:border-primary/30">
<img alt="Velvet Rose" class="w-full h-full object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition-smooth" src=".\assets\img\p5.png"/>
<div class="product-overlay absolute inset-0 bg-background-dark/60 opacity-0 flex items-center justify-center transition-smooth">
<span class="px-8 py-3 bg-white text-background-dark text-[10px] font-bold uppercase tracking-widest">Vista Rápida</span>
</div>
</div>
<div class="text-center">
<p class="text-[10px] tracking-[0.3em] uppercase text-slate-500 font-bold mb-2">Crispy Gardenia – Eau de Parfum</p>
<h4 class="font-serif text-2xl font-bold mb-2 text-white">Mistura Floral Fresca</h4>
<p class="text-slate-500 font-light text-sm italic mb-4">Leve, Fresco, Sofisticado</p>
<p class="text-lg font-serif text-primary">45.000kz</p>
</div>
</div>

</a>

<a href="index.php?page=produto&prod=3">
<div class="group perfume-card-hover cursor-pointer">
<div class="relative aspect-[4/5] bg-neutral-dark mb-6 overflow-hidden border border-white/5 transition-smooth group-hover:border-primary/30">
<img alt="Amber Gold" class="w-full h-full object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition-smooth" src=".\assets\img\p8.png"/>
<div class="product-overlay absolute inset-0 bg-background-dark/60 opacity-0 flex items-center justify-center transition-smooth">
<span class="px-8 py-3 bg-white text-background-dark text-[10px] font-bold uppercase tracking-widest">Vista Rápida</span>
</div>
</div>
<div class="text-center">
<p class="text-[10px] tracking-[0.3em] uppercase text-slate-500 font-bold mb-2">True Amore – Eau de Parfum</p>
<h4 class="font-serif text-2xl font-bold mb-2 text-white">Mistura Romântica</h4>
<p class="text-slate-500 font-light text-sm italic mb-4">Suave, Intimista, Elegante</p>
<p class="text-lg font-serif text-primary">45.000kz</p>
</div>
</div>
</a>

</div>
</div>
</section>
<section class="py-32 relative overflow-hidden" id="story">
<div class="container mx-auto px-6">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
<div class="relative">
<div class="aspect-square bg-neutral-dark border border-white/10 overflow-hidden group">
<img alt="Perfumer Crafting" class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 transition-smooth duration-1000" src=".\assets\img\p9.png"/>
</div>
<div class="absolute -bottom-10 -right-10 bg-primary p-12 hidden md:block shadow-2xl">
<p class="font-serif text-4xl text-background-dark font-bold italic">Desde 2018</p>
</div>
</div>
<div class="space-y-8">
<div class="inline-flex items-center space-x-4">
<span class="h-px w-12 bg-primary/50"></span>
<span class="text-primary tracking-[0.5em] text-[10px] uppercase font-bold">O Legado</span>
</div>
<h2 class="font-serif text-5xl md:text-6xl font-bold leading-tight text-white">Legado de uma <span class="gold-gradient-text">Assinatura Invisível</span></h2>
<p class="text-slate-400 font-light text-lg leading-relaxed">
                        A Intenso Cheiro nasceu de uma obsessão singular: capturar a essência intangível da personalidade num frasco. Acreditamos que uma fragrância é mais do que um aroma; é uma memória, um comunicador silencioso da sua chegada e um fantasma persistente da sua partida.
                    </p>
<p class="text-slate-400 font-light leading-relaxed">
                        Nossos mestres misturadores passaram décadas aperfeiçoando a extração de óleos que reagem de forma única com a química da sua pele, garantindo que o seu aroma permaneça apenas seu.
                    </p>
<div class="pt-6">
<a class="inline-flex items-center space-x-4 text-primary text-xs tracking-[0.3em] uppercase font-bold hover:translate-x-4 transition-transform" href="index.php?page=sobre">
<span>Ler a nossa jornada completa</span>
<span class="material-symbols-outlined text-lg">trending_flat</span>
</a>
</div>
</div>
</div>
</div>
</section>
<section class="py-32 border-t border-white/5 bg-gradient-to-b from-neutral-dark/20 to-black">
<div class="container mx-auto px-6 text-center">
<div class="max-w-3xl mx-auto space-y-10">
<h2 class="font-serif text-4xl md:text-5xl font-bold text-white">Junte-se ao <span class="italic font-normal">Círculo Restrito</span></h2>
<p class="text-slate-400 font-light">Receba convites para lançamentos privados, edições limitadas e insights artesanais da nossa perfumaria de elite.</p>
<form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto pt-4" method='post' action='index.php?page=home'>
<input type="hidden" name="action" value="customer">
<input class="flex-1 bg-transparent border-b border-white/20 px-4 py-4 focus:border-primary focus:ring-0 text-sm outline-none transition-colors text-white placeholder-slate-600" placeholder="Endereço de Email" name ="email" type="email" required minlength="3" maxlength="320"/>
<button class="bg-primary text-background-dark px-10 py-4 text-[10px] font-bold uppercase tracking-widest hover:bg-white transition-colors">Subscrever</button>
</form>
</div>
</div>
</section>
</main>