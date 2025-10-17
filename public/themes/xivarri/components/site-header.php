<?php

$main_menu = get_menu_items_by_location('main');
$main_menu = $main_menu ? build_tree($main_menu) : [];

$tickets_url = get_field('tickets_url', 'option');

?>
<div x-data="siteHeader">
    <div
        class="fixed inset-x-0 top-0 z-10 transition"
        :class="{'-translate-y-full -mt-2': !isVisible, 'backdrop-blur-lg bg-black/10': !isAtTop}"
    >
        <div class="relative flex px-5 py-6 justify-between items-center uppercase leading-none z-10">
            <div class="block cursor-pointer" @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
                <?= svg('logo', 'h-9 w-auto') ?>
            </div>
            <ul class="flex items-center space-x-10 font-semibold ml-auto">
                <?php
                foreach ($main_menu as $item): ?>
                    <li class="hidden lg:block"><a
                        href="<?= $item->url ?>"
                        class="underline decoration-transparent hover:decoration-white underline-offset-4 decoration-2 transition-colors whitespace-nowrap"
                    ><?= $item->title ?></a></li>
                <?php endforeach; ?>
                <?php if ($tickets_url): ?>
                    <li><a href="<?= esc_url($tickets_url) ?>" class="hidden sm:block bg-white text-blue-darker rounded-full py-2 px-6 hover:bg-apricot transition-colors hover:text-white whitespace-nowrap">Compra l’entrada</a></li>
                <?php endif; ?>
            </ul>
            <!-- <div class="font-semibold uppercase">Cat</div> -->
            <div class="lg:hidden ml-4">
                <button class="block p-2 bg-white rounded-full text-blue-darker" @click="toggleMenu"><?= svg('bars-3', 'h-6 w-6') ?></button>
            </div>
        </div>
    </div>
    <div x-show="isMenuOpen" x-cloak @click.outside="toggleMenu" x-transition.opacity.duration.300ms class="lg:hidden fixed inset-x-0 top-0 z-20 px-1 py-2">
        <div class="flex flex-col justify-between p-4 backdrop-blur-lg bg-black/10 rounded-2xl">
            <div class="flex justify-between items-center">
                <?= svg('logo', 'h-9 w-auto') ?>
                <button @click="toggleMenu" class="p-2 bg-white rounded-full text-blue-darker"><?= svg('x-mark', 'h-6 w-6') ?></button>
            </div>
            <ul class="py-20 font-semibold text-[40px] leading-tighter uppercase text-center flex flex-col space-y-6">
                <?php
                foreach ($main_menu as $item): ?>
                    <li class=""><a
                        href="<?= $item->url ?>"
                        class=""
                        @click="toggleMenu"
                    ><?= $item->title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
