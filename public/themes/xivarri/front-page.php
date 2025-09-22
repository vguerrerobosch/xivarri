<?php get_header(); ?>

<div class="absolute inset-x-0 top-0 h-auto">
    <img src="<?= asset('texture.png') ?>" alt="" class="w-full h-auto" />
</div>

<div class="relative px-5 sm:px-12 py-20">
    <div class="ml-auto max-w-lg font-medium text-3xl/tighter">Un espai de reflexió i diàleg per als qui tenen ganes de fer soroll. Aquí no vens només a escoltar, hi vens a dir la teva.</div>

    <div class="mx-auto mt-40">
        <div class="font-medium text-4xl uppercase mt-10">Despertem la ment</div>
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

    <div class="text-sm text-orange uppercase mt-96">El silenci és necessari.<br>Però el soroll, deixa empremta.</div>
    <div class="max-w-3xl font-medium text-3xl/tighter mt-10">Fer Xivarri és una manera d’expressar inquietuds, de compartir idees, de contrastar opinions. És el que et permet despertar aquella curiositat que, en realitat, mai ha estat adormida. És l’idioma dels que pensen.
    </div>

    <div class="max-w-lg text-lg/tighter mt-10">El pla que et proposem: una sessió magistral amb un expert, una estona per fer preguntes i un sopar on conèixer gent i debatre sense filtres. Si tens coses a dir —i molt a pensar—, aquest és el teu lloc.</div>

    <div class="mt-10 flex flex-col gap-2.5 border border-apricot rounded-3xl p-10">
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

    <div class="h-screen"></div>
    <div class="h-screen"></div>

<?php get_footer(); ?>
