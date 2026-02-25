<?php defined('CONTROL') or die('Acesso negado')?>
<main class="flex-grow flex flex-col items-center py-16 px-6 max-w-4xl mx-auto w-full">
<!-- Status Icon -->
<div class="mb-8 relative">
<div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>
<div class="relative w-24 h-24 border-2 border-primary/30 rounded-full flex items-center justify-center bg-background-dark/50 glow-gold">
<span class="material-icons text-6xl text-primary">close</span>
</div>
</div>
<!-- Heading & Message -->
<div class="text-center mb-12 space-y-4">
<h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-stone-900 dark:text-white uppercase">Pedido Cancelado</h1>
<p class="text-lg text-stone-500 dark:text-stone-400 max-w-xl mx-auto font-light leading-relaxed">
                Lamentamos, mas o seu pedido <span class="text-primary font-bold">#IC-1042</span> foi cancelado. Para assistência imediata, nosso concierge está à disposição para ajudar com o reprocessamento ou dúvidas.
            </p>
</div>
<!-- Summary Section -->
<div class="w-full bg-stone-100 dark:bg-stone-900/40 rounded-xl border border-primary/5 p-8 mb-12">
<h2 class="text-xs font-bold tracking-[0.2em] uppercase text-stone-400 dark:text-stone-500 mb-6 border-b border-stone-200 dark:border-stone-800 pb-4">Resumo dos Itens</h2>
<div class="space-y-6">
<!-- Item 1 -->
<div class="flex items-center gap-6 group">
<div class="w-24 h-24 bg-stone-200 dark:bg-stone-800 rounded-lg overflow-hidden border border-stone-300 dark:border-stone-700">
<img alt="Luxury Perfume Bottle" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-60" data-alt="Elegant glass perfume bottle on dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6mE1y4uNc5RyENX40TgmN5FuKRd19apezn9KP916mnD_IIcSt3VEbR99n5X7oEhHqWA99Scq1aGZIf6QdLdjPWWCmDKUbmcL5BZaholbov7wUd5GM4SEL5dc55KIEHkFZQMnhJohyVBBwiUe9_qKyYTxbA59dT26Rn58IRoHrr7PZE-hEi1NSw4A1gLXXVi7N-LEociumm663ifgBl9cCCm-POj5KbDQkJ4P1CDMvTR07moQnTeU-kB95eWAyqplZmhXsK1Atug"/>
</div>
<div class="flex-grow">
<h3 class="font-semibold text-stone-800 dark:text-stone-200 text-lg">Oud Impérial</h3>
<p class="text-sm text-stone-500 dark:text-stone-400">Eau de Parfum - 100ml</p>
<p class="text-xs mt-1 text-primary tracking-widest uppercase font-bold">Cancelado</p>
</div>
<div class="text-right">
<p class="text-stone-400 line-through text-sm">R$ 1.240,00</p>
<p class="font-bold text-stone-800 dark:text-stone-200">R$ 0,00</p>
</div>
</div>
<!-- Item 2 -->
<div class="flex items-center gap-6 group">
<div class="w-24 h-24 bg-stone-200 dark:bg-stone-800 rounded-lg overflow-hidden border border-stone-300 dark:border-stone-700">
<img alt="Perfume Flacon" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-60" data-alt="Premium minimalist perfume flacon design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBy3i2gKO43e6z825dMt7qx7axrWfWu2raEn21EossAto8gPMOttyDeSIkBRmt36pqrm_ux2exxlLPcZkqBuYpZYcqCQnU8K7PgkXzGp6MWaqI4rrB7WtVLxMQvid83C8fIzbovDmjbGi4GZrxDddlb8Xvt_ZsmoStmSVEyOzQwfqQRbRSPxVI1P1tXCp5vHqug42GKBUGfbomGizb1HBNLrmf9lgK7omaVk8XHvSiq8iDZhbyq_w9--NLZb5RVZ7oGU5QNvqU-Vw"/>
</div>
<div class="flex-grow">
<h3 class="font-semibold text-stone-800 dark:text-stone-200 text-lg">Santal Mystique</h3>
<p class="text-sm text-stone-500 dark:text-stone-400">Home Fragrance - 500ml</p>
<p class="text-xs mt-1 text-primary tracking-widest uppercase font-bold">Cancelado</p>
</div>
<div class="text-right">
<p class="text-stone-400 line-through text-sm">R$ 480,00</p>
<p class="font-bold text-stone-800 dark:text-stone-200">R$ 0,00</p>
</div>
</div>
</div>
<div class="mt-8 pt-6 border-t border-stone-200 dark:border-stone-800 flex justify-between items-center">
<span class="text-stone-500 dark:text-stone-400 font-medium">Estorno Total Solicitado</span>
<span class="text-2xl font-bold text-primary">R$ 1.720,00</span>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col items-center gap-6 w-full max-w-sm">
<button class="w-full py-5 px-8 rounded-full gold-gradient text-background-dark font-extrabold text-sm tracking-[0.15em] uppercase shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-3">
<span class="material-icons text-xl">chat</span>
                Falar com Concierge no Whatsapp
            </button>
<a class="text-stone-500 dark:text-stone-400 hover:text-primary transition-colors text-sm font-semibold tracking-widest uppercase flex items-center gap-2 group" href="#">
<span class="material-icons text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                Voltar à Loja
            </a>
</div>
</main>

<?php
include_once("../templates/footer.php");
?>