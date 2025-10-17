<?php

$args = wp_parse_args($args, [
    'time' => '20:15 h',
    'tagline' => '🎙️ Xerrada',
    'title' => 'Ricardo Piñero',
    'description' => 'Filòsof i Catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra',
]);

?>
<div class="border border-white/20 bg-white text-blue-darker rounded rounded-xl px-4 lg:px-6 py-4">
    <div class="w-20 opacity-70 text-sm lg:text-lg"><?= $args['time'] ?></div>
    <div class="uppercase mt-12"><?= $args['tagline'] ?></div>
    <div class="font-semibold text-3xl"><?= $args['title'] ?></div>
    <div class="text-sm"><?= $args['description'] ?></div>
</div>
