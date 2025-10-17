<?php

$args = wp_parse_args(array_filter($args ?? []), [
    'cta' => "Vine a fer\nXivarri",
    'title' => 'Ho sents?',
    'description' => 'Uneix-te a l’esdeveniment universitari més vibrant del moment. Obert a tothom!',
    'button_text' => 'Compra l’entrada',
    'button_url' => '#',
]);

$cta = explode(PHP_EOL, $args['cta']);

?>
<div
    x-data="{ visible: false }"
    x-intersect="visible = true"
    class="relative py-12 md:py-24 my-16 transition-all duration-1500 ease-out"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-16'"
>
    <div class="absolute inset-0 -mx-4 sm:-mx-5 z-[-1]">
        <div class="absolute bottom-0 w-1/2 md:w-auto md:inset-y-0 left-0">
            <div
                class="h-full w-auto"
                x-data="lottieAnimations"
                x-init="initLottie('<?= asset('waves-2.json') ?>')"
            ></div>
        </div>
        <div class="absolute top-0 w-1/2 md:w-auto md:inset-y-0 right-0">
            <div
                class="h-full w-auto scale-x-[-1]"
                x-data="lottieAnimations"
                x-init="initLottie('<?= asset('waves-2.json') ?>')"
            ></div>
        </div>
    </div>

<div class="max-w-4xl mx-auto">
    <div class="font-display font-black text-6xl sm:text-7xl md:text-8xl lg:text-[140px] tracking-wide leading-none uppercase flex flex-col">
        <div class="bg-blue-darker px-4 lg:px-10 py-4 lg:py-6 rounded-2xl self-center lg:self-end"><?= $cta[0] ?></div>
        <div class="bg-blue-darker px-4 lg:px-10 py-4 lg:py-6 rounded-2xl self-center lg:self-start -mt-4 lg:-mt-10"><?= $cta[1] ?? null ?></div>
    </div>
    <div class="flex flex-col items-start max-w-md ml-auto mt-10">
        <div class="text-apricot uppercase"><?= $args['title'] ?></div>
        <p class="text-lg leading-tight mt-4"><?= $args['description'] ?></p>
        <a href="<?= esc_url($args['button_url']) ?>" class="font-semibold bg-white px-6 py-2 rounded-full text-blue-darker mt-4 hover:bg-apricot hover:text-white transition-colors uppercase" target="_blank"><?= $args['button_text'] ?></a>
    </div>
</div>

</div>
