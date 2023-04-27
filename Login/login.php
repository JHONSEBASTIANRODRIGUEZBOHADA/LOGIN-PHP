<?php
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $DatosUsuarios = array(
        'sebastian123@gmail.com' => '123',
        'jonathan456@gmail.com' => '456',
        'sara789@gmail.com' => '789'
    );

    if (isset($DatosUsuarios[$_POST['usuario']]) && $DatosUsuarios[$_POST['usuario']] == $_POST['contraseña'] && $_POST['contraseña']) {
        header('Location: pagina.php');
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>