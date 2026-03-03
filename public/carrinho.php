<?php 
defined('CONTROL') or die('Acesso negado');

?>
<main class="relative z-10 pt-32 pb-24">

<?php if (!empty($_SESSION['carrinho'])):?>

<div class="container mx-auto px-6">
<div class="mb-16">
<div class="flex items-center space-x-3 mb-4">
<span class="h-px w-8 bg-primary/40"></span>
<span class="text-primary tracking-[0.4em] text-[10px] uppercase font-semibold">Sua Seleção</span>
</div>
<h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold">Carrinho de Compras</h1>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-8"> 
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-primary/10">
<th class="pb-6 text-[10px] tracking-[0.3em] uppercase font-semibold text-slate-500">Produto</th>
<th class="pb-6 text-[10px] tracking-[0.3em] uppercase font-semibold text-slate-500 text-center">Quantidade</th>
<th class="pb-6 text-[10px] tracking-[0.3em] uppercase font-semibold text-slate-500 text-right">Preço</th>
</tr>
</thead>
<form action="index.php?page=checkout" method="post">
<?php foreach($prodcar_inf as $index => $produto): ?>

    <?php $subtotal+=$produto['preco']*$produto['quantidade'];?>

<tbody class="divide-y divide-primary/5">
<tr>
<td class="py-8">
<div class="flex items-center space-x-6">
<div class="w-24 h-24 bg-neutral-dark rounded-lg flex items-center justify-center border border-primary/5">
<img alt="L'Essence Royale" class="w-16 h-16 object-contain" src="<?=$produto['img']?>"/>
</div>
<div>
<h3 class="font-serif text-lg font-bold mb-1"><?=$produto['nome']?></h3>
<p class="text-xs text-slate-500 uppercase tracking-widest"><?=$produto['volume']?>ML</p>
<a href="index.php?page=carrinho&delete=<?=$index?>">
<button class="mt-4 text-[10px] tracking-widest uppercase text-primary/60 hover:text-primary transition-colors flex items-center" type="button">
<span class="material-symbols-outlined text-sm mr-1">close</span> Remover
</button>
</a>
</div>
</div>
</td>
<td class="py-8">
<div class="flex items-center justify-center space-x-4">

<button class="w-8 h-8 rounded-full border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors"
        onmousedown="startDecrement(this)"
        onmouseup="stopChange()"
        onmouseleave="stopChange()" type="button">

<span class="material-symbols-outlined text-sm">remove</span>

</button>



<span class="text-sm font-medium qty-display"><?=$produto['quantidade']?></span>

<button class="w-8 h-8 rounded-full border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors"
        onmousedown="startIncrement(this, <?=$produto['max']?>)"
        onmouseup="stopChange()"
        onmouseleave="stopChange()" type="button">

<span class="material-symbols-outlined text-sm">add</span>

</button>

</div>
</td>
<td class="py-8 text-right">
    <p class="font-serif text-lg font-bold preco" data-preco="<?=$produto['preco']?>">
        <?=$produto['preco']?>kz
    </p>
</td>
</tr>
</tr>
</tbody>

<?php endforeach; ?>

</table>
</div>

<div class="mt-12">
<a class="inline-flex items-center text-[10px] tracking-[0.3em] uppercase font-bold text-primary/80 hover:text-primary transition-colors" href="index.php?page=collection">
<span class="material-symbols-outlined text-lg mr-2">arrow_back</span>
                            Continuar Comprando
                        </a>
</div>
</div>
<div class="lg:col-span-4">
<div class="bg-neutral-dark/50 backdrop-blur-md border border-primary/10 p-8 rounded-xl sticky top-32">
<h2 class="font-serif text-2xl font-bold mb-8">Resumo</h2>
<div class="space-y-10">
    <div class="flex justify-between items-center text-sm">
        <span class="text-slate-400 font-light tracking-wide">Subtotal</span>
        <span class="font-medium" id="subtotal"><?=$subtotal?>kz</span>
    </div>
    <div class="flex justify-between items-center text-sm">
        <span class="text-slate-400 font-light tracking-wide">Taxas (Estimadas)</span>
        <span class="font-medium" id="taxa">500kz</span>
    </div>
    <!-- Inputs escondidos para enviar via form -->
