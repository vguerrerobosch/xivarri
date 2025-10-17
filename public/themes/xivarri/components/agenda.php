<?php

$args = wp_parse_args(array_filter($args ?? []), [
    'title' => 'Comencem amb força',
    'subtitle' => 'Hem arribat amb ganes de sacsejar ments!',
    'date' => '📆 13 de novembre de 2025',
    'items' => [
        [
            'acf_fc_layout' => 'agenda_item',
            'time' => '19.30 h',
            'text' => '🍿 Pica-pica per trencar el gel',
        ],
        [
            'acf_fc_layout' => 'agenda_item',
            'time' => '20.00 h',
            'text' => '💥 Què és Xivarri?',
        ],
        [
            'acf_fc_layout' => 'agenda_item_featured',
            'time' => '20.15 h',
            'tagline' => '🎙️ Xerrada',
            'title' => 'Ricardo Piñero - L’art d’estar atent als altres',
            'description' => 'Filòsof i catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra'
        ],
        [
            'acf_fc_layout' => 'agenda_item',
            'time' => '20.40 h',
            'text' => '🙋‍♀️ Torn de preguntes',
            'class' => 'bg-blue-light',
        ],
        [
            'acf_fc_layout' => 'agenda_item',
            'time' => '21.15 h',
            'text' => '🎶 Sopar, música i moltes sorpreses',
            'class' => 'bg-apricot'
        ],
        [
            'acf_fc_layout' => 'agenda_item',
            'time' => '22.30 h',
            'text' => '👋🏻 Comiat'
        ],
    ],
]);

?>
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
            <div class="font-semibold text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase px-4 text-center text-balance max-[485px]:max-w-[240px]"><?= $args['title'] ?></div>
            <div class="flex-1 border-b border-apricot"></div>
        </div>
        <div class="absolute inset-x-0 text-orange uppercase text-center text-balance"><?= $args['subtitle'] ?></div>
    </div>

    <div class="text-xl lg:text-3xl text-apricot uppercase mt-4 mb-4"><?= $args['date'] ?></div>

    <?php

    foreach ($args['items'] as $item) {
        component(str_replace('_', '-', $item['acf_fc_layout']), $item);
    }

    ?>
</div>
</div>
