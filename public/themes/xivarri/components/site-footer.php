<div>
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
</div>
