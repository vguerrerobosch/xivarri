<?php get_header(); ?>

<div class="relative px-4 sm:px-5 pb-10 pt-24">
    <?php
    component('hero');
    component('intro');
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
