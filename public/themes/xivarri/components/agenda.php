<div class="relative max-w-7xl mx-auto mt-10 flex flex-col gap-2.5 border border-t-transparent border-apricot rounded-b-3xl p-4 lg:p-10 !pt-0 mt-40">
    <div class="absolute top-0 left-0 border-l border-t border-apricot rounded-tl-3xl size-6 -translate-y-full -ml-px"></div>
    <div class="absolute top-0 right-0 border-r border-t border-apricot rounded-tr-3xl size-6 -translate-y-full -mr-px"></div>
    <div class="flex items-center mx-2 lg:-mx-4 -translate-y-1/2 -mt-6">
        <div class="flex-1 border-b border-apricot"></div>
        <div class="font-semibold text-3xl lg:text-7xl uppercase px-4 text-center text-balance max-[485px]:max-w-[240px]">Comencem amb força</div>
        <div class="flex-1 border-b border-apricot"></div>
    </div>

    <div class="text-xl lg:text-3xl text-apricot uppercase mb-4 -mt-4">📆 13 de novembre</div>

    <?php

    component('agenda-item', [
        'time' => '19:30h',
        'text' => '🍿 Pica-pica per trencar el gel',
    ]);

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
        'class' => 'bg-blue-light',
    ]);

    component('agenda-item', [
        'time' => '21:15h',
        'text' => '🪩 Sopar, música i moltes sorpreses',
        'class' => 'bg-apricot'
    ]);

    component('agenda-item', [
        'time' => '22:30h',
        'text' => '👋🏻 Comiat'
    ]);

    ?>
</div>
