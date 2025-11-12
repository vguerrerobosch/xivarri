<?php

$sponsors = get_field('sponsors', 'option') ?: [];

$sponsors_data = array_map(function($sponsor) {
    return [
        'url' => $sponsor['url'] ?? '',
        'title' => $sponsor['title'] ?? '',
        'description' => $sponsor['description'] ?? ''
    ];
}, $sponsors);

if (! $sponsors) {
    return;
}

?>
<div class="p-4 lg:p-6 rounded-xl bg-black/10 border border-transparent backdrop-blur-lg">
    <div><?= __('Amb el patrocini de', 'xivarri') ?></div>
    <div class="mt-4 overflow-hidden">
        <div
            x-data='{ sponsors: <?= json_encode($sponsors_data) ?> }'
            class="flex items-center gap-6 md:gap-10 animate-scroll-x"
            style="animation-duration: 45s;"
        >
            <template x-for="i in 8" :key="i">
                <div class="flex items-center gap-6 md:gap-10 flex-shrink-0" :aria-hidden="i > 1 ? 'true' : 'false'">
                    <template x-for="(sponsor, index) in sponsors" :key="`${i}-${index}`">
                        <div class="flex-shrink-0">
                            <template x-if="sponsor.description">
                                <a :href="sponsor.description" target="_blank" rel="noopener noreferrer" :title="sponsor.title || ''">
                                    <img :src="sponsor.url" :alt="sponsor.title || ''" class="h-10 w-18 object-contain invert" />
                                </a>
                            </template>
                            <template x-if="!sponsor.description">
                                <img :src="sponsor.url" :alt="sponsor.title || ''" class="h-10 w-18 object-contain invert" />
                            </template>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>
</div>
