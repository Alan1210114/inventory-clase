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
 Route::get('/Bitacora',[App\Http\Controllers\BitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/Bitacora/{id}',[App\Http\Controllers\BitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/Bitacora/delete/{id}',[App\Http\Controllers\BitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/Clientes',[App\Http\Controllers\ClientesController::class,'index'])->name('Clientes.index');
 Route::post('/Clientes/create',[App\Http\Controllers\ClientesController::class,'store'])->name('clientes.store');
 Route::get('/Clientes/create',[App\Http\Controllers\ClientesController::class,'create'])->name('Clientes.create');
 Route::get('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'edit'])->name('Clientes.edit');
 Route::get('/Clientes/{id}',[App\Http\Controllers\ClientesController::class,'show'])->name('Clientes.show');
 Route::patch('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'update'])->name('Clientes.update');
 Route::delete('/Clientes/delete/{id}',[App\Http\Controllers\ClientesController::class,'destroy'])->name('Clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/Cotizaciones',[App\Http\Controllers\CotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/Cotizaciones/{id}',[App\Http\Controllers\CotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/Cotizaciones/delete/{id}',[App\Http\Controllers\CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/CotizacionesDetalles',[App\Http\Controllers\CotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/CotizacionesDetalles/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/CotizacionesDetalles/delete/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/Departamentos',[App\Http\Controllers\DepartamentosController::class,'index'])->name('departamentos.index');
 Route::post('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'store'])->name('departamentos.store');
 Route::get('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'create'])->name('departamentos.create');
 Route::get('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/Departamentos/{id}',[App\Http\Controllers\DepartamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/Departamentos/delete/{id}',[App\Http\Controllers\DepartamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/DevolucionesCompra',[App\Http\Controllers\DevolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/DevolucionesCompra/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/DevolucionesCompra/delete/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/DevolucionesCompraDetalles',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/DevolucionesCompraDetalles/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/DevolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/DevolucionesVentas',[App\Http\Controllers\DevolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/DevolucionesVentas/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/DevolucionesVentas/delete/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas_detalles
 Route::get('/DevolucionesVentasDetalles',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'index'])->name('devoluciones_ventas_detalles.index');
 Route::post('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'store'])->name('devoluciones_ventas_detalles.store');
 Route::get('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'create'])->name('devoluciones_ventas_detalles.create');
 Route::get('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'edit'])->name('devoluciones_ventas_detalles.edit');
 Route::get('/DevolucionesVentasDetalles/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'show'])->name('devoluciones_ventas_detalles.show');
 Route::patch('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'update'])->name('devoluciones_ventas_detalles.update');
 Route::delete('/DevolucionesVentasDetalles/delete/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'destroy'])->name('devoluciones_ventas_detalles.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_compras
 Route::get('/DocumentosDevolucionesCompras',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'index'])->name('documentos_devoluciones_compras.index');
 Route::post('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'store'])->name('documentos_devoluciones_compras.store');
 Route::get('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'create'])->name('documentos_devoluciones_compras.create');
 Route::get('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'edit'])->name('documentos_devoluciones_compras.edit');
 Route::get('/DocumentosDevolucionesCompras/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'show'])->name('documentos_devoluciones_compras.show');
 Route::patch('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'update'])->name('documentos_devoluciones_compras.update');
 Route::delete('/DocumentosDevolucionesCompras/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'destroy'])->name('documentos_devoluciones_compras.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_ventas
 Route::get('/DocumentosDevolucionesVentas',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'index'])->name('documentos_devoluciones_ventas.index');
 Route::post('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'store'])->name('documentos_devoluciones_ventas.store');
 Route::get('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'create'])->name('documentos_devoluciones_ventas.create');
 Route::get('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'edit'])->name('documentos_devoluciones_ventas.edit');
 Route::get('/DocumentosDevolucionesVentas/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'show'])->name('documentos_devoluciones_ventas.show');
 Route::patch('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'update'])->name('documentos_devoluciones_ventas.update');
 Route::delete('/DocumentosDevolucionesVentas/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'destroy'])->name('documentos_devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO empleados
 Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class,'index'])->name('empleados.index');
 Route::post('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'store'])->name('empleados.store');
 Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'create'])->name('empleados.create');
 Route::get('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'edit'])->name('empleados.edit');
 Route::get('/Empleados/{id}',[App\Http\Controllers\EmpleadosController::class,'show'])->name('empleados.show');
 Route::patch('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'update'])->name('empleados.update');
 Route::delete('/Empleados/delete/{id}',[App\Http\Controllers\EmpleadosController::class,'destroy'])->name('empleados.destroy');
 
  // RUTAS WEB DEL MODELO empresas
 Route::get('/Empresas',[App\Http\Controllers\EmpresasController::class,'index'])->name('empresas.index');
 Route::post('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'store'])->name('empresas.store');
 Route::get('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'create'])->name('empresas.create');
 Route::get('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'edit'])->name('empresas.edit');
 Route::get('/Empresas/{id}',[App\Http\Controllers\EmpresasController::class,'show'])->name('empresas.show');
 Route::patch('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'update'])->name('empresas.update');
 Route::delete('/Empresas/delete/{id}',[App\Http\Controllers\EmpresasController::class,'destroy'])->name('empresas.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes
 Route::get('/FacturasClientes',[App\Http\Controllers\FacturasClientesController::class,'index'])->name('facturas_clientes.index');
 Route::post('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'store'])->name('facturas_clientes.store');
 Route::get('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'create'])->name('facturas_clientes.create');
 Route::get('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'edit'])->name('facturas_clientes.edit');
 Route::get('/FacturasClientes/{id}',[App\Http\Controllers\FacturasClientesController::class,'show'])->name('facturas_clientes.show');
 Route::patch('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'update'])->name('facturas_clientes.update');
 Route::delete('/FacturasClientes/delete/{id}',[App\Http\Controllers\FacturasClientesController::class,'destroy'])->name('facturas_clientes.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes_detalles
 Route::get('/FacturasClientesDetalles',[App\Http\Controllers\FacturasClientesDetallesController::class,'index'])->name('facturas_clientes_detalles.index');
 Route::post('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'store'])->name('facturas_clientes_detalles.store');
 Route::get('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'create'])->name('facturas_clientes_detalles.create');
 Route::get('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'edit'])->name('facturas_clientes_detalles.edit');
 Route::get('/FacturasClientesDetalles/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'show'])->name('facturas_clientes_detalles.show');
 Route::patch('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'update'])->name('facturas_clientes_detalles.update');
 Route::delete('/FacturasClientesDetalles/delete/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'destroy'])->name('facturas_clientes_detalles.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores
 Route::get('/FacturasProveedores',[App\Http\Controllers\FacturasProveedoresController::class,'index'])->name('facturas_proveedores.index');
 Route::post('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'store'])->name('facturas_proveedores.store');
 Route::get('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'create'])->name('facturas_proveedores.create');
 Route::get('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'edit'])->name('facturas_proveedores.edit');
 Route::get('/FacturasProveedores/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'show'])->name('facturas_proveedores.show');
 Route::patch('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'update'])->name('facturas_proveedores.update');
 Route::delete('/FacturasProveedores/delete/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'destroy'])->name('facturas_proveedores.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores_detalles
 Route::get('/FacturasProveedoresDetalles',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'index'])->name('facturas_proveedores_detalles.index');
 Route::post('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'store'])->name('facturas_proveedores_detalles.store');
 Route::get('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'create'])->name('facturas_proveedores_detalles.create');
 Route::get('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'edit'])->name('facturas_proveedores_detalles.edit');
 Route::get('/FacturasProveedoresDetalles/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'show'])->name('facturas_proveedores_detalles.show');
 Route::patch('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'update'])->name('facturas_proveedores_detalles.update');
 Route::delete('/FacturasProveedoresDetalles/delete/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'destroy'])->name('facturas_proveedores_detalles.destroy');
 
  // RUTAS WEB DEL MODELO materiales
 Route::get('/Materiales',[App\Http\Controllers\MaterialesController::class,'index'])->name('materiales.index');
 Route::post('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'store'])->name('materiales.store');
 Route::get('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'create'])->name('materiales.create');
 Route::get('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'edit'])->name('materiales.edit');
 Route::get('/Materiales/{id}',[App\Http\Controllers\MaterialesController::class,'show'])->name('materiales.show');
 Route::patch('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'update'])->name('materiales.update');
 Route::delete('/Materiales/delete/{id}',[App\Http\Controllers\MaterialesController::class,'destroy'])->name('materiales.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra
 Route::get('/OrdenCompra',[App\Http\Controllers\OrdenCompraController::class,'index'])->name('orden_compra.index');
 Route::post('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'store'])->name('orden_compra.store');
 Route::get('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'create'])->name('orden_compra.create');
 Route::get('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'edit'])->name('orden_compra.edit');
 Route::get('/OrdenCompra/{id}',[App\Http\Controllers\OrdenCompraController::class,'show'])->name('orden_compra.show');
 Route::patch('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'update'])->name('orden_compra.update');
 Route::delete('/OrdenCompra/delete/{id}',[App\Http\Controllers\OrdenCompraController::class,'destroy'])->name('orden_compra.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra_detalles
 Route::get('/OrdenCompraDetalles',[App\Http\Controllers\OrdenCompraDetallesController::class,'index'])->name('orden_compra_detalles.index');
 Route::post('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'store'])->name('orden_compra_detalles.store');
 Route::get('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'create'])->name('orden_compra_detalles.create');
 Route::get('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'edit'])->name('orden_compra_detalles.edit');
 Route::get('/OrdenCompraDetalles/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'show'])->name('orden_compra_detalles.show');
 Route::patch('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'update'])->name('orden_compra_detalles.update');
 Route::delete('/OrdenCompraDetalles/delete/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'destroy'])->name('orden_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO pedidos
 Route::get('/Pedidos',[App\Http\Controllers\PedidosController::class,'index'])->name('pedidos.index');
 Route::post('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'store'])->name('pedidos.store');
 Route::get('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'create'])->name('pedidos.create');
 Route::get('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'edit'])->name('pedidos.edit');
 Route::get('/Pedidos/{id}',[App\Http\Controllers\PedidosController::class,'show'])->name('pedidos.show');
 Route::patch('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'update'])->name('pedidos.update');
 Route::delete('/Pedidos/delete/{id}',[App\Http\Controllers\PedidosController::class,'destroy'])->name('pedidos.destroy');
 
  // RUTAS WEB DEL MODELO permisos
 Route::get('/Permisos',[App\Http\Controllers\PermisosController::class,'index'])->name('permisos.index');
 Route::post('/Permisos/create',[App\Http\Controllers\PermisosController::class,'store'])->name('permisos.store');
 Route::get('/Permisos/create',[App\Http\Controllers\PermisosController::class,'create'])->name('permisos.create');
 Route::get('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'edit'])->name('permisos.edit');
 Route::get('/Permisos/{id}',[App\Http\Controllers\PermisosController::class,'show'])->name('permisos.show');
 Route::patch('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'update'])->name('permisos.update');
 Route::delete('/Permisos/delete/{id}',[App\Http\Controllers\PermisosController::class,'destroy'])->name('permisos.destroy');
 
  // RUTAS WEB DEL MODELO permisos_roles
 Route::get('/PermisosRoles',[App\Http\Controllers\PermisosRolesController::class,'index'])->name('permisos_roles.index');
 Route::post('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'store'])->name('permisos_roles.store');
 Route::get('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'create'])->name('permisos_roles.create');
 Route::get('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'edit'])->name('permisos_roles.edit');
 Route::get('/PermisosRoles/{id}',[App\Http\Controllers\PermisosRolesController::class,'show'])->name('permisos_roles.show');
 Route::patch('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'update'])->name('permisos_roles.update');
 Route::delete('/PermisosRoles/delete/{id}',[App\Http\Controllers\PermisosRolesController::class,'destroy'])->name('permisos_roles.destroy');
 
  // RUTAS WEB DEL MODELO procesos
 Route::get('/Procesos',[App\Http\Controllers\ProcesosController::class,'index'])->name('procesos.index');
 Route::post('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'store'])->name('procesos.store');
 Route::get('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'create'])->name('procesos.create');
 Route::get('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'edit'])->name('procesos.edit');
 Route::get('/Procesos/{id}',[App\Http\Controllers\ProcesosController::class,'show'])->name('procesos.show');
 Route::patch('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'update'])->name('procesos.update');
 Route::delete('/Procesos/delete/{id}',[App\Http\Controllers\ProcesosController::class,'destroy'])->name('procesos.destroy');
 
  // RUTAS WEB DEL MODELO productos
 Route::get('/Productos',[App\Http\Controllers\ProductosController::class,'index'])->name('productos.index');
 Route::post('/Productos/create',[App\Http\Controllers\ProductosController::class,'store'])->name('productos.store');
 Route::get('/Productos/create',[App\Http\Controllers\ProductosController::class,'create'])->name('productos.create');
 Route::get('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'edit'])->name('productos.edit');
 Route::get('/Productos/{id}',[App\Http\Controllers\ProductosController::class,'show'])->name('productos.show');
 Route::patch('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'update'])->name('productos.update');
 Route::delete('/Productos/delete/{id}',[App\Http\Controllers\ProductosController::class,'destroy'])->name('productos.destroy');
 
  // RUTAS WEB DEL MODELO productos_proceso
 Route::get('/ProductosProceso',[App\Http\Controllers\ProductosProcesoController::class,'index'])->name('productos_proceso.index');
 Route::post('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'store'])->name('productos_proceso.store');
 Route::get('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'create'])->name('productos_proceso.create');
 Route::get('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'edit'])->name('productos_proceso.edit');
 Route::get('/ProductosProceso/{id}',[App\Http\Controllers\ProductosProcesoController::class,'show'])->name('productos_proceso.show');
 Route::patch('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'update'])->name('productos_proceso.update');
 Route::delete('/ProductosProceso/delete/{id}',[App\Http\Controllers\ProductosProcesoController::class,'destroy'])->name('productos_proceso.destroy');
 
  // RUTAS WEB DEL MODELO proveedores
 Route::get('/Proveedores',[App\Http\Controllers\ProveedoresController::class,'index'])->name('proveedores.index');
 Route::post('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'store'])->name('proveedores.store');
 Route::get('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'create'])->name('proveedores.create');
 Route::get('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'edit'])->name('proveedores.edit');
 Route::get('/Proveedores/{id}',[App\Http\Controllers\ProveedoresController::class,'show'])->name('proveedores.show');
 Route::patch('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'update'])->name('proveedores.update');
 Route::delete('/Proveedores/delete/{id}',[App\Http\Controllers\ProveedoresController::class,'destroy'])->name('proveedores.destroy');
 
  // RUTAS WEB DEL MODELO roles
 Route::get('/Roles',[App\Http\Controllers\RolesController::class,'index'])->name('roles.index');
 Route::post('/Roles/create',[App\Http\Controllers\RolesController::class,'store'])->name('roles.store');
 Route::get('/Roles/create',[App\Http\Controllers\RolesController::class,'create'])->name('roles.create');
 Route::get('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'edit'])->name('roles.edit');
 Route::get('/Roles/{id}',[App\Http\Controllers\RolesController::class,'show'])->name('roles.show');
 Route::patch('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'update'])->name('roles.update');
 Route::delete('/Roles/delete/{id}',[App\Http\Controllers\RolesController::class,'destroy'])->name('roles.destroy');
 
  // RUTAS WEB DEL MODELO tipo_piezas
 Route::get('/TipoPiezas',[App\Http\Controllers\TipoPiezasController::class,'index'])->name('tipo_piezas.index');
 Route::post('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'store'])->name('tipo_piezas.store');
 Route::get('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'create'])->name('tipo_piezas.create');
 Route::get('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'edit'])->name('tipo_piezas.edit');
 Route::get('/TipoPiezas/{id}',[App\Http\Controllers\TipoPiezasController::class,'show'])->name('tipo_piezas.show');
 Route::patch('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'update'])->name('tipo_piezas.update');
 Route::delete('/TipoPiezas/delete/{id}',[App\Http\Controllers\TipoPiezasController::class,'destroy'])->name('tipo_piezas.destroy');
 
  // RUTAS WEB DEL MODELO users
 Route::get('/Users',[App\Http\Controllers\UsersController::class,'index'])->name('users.index');
 Route::post('/Users/create',[App\Http\Controllers\UsersController::class,'store'])->name('users.store');
 Route::get('/Users/create',[App\Http\Controllers\UsersController::class,'create'])->name('users.create');
 Route::get('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'edit'])->name('users.edit');
 Route::get('/Users/{id}',[App\Http\Controllers\UsersController::class,'show'])->name('users.show');
 Route::patch('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'update'])->name('users.update');
 Route::delete('/Users/delete/{id}',[App\Http\Controllers\UsersController::class,'destroy'])->name('users.destroy');
 
  // RUTAS WEB DEL MODELO bitacora
 Route::get('/Bitacora',[App\Http\Controllers\BitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/Bitacora/{id}',[App\Http\Controllers\BitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/Bitacora/delete/{id}',[App\Http\Controllers\BitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/Clientes',[App\Http\Controllers\ClientesController::class,'index'])->name('clientes.index');
 Route::post('/Clientes/create',[App\Http\Controllers\ClientesController::class,'store'])->name('clientes.store');
 Route::get('/Clientes/create',[App\Http\Controllers\ClientesController::class,'create'])->name('clientes.create');
 Route::get('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'edit'])->name('clientes.edit');
 Route::get('/Clientes/{id}',[App\Http\Controllers\ClientesController::class,'show'])->name('clientes.show');
 Route::patch('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'update'])->name('clientes.update');
 Route::delete('/Clientes/delete/{id}',[App\Http\Controllers\ClientesController::class,'destroy'])->name('clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/Cotizaciones',[App\Http\Controllers\CotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/Cotizaciones/{id}',[App\Http\Controllers\CotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/Cotizaciones/delete/{id}',[App\Http\Controllers\CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/CotizacionesDetalles',[App\Http\Controllers\CotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/CotizacionesDetalles/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/CotizacionesDetalles/delete/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/Departamentos',[App\Http\Controllers\DepartamentosController::class,'index'])->name('departamentos.index');
 Route::post('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'store'])->name('departamentos.store');
 Route::get('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'create'])->name('departamentos.create');
 Route::get('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/Departamentos/{id}',[App\Http\Controllers\DepartamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/Departamentos/delete/{id}',[App\Http\Controllers\DepartamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/DevolucionesCompra',[App\Http\Controllers\DevolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/DevolucionesCompra/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/DevolucionesCompra/delete/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/DevolucionesCompraDetalles',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/DevolucionesCompraDetalles/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/DevolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/DevolucionesVentas',[App\Http\Controllers\DevolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/DevolucionesVentas/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/DevolucionesVentas/delete/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO bitacora
 Route::get('/Bitacora',[App\Http\Controllers\BitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/Bitacora/{id}',[App\Http\Controllers\BitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/Bitacora/delete/{id}',[App\Http\Controllers\BitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/Clientes',[App\Http\Controllers\ClientesController::class,'index'])->name('clientes.index');
 Route::post('/Clientes/create',[App\Http\Controllers\ClientesController::class,'store'])->name('clientes.store');
 Route::get('/Clientes/create',[App\Http\Controllers\ClientesController::class,'create'])->name('clientes.create');
 Route::get('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'edit'])->name('clientes.edit');
 Route::get('/Clientes/{id}',[App\Http\Controllers\ClientesController::class,'show'])->name('clientes.show');
 Route::patch('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'update'])->name('clientes.update');
 Route::delete('/Clientes/delete/{id}',[App\Http\Controllers\ClientesController::class,'destroy'])->name('clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/Cotizaciones',[App\Http\Controllers\CotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/Cotizaciones/{id}',[App\Http\Controllers\CotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/Cotizaciones/delete/{id}',[App\Http\Controllers\CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/CotizacionesDetalles',[App\Http\Controllers\CotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/CotizacionesDetalles/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/CotizacionesDetalles/delete/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/Departamentos',[App\Http\Controllers\DepartamentosController::class,'index'])->name('departamentos.index');
 Route::post('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'store'])->name('departamentos.store');
 Route::get('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'create'])->name('departamentos.create');
 Route::get('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/Departamentos/{id}',[App\Http\Controllers\DepartamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/Departamentos/delete/{id}',[App\Http\Controllers\DepartamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/DevolucionesCompra',[App\Http\Controllers\DevolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/DevolucionesCompra/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/DevolucionesCompra/delete/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/DevolucionesCompraDetalles',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/DevolucionesCompraDetalles/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/DevolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/DevolucionesVentas',[App\Http\Controllers\DevolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/DevolucionesVentas/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/DevolucionesVentas/delete/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas_detalles
 Route::get('/DevolucionesVentasDetalles',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'index'])->name('devoluciones_ventas_detalles.index');
 Route::post('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'store'])->name('devoluciones_ventas_detalles.store');
 Route::get('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'create'])->name('devoluciones_ventas_detalles.create');
 Route::get('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'edit'])->name('devoluciones_ventas_detalles.edit');
 Route::get('/DevolucionesVentasDetalles/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'show'])->name('devoluciones_ventas_detalles.show');
 Route::patch('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'update'])->name('devoluciones_ventas_detalles.update');
 Route::delete('/DevolucionesVentasDetalles/delete/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'destroy'])->name('devoluciones_ventas_detalles.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_compras
 Route::get('/DocumentosDevolucionesCompras',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'index'])->name('documentos_devoluciones_compras.index');
 Route::post('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'store'])->name('documentos_devoluciones_compras.store');
 Route::get('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'create'])->name('documentos_devoluciones_compras.create');
 Route::get('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'edit'])->name('documentos_devoluciones_compras.edit');
 Route::get('/DocumentosDevolucionesCompras/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'show'])->name('documentos_devoluciones_compras.show');
 Route::patch('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'update'])->name('documentos_devoluciones_compras.update');
 Route::delete('/DocumentosDevolucionesCompras/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'destroy'])->name('documentos_devoluciones_compras.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_ventas
 Route::get('/DocumentosDevolucionesVentas',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'index'])->name('documentos_devoluciones_ventas.index');
 Route::post('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'store'])->name('documentos_devoluciones_ventas.store');
 Route::get('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'create'])->name('documentos_devoluciones_ventas.create');
 Route::get('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'edit'])->name('documentos_devoluciones_ventas.edit');
 Route::get('/DocumentosDevolucionesVentas/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'show'])->name('documentos_devoluciones_ventas.show');
 Route::patch('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'update'])->name('documentos_devoluciones_ventas.update');
 Route::delete('/DocumentosDevolucionesVentas/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'destroy'])->name('documentos_devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO empleados
 Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class,'index'])->name('empleados.index');
 Route::post('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'store'])->name('empleados.store');
 Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'create'])->name('empleados.create');
 Route::get('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'edit'])->name('empleados.edit');
 Route::get('/Empleados/{id}',[App\Http\Controllers\EmpleadosController::class,'show'])->name('empleados.show');
 Route::patch('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'update'])->name('empleados.update');
 Route::delete('/Empleados/delete/{id}',[App\Http\Controllers\EmpleadosController::class,'destroy'])->name('empleados.destroy');
 
  // RUTAS WEB DEL MODELO empresas
 Route::get('/Empresas',[App\Http\Controllers\EmpresasController::class,'index'])->name('empresas.index');
 Route::post('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'store'])->name('empresas.store');
 Route::get('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'create'])->name('empresas.create');
 Route::get('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'edit'])->name('empresas.edit');
 Route::get('/Empresas/{id}',[App\Http\Controllers\EmpresasController::class,'show'])->name('empresas.show');
 Route::patch('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'update'])->name('empresas.update');
 Route::delete('/Empresas/delete/{id}',[App\Http\Controllers\EmpresasController::class,'destroy'])->name('empresas.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes
 Route::get('/FacturasClientes',[App\Http\Controllers\FacturasClientesController::class,'index'])->name('facturas_clientes.index');
 Route::post('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'store'])->name('facturas_clientes.store');
 Route::get('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'create'])->name('facturas_clientes.create');
 Route::get('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'edit'])->name('facturas_clientes.edit');
 Route::get('/FacturasClientes/{id}',[App\Http\Controllers\FacturasClientesController::class,'show'])->name('facturas_clientes.show');
 Route::patch('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'update'])->name('facturas_clientes.update');
 Route::delete('/FacturasClientes/delete/{id}',[App\Http\Controllers\FacturasClientesController::class,'destroy'])->name('facturas_clientes.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes_detalles
 Route::get('/FacturasClientesDetalles',[App\Http\Controllers\FacturasClientesDetallesController::class,'index'])->name('facturas_clientes_detalles.index');
 Route::post('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'store'])->name('facturas_clientes_detalles.store');
 Route::get('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'create'])->name('facturas_clientes_detalles.create');
 Route::get('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'edit'])->name('facturas_clientes_detalles.edit');
 Route::get('/FacturasClientesDetalles/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'show'])->name('facturas_clientes_detalles.show');
 Route::patch('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'update'])->name('facturas_clientes_detalles.update');
 Route::delete('/FacturasClientesDetalles/delete/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'destroy'])->name('facturas_clientes_detalles.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores
 Route::get('/FacturasProveedores',[App\Http\Controllers\FacturasProveedoresController::class,'index'])->name('facturas_proveedores.index');
 Route::post('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'store'])->name('facturas_proveedores.store');
 Route::get('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'create'])->name('facturas_proveedores.create');
 Route::get('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'edit'])->name('facturas_proveedores.edit');
 Route::get('/FacturasProveedores/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'show'])->name('facturas_proveedores.show');
 Route::patch('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'update'])->name('facturas_proveedores.update');
 Route::delete('/FacturasProveedores/delete/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'destroy'])->name('facturas_proveedores.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores_detalles
 Route::get('/FacturasProveedoresDetalles',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'index'])->name('facturas_proveedores_detalles.index');
 Route::post('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'store'])->name('facturas_proveedores_detalles.store');
 Route::get('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'create'])->name('facturas_proveedores_detalles.create');
 Route::get('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'edit'])->name('facturas_proveedores_detalles.edit');
 Route::get('/FacturasProveedoresDetalles/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'show'])->name('facturas_proveedores_detalles.show');
 Route::patch('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'update'])->name('facturas_proveedores_detalles.update');
 Route::delete('/FacturasProveedoresDetalles/delete/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'destroy'])->name('facturas_proveedores_detalles.destroy');
 
  // RUTAS WEB DEL MODELO materiales
 Route::get('/Materiales',[App\Http\Controllers\MaterialesController::class,'index'])->name('materiales.index');
 Route::post('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'store'])->name('materiales.store');
 Route::get('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'create'])->name('materiales.create');
 Route::get('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'edit'])->name('materiales.edit');
 Route::get('/Materiales/{id}',[App\Http\Controllers\MaterialesController::class,'show'])->name('materiales.show');
 Route::patch('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'update'])->name('materiales.update');
 Route::delete('/Materiales/delete/{id}',[App\Http\Controllers\MaterialesController::class,'destroy'])->name('materiales.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra
 Route::get('/OrdenCompra',[App\Http\Controllers\OrdenCompraController::class,'index'])->name('orden_compra.index');
 Route::post('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'store'])->name('orden_compra.store');
 Route::get('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'create'])->name('orden_compra.create');
 Route::get('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'edit'])->name('orden_compra.edit');
 Route::get('/OrdenCompra/{id}',[App\Http\Controllers\OrdenCompraController::class,'show'])->name('orden_compra.show');
 Route::patch('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'update'])->name('orden_compra.update');
 Route::delete('/OrdenCompra/delete/{id}',[App\Http\Controllers\OrdenCompraController::class,'destroy'])->name('orden_compra.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra_detalles
 Route::get('/OrdenCompraDetalles',[App\Http\Controllers\OrdenCompraDetallesController::class,'index'])->name('orden_compra_detalles.index');
 Route::post('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'store'])->name('orden_compra_detalles.store');
 Route::get('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'create'])->name('orden_compra_detalles.create');
 Route::get('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'edit'])->name('orden_compra_detalles.edit');
 Route::get('/OrdenCompraDetalles/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'show'])->name('orden_compra_detalles.show');
 Route::patch('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'update'])->name('orden_compra_detalles.update');
 Route::delete('/OrdenCompraDetalles/delete/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'destroy'])->name('orden_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO pedidos
 Route::get('/Pedidos',[App\Http\Controllers\PedidosController::class,'index'])->name('pedidos.index');
 Route::post('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'store'])->name('pedidos.store');
 Route::get('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'create'])->name('pedidos.create');
 Route::get('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'edit'])->name('pedidos.edit');
 Route::get('/Pedidos/{id}',[App\Http\Controllers\PedidosController::class,'show'])->name('pedidos.show');
 Route::patch('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'update'])->name('pedidos.update');
 Route::delete('/Pedidos/delete/{id}',[App\Http\Controllers\PedidosController::class,'destroy'])->name('pedidos.destroy');
 
  // RUTAS WEB DEL MODELO permisos
 Route::get('/Permisos',[App\Http\Controllers\PermisosController::class,'index'])->name('permisos.index');
 Route::post('/Permisos/create',[App\Http\Controllers\PermisosController::class,'store'])->name('permisos.store');
 Route::get('/Permisos/create',[App\Http\Controllers\PermisosController::class,'create'])->name('permisos.create');
 Route::get('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'edit'])->name('permisos.edit');
 Route::get('/Permisos/{id}',[App\Http\Controllers\PermisosController::class,'show'])->name('permisos.show');
 Route::patch('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'update'])->name('permisos.update');
 Route::delete('/Permisos/delete/{id}',[App\Http\Controllers\PermisosController::class,'destroy'])->name('permisos.destroy');
 
  // RUTAS WEB DEL MODELO permisos_roles
 Route::get('/PermisosRoles',[App\Http\Controllers\PermisosRolesController::class,'index'])->name('permisos_roles.index');
 Route::post('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'store'])->name('permisos_roles.store');
 Route::get('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'create'])->name('permisos_roles.create');
 Route::get('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'edit'])->name('permisos_roles.edit');
 Route::get('/PermisosRoles/{id}',[App\Http\Controllers\PermisosRolesController::class,'show'])->name('permisos_roles.show');
 Route::patch('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'update'])->name('permisos_roles.update');
 Route::delete('/PermisosRoles/delete/{id}',[App\Http\Controllers\PermisosRolesController::class,'destroy'])->name('permisos_roles.destroy');
 
  // RUTAS WEB DEL MODELO procesos
 Route::get('/Procesos',[App\Http\Controllers\ProcesosController::class,'index'])->name('procesos.index');
 Route::post('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'store'])->name('procesos.store');
 Route::get('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'create'])->name('procesos.create');
 Route::get('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'edit'])->name('procesos.edit');
 Route::get('/Procesos/{id}',[App\Http\Controllers\ProcesosController::class,'show'])->name('procesos.show');
 Route::patch('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'update'])->name('procesos.update');
 Route::delete('/Procesos/delete/{id}',[App\Http\Controllers\ProcesosController::class,'destroy'])->name('procesos.destroy');
 
  // RUTAS WEB DEL MODELO productos
 Route::get('/Productos',[App\Http\Controllers\ProductosController::class,'index'])->name('productos.index');
 Route::post('/Productos/create',[App\Http\Controllers\ProductosController::class,'store'])->name('productos.store');
 Route::get('/Productos/create',[App\Http\Controllers\ProductosController::class,'create'])->name('productos.create');
 Route::get('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'edit'])->name('productos.edit');
 Route::get('/Productos/{id}',[App\Http\Controllers\ProductosController::class,'show'])->name('productos.show');
 Route::patch('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'update'])->name('productos.update');
 Route::delete('/Productos/delete/{id}',[App\Http\Controllers\ProductosController::class,'destroy'])->name('productos.destroy');
 
  // RUTAS WEB DEL MODELO productos_proceso
 Route::get('/ProductosProceso',[App\Http\Controllers\ProductosProcesoController::class,'index'])->name('productos_proceso.index');
 Route::post('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'store'])->name('productos_proceso.store');
 Route::get('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'create'])->name('productos_proceso.create');
 Route::get('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'edit'])->name('productos_proceso.edit');
 Route::get('/ProductosProceso/{id}',[App\Http\Controllers\ProductosProcesoController::class,'show'])->name('productos_proceso.show');
 Route::patch('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'update'])->name('productos_proceso.update');
 Route::delete('/ProductosProceso/delete/{id}',[App\Http\Controllers\ProductosProcesoController::class,'destroy'])->name('productos_proceso.destroy');
 
  // RUTAS WEB DEL MODELO proveedores
 Route::get('/Proveedores',[App\Http\Controllers\ProveedoresController::class,'index'])->name('proveedores.index');
 Route::post('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'store'])->name('proveedores.store');
 Route::get('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'create'])->name('proveedores.create');
 Route::get('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'edit'])->name('proveedores.edit');
 Route::get('/Proveedores/{id}',[App\Http\Controllers\ProveedoresController::class,'show'])->name('proveedores.show');
 Route::patch('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'update'])->name('proveedores.update');
 Route::delete('/Proveedores/delete/{id}',[App\Http\Controllers\ProveedoresController::class,'destroy'])->name('proveedores.destroy');
 
  // RUTAS WEB DEL MODELO roles
 Route::get('/Roles',[App\Http\Controllers\RolesController::class,'index'])->name('roles.index');
 Route::post('/Roles/create',[App\Http\Controllers\RolesController::class,'store'])->name('roles.store');
 Route::get('/Roles/create',[App\Http\Controllers\RolesController::class,'create'])->name('roles.create');
 Route::get('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'edit'])->name('roles.edit');
 Route::get('/Roles/{id}',[App\Http\Controllers\RolesController::class,'show'])->name('roles.show');
 Route::patch('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'update'])->name('roles.update');
 Route::delete('/Roles/delete/{id}',[App\Http\Controllers\RolesController::class,'destroy'])->name('roles.destroy');
 
  // RUTAS WEB DEL MODELO tipo_piezas
 Route::get('/TipoPiezas',[App\Http\Controllers\TipoPiezasController::class,'index'])->name('tipo_piezas.index');
 Route::post('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'store'])->name('tipo_piezas.store');
 Route::get('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'create'])->name('tipo_piezas.create');
 Route::get('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'edit'])->name('tipo_piezas.edit');
 Route::get('/TipoPiezas/{id}',[App\Http\Controllers\TipoPiezasController::class,'show'])->name('tipo_piezas.show');
 Route::patch('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'update'])->name('tipo_piezas.update');
 Route::delete('/TipoPiezas/delete/{id}',[App\Http\Controllers\TipoPiezasController::class,'destroy'])->name('tipo_piezas.destroy');
 
  // RUTAS WEB DEL MODELO users
 Route::get('/Users',[App\Http\Controllers\UsersController::class,'index'])->name('users.index');
 Route::post('/Users/create',[App\Http\Controllers\UsersController::class,'store'])->name('users.store');
 Route::get('/Users/create',[App\Http\Controllers\UsersController::class,'create'])->name('users.create');
 Route::get('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'edit'])->name('users.edit');
 Route::get('/Users/{id}',[App\Http\Controllers\UsersController::class,'show'])->name('users.show');
 Route::patch('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'update'])->name('users.update');
 Route::delete('/Users/delete/{id}',[App\Http\Controllers\UsersController::class,'destroy'])->name('users.destroy');
 
  // RUTAS WEB DEL MODELO bitacora
 Route::get('/Bitacora',[App\Http\Controllers\BitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/Bitacora/{id}',[App\Http\Controllers\BitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/Bitacora/delete/{id}',[App\Http\Controllers\BitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/Clientes',[App\Http\Controllers\ClientesController::class,'index'])->name('clientes.index');
 Route::post('/Clientes/create',[App\Http\Controllers\ClientesController::class,'store'])->name('clientes.store');
 Route::get('/Clientes/create',[App\Http\Controllers\ClientesController::class,'create'])->name('clientes.create');
 Route::get('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'edit'])->name('clientes.edit');
 Route::get('/Clientes/{id}',[App\Http\Controllers\ClientesController::class,'show'])->name('clientes.show');
 Route::patch('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'update'])->name('clientes.update');
 Route::delete('/Clientes/delete/{id}',[App\Http\Controllers\ClientesController::class,'destroy'])->name('clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/Cotizaciones',[App\Http\Controllers\CotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/Cotizaciones/{id}',[App\Http\Controllers\CotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/Cotizaciones/delete/{id}',[App\Http\Controllers\CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/CotizacionesDetalles',[App\Http\Controllers\CotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/CotizacionesDetalles/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/CotizacionesDetalles/delete/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/Departamentos',[App\Http\Controllers\DepartamentosController::class,'index'])->name('departamentos.index');
 Route::post('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'store'])->name('departamentos.store');
 Route::get('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'create'])->name('departamentos.create');
 Route::get('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/Departamentos/{id}',[App\Http\Controllers\DepartamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/Departamentos/delete/{id}',[App\Http\Controllers\DepartamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/DevolucionesCompra',[App\Http\Controllers\DevolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/DevolucionesCompra/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/DevolucionesCompra/delete/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/DevolucionesCompraDetalles',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/DevolucionesCompraDetalles/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/DevolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/DevolucionesVentas',[App\Http\Controllers\DevolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/DevolucionesVentas/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/DevolucionesVentas/delete/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas_detalles
 Route::get('/DevolucionesVentasDetalles',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'index'])->name('devoluciones_ventas_detalles.index');
 Route::post('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'store'])->name('devoluciones_ventas_detalles.store');
 Route::get('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'create'])->name('devoluciones_ventas_detalles.create');
 Route::get('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'edit'])->name('devoluciones_ventas_detalles.edit');
 Route::get('/DevolucionesVentasDetalles/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'show'])->name('devoluciones_ventas_detalles.show');
 Route::patch('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'update'])->name('devoluciones_ventas_detalles.update');
 Route::delete('/DevolucionesVentasDetalles/delete/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'destroy'])->name('devoluciones_ventas_detalles.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_compras
 Route::get('/DocumentosDevolucionesCompras',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'index'])->name('documentos_devoluciones_compras.index');
 Route::post('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'store'])->name('documentos_devoluciones_compras.store');
 Route::get('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'create'])->name('documentos_devoluciones_compras.create');
 Route::get('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'edit'])->name('documentos_devoluciones_compras.edit');
 Route::get('/DocumentosDevolucionesCompras/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'show'])->name('documentos_devoluciones_compras.show');
 Route::patch('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'update'])->name('documentos_devoluciones_compras.update');
 Route::delete('/DocumentosDevolucionesCompras/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'destroy'])->name('documentos_devoluciones_compras.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_ventas
 Route::get('/DocumentosDevolucionesVentas',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'index'])->name('documentos_devoluciones_ventas.index');
 Route::post('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'store'])->name('documentos_devoluciones_ventas.store');
 Route::get('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'create'])->name('documentos_devoluciones_ventas.create');
 Route::get('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'edit'])->name('documentos_devoluciones_ventas.edit');
 Route::get('/DocumentosDevolucionesVentas/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'show'])->name('documentos_devoluciones_ventas.show');
 Route::patch('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'update'])->name('documentos_devoluciones_ventas.update');
 Route::delete('/DocumentosDevolucionesVentas/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'destroy'])->name('documentos_devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO empleados
 Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class,'index'])->name('empleados.index');
 Route::post('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'store'])->name('empleados.store');
 Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'create'])->name('empleados.create');
 Route::get('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'edit'])->name('empleados.edit');
 Route::get('/Empleados/{id}',[App\Http\Controllers\EmpleadosController::class,'show'])->name('empleados.show');
 Route::patch('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'update'])->name('empleados.update');
 Route::delete('/Empleados/delete/{id}',[App\Http\Controllers\EmpleadosController::class,'destroy'])->name('empleados.destroy');
 
  // RUTAS WEB DEL MODELO empresas
 Route::get('/Empresas',[App\Http\Controllers\EmpresasController::class,'index'])->name('empresas.index');
 Route::post('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'store'])->name('empresas.store');
 Route::get('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'create'])->name('empresas.create');
 Route::get('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'edit'])->name('empresas.edit');
 Route::get('/Empresas/{id}',[App\Http\Controllers\EmpresasController::class,'show'])->name('empresas.show');
 Route::patch('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'update'])->name('empresas.update');
 Route::delete('/Empresas/delete/{id}',[App\Http\Controllers\EmpresasController::class,'destroy'])->name('empresas.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes
 Route::get('/FacturasClientes',[App\Http\Controllers\FacturasClientesController::class,'index'])->name('facturas_clientes.index');
 Route::post('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'store'])->name('facturas_clientes.store');
 Route::get('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'create'])->name('facturas_clientes.create');
 Route::get('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'edit'])->name('facturas_clientes.edit');
 Route::get('/FacturasClientes/{id}',[App\Http\Controllers\FacturasClientesController::class,'show'])->name('facturas_clientes.show');
 Route::patch('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'update'])->name('facturas_clientes.update');
 Route::delete('/FacturasClientes/delete/{id}',[App\Http\Controllers\FacturasClientesController::class,'destroy'])->name('facturas_clientes.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes_detalles
 Route::get('/FacturasClientesDetalles',[App\Http\Controllers\FacturasClientesDetallesController::class,'index'])->name('facturas_clientes_detalles.index');
 Route::post('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'store'])->name('facturas_clientes_detalles.store');
 Route::get('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'create'])->name('facturas_clientes_detalles.create');
 Route::get('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'edit'])->name('facturas_clientes_detalles.edit');
 Route::get('/FacturasClientesDetalles/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'show'])->name('facturas_clientes_detalles.show');
 Route::patch('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'update'])->name('facturas_clientes_detalles.update');
 Route::delete('/FacturasClientesDetalles/delete/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'destroy'])->name('facturas_clientes_detalles.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores
 Route::get('/FacturasProveedores',[App\Http\Controllers\FacturasProveedoresController::class,'index'])->name('facturas_proveedores.index');
 Route::post('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'store'])->name('facturas_proveedores.store');
 Route::get('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'create'])->name('facturas_proveedores.create');
 Route::get('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'edit'])->name('facturas_proveedores.edit');
 Route::get('/FacturasProveedores/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'show'])->name('facturas_proveedores.show');
 Route::patch('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'update'])->name('facturas_proveedores.update');
 Route::delete('/FacturasProveedores/delete/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'destroy'])->name('facturas_proveedores.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores_detalles
 Route::get('/FacturasProveedoresDetalles',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'index'])->name('facturas_proveedores_detalles.index');
 Route::post('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'store'])->name('facturas_proveedores_detalles.store');
 Route::get('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'create'])->name('facturas_proveedores_detalles.create');
 Route::get('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'edit'])->name('facturas_proveedores_detalles.edit');
 Route::get('/FacturasProveedoresDetalles/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'show'])->name('facturas_proveedores_detalles.show');
 Route::patch('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'update'])->name('facturas_proveedores_detalles.update');
 Route::delete('/FacturasProveedoresDetalles/delete/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'destroy'])->name('facturas_proveedores_detalles.destroy');
 
  // RUTAS WEB DEL MODELO materiales
 Route::get('/Materiales',[App\Http\Controllers\MaterialesController::class,'index'])->name('materiales.index');
 Route::post('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'store'])->name('materiales.store');
 Route::get('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'create'])->name('materiales.create');
 Route::get('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'edit'])->name('materiales.edit');
 Route::get('/Materiales/{id}',[App\Http\Controllers\MaterialesController::class,'show'])->name('materiales.show');
 Route::patch('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'update'])->name('materiales.update');
 Route::delete('/Materiales/delete/{id}',[App\Http\Controllers\MaterialesController::class,'destroy'])->name('materiales.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra
 Route::get('/OrdenCompra',[App\Http\Controllers\OrdenCompraController::class,'index'])->name('orden_compra.index');
 Route::post('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'store'])->name('orden_compra.store');
 Route::get('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'create'])->name('orden_compra.create');
 Route::get('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'edit'])->name('orden_compra.edit');
 Route::get('/OrdenCompra/{id}',[App\Http\Controllers\OrdenCompraController::class,'show'])->name('orden_compra.show');
 Route::patch('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'update'])->name('orden_compra.update');
 Route::delete('/OrdenCompra/delete/{id}',[App\Http\Controllers\OrdenCompraController::class,'destroy'])->name('orden_compra.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra_detalles
 Route::get('/OrdenCompraDetalles',[App\Http\Controllers\OrdenCompraDetallesController::class,'index'])->name('orden_compra_detalles.index');
 Route::post('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'store'])->name('orden_compra_detalles.store');
 Route::get('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'create'])->name('orden_compra_detalles.create');
 Route::get('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'edit'])->name('orden_compra_detalles.edit');
 Route::get('/OrdenCompraDetalles/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'show'])->name('orden_compra_detalles.show');
 Route::patch('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'update'])->name('orden_compra_detalles.update');
 Route::delete('/OrdenCompraDetalles/delete/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'destroy'])->name('orden_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO pedidos
 Route::get('/Pedidos',[App\Http\Controllers\PedidosController::class,'index'])->name('pedidos.index');
 Route::post('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'store'])->name('pedidos.store');
 Route::get('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'create'])->name('pedidos.create');
 Route::get('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'edit'])->name('pedidos.edit');
 Route::get('/Pedidos/{id}',[App\Http\Controllers\PedidosController::class,'show'])->name('pedidos.show');
 Route::patch('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'update'])->name('pedidos.update');
 Route::delete('/Pedidos/delete/{id}',[App\Http\Controllers\PedidosController::class,'destroy'])->name('pedidos.destroy');
 
  // RUTAS WEB DEL MODELO permisos
 Route::get('/Permisos',[App\Http\Controllers\PermisosController::class,'index'])->name('permisos.index');
 Route::post('/Permisos/create',[App\Http\Controllers\PermisosController::class,'store'])->name('permisos.store');
 Route::get('/Permisos/create',[App\Http\Controllers\PermisosController::class,'create'])->name('permisos.create');
 Route::get('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'edit'])->name('permisos.edit');
 Route::get('/Permisos/{id}',[App\Http\Controllers\PermisosController::class,'show'])->name('permisos.show');
 Route::patch('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'update'])->name('permisos.update');
 Route::delete('/Permisos/delete/{id}',[App\Http\Controllers\PermisosController::class,'destroy'])->name('permisos.destroy');
 
  // RUTAS WEB DEL MODELO permisos_roles
 Route::get('/PermisosRoles',[App\Http\Controllers\PermisosRolesController::class,'index'])->name('permisos_roles.index');
 Route::post('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'store'])->name('permisos_roles.store');
 Route::get('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'create'])->name('permisos_roles.create');
 Route::get('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'edit'])->name('permisos_roles.edit');
 Route::get('/PermisosRoles/{id}',[App\Http\Controllers\PermisosRolesController::class,'show'])->name('permisos_roles.show');
 Route::patch('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'update'])->name('permisos_roles.update');
 Route::delete('/PermisosRoles/delete/{id}',[App\Http\Controllers\PermisosRolesController::class,'destroy'])->name('permisos_roles.destroy');
 
  // RUTAS WEB DEL MODELO procesos
 Route::get('/Procesos',[App\Http\Controllers\ProcesosController::class,'index'])->name('procesos.index');
 Route::post('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'store'])->name('procesos.store');
 Route::get('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'create'])->name('procesos.create');
 Route::get('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'edit'])->name('procesos.edit');
 Route::get('/Procesos/{id}',[App\Http\Controllers\ProcesosController::class,'show'])->name('procesos.show');
 Route::patch('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'update'])->name('procesos.update');
 Route::delete('/Procesos/delete/{id}',[App\Http\Controllers\ProcesosController::class,'destroy'])->name('procesos.destroy');
 
  // RUTAS WEB DEL MODELO productos
 Route::get('/Productos',[App\Http\Controllers\ProductosController::class,'index'])->name('productos.index');
 Route::post('/Productos/create',[App\Http\Controllers\ProductosController::class,'store'])->name('productos.store');
 Route::get('/Productos/create',[App\Http\Controllers\ProductosController::class,'create'])->name('productos.create');
 Route::get('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'edit'])->name('productos.edit');
 Route::get('/Productos/{id}',[App\Http\Controllers\ProductosController::class,'show'])->name('productos.show');
 Route::patch('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'update'])->name('productos.update');
 Route::delete('/Productos/delete/{id}',[App\Http\Controllers\ProductosController::class,'destroy'])->name('productos.destroy');
 
  // RUTAS WEB DEL MODELO productos_proceso
 Route::get('/ProductosProceso',[App\Http\Controllers\ProductosProcesoController::class,'index'])->name('productos_proceso.index');
 Route::post('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'store'])->name('productos_proceso.store');
 Route::get('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'create'])->name('productos_proceso.create');
 Route::get('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'edit'])->name('productos_proceso.edit');
 Route::get('/ProductosProceso/{id}',[App\Http\Controllers\ProductosProcesoController::class,'show'])->name('productos_proceso.show');
 Route::patch('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'update'])->name('productos_proceso.update');
 Route::delete('/ProductosProceso/delete/{id}',[App\Http\Controllers\ProductosProcesoController::class,'destroy'])->name('productos_proceso.destroy');
 
  // RUTAS WEB DEL MODELO proveedores
 Route::get('/Proveedores',[App\Http\Controllers\ProveedoresController::class,'index'])->name('proveedores.index');
 Route::post('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'store'])->name('proveedores.store');
 Route::get('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'create'])->name('proveedores.create');
 Route::get('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'edit'])->name('proveedores.edit');
 Route::get('/Proveedores/{id}',[App\Http\Controllers\ProveedoresController::class,'show'])->name('proveedores.show');
 Route::patch('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'update'])->name('proveedores.update');
 Route::delete('/Proveedores/delete/{id}',[App\Http\Controllers\ProveedoresController::class,'destroy'])->name('proveedores.destroy');
 
  // RUTAS WEB DEL MODELO roles
 Route::get('/Roles',[App\Http\Controllers\RolesController::class,'index'])->name('roles.index');
 Route::post('/Roles/create',[App\Http\Controllers\RolesController::class,'store'])->name('roles.store');
 Route::get('/Roles/create',[App\Http\Controllers\RolesController::class,'create'])->name('roles.create');
 Route::get('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'edit'])->name('roles.edit');
 Route::get('/Roles/{id}',[App\Http\Controllers\RolesController::class,'show'])->name('roles.show');
 Route::patch('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'update'])->name('roles.update');
 Route::delete('/Roles/delete/{id}',[App\Http\Controllers\RolesController::class,'destroy'])->name('roles.destroy');
 
  // RUTAS WEB DEL MODELO tipo_piezas
 Route::get('/TipoPiezas',[App\Http\Controllers\TipoPiezasController::class,'index'])->name('tipo_piezas.index');
 Route::post('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'store'])->name('tipo_piezas.store');
 Route::get('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'create'])->name('tipo_piezas.create');
 Route::get('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'edit'])->name('tipo_piezas.edit');
 Route::get('/TipoPiezas/{id}',[App\Http\Controllers\TipoPiezasController::class,'show'])->name('tipo_piezas.show');
 Route::patch('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'update'])->name('tipo_piezas.update');
 Route::delete('/TipoPiezas/delete/{id}',[App\Http\Controllers\TipoPiezasController::class,'destroy'])->name('tipo_piezas.destroy');
 
  // RUTAS WEB DEL MODELO users
 Route::get('/Users',[App\Http\Controllers\UsersController::class,'index'])->name('users.index');
 Route::post('/Users/create',[App\Http\Controllers\UsersController::class,'store'])->name('users.store');
 Route::get('/Users/create',[App\Http\Controllers\UsersController::class,'create'])->name('users.create');
 Route::get('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'edit'])->name('users.edit');
 Route::get('/Users/{id}',[App\Http\Controllers\UsersController::class,'show'])->name('users.show');
 Route::patch('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'update'])->name('users.update');
 Route::delete('/Users/delete/{id}',[App\Http\Controllers\UsersController::class,'destroy'])->name('users.destroy');
 
  // RUTAS WEB DEL MODELO bitacora
 Route::get('/Bitacora',[App\Http\Controllers\BitacoraController::class,'index'])->name('bitacora.index');
 Route::post('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'store'])->name('bitacora.store');
 Route::get('/Bitacora/create',[App\Http\Controllers\BitacoraController::class,'create'])->name('bitacora.create');
 Route::get('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'edit'])->name('bitacora.edit');
 Route::get('/Bitacora/{id}',[App\Http\Controllers\BitacoraController::class,'show'])->name('bitacora.show');
 Route::patch('/Bitacora/edit/{id}',[App\Http\Controllers\BitacoraController::class,'update'])->name('bitacora.update');
 Route::delete('/Bitacora/delete/{id}',[App\Http\Controllers\BitacoraController::class,'destroy'])->name('bitacora.destroy');
 
  // RUTAS WEB DEL MODELO clientes
 Route::get('/Clientes',[App\Http\Controllers\ClientesController::class,'index'])->name('clientes.index');
 Route::post('/Clientes/create',[App\Http\Controllers\ClientesController::class,'store'])->name('clientes.store');
 Route::get('/Clientes/create',[App\Http\Controllers\ClientesController::class,'create'])->name('clientes.create');
 Route::get('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'edit'])->name('clientes.edit');
 Route::get('/Clientes/{id}',[App\Http\Controllers\ClientesController::class,'show'])->name('clientes.show');
 Route::patch('/Clientes/edit/{id}',[App\Http\Controllers\ClientesController::class,'update'])->name('clientes.update');
 Route::delete('/Clientes/delete/{id}',[App\Http\Controllers\ClientesController::class,'destroy'])->name('clientes.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones
 Route::get('/Cotizaciones',[App\Http\Controllers\CotizacionesController::class,'index'])->name('cotizaciones.index');
 Route::post('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'store'])->name('cotizaciones.store');
 Route::get('/Cotizaciones/create',[App\Http\Controllers\CotizacionesController::class,'create'])->name('cotizaciones.create');
 Route::get('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'edit'])->name('cotizaciones.edit');
 Route::get('/Cotizaciones/{id}',[App\Http\Controllers\CotizacionesController::class,'show'])->name('cotizaciones.show');
 Route::patch('/Cotizaciones/edit/{id}',[App\Http\Controllers\CotizacionesController::class,'update'])->name('cotizaciones.update');
 Route::delete('/Cotizaciones/delete/{id}',[App\Http\Controllers\CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');
 
  // RUTAS WEB DEL MODELO cotizaciones_detalles
 Route::get('/CotizacionesDetalles',[App\Http\Controllers\CotizacionesDetallesController::class,'index'])->name('cotizaciones_detalles.index');
 Route::post('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'store'])->name('cotizaciones_detalles.store');
 Route::get('/CotizacionesDetalles/create',[App\Http\Controllers\CotizacionesDetallesController::class,'create'])->name('cotizaciones_detalles.create');
 Route::get('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'edit'])->name('cotizaciones_detalles.edit');
 Route::get('/CotizacionesDetalles/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'show'])->name('cotizaciones_detalles.show');
 Route::patch('/CotizacionesDetalles/edit/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'update'])->name('cotizaciones_detalles.update');
 Route::delete('/CotizacionesDetalles/delete/{id}',[App\Http\Controllers\CotizacionesDetallesController::class,'destroy'])->name('cotizaciones_detalles.destroy');
 
  // RUTAS WEB DEL MODELO departamentos
 Route::get('/Departamentos',[App\Http\Controllers\DepartamentosController::class,'index'])->name('departamentos.index');
 Route::post('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'store'])->name('departamentos.store');
 Route::get('/Departamentos/create',[App\Http\Controllers\DepartamentosController::class,'create'])->name('departamentos.create');
 Route::get('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'edit'])->name('departamentos.edit');
 Route::get('/Departamentos/{id}',[App\Http\Controllers\DepartamentosController::class,'show'])->name('departamentos.show');
 Route::patch('/Departamentos/edit/{id}',[App\Http\Controllers\DepartamentosController::class,'update'])->name('departamentos.update');
 Route::delete('/Departamentos/delete/{id}',[App\Http\Controllers\DepartamentosController::class,'destroy'])->name('departamentos.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra
 Route::get('/DevolucionesCompra',[App\Http\Controllers\DevolucionesCompraController::class,'index'])->name('devoluciones_compra.index');
 Route::post('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'store'])->name('devoluciones_compra.store');
 Route::get('/DevolucionesCompra/create',[App\Http\Controllers\DevolucionesCompraController::class,'create'])->name('devoluciones_compra.create');
 Route::get('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'edit'])->name('devoluciones_compra.edit');
 Route::get('/DevolucionesCompra/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'show'])->name('devoluciones_compra.show');
 Route::patch('/DevolucionesCompra/edit/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'update'])->name('devoluciones_compra.update');
 Route::delete('/DevolucionesCompra/delete/{id}',[App\Http\Controllers\DevolucionesCompraController::class,'destroy'])->name('devoluciones_compra.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_compra_detalles
 Route::get('/DevolucionesCompraDetalles',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'index'])->name('devoluciones_compra_detalles.index');
 Route::post('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'store'])->name('devoluciones_compra_detalles.store');
 Route::get('/DevolucionesCompraDetalles/create',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'create'])->name('devoluciones_compra_detalles.create');
 Route::get('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'edit'])->name('devoluciones_compra_detalles.edit');
 Route::get('/DevolucionesCompraDetalles/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'show'])->name('devoluciones_compra_detalles.show');
 Route::patch('/DevolucionesCompraDetalles/edit/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'update'])->name('devoluciones_compra_detalles.update');
 Route::delete('/DevolucionesCompraDetalles/delete/{id}',[App\Http\Controllers\DevolucionesCompraDetallesController::class,'destroy'])->name('devoluciones_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas
 Route::get('/DevolucionesVentas',[App\Http\Controllers\DevolucionesVentasController::class,'index'])->name('devoluciones_ventas.index');
 Route::post('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'store'])->name('devoluciones_ventas.store');
 Route::get('/DevolucionesVentas/create',[App\Http\Controllers\DevolucionesVentasController::class,'create'])->name('devoluciones_ventas.create');
 Route::get('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'edit'])->name('devoluciones_ventas.edit');
 Route::get('/DevolucionesVentas/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'show'])->name('devoluciones_ventas.show');
 Route::patch('/DevolucionesVentas/edit/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'update'])->name('devoluciones_ventas.update');
 Route::delete('/DevolucionesVentas/delete/{id}',[App\Http\Controllers\DevolucionesVentasController::class,'destroy'])->name('devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO devoluciones_ventas_detalles
 Route::get('/DevolucionesVentasDetalles',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'index'])->name('devoluciones_ventas_detalles.index');
 Route::post('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'store'])->name('devoluciones_ventas_detalles.store');
 Route::get('/DevolucionesVentasDetalles/create',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'create'])->name('devoluciones_ventas_detalles.create');
 Route::get('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'edit'])->name('devoluciones_ventas_detalles.edit');
 Route::get('/DevolucionesVentasDetalles/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'show'])->name('devoluciones_ventas_detalles.show');
 Route::patch('/DevolucionesVentasDetalles/edit/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'update'])->name('devoluciones_ventas_detalles.update');
 Route::delete('/DevolucionesVentasDetalles/delete/{id}',[App\Http\Controllers\DevolucionesVentasDetallesController::class,'destroy'])->name('devoluciones_ventas_detalles.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_compras
 Route::get('/DocumentosDevolucionesCompras',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'index'])->name('documentos_devoluciones_compras.index');
 Route::post('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'store'])->name('documentos_devoluciones_compras.store');
 Route::get('/DocumentosDevolucionesCompras/create',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'create'])->name('documentos_devoluciones_compras.create');
 Route::get('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'edit'])->name('documentos_devoluciones_compras.edit');
 Route::get('/DocumentosDevolucionesCompras/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'show'])->name('documentos_devoluciones_compras.show');
 Route::patch('/DocumentosDevolucionesCompras/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'update'])->name('documentos_devoluciones_compras.update');
 Route::delete('/DocumentosDevolucionesCompras/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesComprasController::class,'destroy'])->name('documentos_devoluciones_compras.destroy');
 
  // RUTAS WEB DEL MODELO documentos_devoluciones_ventas
 Route::get('/DocumentosDevolucionesVentas',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'index'])->name('documentos_devoluciones_ventas.index');
 Route::post('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'store'])->name('documentos_devoluciones_ventas.store');
 Route::get('/DocumentosDevolucionesVentas/create',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'create'])->name('documentos_devoluciones_ventas.create');
 Route::get('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'edit'])->name('documentos_devoluciones_ventas.edit');
 Route::get('/DocumentosDevolucionesVentas/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'show'])->name('documentos_devoluciones_ventas.show');
 Route::patch('/DocumentosDevolucionesVentas/edit/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'update'])->name('documentos_devoluciones_ventas.update');
 Route::delete('/DocumentosDevolucionesVentas/delete/{id}',[App\Http\Controllers\DocumentosDevolucionesVentasController::class,'destroy'])->name('documentos_devoluciones_ventas.destroy');
 
  // RUTAS WEB DEL MODELO empleados
 Route::get('/Empleados',[App\Http\Controllers\EmpleadosController::class,'index'])->name('empleados.index');
 Route::post('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'store'])->name('empleados.store');
 Route::get('/Empleados/create',[App\Http\Controllers\EmpleadosController::class,'create'])->name('empleados.create');
 Route::get('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'edit'])->name('empleados.edit');
 Route::get('/Empleados/{id}',[App\Http\Controllers\EmpleadosController::class,'show'])->name('empleados.show');
 Route::patch('/Empleados/edit/{id}',[App\Http\Controllers\EmpleadosController::class,'update'])->name('empleados.update');
 Route::delete('/Empleados/delete/{id}',[App\Http\Controllers\EmpleadosController::class,'destroy'])->name('empleados.destroy');
 
  // RUTAS WEB DEL MODELO empresas
 Route::get('/Empresas',[App\Http\Controllers\EmpresasController::class,'index'])->name('empresas.index');
 Route::post('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'store'])->name('empresas.store');
 Route::get('/Empresas/create',[App\Http\Controllers\EmpresasController::class,'create'])->name('empresas.create');
 Route::get('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'edit'])->name('empresas.edit');
 Route::get('/Empresas/{id}',[App\Http\Controllers\EmpresasController::class,'show'])->name('empresas.show');
 Route::patch('/Empresas/edit/{id}',[App\Http\Controllers\EmpresasController::class,'update'])->name('empresas.update');
 Route::delete('/Empresas/delete/{id}',[App\Http\Controllers\EmpresasController::class,'destroy'])->name('empresas.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes
 Route::get('/FacturasClientes',[App\Http\Controllers\FacturasClientesController::class,'index'])->name('facturas_clientes.index');
 Route::post('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'store'])->name('facturas_clientes.store');
 Route::get('/FacturasClientes/create',[App\Http\Controllers\FacturasClientesController::class,'create'])->name('facturas_clientes.create');
 Route::get('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'edit'])->name('facturas_clientes.edit');
 Route::get('/FacturasClientes/{id}',[App\Http\Controllers\FacturasClientesController::class,'show'])->name('facturas_clientes.show');
 Route::patch('/FacturasClientes/edit/{id}',[App\Http\Controllers\FacturasClientesController::class,'update'])->name('facturas_clientes.update');
 Route::delete('/FacturasClientes/delete/{id}',[App\Http\Controllers\FacturasClientesController::class,'destroy'])->name('facturas_clientes.destroy');
 
  // RUTAS WEB DEL MODELO facturas_clientes_detalles
 Route::get('/FacturasClientesDetalles',[App\Http\Controllers\FacturasClientesDetallesController::class,'index'])->name('facturas_clientes_detalles.index');
 Route::post('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'store'])->name('facturas_clientes_detalles.store');
 Route::get('/FacturasClientesDetalles/create',[App\Http\Controllers\FacturasClientesDetallesController::class,'create'])->name('facturas_clientes_detalles.create');
 Route::get('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'edit'])->name('facturas_clientes_detalles.edit');
 Route::get('/FacturasClientesDetalles/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'show'])->name('facturas_clientes_detalles.show');
 Route::patch('/FacturasClientesDetalles/edit/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'update'])->name('facturas_clientes_detalles.update');
 Route::delete('/FacturasClientesDetalles/delete/{id}',[App\Http\Controllers\FacturasClientesDetallesController::class,'destroy'])->name('facturas_clientes_detalles.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores
 Route::get('/FacturasProveedores',[App\Http\Controllers\FacturasProveedoresController::class,'index'])->name('facturas_proveedores.index');
 Route::post('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'store'])->name('facturas_proveedores.store');
 Route::get('/FacturasProveedores/create',[App\Http\Controllers\FacturasProveedoresController::class,'create'])->name('facturas_proveedores.create');
 Route::get('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'edit'])->name('facturas_proveedores.edit');
 Route::get('/FacturasProveedores/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'show'])->name('facturas_proveedores.show');
 Route::patch('/FacturasProveedores/edit/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'update'])->name('facturas_proveedores.update');
 Route::delete('/FacturasProveedores/delete/{id}',[App\Http\Controllers\FacturasProveedoresController::class,'destroy'])->name('facturas_proveedores.destroy');
 
  // RUTAS WEB DEL MODELO facturas_proveedores_detalles
 Route::get('/FacturasProveedoresDetalles',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'index'])->name('facturas_proveedores_detalles.index');
 Route::post('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'store'])->name('facturas_proveedores_detalles.store');
 Route::get('/FacturasProveedoresDetalles/create',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'create'])->name('facturas_proveedores_detalles.create');
 Route::get('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'edit'])->name('facturas_proveedores_detalles.edit');
 Route::get('/FacturasProveedoresDetalles/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'show'])->name('facturas_proveedores_detalles.show');
 Route::patch('/FacturasProveedoresDetalles/edit/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'update'])->name('facturas_proveedores_detalles.update');
 Route::delete('/FacturasProveedoresDetalles/delete/{id}',[App\Http\Controllers\FacturasProveedoresDetallesController::class,'destroy'])->name('facturas_proveedores_detalles.destroy');
 
  // RUTAS WEB DEL MODELO materiales
 Route::get('/Materiales',[App\Http\Controllers\MaterialesController::class,'index'])->name('materiales.index');
 Route::post('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'store'])->name('materiales.store');
 Route::get('/Materiales/create',[App\Http\Controllers\MaterialesController::class,'create'])->name('materiales.create');
 Route::get('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'edit'])->name('materiales.edit');
 Route::get('/Materiales/{id}',[App\Http\Controllers\MaterialesController::class,'show'])->name('materiales.show');
 Route::patch('/Materiales/edit/{id}',[App\Http\Controllers\MaterialesController::class,'update'])->name('materiales.update');
 Route::delete('/Materiales/delete/{id}',[App\Http\Controllers\MaterialesController::class,'destroy'])->name('materiales.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra
 Route::get('/OrdenCompra',[App\Http\Controllers\OrdenCompraController::class,'index'])->name('orden_compra.index');
 Route::post('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'store'])->name('orden_compra.store');
 Route::get('/OrdenCompra/create',[App\Http\Controllers\OrdenCompraController::class,'create'])->name('orden_compra.create');
 Route::get('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'edit'])->name('orden_compra.edit');
 Route::get('/OrdenCompra/{id}',[App\Http\Controllers\OrdenCompraController::class,'show'])->name('orden_compra.show');
 Route::patch('/OrdenCompra/edit/{id}',[App\Http\Controllers\OrdenCompraController::class,'update'])->name('orden_compra.update');
 Route::delete('/OrdenCompra/delete/{id}',[App\Http\Controllers\OrdenCompraController::class,'destroy'])->name('orden_compra.destroy');
 
  // RUTAS WEB DEL MODELO orden_compra_detalles
 Route::get('/OrdenCompraDetalles',[App\Http\Controllers\OrdenCompraDetallesController::class,'index'])->name('orden_compra_detalles.index');
 Route::post('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'store'])->name('orden_compra_detalles.store');
 Route::get('/OrdenCompraDetalles/create',[App\Http\Controllers\OrdenCompraDetallesController::class,'create'])->name('orden_compra_detalles.create');
 Route::get('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'edit'])->name('orden_compra_detalles.edit');
 Route::get('/OrdenCompraDetalles/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'show'])->name('orden_compra_detalles.show');
 Route::patch('/OrdenCompraDetalles/edit/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'update'])->name('orden_compra_detalles.update');
 Route::delete('/OrdenCompraDetalles/delete/{id}',[App\Http\Controllers\OrdenCompraDetallesController::class,'destroy'])->name('orden_compra_detalles.destroy');
 
  // RUTAS WEB DEL MODELO pedidos
 Route::get('/Pedidos',[App\Http\Controllers\PedidosController::class,'index'])->name('pedidos.index');
 Route::post('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'store'])->name('pedidos.store');
 Route::get('/Pedidos/create',[App\Http\Controllers\PedidosController::class,'create'])->name('pedidos.create');
 Route::get('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'edit'])->name('pedidos.edit');
 Route::get('/Pedidos/{id}',[App\Http\Controllers\PedidosController::class,'show'])->name('pedidos.show');
 Route::patch('/Pedidos/edit/{id}',[App\Http\Controllers\PedidosController::class,'update'])->name('pedidos.update');
 Route::delete('/Pedidos/delete/{id}',[App\Http\Controllers\PedidosController::class,'destroy'])->name('pedidos.destroy');
 
  // RUTAS WEB DEL MODELO permisos
 Route::get('/Permisos',[App\Http\Controllers\PermisosController::class,'index'])->name('permisos.index');
 Route::post('/Permisos/create',[App\Http\Controllers\PermisosController::class,'store'])->name('permisos.store');
 Route::get('/Permisos/create',[App\Http\Controllers\PermisosController::class,'create'])->name('permisos.create');
 Route::get('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'edit'])->name('permisos.edit');
 Route::get('/Permisos/{id}',[App\Http\Controllers\PermisosController::class,'show'])->name('permisos.show');
 Route::patch('/Permisos/edit/{id}',[App\Http\Controllers\PermisosController::class,'update'])->name('permisos.update');
 Route::delete('/Permisos/delete/{id}',[App\Http\Controllers\PermisosController::class,'destroy'])->name('permisos.destroy');
 
  // RUTAS WEB DEL MODELO permisos_roles
 Route::get('/PermisosRoles',[App\Http\Controllers\PermisosRolesController::class,'index'])->name('permisos_roles.index');
 Route::post('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'store'])->name('permisos_roles.store');
 Route::get('/PermisosRoles/create',[App\Http\Controllers\PermisosRolesController::class,'create'])->name('permisos_roles.create');
 Route::get('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'edit'])->name('permisos_roles.edit');
 Route::get('/PermisosRoles/{id}',[App\Http\Controllers\PermisosRolesController::class,'show'])->name('permisos_roles.show');
 Route::patch('/PermisosRoles/edit/{id}',[App\Http\Controllers\PermisosRolesController::class,'update'])->name('permisos_roles.update');
 Route::delete('/PermisosRoles/delete/{id}',[App\Http\Controllers\PermisosRolesController::class,'destroy'])->name('permisos_roles.destroy');
 
  // RUTAS WEB DEL MODELO procesos
 Route::get('/Procesos',[App\Http\Controllers\ProcesosController::class,'index'])->name('procesos.index');
 Route::post('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'store'])->name('procesos.store');
 Route::get('/Procesos/create',[App\Http\Controllers\ProcesosController::class,'create'])->name('procesos.create');
 Route::get('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'edit'])->name('procesos.edit');
 Route::get('/Procesos/{id}',[App\Http\Controllers\ProcesosController::class,'show'])->name('procesos.show');
 Route::patch('/Procesos/edit/{id}',[App\Http\Controllers\ProcesosController::class,'update'])->name('procesos.update');
 Route::delete('/Procesos/delete/{id}',[App\Http\Controllers\ProcesosController::class,'destroy'])->name('procesos.destroy');
 
  // RUTAS WEB DEL MODELO productos
 Route::get('/Productos',[App\Http\Controllers\ProductosController::class,'index'])->name('productos.index');
 Route::post('/Productos/create',[App\Http\Controllers\ProductosController::class,'store'])->name('productos.store');
 Route::get('/Productos/create',[App\Http\Controllers\ProductosController::class,'create'])->name('productos.create');
 Route::get('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'edit'])->name('productos.edit');
 Route::get('/Productos/{id}',[App\Http\Controllers\ProductosController::class,'show'])->name('productos.show');
 Route::patch('/Productos/edit/{id}',[App\Http\Controllers\ProductosController::class,'update'])->name('productos.update');
 Route::delete('/Productos/delete/{id}',[App\Http\Controllers\ProductosController::class,'destroy'])->name('productos.destroy');
 
  // RUTAS WEB DEL MODELO productos_proceso
 Route::get('/ProductosProceso',[App\Http\Controllers\ProductosProcesoController::class,'index'])->name('productos_proceso.index');
 Route::post('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'store'])->name('productos_proceso.store');
 Route::get('/ProductosProceso/create',[App\Http\Controllers\ProductosProcesoController::class,'create'])->name('productos_proceso.create');
 Route::get('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'edit'])->name('productos_proceso.edit');
 Route::get('/ProductosProceso/{id}',[App\Http\Controllers\ProductosProcesoController::class,'show'])->name('productos_proceso.show');
 Route::patch('/ProductosProceso/edit/{id}',[App\Http\Controllers\ProductosProcesoController::class,'update'])->name('productos_proceso.update');
 Route::delete('/ProductosProceso/delete/{id}',[App\Http\Controllers\ProductosProcesoController::class,'destroy'])->name('productos_proceso.destroy');
 
  // RUTAS WEB DEL MODELO proveedores
 Route::get('/Proveedores',[App\Http\Controllers\ProveedoresController::class,'index'])->name('proveedores.index');
 Route::post('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'store'])->name('proveedores.store');
 Route::get('/Proveedores/create',[App\Http\Controllers\ProveedoresController::class,'create'])->name('proveedores.create');
 Route::get('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'edit'])->name('proveedores.edit');
 Route::get('/Proveedores/{id}',[App\Http\Controllers\ProveedoresController::class,'show'])->name('proveedores.show');
 Route::patch('/Proveedores/edit/{id}',[App\Http\Controllers\ProveedoresController::class,'update'])->name('proveedores.update');
 Route::delete('/Proveedores/delete/{id}',[App\Http\Controllers\ProveedoresController::class,'destroy'])->name('proveedores.destroy');
 
  // RUTAS WEB DEL MODELO roles
 Route::get('/Roles',[App\Http\Controllers\RolesController::class,'index'])->name('roles.index');
 Route::post('/Roles/create',[App\Http\Controllers\RolesController::class,'store'])->name('roles.store');
 Route::get('/Roles/create',[App\Http\Controllers\RolesController::class,'create'])->name('roles.create');
 Route::get('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'edit'])->name('roles.edit');
 Route::get('/Roles/{id}',[App\Http\Controllers\RolesController::class,'show'])->name('roles.show');
 Route::patch('/Roles/edit/{id}',[App\Http\Controllers\RolesController::class,'update'])->name('roles.update');
 Route::delete('/Roles/delete/{id}',[App\Http\Controllers\RolesController::class,'destroy'])->name('roles.destroy');
 
  // RUTAS WEB DEL MODELO tipo_piezas
 Route::get('/TipoPiezas',[App\Http\Controllers\TipoPiezasController::class,'index'])->name('tipo_piezas.index');
 Route::post('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'store'])->name('tipo_piezas.store');
 Route::get('/TipoPiezas/create',[App\Http\Controllers\TipoPiezasController::class,'create'])->name('tipo_piezas.create');
 Route::get('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'edit'])->name('tipo_piezas.edit');
 Route::get('/TipoPiezas/{id}',[App\Http\Controllers\TipoPiezasController::class,'show'])->name('tipo_piezas.show');
 Route::patch('/TipoPiezas/edit/{id}',[App\Http\Controllers\TipoPiezasController::class,'update'])->name('tipo_piezas.update');
 Route::delete('/TipoPiezas/delete/{id}',[App\Http\Controllers\TipoPiezasController::class,'destroy'])->name('tipo_piezas.destroy');
 
  // RUTAS WEB DEL MODELO users
 Route::get('/Users',[App\Http\Controllers\UsersController::class,'index'])->name('users.index');
 Route::post('/Users/create',[App\Http\Controllers\UsersController::class,'store'])->name('users.store');
 Route::get('/Users/create',[App\Http\Controllers\UsersController::class,'create'])->name('users.create');
 Route::get('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'edit'])->name('users.edit');
 Route::get('/Users/{id}',[App\Http\Controllers\UsersController::class,'show'])->name('users.show');
 Route::patch('/Users/edit/{id}',[App\Http\Controllers\UsersController::class,'update'])->name('users.update');
 Route::delete('/Users/delete/{id}',[App\Http\Controllers\UsersController::class,'destroy'])->name('users.destroy');
});