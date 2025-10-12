<div
    x-data="siteHeader"
    class="fixed inset-x-0 top-0 z-10 backdrop-blur-lg transition"
    :class="{'-translate-y-full -mt-2': !show }"
>

<div class="relative flex px-5 py-6 justify-between items-center space-x-10 uppercase leading-none z-10">
    <div class="hidden lg:flex">Barcelona • Espanya<br>13 de novembre DE 2025<br>AULA MAGNA, CAMPUS UIC BARCELONA
    </div>
    <ul class="flex space-x-10 font-semibold ml-auto">
        <?php
        $menu_items = [
            ['url' => '#que-es', 'text' => 'Què és?'],
            // ['url' => '#edicions-passades', 'text' => 'Edicions passades'],
            ['url' => '#agenda', 'text' => 'Agenda'],
            ['url' => '#on-som', 'text' => 'On som']
        ];
        foreach ($menu_items as $item): ?>
            <li class="hidden lg:block"><a
                href="<?= $item['url']; ?>"
                class="underline decoration-transparent hover:decoration-white underline-offset-4 decoration-2 transition-colors whitespace-nowrap"
            ><?= $item['text']; ?></a></li>
        <?php endforeach; ?>
        <li><a href="#" class="bg-white text-blue-darker rounded-full py-2 px-6 hover:bg-apricot transition-colors hover:text-white whitespace-nowrap">Compra l’entrada</a></li>
    </ul>
    <!-- <div class="font-semibold uppercase">Cat</div> -->
</div>
</div>
