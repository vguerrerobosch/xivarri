<?php

$args = wp_parse_args(array_filter($args ?? []), [
    'youtube_id' => '2UTW2pT33Ww',
]);

?>
<div x-data="{ expanded: false }" class="mt-24 -mx-4 sm:-mx-5">
    <div class="aspect-video overflow-hidden relative" x-intersect.threshold.75="setTimeout(() => expanded = true, 200)">
        <iframe
            src="https://www.youtube-nocookie.com/embed/<?= esc_attr($args['youtube_id']) ?>?autoplay=1&loop=1&playlist=<?= esc_attr($args['youtube_id']) ?>&mute=1"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            class="absolute top-0 left-0 w-full h-full video-circular"
            :class="{ 'expanded': expanded }"
        ></iframe>
    </div>
</div>
