<?php
include_once("templates/header.php");
?>

<main class="flex-grow flex flex-col items-center justify-center relative px-6 py-20 pt-24 overflow-hidden">
<!-- Background Effects -->
<div class="absolute inset-0 pointer-events-none">
<div class="smoke-overlay absolute inset-0"></div>
<!-- Artistic smoke-like shapes -->
<div class="absolute top-1/4 -left-20 w-96 h-96 bg-primary/5 rounded-full blur-[100px]"></div>
<div class="absolute bottom-1/4 -right-20 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[120px]"></div>
</div>
<!-- 404 Hero Section -->
<div class="relative z-10 text-center flex flex-col items-center max-w-2xl">
<div class="mb-2">
<span class="text-primary/40 uppercase tracking-[1em] text-xs font-semibold">Erro</span>
</div>
<h2 class="text-[12rem] md:text-[16rem] leading-none font-light text-primary text-glow opacity-90 select-none">
                404
            </h2>
<div class="mt-4 space-y-6">
<h3 class="text-2xl md:text-4xl font-medium text-primary/90 tracking-wide">
                    Fragrância Não Encontrada
                </h3>
<p class="text-primary/60 text-lg md:text-xl max-w-lg mx-auto leading-relaxed font-light italic">
                    "A página que você procura pode ter evaporado ou nunca existiu. Deixe-se guiar de volta à nossa curadoria exclusiva."
                </p>
<div class="pt-8">
<a class="inline-block bg-primary text-deep-black font-bold py-4 px-10 rounded shadow-gold-glow hover:shadow-gold-glow-hover transition-all duration-300 uppercase tracking-widest text-sm active:scale-95" href="index.php?page=home">
                        Voltar para a Boutique
                    </a>
</div>
</div>

</div>
</main>

<?php
include_once("templates/footer.php");
?>