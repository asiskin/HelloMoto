# Tienda Motorola trabajo integrador Digital House


function validarLogin()------------valida datos ingresados,

function validarInformacion()-------

function armarUsuario($datos)-------

function guardarUsuario($usuario)----

function traerTodos()---------------

function traerPorEmail($email)------

function loguear($email)-----------

function logout()------------------borra $_COOKIES y borra $_SESSION, o sea log out!!

function estaLogueado()-----------session[usuariologueado] retorna true o false, dependiendo si esta logueado o no.

function getUsuarioLogueado()------RETORNA un ARRAY CON TODOS LOS DATOS DEL USUARIO que esta LOGUEADO en
                                   SESSION[], y extrae estos datos del archivo JSON, con todos los datos del usuario.

function recordarUsuario($email)----------recordar el email en coockies por una hora o 3600 seg.
