<?php

$components = get_field('components') ?: [
    ['acf_fc_layout' => 'hero'],
    ['acf_fc_layout' => 'intro'],
    ['acf_fc_layout' => 'video'],
    ['acf_fc_layout' => 'agenda'],
    ['acf_fc_layout' => 'dyptich'],
    ['acf_fc_layout' => 'cta'],
];

get_header();

?>
<div class="relative px-4 sm:px-5">
    <?php
    foreach ($components as $component) {
        component(str_replace('_', '-', $component['acf_fc_layout']), $component);
    }
    ?>
</div>

<?php get_footer(); ?>
