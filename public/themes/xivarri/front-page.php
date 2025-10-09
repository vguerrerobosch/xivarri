<?php get_header(); ?>

<div class="relative px-4 sm:px-5 pb-10 pt-24">
    <?php
    component('hero');
    component('intro');
    ?>
    <div class="max-w-4xl mx-auto mt-24">
        <div class="aspect-video overflow-hidden relative">
            <iframe
                src="https://www.youtube-nocookie.com/embed/2UTW2pT33Ww?controls=0&autoplay=1&loop=1&playlist=2UTW2pT33Ww&mute=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
                class="absolute top-0 left-0 w-full h-full"
            ></iframe>
        </div>
    </div>
    <?php
    component('agenda');
    component('dyptich');
    component('cta');
    component('site-footer');
    ?>
    <div class="absolute z-[-1] bottom-0 inset-x-0">
        <img src="<?= asset('texture-2.png') ?>" alt="" class="w-full h-auto" />
    </div>
</div>

<?php get_footer(); ?>
