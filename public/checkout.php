<?php 

defined('CONTROL') or die('Acesso negado');

if($page==='checkout'){

$check_datas=$_POST;
$get_datas=$_SESSION['carrinho'];
}
echo '<pre>';
print_r($get_datas);
echo '<pre>';
?>
<main class="relative z-10 pt-32 pb-24">

<form action="index.php?page=index" method="post">
<div class="container mx-auto px-6">
<div class="mb-16">
<div class="flex items-center space-x-3 mb-4">
<span class="h-px w-8 bg-primary/40"></span>
<span class="text-primary tracking-[0.4em] text-[10px] uppercase font-semibold">Finalização Exclusiva</span>
</div>
<h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold">Reserva de Pedido</h1>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-8 space-y-6">
<div class="accordion-section pb-8">
<div class="flex items-center justify-between mb-8">
<h2 class="font-serif text-2xl font-bold flex items-center">
<span class="text-primary/40 mr-4 text-lg">01.</span> Endereço de Entrega
                            </h2>
<span class="material-symbols-outlined text-primary">expand_more</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Nome</label>
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Seu nome" type="text" name="nome" tabindex="1" autofocus required minlength="3" maxlength="16"/>
</div>
<div class="space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Sobrenome</label>
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Seu sobrenome" type="text" name="sobrenome" tabindex="2" required minlength="3" maxlength="16"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Endereço de Entrega</label>
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Rua, Número, Complemento, Bairro e NIF" type="text" tabindex="3" name="endereco" required minlength="10" maxlength="55"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Número do WhatsApp</label>
<div class="relative">
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700 pl-10" placeholder="(+244) 924 697 927" type="number" tabindex="4" name="numero" minlength="9" maxlength="12" required/>
<span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-sm text-primary/60">chat</span>
</div>
<div>

<input type="hidden" name='elementos' value="<?= htmlspecialchars(json_encode($get_datas), ENT_QUOTES) ?>">
<input type="hidden" name="subtotal" id="input-subtotal" value="<?=$check_datas['subtotal']?>">
<input type="hidden" name="total" id="input-total" value="<?=$check_datas['total']?>">

</div>
</div>
</div>
</div>
<div class="accordion-section py-8">
<div class="flex items-center justify-between mb-8">
<h2 class="font-serif text-2xl font-bold flex items-center">
<span class="text-primary/40 mr-4 text-lg">02.</span> Método de Envio
                            </h2>
<span class="material-symbols-outlined text-primary">expand_more</span>
</div>
<div class="space-y-4">
<label class="flex items-center p-4 border border-primary/40 rounded-lg bg-primary/5 cursor-pointer transition-all">
<input checked="" class="form-radio text-primary bg-transparent border-primary/40 focus:ring-0" name="shipping" value="grátis" type="radio"/>
<div class="ml-4 flex-1">
<input type="hidden" name="action" value="cliente">
<div class="flex justify-between items-center">
<span class="text-sm font-semibold uppercase tracking-wider">Intenso cheiro</span>
<span class="text-primary text-sm">Grátis</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">2-7 Dias Úteis • Entrega Segurada</p>
</div>
</label>
<label class="flex items-center p-4 border border-primary/10 rounded-lg hover:border-primary/30 cursor-pointer transition-all">
<input class="form-radio text-primary bg-transparent border-primary/40 focus:ring-0" name="shipping" type="radio" value="premium"/>
<div class="ml-4 flex-1">
<div class="flex justify-between items-center">
<span class="text-sm font-semibold uppercase tracking-wider">Intenso Premium</span>
<span class="text-sm">3500kz</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">Entrega em 24h • Serviço Personalizado</p>
</div>
</label>
</div>
</div>
<div class="py-12 px-8 border border-primary/10 rounded-xl bg-neutral-dark/40">
<div class="flex items-start space-x-6">
<span class="material-symbols-outlined text-primary text-4xl">contact_support</span>
<div class="space-y-4">
<h3 class="font-serif text-xl font-bold italic">Processamento Personalizado</h3>
<p class="text-sm text-slate-400 font-light leading-relaxed">
                                    Ao clicar em <strong class="text-primary">FAZER PEDIDO</strong>, sua reserva será confirmada instantaneamente. Nossa equipe de Concierge entrará em contato via WhatsApp em até 15 minutos para coordenar os detalhes da entrega e as opções de pagamento preferenciais.
                                </p>
