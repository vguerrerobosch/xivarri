<?php get_header(); ?>

<div class="fixed inset-0 z-[-1] bg-gradient-to-b from-blue to-blue-dark"></div>

<div class="relative px-5 pb-10">
    <div class="absolute inset-x-0 top-0 h-auto z-[-1]">
        <img src="<?= asset('texture.png') ?>" alt="" class="w-full h-auto" />
    </div>
    <div class="flex py-6 justify-between items-center space-x-10 uppercase leading-none">
        <div class="">
        Barcelona • Espanya<br />
        13 de novembre DE 2025<br />
        AULA MAGNA, CAMPUS UIC BARCELONA
        </div>
        <ul class="font-semibold flex space-x-10 ml-auto">
            <li>Què és?</li>
            <li>Edicions passades</li>
            <li>Agenda</li>
            <li>On som</li>
            <li>Compra l’entrada</li>
        </ul>
        <div>Cat</div>
    </div>
    <div class="ml-auto max-w-lg font-medium text-3xl/tighter mt-16">Un espai de reflexió i diàleg per als qui tenen ganes de fer soroll. Aquí no vens només a escoltar, hi vens a dir la teva.</div>

    <div class="flex justify-center mt-40">
        <div>
            <div class="font-medium text-4xl uppercase -mb-10">Despertem la ment</div>
            <div class="font-display font-black text-[84px] sm:text-[120px] md:text-[180px] lg:text-[240px] xl:text-[320px] 2xl:text-[350px] uppercase whitespace-nowrap leading-[0.75] *:transition-all *:duration-500 group overflow-hidden">
                <span class="text-[1.25em] group-hover:text-[1em]">X</span><!--
            --><span class="text-[0.95em]">i</span><!--
            --><span class="text-[1.15em] -mr-[0.1em]">v</span><!--
            --><span class="text-[1em] group-hover:text-[1.526em]">a</span><!--
            --><span class="text-[1.05em] group-hover:text-[1.15em]">r</span><!--
            --><span class="text-[1.4em] group-hover:text-[1em]">r</span><!--
            --><span class="text-[1.075em]">i</span><!--
            --><span class="text-[1.526em]">&#8203;</span>
            </div>
        </div>
    </div>

    <div class="flex space-x-10 mt-120">
        <div class="text-sm text-orange uppercase">El silenci és necessari.<br>Però el soroll, deixa empremta.</div>
        <div class="max-w-3xl">
            <div class="font-medium text-3xl/tighter">Fer Xivarri és una manera d’expressar inquietuds, de compartir idees, de contrastar opinions. És el que et permet despertar aquella curiositat que, en realitat, mai ha estat adormida. És l’idioma dels que pensen.
            </div>
            <div class="max-w-lg text-lg/tighter mt-10">El pla que et proposem: una sessió magistral amb un expert, una estona per fer preguntes i un sopar on conèixer gent i debatre sense filtres. Si tens coses a dir —i molt a pensar—, aquest és el teu lloc.</div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-10 flex flex-col gap-2.5 border border-apricot rounded-3xl p-10">
        <div class="font-medium text-5xl uppercase mb-4">Comencem amb força</div>

        <?php component('agenda-item', [
            'time' => '19:30h',
            'text' => '🍿 Pica-pica per trencar el gel',
        ]) ?>
        <?php

        component('agenda-item', [
            'time' => '20:00h',
            'text' => '💥 Què és Xivarri?'
        ]);

        component('agenda-item-featured', [
            'time' => '20:15 h',
            'speaker' => 'Ricardo Piñero',
            'title' => '🎙️ Xerrada',
            'description' => 'Filòsof i Catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra',
        ]);

        component('agenda-item', [
            'time' => '20:40h',
            'text' => '🙋‍♀️ Torn de preguntes',
            'class' => 'bg-blue-light px-6 py-4',
        ]);

        component('agenda-item', [
            'time' => '21:15h',
            'text' => '🪩 Sopar, música i moltes sorpreses',
            'class' => 'bg-apricot px-6 py-6'
        ]);

        component('agenda-item', [
            'time' => '22:30h',
            'text' => '👋🏻 Comiat'
        ]);

        ?>
    </div>

    <?php component('dyptich') ?>

    <div class="max-w-4xl mx-auto mt-40">
        <div class="font-display font-black text-[140px] leading-none uppercase flex flex-col">
            <div class="bg-[#1E1D6F] px-10 py-6 rounded-2xl self-end">Vine a fer</div>
            <div class="bg-[#1E1D6F] px-10 py-6 rounded-2xl self-start -mt-10">Xivarri</div>
        </div>
        <div class="flex flex-col items-start max-w-md ml-auto mt-10">
            <div class="text-apricot uppercase">Ho sents?</div>
            <p class="text-lg leading-tight mt-4">Uneix-te a l’esdeveniment universitari més vibrant del moment. Obert a tothom!</p>
            <a href="#" class="font-semibold bg-white px-6 py-2 rounded-full text-[#1E1D6F] mt-4 hover:bg-apricot hover:text-white transition-colors">Compra l’entrada</a>
        </div>
    </div>

    <div class="flex space-x-5 mt-24">
        <div class="w-3/5 p-6 rounded-xl bg-black/10 backdrop-blur-lg">
            Lloc
Campus UIC Barcelona
Carrer de la Immaculada, 22, Sarrià-Sant Gervasi, 08017 Barcelona
        </div>
        <div class="w-2/5 grid grid-cols-2 gap-5">
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg">
                Reserva’t la data
13 de novembre, 2025
19.30 h - 22.30 h
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg">
                Compra l’entrada
Disponible a la nostra plataforma
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg">
                Contacta amb nosaltres
info@uic.es
+34 93 254 18 00
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg">
                Un esdeveniment de
L’Institut de Cultura i Pensament de
UIC Barcelona
            </div>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg mt-5">Amb el patrocini de</div>
    <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg mt-5">
        Política de cookies
        Política de privacitat
        Condicions generals d’ús
    </div>

    <div class="absolute z-[-1] bottom-0 inset-x-0">
        <img src="<?= asset('texture-2.png') ?>" alt="" class="w-full h-auto" />
    </div>
</div>

<?php get_footer(); ?>
