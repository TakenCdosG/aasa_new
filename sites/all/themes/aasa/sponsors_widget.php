<div class="sponsors">
    <div class="title">Thank you to our sponsors</div>

    <div class="fotorama"
         data-width='247'
         data-height="60"
         data-fit='contain'
         data-autoplay="true"
         data-nav="false">


        <?php
        $nodo = node_load(145);

        foreach ($nodo->field_image_sponsors['und'] as $key => $value) {
            // dsm($key);
            $variables = array(
                "style_name" => "sponsors",
                "path" => $nodo->field_image_sponsors['und'][$key]['uri'],
                "height" => NULL,
                "width" => NULL,
                "alt" => $nodo->field_image_sponsors['und'][$key]['alt'],
                "title" => $nodo->field_image_sponsors['und'][$key]['title']
            );
            print '<div class="image_slider">' . theme_image_style($variables) . '</div>';
        }

        ?>

    </div>

</div>