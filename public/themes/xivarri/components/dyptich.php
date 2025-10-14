<div class="mt-24 max-w-6xl mx-auto">
    <div class="text-center font-semibold text-3xl lg:text-5xl text-balance uppercase">El ponent d’aquesta edició</div>
    <div class="border border-orange rounded-3xl lg:p-4 mt-6 overflow-hidden">
        <div class="bg-blue-light lg:rounded-xl p-4 lg:p-6 md:flex md:gap-6 lg:gap-10">
            <img
                class="md:w-2/5 rounded-lg object-cover object-top"
                src="<?= asset('placeholder-1.jpg') ?>"
                alt="Foto del ponent"
            />
            <div class="md:w-3/5 flex flex-col mt-4 lg:mt-0">
                <div class="text-sm uppercase text-orange">Xerrada</div>
                <div class="font-semibold text-2xl sm:text-3xl md:text-4xl xl:text-5xl mt-4">“L’art d’estar atent als altres”</div>
                <div class="md:text-xl xl:text-2xl !leading-tight mt-2 mb-14">Els éssers humans podem veure-hi sense esforç, però necessitem aprendre a mirar… especialment aquells que ens envolten i els qui tenim al costat. Descobrir l’altre i deixar-nos descobrir per ell fa de la nostra existència una vida bona.</div>
                <div class="flex items-end mt-auto">
                    <div class="flex-1">
                        <div class="font-semibold text-xl md:text-2xl lg:text-3xl xl:text-4xl">Ricardo Piñero</div>
                        <div class="text-sm opacity-70 text-balance">Filòsof i catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra</div>
                    </div>
                    <ul class="flex space-x-3 ml-4">
                        <?php
                        $socials = [
                            ['linkedin', 'https://www.linkedin.com/in/ricardo-pi%C3%B1ero-a848a4122'],
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
        </div>
    </div>
</div>