<input type="hidden" name="subtotal" id="input-subtotal" value="<?=$subtotal?>">
<input type="hidden" name="taxa" id="input-taxa" value="500">
<input type="hidden" name="total" id="input-total" value="<?=$subtotal+500?>">
</div>



<div class="pt-6 border-t border-primary/10 flex justify-between items-center">
    <span class="font-serif text-xl font-bold uppercase tracking-widest">TOTAL</span>
    <span class="font-serif text-2xl font-bold text-primary" id="total"><?=$subtotal+500?>KZ</span>
</div>
<div class="space-y-4">
<button class="w-full py-5 bg-primary text-background-dark font-bold text-xs uppercase tracking-[0.25em] rounded-lg transition-all duration-300 hover:shadow-[0_0_30px_rgba(244,192,37,0.3)] hover:scale-[1.01]" type="submit">
        Finalizar Compra
</button>


<div class="flex items-center justify-center space-x-2 text-slate-500 text-[10px] tracking-widest uppercase py-2">
<span class="material-symbols-outlined text-sm">lock</span>
<span>Checkout Seguro</span>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
<?php else:?>

<div class="min-h-[60vh] flex items-center justify-center text-center">
    
    <div class="space-y-6">
        
        <h3 class="text-2xl md:text-4xl font-medium text-primary/90 tracking-wide">
            Nenhum Produto Adicionado
        </h3>

        <p class="text-primary/60 text-lg md:text-xl max-w-lg mx-auto leading-relaxed font-light italic">
            "Para adicionar um produto no carrinho precisa navegar até a página produtos e selecionar o que deseja."
        </p>

        <div class="pt-8">
            <a class="inline-block bg-primary text-deep-black font-bold py-4 px-10 rounded shadow-gold-glow hover:shadow-gold-glow-hover transition-all duration-300 uppercase tracking-widest text-sm active:scale-95"
               href="index.php?page=collection">
                Ir para produtos
            </a>
        </div>

    </div>

</div>

<?php endif;?>    
</main>

<script>

const taxa = 500; // taxa fixa
let timer = null;

function updateDisplay(display, quantity) {
    display.innerText = quantity.toString().padStart(2, '0');
    updateResumo(); // recalcula e envia a sessão
}

function startIncrement(button, maxQty) {
    let container = button.closest('td');
    let display = container.querySelector('.qty-display');
    let quantity = parseInt(display.innerText);

    function increment() {
        if (quantity < maxQty) {
            quantity++;
            updateDisplay(display, quantity);
        }
    }

    increment();
    timer = setInterval(increment, 300);
}

function startDecrement(button) {
    let container = button.closest('td');
    let display = container.querySelector('.qty-display');
    let quantity = parseInt(display.innerText);

    function decrement() {
        if (quantity > 1) {
            quantity--;
            updateDisplay(display, quantity);
        }
    }

    decrement();
    timer = setInterval(decrement, 300);
}

function stopChange() {
    clearInterval(timer);
}

// 🔥 Atualiza subtotal, total e envia via FormData
function updateResumo() {
    const linhas = document.querySelectorAll('tbody tr');
    let subtotal = 0;

    linhas.forEach(linha => {
        const precoElem = linha.querySelector('.preco');
        const preco = parseFloat(precoElem.dataset.preco);
        const qtd = parseInt(linha.querySelector('.qty-display').innerText);
        subtotal += preco * qtd;
    });

    const total = subtotal + taxa;

    // Atualiza o HTML
    document.getElementById('subtotal').innerText = subtotal + "kz";
    document.getElementById('total').innerText = total + "kz";

    // Atualiza os inputs escondidos para envio
    document.getElementById('input-subtotal').value = subtotal;
    document.getElementById('input-total').value = total;

}
</script>