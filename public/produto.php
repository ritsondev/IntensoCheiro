<?php defined('CONTROL') or die('Acesso negado')?>
<input class="hidden" id="cart-modal-toggle" type="checkbox"/>
<main class="max-w-7xl mx-auto px-6 py-12 lg:py-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
<div class="lg:col-span-7 grid grid-cols-12 gap-4">

<?php foreach ($dados['imagens'] as $i => $imagem): ?>
    
<input 
    <?= $i == 0 ? 'checked' : '' ?>
    class="hidden thumb-input"
    id="img-<?= $i+1 ?>"
    name="gallery"
    type="radio"
/>

<?php endforeach; ?>


<div class="col-span-2 space-y-4">

<?php foreach($dados['imagens'] as $i => $imagem): ?>

<label 
class="thumb-label block aspect-[3/4] border border-white/10 cursor-pointer overflow-hidden opacity-60 transition-all duration-300 hover:opacity-100"
for="img-<?= $i+1 ?>"
>

<img 
class="w-full h-full object-cover"
src="<?= htmlspecialchars($imagem['link']) ?>"
>

</label>

<?php endforeach; ?>

</div>



<div class="col-span-10 border border-white/10 relative group main-gallery overflow-hidden">

<?php foreach ($dados['imagens'] as $i => $imagem): ?>

<img
class="main-img-<?= $i+1 ?> w-full h-full object-contain object-center transition-opacity duration-500 <?= $i != 0 ? 'hidden' : '' ?>" 
src="<?= htmlspecialchars($imagem['link']) ?>"
>

<?php endforeach; ?>


<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent pointer-events-none"></div>

</div>

</div>
<div class="lg:col-span-5 space-y-10">
<div>
<h1 class="text-5xl lg:text-6xl font-bold mb-4"><?=$dados["produto"][0]["nome"]?></h1>
<p class="text-3xl font-bold text-primary tracking-wider opacity-100" id="main-price-container"><span id="main-price"><?= $dados["quantidades"][0]["preco"] ?></span>kz</p>
</div>
<div class="space-y-6">
<p class="text-white/60 leading-relaxed text-sm lg:text-base italic">
                        <?=$dados["produto"][0]["descricao"]?>
                    </p>
<div class="space-y-4 pt-4">
<h3 class="text-[10px] tracking-[0.4em] uppercase font-bold text-primary border-b border-primary/20 pb-2">Notas de Fragrância</h3>
<div class="grid grid-cols-1 gap-6">
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1">auto_awesome</span>
<div>
<h4 class="text-[11px] uppercase tracking-widest font-bold mb-1">Notas de Topo</h4>
<p class="text-sm text-white/60"><?=$dados['incrementos'][0]['notas_topo']?></p>
</div>
</div>
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1">favorite</span>
<div>
<h4 class="text-[11px] uppercase tracking-widest font-bold mb-1">Notas de Coração</h4>
<p class="text-sm text-white/60"><?=$dados['incrementos'][0]['notas_coracao']?></p>
</div>
</div>
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1">forest</span>
<div>
<h4 class="text-[11px] uppercase tracking-widest font-bold mb-1">Notas de Base</h4>
<p class="text-sm text-white/60"><?=$dados['incrementos'][0]['notas_base']?></p>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-8 pt-6">
<div>
<h3 class="text-[10px] tracking-[0.4em] uppercase font-bold text-white/40 mb-4">Selecionar Volume</h3>


<div class="flex gap-4">

<?php foreach($dados["quantidades"] as $index => $qtd):?>

<div class="flex-1">
<input class="hidden volume-input" id="vol-<?= $qtd['quantml'] ?>" name="volume" <?= $index === 0 ? 'checked' : '' ?> onchange="updateVolume(<?= $qtd['quantml'] ?>, <?= $qtd['preco'] ?>)" type="radio" value="<?= $qtd['quantml'] ?>"/>
<label class="volume-label flex items-center justify-center py-3 border border-primary text-white/80 text-[10px] tracking-widest uppercase cursor-pointer transition-all duration-300 hover:bg-primary/5" for="vol-<?= $qtd['quantml'] ?>"><?= $qtd['quantml'] ?>ml</label>
</div>

<?php endforeach; ?>
</div>
</div>
<div class="space-y-4">
<h3 class="text-[10px] tracking-[0.4em] uppercase font-bold text-white/40">Quantidade</h3>
<div class="flex items-center">
<div class="flex items-center border border-primary/40 h-14 bg-black/50">
<button class="w-14 h-full text-primary hover:bg-primary/10 transition-colors flex items-center justify-center border-r border-primary/20" onclick="decrementQty()">
<span class="material-symbols-outlined text-lg">remove</span>
</button>
<div class="w-20 text-center relative overflow-hidden h-full flex items-center justify-center">
<span class="text-lg font-bold text-white transition-all duration-300" id="qty-display">1</span>
</div>
<button class="w-14 h-full text-primary hover:bg-primary/10 transition-colors flex items-center justify-center border-l border-primary/20" onclick="incrementQty()">
<span class="material-symbols-outlined text-lg">add</span>
</button>
</div>
</div>
</div>
<button class="block w-full text-center bg-primary text-black py-5 text-[12px] font-bold uppercase tracking-[0.4em] hover:bg-white hover:text-black transition-all duration-300 shadow-2xl shadow-primary/10 cursor-pointer border-none" id="add-to-cart-btn" onclick="addToCart()">
                        ADICIONAR AO CARRINHO (<span id="btn-qty">1</span>)
                    </button>