</div>
</div>
</div>
</div>
<div class="lg:col-span-4">
  <div class="bg-neutral-dark/50 backdrop-blur-md border border-primary/10 p-8 rounded-xl sticky top-32">
    <h2 class="font-serif text-2xl font-bold mb-8">Resumo do Pedido</h2>

<div class="space-y-6 mb-8">

  <!-- H2 mostrando produtos restantes -->
  <?php 
    $total_produtos = count($get_datas);
    $exibidos = 2;
    $restantes = $total_produtos - $exibidos;
  ?>
  <?php if($restantes > 0): ?>
    <h2 class="text-yellow-400 font-semibold text-center mb-4">
      E mais <?= $restantes ?> produto(s) no seu pedido
    </h2>
  <?php endif; ?>

  <!-- Lista dos 2 primeiros produtos -->
  <?php foreach(array_slice($get_datas, 0, 2) as $datas): ?>
    <div class="flex items-center space-x-4 pb-4 border-b border-primary/5">

      <div class="w-16 h-16 bg-transparent rounded border border-primary/5 flex items-center justify-center overflow-hidden">
        <img alt="<?= $datas['nome'] ?>" class="w-12 h-12 object-contain"
             src="<?= $datas['img'] ?>"/>
      </div>

      <div class="flex-1">
        <h4 class="font-serif text-sm font-bold text-white"><?= $datas['nome'] ?></h4>
        <p class="text-[10px] text-slate-400 uppercase tracking-widest">
          Qtd: <?= $datas['quantidade'] ?>
        </p>
      </div>

      <span class="text-sm font-serif text-yellow-400"><?= $datas['preco'] ?>kz</span>

    </div>
  <?php endforeach; ?>

</div>


    <!-- Resumo financeiro -->
    <div class="space-y-4 mb-10">
      <div class="flex justify-between items-center text-xs">
        <span class="text-slate-400 font-light tracking-wide uppercase">Subtotal</span>
        <span class="font-medium resumo-subtotal"><?=$check_datas['subtotal']?>kz</span>
      </div>
      <div class="flex justify-between items-center text-xs">
        <span class="text-slate-400 font-light tracking-wide uppercase">Envio</span>
        <span class="font-medium text-primary resumo-envio">Grátis</span>
      </div>
      <div class="pt-6 border-t border-primary/10 flex justify-between items-center">
        <span class="font-serif text-xl font-bold uppercase tracking-widest">Total</span>
        <span class="font-serif text-2xl font-bold text-primary resumo-total">
    <?=$check_datas['total']?>kz
</span>
      </div>
    </div>

    <div class="space-y-4">
      <button class="w-full py-5 bg-primary text-background-dark font-bold text-xs uppercase tracking-[0.25em] rounded-lg transition-all duration-300 hover:shadow-[0_0_30px_rgba(244,192,37,0.3)] hover:scale-[1.01]">
        FAZER PEDIDO
      </button>
      <div class="flex items-center justify-center space-x-2 text-slate-500 text-[9px] tracking-[0.2em] uppercase py-2">
        <span class="material-symbols-outlined text-sm">verified</span>
        <span>Reserva Prioritária Garantida</span>
      </div>
    </div>
  </div>
</div>
</form>
<!-- JavaScript para atualizar envio e total -->
<script>
  const shippingRadios = document.querySelectorAll('input[name="shipping"]');
  const envioSpan = document.querySelector('.resumo-envio');
  const totalSpan = document.querySelector('.resumo-total');

  // Pega subtotal já renderizado pelo PHP
  let subtotal = parseFloat(document.querySelector('.resumo-subtotal').innerText.replace(/\D/g,''));

  function atualizarResumo() {
    const selecionado = document.querySelector('input[name="shipping"]:checked');
    if (!selecionado) return;

    const label = selecionado.closest('label');
    const valorSpan = label.querySelector('span.text-sm:last-child');

    let valorEnvio = 0;
    if (valorSpan.innerText.toLowerCase().includes('grátis')) {
      valorEnvio = 0;
      envioSpan.innerText = 'Grátis';
    } else {
      valorEnvio = parseFloat(valorSpan.innerText.replace(/\D/g,''));
      envioSpan.innerText = valorEnvio + 'kz';
    }

    totalSpan.innerText = (subtotal + valorEnvio + 500) + 'kz';
  }

  shippingRadios.forEach(radio => radio.addEventListener('change', atualizarResumo));
  atualizarResumo(); // Inicializa ao carregar a página

</script>
</div>
</div>
</main>

