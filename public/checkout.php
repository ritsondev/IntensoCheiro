<?php defined('CONTROL') or die('Acesso negado')?>
<main class="relative z-10 pt-32 pb-24">
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
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Seu nome" type="text"/>
</div>
<div class="space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Sobrenome</label>
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Seu sobrenome" type="text"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Endereço de Entrega</label>
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700" placeholder="Rua, Número, Complemento, Bairro e NIF" type="text"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-[10px] tracking-widest uppercase text-slate-500">Número do WhatsApp</label>
<div class="relative">
<input class="w-full bg-transparent border border-primary/20 rounded-lg px-4 py-3 text-sm focus:border-primary transition-all placeholder:text-slate-700 pl-10" placeholder="(+244) 924 697 927" type="tel"/>
<span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-sm text-primary/60">chat</span>
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
<input checked="" class="form-radio text-primary bg-transparent border-primary/40 focus:ring-0" name="shipping" type="radio"/>
<div class="ml-4 flex-1">
<div class="flex justify-between items-center">
<span class="text-sm font-semibold uppercase tracking-wider">Intenso cheiro</span>
<span class="text-primary text-sm">Grátis</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">2-7 Dias Úteis • Entrega Segurada</p>
</div>
</label>
<label class="flex items-center p-4 border border-primary/10 rounded-lg hover:border-primary/30 cursor-pointer transition-all">
<input class="form-radio text-primary bg-transparent border-primary/40 focus:ring-0" name="shipping" type="radio"/>
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
<div class="flex items-center space-x-4 pb-4 border-b border-primary/5">
<div class="w-16 h-16 bg-neutral-dark rounded border border-primary/5 flex items-center justify-center overflow-hidden">
<img alt="L'Essence Royale" class="w-12 h-12 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNf6mRJxynHsvS0KDiqsXhPRAJDoFtaNoFBzz7aYrSZV-2yKiVKJcq91QyhcUzpnjUSL292Z5NLLSQFyK2pgugHyjBOG1jCfm9LodH8lUPnVnxYpXvjliA0Myxh0dJ-P4fy8YMsb2PDcHozkcYphSIOodkLGmdWdE9w13_2RNv3mj_7f9Pf8KmgjsaV4ns8EeLgGh4mgZxd77aorR2PYDYl9rhCMfCqntPLjPiIOMT5GYiUWBPQZHlnjShDrEwe1GAxjTRHjzPOg"/>
</div>
<div class="flex-1">
<h4 class="font-serif text-sm font-bold">L'Essence Royale</h4>
<p class="text-[10px] text-slate-500 uppercase tracking-widest">Qtd: 01</p>
</div>
<span class="text-sm font-serif">R$ 1.450,00</span>
</div>
<div class="flex items-center space-x-4 pb-4 border-b border-primary/5">
<div class="w-16 h-16 bg-neutral-dark rounded border border-primary/5 flex items-center justify-center overflow-hidden">
<img alt="Oud Mystique" class="w-12 h-12 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNf6mRJxynHsvS0KDiqsXhPRAJDoFtaNoFBzz7aYrSZV-2yKiVKJcq91QyhcUzpnjUSL292Z5NLLSQFyK2pgugHyjBOG1jCfm9LodH8lUPnVnxYpXvjliA0Myxh0dJ-P4fy8YMsb2PDcHozkcYphSIOodkLGmdWdE9w13_2RNv3mj_7f9Pf8KmgjsaV4ns8EeLgGh4mgZxd77aorR2PYDYl9rhCMfCqntPLjPiIOMT5GYiUWBPQZHlnjShDrEwe1GAxjTRHjzPOg"/>
</div>
<div class="flex-1">
<h4 class="font-serif text-sm font-bold">Oud Mystique</h4>
<p class="text-[10px] text-slate-500 uppercase tracking-widest">Qtd: 01</p>
</div>
<span class="text-sm font-serif">R$ 1.290,00</span>
</div>
</div>
<div class="space-y-4 mb-10">
<div class="flex justify-between items-center text-xs">
<span class="text-slate-400 font-light tracking-wide uppercase">Subtotal</span>
<span class="font-medium">R$ 2.740,00</span>
</div>
<div class="flex justify-between items-center text-xs">
<span class="text-slate-400 font-light tracking-wide uppercase">Envio</span>
<span class="font-medium text-primary">Grátis</span>
</div>
<div class="pt-6 border-t border-primary/10 flex justify-between items-center">
<span class="font-serif text-xl font-bold uppercase tracking-widest">Total</span>
<span class="font-serif text-2xl font-bold text-primary">R$ 2.740,00</span>
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
</div>
</div>
</main>

