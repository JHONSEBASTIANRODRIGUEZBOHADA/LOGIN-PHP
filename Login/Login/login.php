<?php
$DatosUsuarios = array(
    'sebastian' => '123',
    'jonathan' => '456',
    'sara' => '789'
);
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    if (isset($DatosUsuarios[$_POST['usuario']]) && $DatosUsuarios[$_POST['usuario']] == $_POST['contraseña'] && $_POST['contraseña']) {
        header('Location: pagina.php');
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>