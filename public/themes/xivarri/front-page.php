<?php get_header(); ?>

<div class="px-12 py-20">
    <div class="max-w-lg font-medium text-3xl/tighter">Un espai de reflexió i diàleg per als qui tenen ganes de fer soroll. Aquí no vens només a escoltar, hi vens a dir la teva.</div>

    <div class="font-medium uppercase mt-10">Despertem la ment</div>
    <div class="font-black text-7xl uppercase">Xivarri</div>

    <div class="text-sm text-orange uppercase mt-10">El silenci és necessari.<br>Però el soroll, deixa empremta.</div>
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

<?php get_footer(); ?>
