<?php

$args = wp_parse_args(array_filter($args ?? []), [
    'quote' => "El silenci és necessari.\nPerò, el soroll deixa empremta.",
    'intro' => 'Fer Xivarri és una manera d’expressar inquietuds, de compartir idees, de contrastar opinions. És el que et permet despertar aquella curiositat que, en realitat, mai no ha estat adormida. És l’idioma dels que pensen.',
    'description' => 'El pla que et proposem: una sessió magistral amb un expert, una estona per fer preguntes i un sopar on conèixer gent i debatre sense filtres. Si tens coses a dir —i moltes al cap—, aquest és el teu lloc.',
]);

?>
<div id="intro"
    x-data="{ visible: false }"
    x-intersect="visible = true"
    class="lg:flex lg:space-x-16 max-w-6xl mx-auto mt-24 py-10 transition-all duration-1500 ease-out"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
>
    <div class="text-sm text-orange uppercase mb-4"><?= nl2br($args['quote']) ?></div>
    <div class="max-w-3xl">
        <div class="font-semibold text-2xl lg:text-3xl/tighter"><?= $args['intro'] ?></div>
        <div class="max-w-lg text-lg/tighter mt-10"><?= $args['description'] ?></div>
    </div>
</div>
