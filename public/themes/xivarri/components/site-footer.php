<div id="on-som" class="max-w-screen-2xl mx-auto grid gap-2 lg:gap-5 pb-6 mt-24">
    <div class="flex flex-col gap-2 lg:gap-5 lg:flex-row">
        <div class="lg:w-3/5 p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg flex flex-col group relative hover:bg-black/20 hover:border hover:border-orange transition-colors">
            <div class="opacity-50">Lloc</div>
            <div><span class="text-2xl">Campus UIC Barcelona</span><br>Carrer de la Immaculada, 22, Sarrià-Sant Gervasi, 08017 Barcelona</div>
            <div class="flex-1 mt-5 relative rounded-lg overflow-hidden">
                <img src="<?= asset('map.jpg') ?>" alt="" class="lg:absolute lg:inset-0 w-full h-full object-cover" />
            </div>
            <a href="https://maps.app.goo.gl/cmWk5QaT9bMfUxck7" target="_blank" rel="noopener noreferrer" class="absolute inset-0 w-full h-full"></a>
        </div>
        <div class="lg:w-2/5 grid sm:grid-cols-2 gap-2 lg:gap-5">
            <div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg flex flex-col justify-between">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('calendar', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Reserva’t la data</div>
                    <div class="text-xl leading-tight">13 de novembre, 2025<br>19.30 h - 22.30 h</div>
                </div>
            </div>
            <div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg flex flex-col justify-between group relative hover:bg-black/20 hover:border hover:border-orange transition-colors">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('ticket', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Compra l’entrada</div>
                    <div class="text-xl leading-tight">Disponible a la nostra plataforma</div>
                </div>
                <a href="#" class="absolute inset-0 w-full h-full" title="Compra l’entrada"></a>
            </div>
            <div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg flex flex-col justify-between">
                <div class="size-10 rounded-full bg-black/15">
                    <?= svg('envelope', 'w-full h-full p-2.5') ?>
                </div>
                <div class="mt-16">
                    <div class="opacity-50">Contacta amb nosaltres</div>
                    <div class="text-xl leading-tight">
                        <a href="mailto:info@uic.es" class="underline decoration-transparent underline-offset-2 hover:decoration-white transition-colors">info@uic.es</a><br>
                        <a href="tel:+34932541800" class="underline decoration-transparent underline-offset-2 hover:decoration-white transition-colors">+34 93 254 18 00</a>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg flex flex-col justify-between items-start">
                <?= svg('uic-barcelona', 'h-10 w-auto') ?>
                <div class="mt-16">
                    <div class="opacity-50">Un esdeveniment de</div>
                    <div class="text-xl leading-tight">L’Institut de Cultura i Pensament de UIC&nbsp;Barcelona</div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg">Amb el patrocini de</div> -->
    <div class="px-4 lg:px-6 py-4 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg lg:flex justify-between items-center">
        <ul class="lg:flex space-x-6 [&>li]:border-r [&>li]:border-white/50 [&>li]:last:border-0 [&>li]:pr-6">
            <?php
            $footerLinks = [
                ['Avís legal', 'https://www.uic.es/ca/avis-legal'],
                ['Política de cookies', 'https://www.uic.es/ca/politica-de-cookies'],
                ['Privacitat i protecció de dades', 'https://www.uic.es/ca/privacitat-i-proteccio-de-dades'],
            ];
            foreach ($footerLinks as [$label, $url]): ?>
                <li><a href="<?= $url ?>" class="underline decoration-transparent underline-offset-2 hover:decoration-white transition-colors"><?= $label ?></a></li>
            <?php endforeach ?>
        </ul>
        <ul class="flex space-x-3">
            <?php
            $socials = [
                ['instagram', 'https://www.instagram.com/UICBarcelona/'],
                ['youtube', 'https://www.facebook.com/UICbarcelona'],
                ['tiktok', '#'],
                ['linkedin', 'https://www.linkedin.com/school/universitat-internacional-de-catalunya-uic/'],
            ];
            foreach ($socials as [$icon, $url]): ?>
                <li>
                    <a href="<?= $url ?>" class="block size-10 rounded-full bg-black/15 hover:bg-orange transition-colors" target="_blank" rel="noopener noreferrer">
                        <?= svg($icon, 'w-full h-full p-2.5') ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
