<?php 

    //[foobar]
    function leaflet_map( $atts ){
        $ubicacion = get_field('ubicacion');
        ?>
        <div class="ubicacion">
            <input type="hidden" name="" id="lat" value="<?= $ubicacion['lat'] ?>">
            <input type="hidden" name="" id="lng" value="<?= $ubicacion['lng'] ?>">
            <input type="hidden" name="" id="direccion" value="<?= $ubicacion['address'] ?>">
            <div id="mapa"></div>
        </div>
        <?php

    }
    add_shortcode( 'leaflet', 'leaflet_map' );

?>