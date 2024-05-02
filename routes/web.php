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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
Route::prefix('admin')->middleware('auth')->group(function(){
 // RUTAS WEB DEL MODELO bitacora
 Route::get('/bitacora',[App\Http\Controllers\bitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/bitacora/create',[App\Http\Controllers\bitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/bitacora/create',[App\Http\Controllers\bitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/bitacora/edit/{id}',[App\Http\Controllers\bitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/bitacora/{id}',[App\Http\Controllers\bitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/bitacora/edit/{id}',[App\Http\Controllers\bitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/bitacora/delete/{id}',[App\Http\Controllers\bitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/clientes',[App\Http\Controllers\clientesController::class,'index'])->name('clientes.index');
 Route::post('/clientes/create',[App\Http\Controllers\clientesController::class,'store'])->name('clientes.store');
 Route::get('/clientes/create',[App\Http\Controllers\clientesController::class,'create'])->name('clientes.create');
 Route::get('/clientes/edit/{id}',[App\Http\Controllers\clientesController::class,'edit'])->name('clientes.edit');
 Route::get('/clientes/{id}',[App\Http\Controllers\clientesController::class,'show'])->name('clientes.show');
 Route::patch('/clientes/edit/{id}',[App\Http\Controllers\clientesController::class,'update'])->name('clientes.update');
 Route::delete('/clientes/delete/{id}',[App\Http\Controllers\clientesController::class,'destroy'])->name('clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/cotizaciones',[App\Http\Controllers\cotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/cotizaciones/create',[App\Http\Controllers\cotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/cotizaciones/create',[App\Http\Controllers\cotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/cotizaciones/edit/{id}',[App\Http\Controllers\cotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/cotizaciones/{id}',[App\Http\Controllers\cotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/cotizaciones/edit/{id}',[App\Http\Controllers\cotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/cotizaciones/delete/{id}',[App\Http\Controllers\cotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/cotizacionesDetalles',[App\Http\Controllers\cotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/cotizacionesDetalles/create',[App\Http\Controllers\cotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/cotizacionesDetalles/create',[App\Http\Controllers\cotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/cotizacionesDetalles/edit/{id}',[App\Http\Controllers\cotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/cotizacionesDetalles/{id}',[App\Http\Controllers\cotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/cotizacionesDetalles/edit/{id}',[App\Http\Controllers\cotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/cotizacionesDetalles/delete/{id}',[App\Http\Controllers\cotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/departamentos',[App\Http\Controllers\departamentosController::class,'index'])->name('departamentos.index');
 Route::post('/departamentos/create',[App\Http\Controllers\departamentosController::class,'store'])->name('departamentos.store');
 Route::get('/departamentos/create',[App\Http\Controllers\departamentosController::class,'create'])->name('departamentos.create');
 Route::get('/departamentos/edit/{id}',[App\Http\Controllers\departamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/departamentos/{id}',[App\Http\Controllers\departamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/departamentos/edit/{id}',[App\Http\Controllers\departamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/departamentos/delete/{id}',[App\Http\Controllers\departamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/devolucionesCompra',[App\Http\Controllers\devolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/devolucionesCompra/create',[App\Http\Controllers\devolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/devolucionesCompra/create',[App\Http\Controllers\devolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/devolucionesCompra/edit/{id}',[App\Http\Controllers\devolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/devolucionesCompra/{id}',[App\Http\Controllers\devolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/devolucionesCompra/edit/{id}',[App\Http\Controllers\devolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/devolucionesCompra/delete/{id}',[App\Http\Controllers\devolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/devolucionesCompraDetalles',[App\Http\Controllers\devolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/devolucionesCompraDetalles/create',[App\Http\Controllers\devolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/devolucionesCompraDetalles/create',[App\Http\Controllers\devolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/devolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\devolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/devolucionesCompraDetalles/{id}',[App\Http\Controllers\devolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/devolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\devolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/devolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\devolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/devolucionesVentas',[App\Http\Controllers\devolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/devolucionesVentas/create',[App\Http\Controllers\devolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/devolucionesVentas/create',[App\Http\Controllers\devolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/devolucionesVentas/edit/{id}',[App\Http\Controllers\devolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/devolucionesVentas/{id}',[App\Http\Controllers\devolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/devolucionesVentas/edit/{id}',[App\Http\Controllers\devolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/devolucionesVentas/delete/{id}',[App\Http\Controllers\devolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas_detalles
 Route::get('/devolucionesVentasDetalles',[App\Http\Controllers\devolucionesVentasDetallesController::class,'index'])->name('devoluciones_ventas_detalles.index');
 Route::post('/devolucionesVentasDetalles/create',[App\Http\Controllers\devolucionesVentasDetallesController::class,'store'])->name('devoluciones_ventas_detalles.store');
 Route::get('/devolucionesVentasDetalles/create',[App\Http\Controllers\devolucionesVentasDetallesController::class,'create'])->name('devoluciones_ventas_detalles.create');
 Route::get('/devolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\devolucionesVentasDetallesController::class,'edit'])->name('devoluciones_ventas_detalles.edit');
 Route::get('/devolucionesVentasDetalles/{id}',[App\Http\Controllers\devolucionesVentasDetallesController::class,'show'])->name('devoluciones_ventas_detalles.show');
 Route::patch('/devolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\devolucionesVentasDetallesController::class,'update'])->name('devoluciones_ventas_detalles.update');
 Route::delete('/devolucionesVentasDetalles/delete/{id}',[App\Http\Controllers\devolucionesVentasDetallesController::class,'destroy'])->name('devoluciones_ventas_detalles.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_compras
 Route::get('/documentosdevolucionesCompras',[App\Http\Controllers\documentosdevolucionesComprasController::class,'index'])->name('documentos_devoluciones_compras.index');
 Route::post('/documentosdevolucionesCompras/create',[App\Http\Controllers\documentosdevolucionesComprasController::class,'store'])->name('documentos_devoluciones_compras.store');
 Route::get('/documentosdevolucionesCompras/create',[App\Http\Controllers\documentosdevolucionesComprasController::class,'create'])->name('documentos_devoluciones_compras.create');
 Route::get('/documentosdevolucionesCompras/edit/{id}',[App\Http\Controllers\documentosdevolucionesComprasController::class,'edit'])->name('documentos_devoluciones_compras.edit');
 Route::get('/documentosdevolucionesCompras/{id}',[App\Http\Controllers\documentosdevolucionesComprasController::class,'show'])->name('documentos_devoluciones_compras.show');
 Route::patch('/documentosdevolucionesCompras/edit/{id}',[App\Http\Controllers\documentosdevolucionesComprasController::class,'update'])->name('documentos_devoluciones_compras.update');
 Route::delete('/documentosdevolucionesCompras/delete/{id}',[App\Http\Controllers\documentosdevolucionesComprasController::class,'destroy'])->name('documentos_devoluciones_compras.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_ventas
 Route::get('/documentosdevolucionesVentas',[App\Http\Controllers\documentosdevolucionesVentasController::class,'index'])->name('documentos_devoluciones_ventas.index');
 Route::post('/documentosdevolucionesVentas/create',[App\Http\Controllers\documentosdevolucionesVentasController::class,'store'])->name('documentos_devoluciones_ventas.store');
 Route::get('/documentosdevolucionesVentas/create',[App\Http\Controllers\documentosdevolucionesVentasController::class,'create'])->name('documentos_devoluciones_ventas.create');
 Route::get('/documentosdevolucionesVentas/edit/{id}',[App\Http\Controllers\documentosdevolucionesVentasController::class,'edit'])->name('documentos_devoluciones_ventas.edit');
 Route::get('/documentosdevolucionesVentas/{id}',[App\Http\Controllers\documentosdevolucionesVentasController::class,'show'])->name('documentos_devoluciones_ventas.show');
 Route::patch('/documentosdevolucionesVentas/edit/{id}',[App\Http\Controllers\documentosdevolucionesVentasController::class,'update'])->name('documentos_devoluciones_ventas.update');
 Route::delete('/documentosdevolucionesVentas/delete/{id}',[App\Http\Controllers\documentosdevolucionesVentasController::class,'destroy'])->name('documentos_devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO empleados
 Route::get('/empleados',[App\Http\Controllers\empleadosController::class,'index'])->name('empleados.index');
 Route::post('/empleados/create',[App\Http\Controllers\empleadosController::class,'store'])->name('empleados.store');
 Route::get('/empleados/create',[App\Http\Controllers\empleadosController::class,'create'])->name('empleados.create');
 Route::get('/empleados/edit/{id}',[App\Http\Controllers\empleadosController::class,'edit'])->name('empleados.edit');
 Route::get('/empleados/{id}',[App\Http\Controllers\empleadosController::class,'show'])->name('empleados.show');
 Route::patch('/empleados/edit/{id}',[App\Http\Controllers\empleadosController::class,'update'])->name('empleados.update');
 Route::delete('/empleados/delete/{id}',[App\Http\Controllers\empleadosController::class,'destroy'])->name('empleados.destroy');
 
  // RUTAS WEB DEL MODELO empresas
 Route::get('/empresas',[App\Http\Controllers\empresasController::class,'index'])->name('empresas.index');
 Route::post('/empresas/create',[App\Http\Controllers\empresasController::class,'store'])->name('empresas.store');
 Route::get('/empresas/create',[App\Http\Controllers\empresasController::class,'create'])->name('empresas.create');
 Route::get('/empresas/edit/{id}',[App\Http\Controllers\empresasController::class,'edit'])->name('empresas.edit');
 Route::get('/empresas/{id}',[App\Http\Controllers\empresasController::class,'show'])->name('empresas.show');
 Route::patch('/empresas/edit/{id}',[App\Http\Controllers\empresasController::class,'update'])->name('empresas.update');
 Route::delete('/empresas/delete/{id}',[App\Http\Controllers\empresasController::class,'destroy'])->name('empresas.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes
 Route::get('/facturasclientes',[App\Http\Controllers\facturasclientesController::class,'index'])->name('facturas_clientes.index');
 Route::post('/facturasclientes/create',[App\Http\Controllers\facturasclientesController::class,'store'])->name('facturas_clientes.store');
 Route::get('/facturasclientes/create',[App\Http\Controllers\facturasclientesController::class,'create'])->name('facturas_clientes.create');
 Route::get('/facturasclientes/edit/{id}',[App\Http\Controllers\facturasclientesController::class,'edit'])->name('facturas_clientes.edit');
 Route::get('/facturasclientes/{id}',[App\Http\Controllers\facturasclientesController::class,'show'])->name('facturas_clientes.show');
 Route::patch('/facturasclientes/edit/{id}',[App\Http\Controllers\facturasclientesController::class,'update'])->name('facturas_clientes.update');
 Route::delete('/facturasclientes/delete/{id}',[App\Http\Controllers\facturasclientesController::class,'destroy'])->name('facturas_clientes.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes_detalles
 Route::get('/facturasclientesDetalles',[App\Http\Controllers\facturasclientesDetallesController::class,'index'])->name('facturas_clientes_detalles.index');
 Route::post('/facturasclientesDetalles/create',[App\Http\Controllers\facturasclientesDetallesController::class,'store'])->name('facturas_clientes_detalles.store');
 Route::get('/facturasclientesDetalles/create',[App\Http\Controllers\facturasclientesDetallesController::class,'create'])->name('facturas_clientes_detalles.create');
 Route::get('/facturasclientesDetalles/edit/{id}',[App\Http\Controllers\facturasclientesDetallesController::class,'edit'])->name('facturas_clientes_detalles.edit');
 Route::get('/facturasclientesDetalles/{id}',[App\Http\Controllers\facturasclientesDetallesController::class,'show'])->name('facturas_clientes_detalles.show');
 Route::patch('/facturasclientesDetalles/edit/{id}',[App\Http\Controllers\facturasclientesDetallesController::class,'update'])->name('facturas_clientes_detalles.update');
 Route::delete('/facturasclientesDetalles/delete/{id}',[App\Http\Controllers\facturasclientesDetallesController::class,'destroy'])->name('facturas_clientes_detalles.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores
 Route::get('/facturasproveedores',[App\Http\Controllers\facturasproveedoresController::class,'index'])->name('facturas_proveedores.index');
 Route::post('/facturasproveedores/create',[App\Http\Controllers\facturasproveedoresController::class,'store'])->name('facturas_proveedores.store');
 Route::get('/facturasproveedores/create',[App\Http\Controllers\facturasproveedoresController::class,'create'])->name('facturas_proveedores.create');
 Route::get('/facturasproveedores/edit/{id}',[App\Http\Controllers\facturasproveedoresController::class,'edit'])->name('facturas_proveedores.edit');
 Route::get('/facturasproveedores/{id}',[App\Http\Controllers\facturasproveedoresController::class,'show'])->name('facturas_proveedores.show');
 Route::patch('/facturasproveedores/edit/{id}',[App\Http\Controllers\facturasproveedoresController::class,'update'])->name('facturas_proveedores.update');
 Route::delete('/facturasproveedores/delete/{id}',[App\Http\Controllers\facturasproveedoresController::class,'destroy'])->name('facturas_proveedores.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores_detalles
 Route::get('/facturasproveedoresDetalles',[App\Http\Controllers\facturasproveedoresDetallesController::class,'index'])->name('facturas_proveedores_detalles.index');
 Route::post('/facturasproveedoresDetalles/create',[App\Http\Controllers\facturasproveedoresDetallesController::class,'store'])->name('facturas_proveedores_detalles.store');
 Route::get('/facturasproveedoresDetalles/create',[App\Http\Controllers\facturasproveedoresDetallesController::class,'create'])->name('facturas_proveedores_detalles.create');
 Route::get('/facturasproveedoresDetalles/edit/{id}',[App\Http\Controllers\facturasproveedoresDetallesController::class,'edit'])->name('facturas_proveedores_detalles.edit');
 Route::get('/facturasproveedoresDetalles/{id}',[App\Http\Controllers\facturasproveedoresDetallesController::class,'show'])->name('facturas_proveedores_detalles.show');
 Route::patch('/facturasproveedoresDetalles/edit/{id}',[App\Http\Controllers\facturasproveedoresDetallesController::class,'update'])->name('facturas_proveedores_detalles.update');
 Route::delete('/facturasproveedoresDetalles/delete/{id}',[App\Http\Controllers\facturasproveedoresDetallesController::class,'destroy'])->name('facturas_proveedores_detalles.destroy');
 
  // RUTAS WEB DEL MODELO materiales
 Route::get('/materiales',[App\Http\Controllers\materialesController::class,'index'])->name('materiales.index');
 Route::post('/materiales/create',[App\Http\Controllers\materialesController::class,'store'])->name('materiales.store');
 Route::get('/materiales/create',[App\Http\Controllers\materialesController::class,'create'])->name('materiales.create');
 Route::get('/materiales/edit/{id}',[App\Http\Controllers\materialesController::class,'edit'])->name('materiales.edit');
 Route::get('/materiales/{id}',[App\Http\Controllers\materialesController::class,'show'])->name('materiales.show');
 Route::patch('/materiales/edit/{id}',[App\Http\Controllers\materialesController::class,'update'])->name('materiales.update');
 Route::delete('/materiales/delete/{id}',[App\Http\Controllers\materialesController::class,'destroy'])->name('materiales.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra
 Route::get('/ordenCompra',[App\Http\Controllers\ordenCompraController::class,'index'])->name('orden_compra.index');
 Route::post('/ordenCompra/create',[App\Http\Controllers\ordenCompraController::class,'store'])->name('orden_compra.store');
 Route::get('/ordenCompra/create',[App\Http\Controllers\ordenCompraController::class,'create'])->name('orden_compra.create');
 Route::get('/ordenCompra/edit/{id}',[App\Http\Controllers\ordenCompraController::class,'edit'])->name('orden_compra.edit');
 Route::get('/ordenCompra/{id}',[App\Http\Controllers\ordenCompraController::class,'show'])->name('orden_compra.show');
 Route::patch('/ordenCompra/edit/{id}',[App\Http\Controllers\ordenCompraController::class,'update'])->name('orden_compra.update');
 Route::delete('/ordenCompra/delete/{id}',[App\Http\Controllers\ordenCompraController::class,'destroy'])->name('orden_compra.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra_detalles
 Route::get('/ordenCompraDetalles',[App\Http\Controllers\ordenCompraDetallesController::class,'index'])->name('orden_compra_detalles.index');
 Route::post('/ordenCompraDetalles/create',[App\Http\Controllers\ordenCompraDetallesController::class,'store'])->name('orden_compra_detalles.store');
 Route::get('/ordenCompraDetalles/create',[App\Http\Controllers\ordenCompraDetallesController::class,'create'])->name('orden_compra_detalles.create');
 Route::get('/ordenCompraDetalles/edit/{id}',[App\Http\Controllers\ordenCompraDetallesController::class,'edit'])->name('orden_compra_detalles.edit');
 Route::get('/ordenCompraDetalles/{id}',[App\Http\Controllers\ordenCompraDetallesController::class,'show'])->name('orden_compra_detalles.show');
 Route::patch('/ordenCompraDetalles/edit/{id}',[App\Http\Controllers\ordenCompraDetallesController::class,'update'])->name('orden_compra_detalles.update');
 Route::delete('/ordenCompraDetalles/delete/{id}',[App\Http\Controllers\ordenCompraDetallesController::class,'destroy'])->name('orden_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO pedidos
 Route::get('/pedidos',[App\Http\Controllers\pedidosController::class,'index'])->name('pedidos.index');
 Route::post('/pedidos/create',[App\Http\Controllers\pedidosController::class,'store'])->name('pedidos.store');
 Route::get('/pedidos/create',[App\Http\Controllers\pedidosController::class,'create'])->name('pedidos.create');
 Route::get('/pedidos/edit/{id}',[App\Http\Controllers\pedidosController::class,'edit'])->name('pedidos.edit');
 Route::get('/pedidos/{id}',[App\Http\Controllers\pedidosController::class,'show'])->name('pedidos.show');
 Route::patch('/pedidos/edit/{id}',[App\Http\Controllers\pedidosController::class,'update'])->name('pedidos.update');
 Route::delete('/pedidos/delete/{id}',[App\Http\Controllers\pedidosController::class,'destroy'])->name('pedidos.destroy');
 
  // RUTAS WEB DEL MODELO permisos
 Route::get('/permisos',[App\Http\Controllers\permisosController::class,'index'])->name('permisos.index');
 Route::post('/permisos/create',[App\Http\Controllers\permisosController::class,'store'])->name('permisos.store');
 Route::get('/permisos/create',[App\Http\Controllers\permisosController::class,'create'])->name('permisos.create');
 Route::get('/permisos/edit/{id}',[App\Http\Controllers\permisosController::class,'edit'])->name('permisos.edit');
 Route::get('/permisos/{id}',[App\Http\Controllers\permisosController::class,'show'])->name('permisos.show');
 Route::patch('/permisos/edit/{id}',[App\Http\Controllers\permisosController::class,'update'])->name('permisos.update');
 Route::delete('/permisos/delete/{id}',[App\Http\Controllers\permisosController::class,'destroy'])->name('permisos.destroy');
 
  // RUTAS WEB DEL MODELO permisos_roles
 Route::get('/permisosroles',[App\Http\Controllers\permisosrolesController::class,'index'])->name('permisos_roles.index');
 Route::post('/permisosroles/create',[App\Http\Controllers\permisosrolesController::class,'store'])->name('permisos_roles.store');
 Route::get('/permisosroles/create',[App\Http\Controllers\permisosrolesController::class,'create'])->name('permisos_roles.create');
 Route::get('/permisosroles/edit/{id}',[App\Http\Controllers\permisosrolesController::class,'edit'])->name('permisos_roles.edit');
 Route::get('/permisosroles/{id}',[App\Http\Controllers\permisosrolesController::class,'show'])->name('permisos_roles.show');
 Route::patch('/permisosroles/edit/{id}',[App\Http\Controllers\permisosrolesController::class,'update'])->name('permisos_roles.update');
 Route::delete('/permisosroles/delete/{id}',[App\Http\Controllers\permisosrolesController::class,'destroy'])->name('permisos_roles.destroy');
 
  // RUTAS WEB DEL MODELO procesos
 Route::get('/procesos',[App\Http\Controllers\procesosController::class,'index'])->name('procesos.index');
 Route::post('/procesos/create',[App\Http\Controllers\procesosController::class,'store'])->name('procesos.store');
 Route::get('/procesos/create',[App\Http\Controllers\procesosController::class,'create'])->name('procesos.create');
 Route::get('/procesos/edit/{id}',[App\Http\Controllers\procesosController::class,'edit'])->name('procesos.edit');
 Route::get('/procesos/{id}',[App\Http\Controllers\procesosController::class,'show'])->name('procesos.show');
 Route::patch('/procesos/edit/{id}',[App\Http\Controllers\procesosController::class,'update'])->name('procesos.update');
 Route::delete('/procesos/delete/{id}',[App\Http\Controllers\procesosController::class,'destroy'])->name('procesos.destroy');
 
  // RUTAS WEB DEL MODELO productos
 Route::get('/productos',[App\Http\Controllers\productosController::class,'index'])->name('productos.index');
 Route::post('/productos/create',[App\Http\Controllers\productosController::class,'store'])->name('productos.store');
 Route::get('/productos/create',[App\Http\Controllers\productosController::class,'create'])->name('productos.create');
 Route::get('/productos/edit/{id}',[App\Http\Controllers\productosController::class,'edit'])->name('productos.edit');
 Route::get('/productos/{id}',[App\Http\Controllers\productosController::class,'show'])->name('productos.show');
 Route::patch('/productos/edit/{id}',[App\Http\Controllers\productosController::class,'update'])->name('productos.update');
 Route::delete('/productos/delete/{id}',[App\Http\Controllers\productosController::class,'destroy'])->name('productos.destroy');
 
  // RUTAS WEB DEL MODELO productos_proceso
 Route::get('/productosProceso',[App\Http\Controllers\productosProcesoController::class,'index'])->name('productos_proceso.index');
 Route::post('/productosProceso/create',[App\Http\Controllers\productosProcesoController::class,'store'])->name('productos_proceso.store');
 Route::get('/productosProceso/create',[App\Http\Controllers\productosProcesoController::class,'create'])->name('productos_proceso.create');
 Route::get('/productosProceso/edit/{id}',[App\Http\Controllers\productosProcesoController::class,'edit'])->name('productos_proceso.edit');
 Route::get('/productosProceso/{id}',[App\Http\Controllers\productosProcesoController::class,'show'])->name('productos_proceso.show');
 Route::patch('/productosProceso/edit/{id}',[App\Http\Controllers\productosProcesoController::class,'update'])->name('productos_proceso.update');
 Route::delete('/productosProceso/delete/{id}',[App\Http\Controllers\productosProcesoController::class,'destroy'])->name('productos_proceso.destroy');
 
  // RUTAS WEB DEL MODELO proveedores
 Route::get('/proveedores',[App\Http\Controllers\proveedoresController::class,'index'])->name('proveedores.index');
 Route::post('/proveedores/create',[App\Http\Controllers\proveedoresController::class,'store'])->name('proveedores.store');
 Route::get('/proveedores/create',[App\Http\Controllers\proveedoresController::class,'create'])->name('proveedores.create');
 Route::get('/proveedores/edit/{id}',[App\Http\Controllers\proveedoresController::class,'edit'])->name('proveedores.edit');
 Route::get('/proveedores/{id}',[App\Http\Controllers\proveedoresController::class,'show'])->name('proveedores.show');
 Route::patch('/proveedores/edit/{id}',[App\Http\Controllers\proveedoresController::class,'update'])->name('proveedores.update');
 Route::delete('/proveedores/delete/{id}',[App\Http\Controllers\proveedoresController::class,'destroy'])->name('proveedores.destroy');
 
  // RUTAS WEB DEL MODELO roles
 Route::get('/roles',[App\Http\Controllers\rolesController::class,'index'])->name('roles.index');
 Route::post('/roles/create',[App\Http\Controllers\rolesController::class,'store'])->name('roles.store');
 Route::get('/roles/create',[App\Http\Controllers\rolesController::class,'create'])->name('roles.create');
 Route::get('/roles/edit/{id}',[App\Http\Controllers\rolesController::class,'edit'])->name('roles.edit');
 Route::get('/roles/{id}',[App\Http\Controllers\rolesController::class,'show'])->name('roles.show');
 Route::patch('/roles/edit/{id}',[App\Http\Controllers\rolesController::class,'update'])->name('roles.update');
 Route::delete('/roles/delete/{id}',[App\Http\Controllers\rolesController::class,'destroy'])->name('roles.destroy');
 
  // RUTAS WEB DEL MODELO tipo_piezas
 Route::get('/tipoPiezas',[App\Http\Controllers\tipoPiezasController::class,'index'])->name('tipo_piezas.index');
 Route::post('/tipoPiezas/create',[App\Http\Controllers\tipoPiezasController::class,'store'])->name('tipo_piezas.store');
 Route::get('/tipoPiezas/create',[App\Http\Controllers\tipoPiezasController::class,'create'])->name('tipo_piezas.create');
 Route::get('/tipoPiezas/edit/{id}',[App\Http\Controllers\tipoPiezasController::class,'edit'])->name('tipo_piezas.edit');
 Route::get('/tipoPiezas/{id}',[App\Http\Controllers\tipoPiezasController::class,'show'])->name('tipo_piezas.show');
 Route::patch('/tipoPiezas/edit/{id}',[App\Http\Controllers\tipoPiezasController::class,'update'])->name('tipo_piezas.update');
 Route::delete('/tipoPiezas/delete/{id}',[App\Http\Controllers\tipoPiezasController::class,'destroy'])->name('tipo_piezas.destroy');
 
  // RUTAS WEB DEL MODELO users
 Route::get('/users',[App\Http\Controllers\UsersController::class,'index'])->name('users.index');
 Route::post('/users/create',[App\Http\Controllers\usersController::class,'store'])->name('users.store');
 Route::get('/users/create',[App\Http\Controllers\usersController::class,'create'])->name('users.create');
 Route::get('/users/edit/{id}',[App\Http\Controllers\usersController::class,'edit'])->name('users.edit');
 Route::get('/users/{id}',[App\Http\Controllers\usersController::class,'show'])->name('users.show');
 Route::patch('/users/edit/{id}',[App\Http\Controllers\usersController::class,'update'])->name('users.update');
 Route::delete('/users/delete/{id}',[App\Http\Controllers\usersController::class,'destroy'])->name('users.destroy');
 
 });