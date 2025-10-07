<div class="max-w-7xl mx-auto mt-10 flex flex-col gap-2.5 border border-apricot rounded-3xl p-10">
    <div class="font-semibold text-5xl uppercase mb-4">Comencem amb força</div>
    <div class="text-3xl text-apricot uppercase mb-4">📆 13 de novembre</div>
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
