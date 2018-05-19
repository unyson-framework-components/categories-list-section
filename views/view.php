<?php if (!defined('FW')) {
    die('Forbidden');
}

$section_title = $atts['section_title'];
$section_subtitle = $atts['section_subtitle'];
$categories = $atts['singe_category']
?>

<div class="categories-section full-width-section">
    <div class="container">
        <?php if($section_title !== '' || $section_subtitle !== '') { ?>
            <div class="row">
                <div class="col-12">
                    <?php if($section_title !== '') echo  '<h2 class="section-title">'.$section_title.'</h2>'; ?>
                    <?php if($section_subtitle !== '') echo  '<p class="section-subtitle">'.$section_subtitle.'</p>'; ?>
                </div>
            </div>
        <?php }?>

        <ul class="row categories-list">
            <?php foreach ($categories as $category) {
                $cat_id = get_cat_ID(($category['category_choose'])); ?>
                <li class="col-md-6 mb-5 single-category-wrapper">
                    <h2>
                        <a href="<?php echo get_category_link($cat_id); ?>" class="img-wrap">
                            <?php echo get_cat_name($cat_id); ?>
                        </a>

                        <?php echo category_description($cat_id); ?>
                    </h2>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>