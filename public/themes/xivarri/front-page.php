<?php get_header(); ?>

<div class="fixed inset-0 z-[-1] bg-gradient-to-b from-blue to-blue-dark"></div>

<div class="relative px-5 pb-10">
    <div class="absolute inset-x-0 top-0 h-auto z-[-1]">
        <img src="<?= asset('texture.png') ?>" alt="" class="w-full h-auto" />
    </div>
    <div class="flex py-6 justify-between items-center space-x-10 uppercase leading-none">
        <div>
        Barcelona • Espanya<br />
        13 de novembre DE 2025<br />
        AULA MAGNA, CAMPUS UIC BARCELONA
        </div>
        <ul class="font-semibold flex space-x-10 ml-auto">
            <li><a href="#" class="hover:underline underline-offset-4 decoration-2">Què és?</a></li>
            <li><a href="#" class="hover:underline underline-offset-4 decoration-2">Edicions passades</a></li>
            <li><a href="#" class="hover:underline underline-offset-4 decoration-2">Agenda</a></li>
            <li><a href="#" class="hover:underline underline-offset-4 decoration-2">On som</a></li>
            <li><a href="#" class="bg-white text-blue-darker rounded-full py-2 px-6 hover:bg-apricot transition-colors hover:text-white">Compra l’entrada</a></li>
        </ul>
        <div>Cat</div>
    </div>

    <div class="ml-auto max-w-lg font-medium text-3xl/tighter mt-16">Un espai de reflexió i diàleg per als qui tenen ganes de fer soroll. Aquí no vens només a escoltar, hi vens a dir la teva.</div>

    <div class="flex justify-center mt-40">
        <div>
            <div class="font-medium text-4xl uppercase -mb-10">Despertem la ment</div>
            <div class="font-display font-black text-[84px] sm:text-[120px] md:text-[180px] lg:text-[240px] xl:text-[320px] 2xl:text-[350px] uppercase whitespace-nowrap leading-[0.75] *:transition-all *:duration-500 group overflow-hidden">
                <span class="text-[1.25em] group-hover:text-[1em]">X</span><!--
            --><span class="text-[0.95em]">i</span><!--
            --><span class="text-[1.15em] -mr-[0.1em]">v</span><!--
            --><span class="text-[1em] group-hover:text-[1.526em]">a</span><!--
            --><span class="text-[1.05em] group-hover:text-[1.15em]">r</span><!--
            --><span class="text-[1.4em] group-hover:text-[1em]">r</span><!--
            --><span class="text-[1.075em]">i</span><!--
            --><span class="text-[1.526em]">&#8203;</span>
            </div>
        </div>
    </div>

    <div class="flex space-x-16 mt-120">
        <div class="text-sm text-orange uppercase">El silenci és necessari.<br>Però el soroll, deixa empremta.</div>
        <div class="max-w-3xl">
            <div class="font-medium text-3xl/tighter">Fer Xivarri és una manera d’expressar inquietuds, de compartir idees, de contrastar opinions. És el que et permet despertar aquella curiositat que, en realitat, mai ha estat adormida. És l’idioma dels que pensen.
            </div>
            <div class="max-w-lg text-lg/tighter mt-10">El pla que et proposem: una sessió magistral amb un expert, una estona per fer preguntes i un sopar on conèixer gent i debatre sense filtres. Si tens coses a dir —i molt a pensar—, aquest és el teu lloc.</div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-10 flex flex-col gap-2.5 border border-apricot rounded-3xl p-10">
        <div class="font-medium text-5xl uppercase mb-4">Comencem amb força</div>

        <?php component('agenda-item', [
            'time' => '19:30h',
            'text' => '🍿 Pica-pica per trencar el gel',
        ]) ?>
        <?php

        component('agenda-item', [
            'time' => '20:00h',
            'text' => '💥 Què és Xivarri?'
        ]);

        component('agenda-item-featured', [
            'time' => '20:15 h',
            'speaker' => 'Ricardo Piñero',
            'title' => '🎙️ Xerrada',
            'description' => 'Filòsof i Catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra',
        ]);

        component('agenda-item', [
            'time' => '20:40h',
            'text' => '🙋‍♀️ Torn de preguntes',
            'class' => 'bg-blue-light px-6 py-4',
        ]);

        component('agenda-item', [
            'time' => '21:15h',
            'text' => '🪩 Sopar, música i moltes sorpreses',
            'class' => 'bg-apricot px-6 py-6'
        ]);

        component('agenda-item', [
            'time' => '22:30h',
            'text' => '👋🏻 Comiat'
        ]);

        ?>
    </div>

    <?php component('dyptich') ?>

    <div class="max-w-4xl mx-auto mt-40">
        <div class="font-display font-black text-[140px] leading-none uppercase flex flex-col">
            <div class="bg-blue-darker px-10 py-6 rounded-2xl self-end">Vine a fer</div>
            <div class="bg-blue-darker px-10 py-6 rounded-2xl self-start -mt-10">Xivarri</div>
        </div>
        <div class="flex flex-col items-start max-w-md ml-auto mt-10">
            <div class="text-apricot uppercase">Ho sents?</div>
            <p class="text-lg leading-tight mt-4">Uneix-te a l’esdeveniment universitari més vibrant del moment. Obert a tothom!</p>
            <a href="#" class="font-semibold bg-white px-6 py-2 rounded-full text-blue-darker mt-4 hover:bg-apricot hover:text-white transition-colors uppercase">Compra l’entrada</a>
        </div>
    </div>

    <div class="flex space-x-5 mt-24">
        <div class="w-3/5 p-6 rounded-xl bg-black/10 backdrop-blur-lg flex flex-col">
            <div class="opacity-50">Lloc</div>
            <div><a href="https://maps.app.goo.gl/cmWk5QaT9bMfUxck7" target="_blank" rel="noopener noreferrer"><span class="text-2xl">Campus UIC Barcelona</span><br>Carrer de la Immaculada, 22, Sarrià-Sant Gervasi, 08017 Barcelona</a></div>
            <div class="flex-1 mt-5 relative rounded-lg overflow-hidden">
                <img src="<?= asset('map.jpg') ?>" alt="" class="absolute inset-0 w-full h-full object-cover" />
                <a href="https://maps.app.goo.gl/cmWk5QaT9bMfUxck7" target="_blank" rel="noopener noreferrer" class="absolute inset-0 w-full h-full"></a>
            </div>
        </div>
        <div class="w-2/5 grid grid-cols-2 gap-5">
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg flex flex-col justify-between">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('calendar', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Reserva’t la data</div>
                    <div class="text-xl leading-tight">13 de novembre, 2025<br>19.30 h - 22.30 h</div>
                </div>
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg flex flex-col justify-between">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('ticket', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Compra l’entrada</div>
                    <div class="text-xl leading-tight">Disponible a la nostra plataforma</div>
                </div>
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg flex flex-col justify-between">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('envelope', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Contacta amb nosaltres</div>
                    <div class="text-xl leading-tight">
                        <a href="mailto:info@uic.es">info@uic.es</a><br>
                        <a href="tel:+34932541800">+34 93 254 18 00</a>
                    </div>
                </div>
            </div>
            <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg flex flex-col justify-between items-start">
                <?= svg('uic-barcelona', 'h-10 w-auto') ?>
                <div class="mt-16">
                    <div class="opacity-50">Un esdeveniment de</div>
                    <div class="text-xl leading-tight">L’Institut de Cultura i Pensament de UIC&nbsp;Barcelona</div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-black/10 backdrop-blur-lg mt-5">Amb el patrocini de</div>
    <div class="px-6 py-4 rounded-xl bg-black/10 backdrop-blur-lg mt-5 flex justify-between items-center">
        <ul class="flex space-x-6 [&>li]:border-r [&>li]:border-white/50 [&>li]:last:border-0 [&>li]:pr-6">
            <li><a href="#">Política de cookies</a></li>
            <li><a href="#">Política de privacitat</a></li>
            <li><a href="#">Condicions generals d’ús</a></li>
        </ul>
        <ul class="flex space-x-3">
            <li><a href="#" class="block size-10 rounded-full bg-black/15">
                <?= svg('instagram', 'w-full h-full p-2.5') ?>
            </a></li>
            <li><a href="#" class="block size-10 rounded-full bg-black/15">
                <?= svg('youtube', 'w-full h-full p-2.5') ?>
            </a></li>
            <li><a href="#" class="block size-10 rounded-full bg-black/15">
                <?= svg('tiktok', 'w-full h-full p-2.5') ?>
            </a></li>
            <li><a href="#" class="block size-10 rounded-full bg-black/15">
                <?= svg('linkedin', 'w-full h-full p-2.5') ?>
            </a></li>
        </ul>
    </div>

    <div class="absolute z-[-1] bottom-0 inset-x-0">
        <img src="<?= asset('texture-2.png') ?>" alt="" class="w-full h-auto" />
    </div>
</div>

<?php get_footer(); ?>
