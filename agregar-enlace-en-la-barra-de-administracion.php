//Añadir Botón a la barra de administración
//dev.coipomedia.com

add_action ('admin_bar_menu', function ($admin_cp) {
    $admin_cp->add_menu( array(
        'id'    => 'id-del-enlace',
        'title' => '---tituloaqui---',
        'href'  => '---enlaceaqui---',
        'meta'  => array(
            'title' => '---tituloaqui---',            
        ),
    ));
}, 100, 1);
