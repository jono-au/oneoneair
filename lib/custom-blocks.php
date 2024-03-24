<?php 

namespace Roots\Sage\BrandsBlock;

add_action('acf/init', __NAMESPACE__ . '\acf_blocks_init');
function acf_blocks_init() {
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'              => 'hero_banner',
            'title'             => __('Niche Hero Banner'),
            'description'       => __('Niche Hero Banner'),
            'render_template'   => 'wp-blocks/hero-banner-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'text_block',
            'title'             => __('Niche Text'),
            'description'       => __('Niche Text'),
            'render_template'   => 'wp-blocks/text-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'carousel_and_text_block',
            'title'             => __('Niche Carousel & Text'),
            'description'       => __('Niche Carousel & Text'),
            'render_template'   => 'wp-blocks/carousel-text-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2',
            'anchor'            => true

        ));
        acf_register_block(array(
            'name'              => 'icon_panel_block',
            'title'             => __('Niche Icon Panel'),
            'description'       => __('Niche Icon Panel'),
            'render_template'   => 'wp-blocks/icon-panel-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'carousel_text_alt_block',
            'title'             => __('Niche Carousel & Text Alt'),
            'description'       => __('Niche Carousel & Text Alt'),
            'render_template'   => 'wp-blocks/carousel-text-alt-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'image_text_block',
            'title'             => __('Niche Image & Text'),
            'description'       => __('Niche Image & Text'),
            'render_template'   => 'wp-blocks/image-text-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'text_text_block',
            'title'             => __('Niche Text & Text'),
            'description'       => __('Niche Text & Text'),
            'render_template'   => 'wp-blocks/text-text-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'image_gallery_block',
            'title'             => __('Niche Image Gallery'),
            'description'       => __('Niche Image Gallery'),
            'render_template'   => 'wp-blocks/image-gallery-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
        acf_register_block(array(
            'name'              => 'three_column_text_block',
            'title'             => __('Niche Three Column Text'),
            'description'       => __('Niche Three Column Text'),
            'render_template'   => 'wp-blocks/three-column-text-block.php',
            'category'          => 'niche',
            'icon'              => 'admin-site-alt2'

        ));
    }
}

