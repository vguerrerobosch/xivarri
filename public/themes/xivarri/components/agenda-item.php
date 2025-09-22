<?php

$args = wp_parse_args($args, [
    'time' => '19:30h',
    'text' => '🍿 Pica-pica per trencar el gel',
    'class' => 'bg-black/10 px-6 py-4',
]);

?>
<div class="border border-white/20 <?= $args['class'] ?> rounded-xl flex">
    <div class="w-20 opacity-70"><?= $args['time'] ?></div>
    <div class=""><?= $args['text'] ?></div>
</div>
