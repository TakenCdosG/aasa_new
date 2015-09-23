<div class="fotorama"
     data-width='100%'
     data-fit='contain'
     data-height="439"
     data-autoplay="true">

    <?php foreach ($node->field_title_image['und'] as $key => $value) { ?>
        <div id="image_slider">

            <?php print theme_image_style(array('style_name' => 'photo_slider',
                'path' => $node->field_image_gallery_['und'][$key]['uri'],
                'alt' => $node->field_image_gallery_['und'][$key]['alt'],
                'title' => $node->field_image_gallery_['und'][$key]['title'],
                'width' => NULL, 'height' => NULL));
            ?>

            <?php if (isset($node->field_title_image['und'][$key]['value'])): ?>
                <div class="flexlider_background">

                    <div id="title_slider"> <?php print $node->field_title_image['und'][$key]['value']; ?> </div>
                    <div id="text_slider"> <?php print $node->field_image_text['und'][$key]['value']; ?> </div>

                </div>
            <?php endif; ?>

        </div>
    <?php } ?>
</div>
