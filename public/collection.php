<?php defined('CONTROL') or die('Acesso negado')?>
<input class="hidden" id="cart-modal-toggle" type="checkbox"/>
<section class="max-w-[1600px] mx-auto w-full px-4 md:px-8 pt-48 pb-16 bg-black relative">
<div class="mb-16 space-y-10">
<div class="flex flex-col lg:flex-row items-end justify-between gap-8 pb-10 border-b border-primary/10">
<div class="w-full lg:max-w-md space-y-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Buscar Essência</label>
<div class="flex gap-2">
<input class="search-input flex-grow rounded-sm" placeholder="DIGITE O NOME..." type="text"/>
<button class="bg-primary text-background-dark font-bold text-[9px] uppercase tracking-[0.2em] px-6 py-2.5 rounded-sm shadow-neon-gold hover:brightness-110 transition-all flex items-center gap-2">
<span class="material-icons text-sm">search</span>
PESQUISAR
</button>
</div>
</div>


<div class="flex flex-wrap items-center gap-6 w-full lg:w-auto">
<div class="flex flex-col gap-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Categoria</label>
<select class="luxury-select">
<option value="" class="bg-black">Todas</option>
<option value="perfumes" class="bg-black">Perfumes</option>
<option value="maquiagem" class="bg-black">Maquiagem</option>
<option value="skincare" class="bg-black">Skincare</option>
<option value="corpo-banho" class="bg-black">Corpo & Banho</option>
<option value="protetor-solar" class="bg-black">Protetor Solar</option>
<option value="cabelo" class="bg-black">Cabelo</option>
<option value="kits-presentes" class="bg-black">Kits & Presentes</option>
<option value="acessorios" class="bg-black">Acessórios</option>
</select>
</div>
<div class="flex flex-col gap-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Gênero</label>
<select class="luxury-select">
<option value="" class="bg-black">Todos</option>
<option value="masculino" class="bg-black">Masculino</option>
<option value="feminino" class="bg-black">Feminino</option>
<option value="unissex" class="bg-black">Unissex</option>
</select>
</div>
<div class="flex flex-col gap-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Tipo</label>
<select class="luxury-select">
<option value="" class="bg-black">Todas</option>
<option value="normal" class="bg-black">Normal</option>
<option value="exclusivo" class="bg-black">Exclusivo</option>
<option value="esgotando" class="bg-black">Esgotando</option>
</select>
</div>
<div class="pt-6">
<button class="border border-primary text-primary hover:bg-primary hover:text-black font-bold text-[9px] uppercase tracking-[0.2em] px-8 py-2.5 rounded-sm transition-all duration-300">
                            Aplicar Filtros
                        </button>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
<p class="text-[11px] tracking-[0.2em] text-white/40 uppercase">Exibindo 9 de 42 fragrâncias de luxo</p>
<div class="flex items-center space-x-2 text-[11px] uppercase tracking-widest text-primary">
<span class="text-white/40">Ordenar por:</span>
<select class="bg-transparent border-none text-primary focus:ring-0 text-[11px] uppercase cursor-pointer py-0">
<option class="bg-black">Destaques</option>
<option class="bg-black">Preço: Menor ao Maior</option>
<option class="bg-black">Preço: Maior ao Menor</option>
</select>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Oud Imperial" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p1.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Amadeirado • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Ciensun</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Velvet Rose" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p2.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Floral • Moderado</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Oboticário</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Gold Ember" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p3.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Oriental • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Native spa</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Citrus Noir" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p4.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Cítrico • Suave</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Splended Bronze</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Nocturnal Wood" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p5.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Amadeirado • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Crispy Gardenia</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Saffron Dusk" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="./assets/img/p6.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Oriental • Moderado</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Ciansun</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">45.000kz</p>
</div>
</div>
</div>
<div class="mt-24 text-center">
<button class="px-20 py-5 border border-primary/20 hover:border-primary text-primary text-[10px] uppercase tracking-[0.5em] transition-all rounded-sm hover:bg-primary/5">
                Descobrir Mais
            </button>
</div>
</section>
<div class="fixed inset-0 z-[100] hidden bg-black/80 backdrop-blur-md items-center justify-center p-4 transition-opacity duration-300" id="modal-overlay">
<div class="bg-neutral-dark border border-primary/20 max-w-lg w-full p-10 relative overflow-hidden text-center shadow-2xl">
<div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-primary/20 to-transparent opacity-20"></div>
<div class="mb-6 inline-flex items-center justify-center w-16 h-16 rounded-full border border-primary/30 text-primary">
<span class="material-symbols-outlined text-3xl">check_circle</span>
</div>
<h2 class="text-2xl font-light italic text-white mb-8 tracking-wide">Fragrância adicionada com sucesso!</h2>
<div class="flex justify-center mb-10">
<div class="w-32 aspect-[3/4] bg-black border border-white/10 p-1">
<img alt="Produto Selecionado" class="w-full h-full object-cover grayscale-[30%] opacity-80" src="./assets/img/p1.png"/>
</div>
</div>
<div class="flex flex-col gap-4">
<button class="w-full bg-primary text-black font-bold text-[10px] uppercase tracking-[0.2em] py-4 rounded-sm shadow-neon-gold-intense hover:brightness-110 transition-all">
                    Finalizar Compra
                </button>
<label class="w-full border border-primary text-primary font-bold text-[10px] uppercase tracking-[0.2em] py-4 rounded-sm hover:bg-primary/5 transition-all cursor-pointer" for="cart-modal-toggle">
                    Continuar Comprando
                </label>
</div>
</div>
</div>