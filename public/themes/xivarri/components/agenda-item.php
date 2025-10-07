<?php

$args = wp_parse_args($args, [
    'time' => '19:30h',
    'text' => '🍿 Pica-pica per trencar el gel',
    'class' => 'bg-black/10',
]);

?>
<div class="border border-white/20 <?= $args['class'] ?> px-4 lg:px-6 py-4 rounded-xl lg:flex">
    <div class="w-20 opacity-70 text-sm lg:text-lg mb-1 lg:mb-0"><?= $args['time'] ?></div>
    <div class="text-lg lg:text-xl !leading-tight"><?= $args['text'] ?></div>
</div>
