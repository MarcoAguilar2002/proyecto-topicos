<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HorarioController;

Route::view('/','index')->name('index');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
//RUTAS ADMIN-USUARIOS
Route::get('/admin/usuarios', [UsuarioController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');
Route::get('/admin/usuarios/create', [UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth'); 
Route::POST('/admin/usuarios/create', [UsuarioController::class, 'store'])->name('admin.usuarios.store')->middleware('auth');
Route::get('/admin/usuarios/{id}', [UsuarioController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');    
Route::get('/admin/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');    
Route::put('/admin/usuarios/{id}', [UsuarioController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');    
Route::delete('/admin/usuarios/{id}/delete', [UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth'); 
//RUTAS ADMIN-SECRETARIAS
Route::get('/admin/secretarias', [SecretariaController::class, 'index'])->name('admin.secretarias.index')->middleware('auth');
Route::get('/admin/secretarias/create', [SecretariaController::class, 'create'])->name('admin.secretarias.create')->middleware('auth'); 
Route::post('/admin/secretarias/create', [SecretariaController::class, 'store'])->name('admin.secretarias.store')->middleware('auth'); 
Route::get('/admin/secretarias/{id}', [SecretariaController::class, 'show'])->name('admin.secretarias.show')->middleware('auth');    
Route::get('/admin/secretarias/{id}/edit', [SecretariaController::class, 'edit'])->name('admin.secretarias.edit')->middleware('auth');    
Route::put('/admin/secretarias/{id}', [SecretariaController::class, 'update'])->name('admin.secretarias.update')->middleware('auth');    
Route::delete('/admin/secretarias/{id}/delete', [SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy')->middleware('auth'); 
//RUTAS ADMIN-PACIENTES
Route::get('/admin/pacientes', [PacienteController::class, 'index'])->name('admin.pacientes.index')->middleware('auth');
Route::get('/admin/pacientes/create', [PacienteController::class, 'create'])->name('admin.pacientes.create')->middleware('auth'); 
Route::POST('/admin/pacientes/create', [PacienteController::class, 'store'])->name('admin.pacientes.store')->middleware('auth');
Route::get('/admin/pacientes/{id}', [PacienteController::class, 'show'])->name('admin.pacientes.show')->middleware('auth');    
Route::get('/admin/pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('admin.pacientes.edit')->middleware('auth');    
Route::put('/admin/pacientes/{id}', [PacienteController::class, 'update'])->name('admin.pacientes.update')->middleware('auth');    
Route::delete('/admin/pacientes/{id}/delete', [PacienteController::class, 'destroy'])->name('admin.pacientes.destroy')->middleware('auth'); 
//RUTAS ADMIN-CONSULTORIOS
Route::get('/admin/consultorios', [ConsultorioController::class, 'index'])->name('admin.consultorios.index')->middleware('auth');
Route::get('/admin/consultorios/create', [ConsultorioController::class, 'create'])->name('admin.consultorios.create')->middleware('auth'); 
Route::POST('/admin/consultorios/create', [ConsultorioController::class, 'store'])->name('admin.consultorios.store')->middleware('auth');
Route::get('/admin/consultorios/{id}', [ConsultorioController::class, 'show'])->name('admin.consultorios.show')->middleware('auth');    
Route::get('/admin/consultorios/{id}/edit', [ConsultorioController::class, 'edit'])->name('admin.consultorios.edit')->middleware('auth');    
Route::put('/admin/consultorios/{id}', [ConsultorioController::class, 'update'])->name('admin.consultorios.update')->middleware('auth');    
Route::delete('/admin/consultorios/{id}/delete', [ConsultorioController::class, 'destroy'])->name('admin.consultorios.destroy')->middleware('auth'); 

//RUTAS ADMIN-DOCTORES
Route::get('/admin/doctores', [DoctorController::class, 'index'])->name('admin.doctores.index')->middleware('auth');
Route::get('/admin/doctores/create', [DoctorController::class, 'create'])->name('admin.doctores.create')->middleware('auth'); 
Route::POST('/admin/doctores/create', [DoctorController::class, 'store'])->name('admin.doctores.store')->middleware('auth');
Route::get('/admin/doctores/{id}', [DoctorController::class, 'show'])->name('admin.doctores.show')->middleware('auth');    
Route::get('/admin/doctores/{id}/edit', [DoctorController::class, 'edit'])->name('admin.doctores.edit')->middleware('auth');    
Route::put('/admin/doctores/{id}', [DoctorController::class, 'update'])->name('admin.doctores.update')->middleware('auth');    
Route::delete('/admin/doctores/{id}/delete', [DoctorController::class, 'destroy'])->name('admin.doctores.destroy')->middleware('auth'); 

//RUTAS ADMIN-Horarios
Route::get('/admin/horarios', [HorarioController::class, 'index'])->name('admin.horarios.index')->middleware('auth');
Route::get('/admin/horarios/create', [HorarioController::class, 'create'])->name('admin.horarios.create')->middleware('auth'); 
Route::POST('/admin/horarios/create', [HorarioController::class, 'store'])->name('admin.horarios.store')->middleware('auth');
Route::get('/admin/horarios/{id}', [HorarioController::class, 'show'])->name('admin.horarios.show')->middleware('auth');    
Route::get('/admin/horarios/{id}/edit', [HorarioController::class, 'edit'])->name('admin.horarios.edit')->middleware('auth');    
Route::put('/admin/horarios/{id}', [HorarioController::class, 'update'])->name('admin.horarios.update')->middleware('auth');    
Route::delete('/admin/horarios/{id}/delete', [HorarioController::class, 'destroy'])->name('admin.horarios.destroy')->middleware('auth'); 

//ajax
Route::get('/admin/horarios/consultorios/{id}', [HorarioController::class, 'cargar_consultorio'])->name('admin.horarios.cargar')->middleware('auth');





