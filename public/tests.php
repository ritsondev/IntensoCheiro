<?php foreach($dados["quantidades"] as $index => $qtd):?>

<div class="flex-1">
<input class="hidden volume-input" id="vol-<?= $qtd['quantml'] ?>" name="volume" <?= $index === 0 ? 'checked' : '' ?> onchange="updateVolume(<?= $qtd['quantml'] ?>, <?= $qtd['preco'] ?>)" type="radio" value="<?= $qtd['quantml'] ?>"/>
<label class="volume-label flex items-center justify-center py-3 border border-primary text-white/80 text-[10px] tracking-widest uppercase cursor-pointer transition-all duration-300 hover:bg-primary/5" for="vol-<?= $qtd['quantml'] ?>"><?= $qtd['quantml'] ?>ml</label>
</div>

<?php endforeach; ?>

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
        function updateDisplay() {
            qtyDisplay.innerText = quantity;
            btnQtyDisplay.innerText = quantity;
            modalQty.innerText = quantity;
            modalPriceSpan.innerText = currentPrice.toFixed();
            modalVolumeSpan.innerText = currentVolume;
        }
        function incrementQty() {
            const maxQty = 10; // limite máximo
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


