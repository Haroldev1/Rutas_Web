<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return ('Esta es la pagina principal');
});

# Creando nuestras rutas
# Definiendo una ruta a la cual se accede por el verbo GET
# get ('nombre de la ruta', funcionamiento)
Route::get('administracion', function () {
    return "Esta es la pagina para administrar";
});

Route::get('administracion/reporte', function(){
    return "Aca se vera las dos opciones de reportes que el administrador podra observar";
});

Route::get('administracion/reporte/venta', function(){
    return "Aca se vera el reporte de todas las ventas hechas cada cierto tiempo";
});

Route::get('administracion/reporte/compras', function () {
    return "Aca se vera el reporte de todos los productos comprados cada cierto tiempo";
});

Route::get('administracion/almacen', function () {
    return "Aca se vera el reporte de todos los productos comprados cada cierto tiempo";
});

Route::get('mi-perfil', function () {
    return "Esta es la vista del perfil del ususario, aca podra observar sus pedidos realizados, ultimos productos vistos, datos personales, direcciones, etc";
});

Route::get('nosotros', function () {
    return "Esta es al pagina que contendra todo sobre la empresa";
});

Route::get('mis-vis', function () {
    return "Esta es al pagina que contendra la mision y vision de la empresa";
});

Route::get('login', function () {
    return "Esta es la pagina para ingresar";
});

Route::get('login/recuperar-contraseña', function(){
    return "Aqui ira la pagina para recuperar la contrasela, que se llevara acabo desde un formulario.";
});

Route::get('registro', function () {
    return "Esta es la pagina para rellenar el formulario para registrarse";
});

Route::get('reclamos', function () {
    return "Esta es la pagina donde se podra hacer reclamos";
});

Route::get('soporte-tecnico', function () {
    return "Esta es la pagina para solicitar soporte tecnico";
});

Route::get('terminos-condiciones', function () {
    return "Esta es la pagina de los terminos y condiciones";
});

# Se pone catalogo y aparte producto porque en la parte de id de catalogo iran 
# las sub categorias, que vendrian hacer laptops, computadoras, perifericos, etc
# en productos en el id se podra obsevar en una ventana aparte el producto
# ya de ahi porque la creacion de dos apartados de catalogo y producto.
Route::get('catalogo', function () {
    return "Esta es la pagina para ver el catalogo";
});

Route::get('producto/{id}', function ($id) {
    return "Esta es la pagina para ver a mejor vista cada producto, por ejemplo este es el producto a mas detalles, producto: $id";
});

#No importa si el nombre es igual ya que la diferencia empieza en el verbo "POST" y "GET"
Route::post('catalogo', function () {
    return "Estoy viendo el catalogo";
});

#Creando rutas a las cuales se accede por el verbo PUT
Route::put('product/{id}', function ($id) {
    return "Aqui actualizaria al productos id $id";
});

Route::delete('product/{id}', function ($id) {
    return "Estoy eliminando el producto con el id $id";
});
