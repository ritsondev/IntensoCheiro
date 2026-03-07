<?php defined('CONTROL') or die('Acesso negado');


$produtos=new Produto('true');
$datas_search=$produtos->search();

/*
echo '<pre>';
print_r($datas_search);
echo '<pre>';
*/


?>
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

<div class="flex flex-col sm:flex-row justify-between items-center gap-4">
<div class="flex items-center space-x-2 text-[11px] uppercase tracking-widest text-primary">
<span class="text-white/40">Ordenar por:</span>
<select class="bg-transparent border-none text-primary focus:ring-0 text-[11px] uppercase cursor-pointer py-0">
<option class="bg-black" value="*">Destaques</option>
<option class="bg-black" value="15000">Preço: Menor ao Maior</option>
<option class="bg-black" value="15000">Preço: Maior ao Menor</option>
</select>
</div>
</div>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">

<?php foreach ($datas_search['produto'] as $produto): ?>

    <div class="group">
        <div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">

            <?php foreach ($datas_search['incrementos'] as $incremento): ?>
                <?php if ($incremento['produto_idf_produto'] == $produto['idf_produto']): ?>
                    <img alt="<?=$produto['nome']?>" 
                         class="absolute top-0 left-0 w-full h-full object-cover" 
                         src="<?= $incremento['linkexp']; ?>"/>
                <?php endif; ?>
            <?php endforeach; ?>

            <a href="index.php?page=produto&prod=<?=$produto['idf_produto']?>" target="_blank">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] text-center cursor-pointer">
                        Adicionar à Bolsa
                    </label>
                </div>
            </a>

        </div>

        <div class="text-center">
            <p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">
                <?=$produto['title3']; ?>
            </p>
            <h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">
                <?=$produto['nome']?>
            </h3>
            <p class="text-primary text-xl font-medium tracking-[0.1em]">
                <?=$produto['preco_base']?> Kz
            </p>
        </div>
    </div>

<?php endforeach; ?>

</div>

<div class="mt-24 text-center">

<button class="px-20 py-5 border border-primary/20 hover:border-primary text-primary text-[10px] uppercase tracking-[0.5em] transition-all rounded-sm hover:bg-primary/5">
                Descobrir Mais
            </button>
</div>
</section>