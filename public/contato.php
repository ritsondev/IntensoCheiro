<?php defined('CONTROL') or die('Acesso negado')?>
<div class="flex flex-col lg:flex-row min-h-screen pt-24 lg:pt-28">
<section class="lg:w-1/2 relative h-[40vh] lg:h-auto overflow-hidden">
<div class="absolute inset-0 bg-black/40 z-10"></div>
<img alt="Luxury perfume mist" class="absolute inset-0 w-full h-full object-cover" src=".\assets\img\p6.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-background-dark z-20"></div>
<div class="relative z-30 flex flex-col justify-end h-full p-12 lg:p-20">
<span class="text-primary tracking-widest uppercase text-sm mb-4 font-semibold">A Arte da Essência</span>
<h1 class="text-5xl lg:text-7xl font-light text-white leading-tight">Consulta para <br/><span class="italic">os Sentidos.</span></h1>
</div>
</section>
<section class="lg:w-1/2 bg-background-light dark:bg-background-dark flex flex-col justify-center px-8 py-16 lg:px-24">
<div class="max-w-xl w-full mx-auto lg:mx-0">

<div class="space-y-3 mb-10">
<h2 class="text-3xl lg:text-4xl font-medium text-stone-900 dark:text-stone-100">Entre em contato com a Intenso Cheiro</h2>
<p class="text-stone-500 dark:text-stone-400 font-light leading-relaxed">
                    Nosso concierge particular está disponível para consultas de fragrâncias personalizadas e consultas de atacado. Por favor, aguarde 24 horas para uma resposta curada.
                </p>
</div>
<form action="index.php?page=home" class="space-y-8" method='post'>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative group">
<label class="block text-xs uppercase tracking-widest text-primary mb-2 font-semibold">NOME COMPLETO</label>
<input class="w-full bg-transparent border-b border-primary/30 focus:border-primary py-3 outline-none transition-all placeholder:text-stone-600 dark:placeholder:text-stone-500 focus:ring-0" placeholder="Ritson Dev" type="text" autofocus tabeindex='1' required name='nome' minlength="6" maxlength="20"/>
</div>
<div class="relative group">
<label class="block text-xs uppercase tracking-widest text-primary mb-2 font-semibold">NÚMERO DE WHATSSAP</label>
<input class="w-full bg-transparent border-b border-primary/30 focus:border-primary py-3 outline-none transition-all placeholder:text-stone-600 dark:placeholder:text-stone-500 focus:ring-0" placeholder="(+244) 924 697 927" type="text" tabeindex='2' required name='numero' minlength="9" maxlength="12"/>
</div>
</div>
<div class="relative group">
<label class="block text-xs uppercase tracking-widest text-primary mb-2 font-semibold">MENSAGEM</label>
<textarea class="w-full bg-transparent border-b border-primary/30 focus:border-primary py-3 outline-none transition-all resize-none placeholder:text-stone-600 dark:placeholder:text-stone-500 focus:ring-0" placeholder="Compartilhe suas preferências de fragrância ou dúvida..." rows="4" tabeindex='3' required name='msg' minlength="15" maxlength="195"></textarea>
</div>
<input type="hidden" name="action" value="contato">
<div class="pt-4">
<button class="group relative px-10 py-4 bg-primary text-background-dark font-semibold uppercase tracking-widest text-xs rounded-full overflow-hidden transition-all hover:bg-white hover:text-background-dark" type="submit">
<span class="relative z-10 flex items-center gap-2">
                            ENVIAR SOLICITAÇÃO
                            <span class="material-icons text-sm">east</span>
</span>
</button>
</div>
</form>
<div class="mt-20 pt-10 border-t border-primary/10 grid grid-cols-1 md:grid-cols-2 gap-12">
<div class="space-y-6">
<div>
<h4 class="text-primary text-xs uppercase tracking-widest font-bold mb-3">A BOUTIQUE DE LUANDA</h4>
<address class="not-italic text-stone-500 dark:text-stone-400 font-light leading-relaxed">
                            Angola, luanda<br/>
                            Camama 
                        </address>
</div>
<div class="space-y-4 pt-2">
<div class="flex flex-col gap-3">
<p class="text-stone-500 dark:text-stone-400 font-light text-sm">
                                Suporte Particular: <span class="text-stone-800 dark:text-stone-200 font-normal ml-1">(+244) 924 697 927</span>
</p>
<a class="inline-flex items-center gap-3 text-primary group transition-all duration-300" href="https://api.whatsapp.com/message/TPQA3RJCKWZRO1?autoload=1&app_absent=0&utm_source=ig">
<span class="flex items-center justify-center w-8 h-8 rounded-full border border-primary/30 group-hover:border-primary group-hover:bg-primary/5 transition-all">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.63 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
</svg>
</span>
<span class="text-xs uppercase tracking-[0.2em] font-bold">ATENDIMENTO VIA WHATSAPP</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="hidden lg:block absolute bottom-12 left-12 z-40 bg-background-dark/80 backdrop-blur-md p-4 rounded-xl border border-primary/20">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded bg-primary/20 overflow-hidden">
<img alt="Paris map thumbnail" class="w-full h-full object-cover" src="assets/img/localizacao.jpg"/>
</div>
<div>
<p class="text-[10px] uppercase tracking-tighter text-primary/60 font-bold">Localização</p>
<p class="text-sm font-medium text-white">Angola, Luanda</p>
</div>
</div>
</div>