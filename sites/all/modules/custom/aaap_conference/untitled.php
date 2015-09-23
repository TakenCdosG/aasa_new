<?php


function search_entity_by_synonym($data_search, $exclude = array(), $padre = "") {
    $result = array();
    $vivienda_directory = 'public://fast-etc/vivienda';
    $ciudades_directory = 'public://fast-etc/ciudades';

    //  +===============================+
    //  |  Detalle y Orden de búsqueda  |
    //  +===============================+
    $tipoNegocio = array(
        "key" => "tipo_negocio",
        "entidad" => "tipo-negocio",
        "uri" => $vivienda_directory . '/tipo-negocio.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $tipoInmueble = array(
        "key" => "tipo_inmueble",
        "entidad" => "tipo-inmueble",
        "uri" => $vivienda_directory . '/tipo-inmueble.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $ciudadesVehiculos = array(
        "key" => "ciudades_vivienda",
        "entidad" => "",
        "uri" => $ciudades_directory . '/ciudades-vivienda.xml',
        "entidad_padre" => "",
        "single" => FALSE
    );

    $zona = array(
        "key" => "zona",
        "entidad" => "zona",
        "uri" => $vivienda_directory . '/zona.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $data = array($tipoNegocio, $tipoInmueble, $ciudadesVehiculos, $zona);

    //  +============+
    //  |  Búsqueda  |
    //  +============+
    //  
    foreach ($data as $item) {
        if (!in_array($item["entidad"], $exclude)) {
            $result = search_term($item["key"], $item["uri"], $data_search, $item["entidad"], $item["entidad_padre"], $item["single"], $padre);
        }
        if (!empty($result)) {
            break;
        }
    }
    //  +=============+
    //  |  Resultado  |
    //  +=============+
    if (empty($result)) {
        //  +===========+
        //  | Clbasico  |
        //  +===========+
        $result[0]['termino'] = (string) $data_search;
        $result[0]['id_fast'] = "";
        $result[0]['campo_fast'] = "clbasico";
    }

    return $result;
}


function search_entity_by_url($data_search, $exclude = array(), $padre = "") {
    $result = array();
    $vivienda_directory = 'public://fast-etc/vivienda';
    $ciudades_directory = 'public://fast-etc/ciudades';

    //  +===============================+
    //  |  Detalle y Orden de búsqueda  |
    //  +===============================+
    $tipoNegocio = array(
        "key" => "tipo_negocio",
        "entidad" => "tipo-negocio",
        "uri" => $vivienda_directory . '/tipo-negocio.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $tipoInmueble = array(
        "key" => "tipo_inmueble",
        "entidad" => "tipo-inmueble",
        "uri" => $vivienda_directory . '/tipo-inmueble.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $ciudadesVehiculos = array(
        "key" => "ciudades_vivienda",
        "entidad" => "",
        "uri" => $ciudades_directory . '/ciudades-vivienda.xml',
        "entidad_padre" => "",
        "single" => FALSE
    );

    $zona = array(
        "key" => "zona",
        "entidad" => "zona",
        "uri" => $vivienda_directory . '/zona.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $preciosVenta = array(
        "key" => "precios_venta",
        "entidad" => "precios-venta",
        "uri" => $vivienda_directory . '/precios-venta.xml',
        "entidad_padre" => "",
        "single" => TRUE,
    );

    $data = array($tipoNegocio, $tipoInmueble, $ciudadesVehiculos, $zona);
}