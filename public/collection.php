<?php defined('CONTROL') or die('Acesso negado');


$produtos=new Produto('true');
$datas_search=$produtos->search();

echo '<pre>';
print_r($datas_search);
echo '<pre>';



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


<div class="flex flex-wrap items-center gap-6 w-full lg:w-auto">
<div class="flex flex-col gap-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Categoria</label>
<select class="luxury-select">
<option value="*" class="bg-black">Todas</option>
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
<option value="*" class="bg-black">Todos</option>
<option value="masculino" class="bg-black">Masculino</option>
<option value="feminino" class="bg-black">Feminino</option>
<option value="unissex" class="bg-black">Unissex</option>
</select>
</div>
<div class="flex flex-col gap-2">
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Tipo</label>
<select class="luxury-select">
<option value="*" class="bg-black">Todas</option>
<option value="normal" class="bg-black">Normal</option>
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
<option class="bg-black" value="*">Destaques</option>
<option class="bg-black" value="15000">Preço: Menor ao Maior</option>
<option class="bg-black" value="15000">Preço: Maior ao Menor</option>
</select>
</div>
</div>
</div>

<?php foreach ($datas_search['produto'] as $produto): ?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Oud Imperial" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="<?=$datas['imagens'] ?>"/>
<a href="index.php?page=produto&prod=<?=$produto['idf_produto']?>" target="_blank" rel="noopener noreferrer">

<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" >Adicionar à Bolsa</label>
</div>

</a>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2"><?=$produto['title3']; ?></p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight"><?=$produto['nome']?></h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]"><?=$produto['preco_base']?> Kz</p>
</div>
</div>
<div class="mt-24 text-center">

<?php endforeach;?>

<button class="px-20 py-5 border border-primary/20 hover:border-primary text-primary text-[10px] uppercase tracking-[0.5em] transition-all rounded-sm hover:bg-primary/5">
                Descobrir Mais
            </button>
</div>
</section>