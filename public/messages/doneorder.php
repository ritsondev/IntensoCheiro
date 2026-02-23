<?php
include_once("templates/header.php");
?>


<main class="flex-grow flex items-center justify-center py-16 md:py-24 px-6">
<div class="max-w-5xl w-full mx-auto">
<section class="text-center mb-20">
<div class="inline-flex items-center justify-center w-28 h-28 rounded-full bg-primary/5 border border-primary/20 mb-10 relative">
<span class="material-symbols-outlined text-primary text-7xl gold-glow">check_circle</span>
<div class="absolute inset-0 bg-primary/10 rounded-full blur-3xl -z-10"></div>
</div>
<h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight text-white uppercase italic">Pedido Realizado com Sucesso!</h1>
<p class="text-xl text-stone-400 mb-4">Identificador do Pedido: <span class="text-primary font-bold tracking-widest">#IC-1042</span></p>
<div class="bg-primary/5 border border-primary/10 rounded-xl p-6 max-w-2xl mx-auto mt-8">
<p class="text-stone-300 italic text-sm md:text-base leading-relaxed">
                    "Seu pedido foi recebido e está aguardando aprovação pelo nosso concierge. <br class="hidden md:block"/> Uma experiência sensorial inesquecível está prestes a começar."
                </p>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<div class="lg:col-span-7 space-y-8">
<div class="bg-card-dark rounded-2xl p-8 border border-stone-800/50 shadow-2xl">
<h2 class="text-sm font-bold mb-8 flex items-center gap-3 uppercase tracking-[0.2em] text-stone-400">
<span class="material-symbols-outlined text-primary text-xl">inventory_2</span>
                        Detalhes da Compra
                    </h2>
<div class="space-y-8">
<div class="flex gap-6 pb-8 border-b border-stone-800/50">
<div class="w-24 h-32 rounded-lg overflow-hidden bg-stone-900 flex-shrink-0 border border-stone-800">
<img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" data-alt="Oud Impérial" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6gS1agBuMBEMKWghvoiiT0-9gwx2qinDhnF56BH8gSTP11fldv9JUm12aLOB6st3Up5nAJ7bWGWizlRexhJtQprnCM9Ltd_DmZliJXQEk1ssp-BLdhGWTJvbOOn9-_T7rmM3L3RRsnsRcpsd4Xh8TBD5CRD1C1ff-wGTvECURwTzjuUzyNQNy6KKsALwNzGYzdhpgMhECEQge_wOaiIpB1-RGd6AUpGyUtZOIamqNV0vWe4FG85ktfDM7k98ch7ZqMp3xHKgdZQ"/>
</div>
<div class="flex-grow flex flex-col justify-between py-1">
<div>
<div class="flex justify-between items-start">
<h3 class="font-bold text-xl text-stone-100 tracking-tight">Oud Impérial</h3>
<p class="font-bold text-primary text-lg">R$ 1.240,00</p>
</div>
<p class="text-sm text-stone-500 mt-1 uppercase tracking-widest">Eau de Parfum - 100ml</p>
</div>
<p class="text-[10px] text-stone-600 uppercase tracking-widest">Quantidade: 01</p>
</div>
</div>
<div class="flex gap-6 pb-8 border-b border-stone-800/50">
<div class="w-24 h-32 rounded-lg overflow-hidden bg-stone-900 flex-shrink-0 border border-stone-800">
<img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" data-alt="Ambre Précieux" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKtdrqHU6iY3jA86qAis4WBj4s0Izr60sxBoLnSa67h-xCUNXWp8ggxAQ22Mbtj74a61ItFfeQm45XYulBT93-9dGcxeHLjUf6qorpGcKhCxZfxJtneI_j1wZKxm1PlAjkKTAEU4lGZ7V87BHPDDICtB-4RZmRQsDbalZ3O3iF30TM_O8jjS0bZn5W4II_jB7yRoJDX7PcLp7KeBxbiT3rmE1sGw2lxx3Pcp21KmdwDVE5IR3RnmDyEBywP4V7IPcKv95IV11m4w"/>
</div>
<div class="flex-grow flex flex-col justify-between py-1">
<div>
<div class="flex justify-between items-start">
<h3 class="font-bold text-xl text-stone-100 tracking-tight">Ambre Précieux</h3>
<p class="font-bold text-primary text-lg">R$ 890,00</p>
</div>
<p class="text-sm text-stone-500 mt-1 uppercase tracking-widest">Extrait de Parfum - 50ml</p>
</div>
<p class="text-[10px] text-stone-600 uppercase tracking-widest">Quantidade: 01</p>
</div>
</div>
</div>
<div class="mt-8 space-y-4">
<div class="flex justify-between text-xs uppercase tracking-widest text-stone-500">
<span>Subtotal</span>
<span class="text-stone-300">R$ 2.130,00</span>
</div>
<div class="flex justify-between text-xs uppercase tracking-widest text-stone-500">
<span>Entrega Priority</span>
<span class="text-primary font-bold">Cortesia</span>
</div>
<div class="flex justify-between text-2xl font-black pt-6 border-t border-stone-800 mt-4">
<span class="text-white uppercase tracking-tighter italic">Total</span>
<span class="text-primary gold-glow">R$ 2.130,00</span>
</div>
</div>
</div>
</div>
<div class="lg:col-span-5 flex flex-col gap-6 h-full">
<div class="bg-card-dark rounded-2xl p-8 border border-stone-800/50 shadow-xl">
<h2 class="text-xs font-bold mb-5 flex items-center gap-3 uppercase tracking-[0.2em] text-stone-400">
<span class="material-symbols-outlined text-primary text-lg">location_on</span>
                        Entrega VIP
                    </h2>
<div class="text-sm space-y-2 text-stone-400 border-l border-primary/20 pl-4">
<p class="font-bold text-stone-100">Ricardo Almeida</p>
<p>Alameda Lorena, 1540 - Apto 102</p>
<p>Jardim Paulista, São Paulo - SP</p>
<p>CEP 01424-002</p>
</div>
</div>
<div class="flex flex-col gap-4">
<button class="btn-gold-gradient hover:brightness-110 text-black font-black uppercase tracking-[0.15em] text-xs py-5 px-8 rounded-full transition-all flex items-center justify-center gap-3 shadow-2xl shadow-primary/20 group">
<span class="material-symbols-outlined text-lg">chat</span>
                        Atendimento Concierge
                    </button>
<button class="border border-stone-800 hover:border-primary/50 text-stone-300 hover:text-primary font-bold uppercase tracking-[0.15em] text-[10px] py-5 px-8 rounded-full transition-all flex items-center justify-center gap-3 bg-white/5">
<span class="material-symbols-outlined text-lg">explore</span>
                        Continuar Explorando
                    </button>
</div>
</div>
</div>
</div>
</main>

<?php
include_once("templates/footer.php");
?>