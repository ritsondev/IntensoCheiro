<?php
include_once("templates/header.php");
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
<option value="" class="bg-black">Todas</option>
<option value="amadeirado" class="bg-black">Amadeirado</option>
<option value="floral" class="bg-black">Floral</option>
<option value="oriental" class="bg-black">Oriental</option>
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
<label class="text-[9px] uppercase tracking-[0.4em] text-primary/50 ml-1">Intensidade</label>
<select class="luxury-select">
<option value="" class="bg-black">Todas</option>
<option value="suave" class="bg-black">Suave</option>
<option value="moderado" class="bg-black">Moderado</option>
<option value="intenso" class="bg-black">Intenso</option>
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
<img alt="Oud Imperial" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5Jw15QAtQVZLFpXBVtQ1Cywm-juFSySt7C3nsQ0BGGVZ0ATaDaCSLvfL8SYShEiBVQbbQrZQH5t66rwcW1C25PsPL6HAHfjQH-KK3y1PbSHRZ5XUYayqdOihpwhnAR7orMB_vEmdsEfhbp195LYM56bPTkWou7Qga27cdRZe3onUhEUDsNfSt-6BAKI58fvnCBoPUnJ1_jlal702iwsNxJPxIl7zKuVTKibL0lO3aF8cwIMXypFP8yUUuZlXrHEzwksYmHR4gzA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Amadeirado • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Oud Imperial</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 1.580,00</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Velvet Rose" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIqYbZdJPsdGFwfWfhGG13-Pu0B_RP0TyvlSIf9Oj819LzJrRjlShlfm3OG8_HEewHYc1UDYGuquEIzO_QAmrJV1hTsetmFi0lRsb7K_6sllUmcX1Z7pxDlOYAOWcM52ftjYMdZCfuNeWEu-Hd9uJ8wbKSPCE47Gg5UZy1-9mBcobjwWBEBf7TtwGXd3GT9fNu0QI_PmQVCOXXBgAwXmpc3FB_VZgLXObAKTq-j7DAmfqwiytR7uhqY2qXq0tcMFQyd3uAF7h3uA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Floral • Moderado</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Velvet Rose</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 495,00</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Gold Ember" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAX86CvcqYCw7e8KlTa8DExwApdD8AfzS-wb1MiiV7Ti7w6w52EgUpHYkD6wDAmajCnrMe2aa_GS-g8ZEK5xLUnCKR6hV45sox_IikNz9I8fzVYJUHE-iBcAlVwb96k_lDenbY3VrM9C87zlPw7VS-xYLrWw9dku5cO9iwX2CfuhxHdZgTxefYVwVgVkvWouapAgPj18vM-7xALcZDS4TXRreG_51NN_c63t0wVW3CniSmd3xMzTJvCFiKEylXHQRPkbcqbOVkcpw"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Oriental • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Gold Ember</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 2.720,00</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Citrus Noir" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkvojB4yu90dSJCuRahcDBakAePvdyoDzyQyCtLC9fT3UGyNCbniTEYvTYXFzstBsbOuBGvgCxuoBGMKflpPc2q19vNEnrHUxnXuu8n9ss9KSL90VVtGeuBv1P3JZYwEcGphh3UTvZ3fBLHf5d78shduWKemSFdaKjgtTcqGm5WhoYEnckVsbesUEkx6jD0VcwB-9UnNXNjzF0WU8ZXnRhoNkeLmcwNQzDCI5pLvRGDVxLuJ3RsHVv4gHQJ2-akRK0RaIHOcXE0w"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Cítrico • Suave</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Citrus Noir</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 380,00</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Nocturnal Wood" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDX_APtQiM7Bb79W2N2RTcf35JckaooXXZrFeLFwzHJN1nqsDYxoGyF0vl08NHiiUCBj4ZERLjRekrq5WQSIbTMg7ilvQU-ivjv1n3zAYUJ_P4Gk31WKtonKCSlQhBRmOikgrMUK9Wsap3hVrCSKOntChTX088GO57lYGI6ZQpOVFcuWFpiipj2lCaI6vJ6YQGlEGdwldAIh9lRUkNvomjqiSmZVk7q_1YNAQ2cQ7sqeBLTfBjyoBYUbHxtHUEJr7VJfJRn1V46mQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Amadeirado • Intenso</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Nocturnal Wood</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 1.640,00</p>
</div>
</div>
<div class="group">
<div class="relative aspect-[3/4] bg-neutral-dark rounded-lg overflow-hidden mb-8 border border-white/5 group-hover:border-primary/30 transition-all duration-500">
<img alt="Saffron Dusk" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-90 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_L_CfSKk-CCttlf3UeeRFfKA_53FlJCLbN6YLI-FQKnjrOoj6rc4Rq_7rAVlgtqvSKkh3PGjJE8TAWkYBWvgJ1HFWz5QstsBSrwN444aX9QQXcMC65JNE6XNR0DbosePp09U_ApIMmtVnJC5WdtfAITi5xH8wNFK_IMzw2oPQaGvFONDOrDZGFC6bWgDmnZDKO1HXuk-2_9p7QSAyxcWrPX3Nfdyr8OaOmqP0lOfz_NSQm_R3Rv2keOsNZAKiyJ-YHyIZSW-U_w"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
<label class="w-full bg-primary text-background-dark py-4 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] shadow-neon-gold text-center cursor-pointer hover:brightness-110 active:scale-[0.98] transition-all" for="cart-modal-toggle">Adicionar à Bolsa</label>
</div>
</div>
<div class="text-center">
<p class="text-[10px] uppercase tracking-[0.3em] text-primary/60 mb-2">Oriental • Moderado</p>
<h3 class="text-3xl font-light text-white mb-3 italic tracking-tight">Saffron Dusk</h3>
<p class="text-primary text-xl font-medium tracking-[0.1em]">R$ 510,00</p>
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
<img alt="Produto Selecionado" class="w-full h-full object-cover grayscale-[30%] opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5Jw15QAtQVZLFpXBVtQ1Cywm-juFSySt7C3nsQ0BGGVZ0ATaDaCSLvfL8SYShEiBVQbbQrZQH5t66rwcW1C25PsPL6HAHfjQH-KK3y1PbSHRZ5XUYayqdOihpwhnAR7orMB_vEmdsEfhbp195LYM56bPTkWou7Qga27cdRZe3onUhEUDsNfSt-6BAKI58fvnCBoPUnJ1_jlal702iwsNxJPxIl7zKuVTKibL0lO3aF8cwIMXypFP8yUUuZlXrHEzwksYmHR4gzA"/>
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

<?php
include_once("templates/footer.php");
?>