<div class="flex items-center justify-between text-[10px] uppercase tracking-widest text-white/40 pt-4 border-t border-white/5">
<span class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">local_shipping</span> Frete Cortesia</span>
<span class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">verified</span> 100% Autêntico</span>
</div>
</div>
</div>
</div>
<section class="mt-32 border-t border-white/5 pt-20">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
<div class="space-y-8">
<h2 class="text-4xl font-bold">A Experiência Sensorial</h2>
<p class="text-white/60 leading-relaxed">
                        <?=$dados["incrementos"][0]["exp"]?>
                    </p>
<div class="grid grid-cols-2 gap-8 pt-4">

</div>
</div>
<div class="aspect-video bg-neutral-900 overflow-hidden">
<img alt="Fragrance Creation" class="w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 transition-all duration-1000" src="<?=$dados["incrementos"][0]["linkexp"]?>"/>
</div>
</div>
</section>
</main>
<div class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 backdrop-blur-md px-6" id="cart-modal-overlay">
<div class="bg-black border border-primary/30 w-full max-w-md p-8 md:p-12 relative shadow-[0_0_60px_rgba(244,192,37,0.15)]">
<label class="absolute top-6 right-6 text-white/40 hover:text-primary cursor-pointer transition-colors" for="cart-modal-toggle">
<span class="material-symbols-outlined text-[24px]">close</span>
</label>
<div class="flex flex-col items-center text-center">
<div class="mb-8">
<span class="material-symbols-outlined text-primary text-5xl font-light">check_circle</span>
</div>
<h2 class="text-2xl font-bold tracking-tight text-white mb-10">Fragrância Adicionada ao seu Carrinho</h2>
<div class="w-full flex items-center p-5 border border-white/10 bg-white/[0.03] gap-6 mb-10">
<div class="w-24 aspect-[3/4] overflow-hidden border border-white/10 shrink-0">
<img alt="<?=$dados["produto"][0]["nome"]?>" class="w-full h-full object-cover" src="<?=$dados["imagens"][1]["link"]  ?>"/>
</div>
<div class="text-left space-y-2">
<p class="text-base font-bold uppercase tracking-[0.2em]"><?=$dados["produto"][0]["nome"]?></p>
<p class="text-[11px] text-white/50 uppercase tracking-widest">Volume: <span id="modal-volume"></span></p>
<p class="text-primary font-bold text-lg tracking-widest"><span id="modal-price">00</span>kz</p>
<p class="text-[11px] text-white/50 uppercase tracking-widest">Quantidade: <span id="modal-qty"></span></p>
</div>
</div>
<div class="w-full space-y-6">
<a class="block w-full bg-primary text-black py-5 text-[12px] font-bold uppercase tracking-[0.4em] hover:bg-white transition-all duration-300 text-center" href="index.php?page=carrinho">
                        IR PARA O CARRINHO
                    </a>
<label class="block cursor-pointer text-[10px] uppercase tracking-[0.4em] text-primary hover:text-white transition-all duration-300 underline underline-offset-8 decoration-primary/40" for="cart-modal-toggle">
                        CONTINUAR COMPRANDO
                    </label>
</div>
</div>
</div>
</div>
<script>
        let quantity = 1;
        let currentVolume = <?=$dados["quantidades"][0]["quantml"] ?>;
        let currentPrice = <?=$dados["quantidades"][0]["preco"] ?>;
        const qtyDisplay = document.getElementById('qty-display');
        const btnQtyDisplay = document.getElementById('btn-qty');
        const modalQty = document.getElementById('modal-qty');
        const mainPriceContainer = document.getElementById('main-price-container');
        const mainPriceSpan = document.getElementById('main-price');
        const modalPriceSpan = document.getElementById('modal-price');
        const modalVolumeSpan = document.getElementById('modal-volume');
        const maxQty = <?=$dados['quantidades'][0]['quantidade']?>; // limite máximo

        function updateVolume(vol, price) {
            currentVolume = vol + 'ML';
            currentPrice = price;
            mainPriceContainer.style.opacity = '0';
            setTimeout(() => {
                mainPriceSpan.innerText = price.toFixed();
                mainPriceContainer.style.opacity = '1';
            }, 200);
            updateDisplay();
        }
        function recivequanty(){
        
        }
        function updateDisplay() {
            qtyDisplay.innerText = quantity;
            btnQtyDisplay.innerText = quantity;
            modalQty.innerText = quantity;
            modalPriceSpan.innerText = currentPrice.toFixed();
            modalVolumeSpan.innerText = currentVolume;
        }
        function incrementQty() {
            if (quantity < maxQty) {
                quantity++;
                updateDisplay();
            }
        }
        function decrementQty() {
            if (quantity > 1) {
                quantity--;
                updateDisplay();
            }
        }
        function addToCart() {
            const toggle = document.getElementById('cart-modal-toggle');
            updateDisplay();
            toggle.checked = true;
        }
    </script>