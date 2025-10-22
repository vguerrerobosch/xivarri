<?php
$title = wp_get_document_title();
$description = get_field('meta_description') ?: get_the_excerpt();
$thumbnail_id = get_post_thumbnail_id();
$image = wp_get_attachment_image_src($thumbnail_id, 'large', false);
$url = get_permalink();
$locale = explode('_', get_locale())[0];
?>
<?php if ($description): ?>
    <meta name="description" content="<?= $description ?>">
<?php endif; ?>
<meta property="og:type" content="website">
<?php if ($title): ?>
    <meta name="og:title" content="<?= $title ?>">
<?php endif; ?>
<?php if ($description): ?>
    <meta property="og:description" content="<?= $description ?>">
<?php endif; ?>
<?php if ($image): ?>
    <meta property="og:image" content="<?= $image[0] ?? null ?>" />
    <meta property="og:image:width" content="<?= $image[1] ?? null ?>">
    <meta property="og:image:height" content="<?= $image[2] ?? null ?>">
<?php endif; ?>
<meta property="og:url" content="<?= $url ?>" />
<meta property="og:locale" content="<?= $locale ?>" />
