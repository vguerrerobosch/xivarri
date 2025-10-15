<div id="agenda"
    x-data="{ visible: false }"
    x-intersect="visible = true"
    class="max-w-6xl mx-auto pt-16 pb-10 mt-40 transition-all duration-1500 ease-out"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
>
<div class="relative flex flex-col gap-2.5 border border-t-transparent border-apricot rounded-b-3xl p-4 lg:p-10 !pt-0">
    <div class="absolute top-0 left-0 border-l border-t border-apricot rounded-tl-3xl size-6 -translate-y-full -ml-px"></div>
    <div class="absolute top-0 right-0 border-r border-t border-apricot rounded-tr-3xl size-6 -translate-y-full -mr-px"></div>
    <div class="relative -translate-y-1/2 -mt-6">
        <div class="flex items-center mx-2 lg:-mx-4">
            <div class="flex-1 border-b border-apricot"></div>
            <div class="font-semibold text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase px-4 text-center text-balance max-[485px]:max-w-[240px]">Comencem amb força</div>
            <div class="flex-1 border-b border-apricot"></div>
        </div>
        <div class="absolute inset-x-0 text-orange uppercase text-center text-balance">Hem arribat amb ganes de sacsejar ments!</div>
    </div>

    <div class="text-xl lg:text-3xl text-apricot uppercase mt-4 mb-4">📆 13 de novembre de 2025</div>

    <?php

    component('agenda-item', [
        'time' => '19.30 h',
        'text' => '🍿 Pica-pica per trencar el gel',
    ]);

    component('agenda-item', [
        'time' => '20.00 h',
        'text' => '💥 Què és Xivarri?'
    ]);

    component('agenda-item-featured', [
        'time' => '20.15 h',
        'speaker' => 'Ricardo Piñero - L’art d’estar atent als altres',
        'title' => '🎙️ Xerrada',
        'description' => 'Filòsof i catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra',
    ]);

    component('agenda-item', [
        'time' => '20.40 h',
        'text' => '🙋‍♀️ Torn de preguntes',
        'class' => 'bg-blue-light',
    ]);

    component('agenda-item', [
        'time' => '21.15 h',
        'text' => '🎶 Sopar, música i moltes sorpreses',
        'class' => 'bg-apricot'
    ]);

    component('agenda-item', [
        'time' => '22.30 h',
        'text' => '👋🏻 Comiat'
    ]);

    ?>
</div>
</div>
