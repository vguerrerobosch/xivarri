<?php

$args = wp_parse_args($args ?? [], [
    'title' => 'Així ho vam viure en edicions anteriors',
    'images' => null,
]);

?>
<div class="">
    <h2 class="font-semibold text-3xl md:text-4xl text-center uppercase text-balance"><?= esc_html($args['title']); ?></h2>
    <div class="swiper mt-12" x-data="gallery">
        <div class="swiper-wrapper items-center">
            <?php foreach ($args['images'] as $image) : ?>
                <div class="swiper-slide">
                    <?= image($image) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
