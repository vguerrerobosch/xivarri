<?php

$args = wp_parse_args(array_filter($args ?? []), [
    'section_title' => 'El ponent d’aquesta edició',
    'image' => asset('placeholder-1.jpg'),
    'tagline' => 'Xerrada',
    'title' => '“L’art d’estar atent als altres”',
    'description' => 'Els éssers humans podem veure-hi sense esforç, però necessitem aprendre a mirar… especialment aquells que ens envolten i els qui tenim al costat. Descobrir l’altre i deixar-nos descobrir per ell fa de la nostra existència una vida bona.',
    'speaker_name' => 'Ricardo Piñero',
    'speaker_description' => 'Filòsof i catedràtic d’Estètica i Teoria de les Arts a la Universitat de Navarra',
    'speaker_socials' => [
        ['icon' => 'linkedin', 'url' => 'https://www.linkedin.com/in/ricardo-pi%C3%B1ero-a848a4122'],
    ],
]);

?>
<div
    x-data="{ visible: false }"
    x-intersect="visible = true"
    class="mt-24 max-w-6xl mx-auto transition-all duration-1500 ease-out"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
>
    <div class="text-center font-semibold text-3xl lg:text-5xl text-balance uppercase"><?= $args['section_title'] ?></div>
    <div class="border border-orange rounded-3xl lg:p-4 mt-6 overflow-hidden">
        <div class="bg-blue-light lg:rounded-xl p-4 lg:p-6 md:flex md:gap-6 lg:gap-10">
            <?= image(
                $args['image'],
                'md:w-2/5 rounded-xl lg:rounded-2xl object-cover object-center',
            ) ?>
            <div class="md:w-3/5 flex flex-col mt-4 lg:mt-0">
                <div class="text-sm uppercase text-orange"><?= $args['tagline'] ?></div>
                <div class="font-semibold text-2xl sm:text-3xl md:text-4xl xl:text-[40px] mt-4"><?= $args['title'] ?></div>
                <div class="md:text-xl xl:text-2xl !leading-tight mt-2 mb-14"><?= $args['description'] ?></div>
                <div class="flex items-end mt-auto">
                    <div class="flex-1">
                        <div class="font-semibold text-xl md:text-2xl lg:text-3xl"><?= $args['speaker_name'] ?></div>
                        <div class="text-sm opacity-70 text-balance"><?= $args['speaker_description'] ?></div>
                    </div>
                    <?php if ($args['speaker_socials']): ?>
                        <ul class="flex space-x-3 ml-4">
                            <?php
                            foreach ($args['speaker_socials'] as ['icon' => $icon, 'url' => $url]): ?>
                                <li>
                                    <a href="<?= $url ?>" class="block size-10 rounded-full bg-black/15 hover:bg-orange transition-colors" target="_blank" rel="noopener noreferrer">
                                        <?= svg($icon, 'w-full h-full p-2.5') ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
