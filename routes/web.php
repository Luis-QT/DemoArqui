<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return redirect('/home/index');
    //return view('welcome');
});

Auth::routes();

Route::get('login', function(){
	return view('auth.login');
});


Route::namespace('Auth')->group(function(){
	Route::post('login', 'LoginController@login')->name('login');
	Route::post('logout', 'LoginController@logout')->name('logout');
});

//Rutas para el HomePage
Route::namespace('Home')->group(function(){
	Route::prefix('home')->group(function(){
		Route::get('/', function(){
			return redirect('home/index');
		});
		Route::get('index', 'HomeController@index');

	});
});

Route::namespace('Admin')->group(function(){
	Route::prefix('admin')->group(function(){
		Route::get('index', function(){
		  return view('admin.home');
		});
		Route::get('schools','SchoolController@index');
		Route::post('schools/store','SchoolController@store');
		Route::get('schools/{id}/edit', 'SchoolController@edit');
		Route::post('schools/update', 'SchoolController@update');
		Route::post('schools/{id}/destroyValidation', 'SchoolController@destroyValidation');
		Route::post('schools/{id}/destroy', 'SchoolController@destroy');

		Route::get('faculties','FacultyController@index');
		Route::post('faculties/store','FacultyController@store');
		Route::get('faculties/{id}/edit', 'FacultyController@edit');
		Route::post('faculties/update', 'FacultyController@update');
		Route::post('faculties/{id}/destroyValidation', 'FacultyController@destroyValidation');
		Route::post('faculties/{id}/destroy', 'FacultyController@destroy');

		Route::get('theses','ThesisController@index');
		Route::post('theses/search','ThesisController@search');
		Route::post('theses/store','ThesisController@store');
		Route::post('theses/clasificationValidation','ThesisController@clasificationValidation');
		Route::post('theses/incomeNumberValidation','ThesisController@incomeNumberValidation');
		Route::post('theses/barcodeValidation','ThesisController@barcodeValidation');
		Route::get('theses/{id}/information','ThesisController@information');
		Route::post('theses/{id}/edit','ThesisController@edit');
		Route::post('theses/update','ThesisController@update');
		Route::post('theses/validateDeleteCopy','ThesisController@validateDeleteCopy');
		Route::post('theses/{id}/destroyValidation', 'ThesisController@destroyValidation');
		Route::post('theses/{id}/destroy', 'ThesisController@destroy');
		Route::get('theses/exportPDF', 'ThesisController@exportPDF');
		Route::get('theses/viewPDF', 'ThesisController@viewPDF');
		Route::get('theses/exportExcel', 'ThesisController@exportExcel');

		//Rutas para Revistas
		Route::get('magazines/modalNew/{id}', 'MagazineController@modalNew');
		Route::get('magazines/modalSee/{id}', 'MagazineController@modalSee');
		Route::post('magazines/{id}/destroy', 'MagazineController@destroy');
		Route::post('magazines/update/{id}','MagazineController@update');
		Route::resource('magazines','MagazineController');




		//Rutas para autores
		Route::post('authors/update/{id}','AuthorController@update');
		Route::get('authors/{id}/edit/{parametro}/{a?}','AuthorController@edit');
		Route::post('authors/{id}/destroy', 'AuthorController@destroy');
		Route::post('authors/{id}/canDestroy', 'AuthorController@canDestroy');
		Route::get('authors/export', 'AuthorController@pedirExportacion');
		Route::resource('authors','AuthorController');


		//Ruta para editoriales
		Route::post('editorials/update/{id}','EditorialController@update');
		Route::get('editorials/{id}/edit/{parametro}/{a?}','EditorialController@edit');
		Route::post('editorials/{id}/destroy', 'EditorialController@destroy');
		Route::post('editorials/{id}/canDestroy', 'EditorialController@canDestroy');
		Route::get('editorials/export', 'EditorialController@pedirExportacion');
		Route::resource('editorials','EditorialController');

		//Ruta para Castigos
		Route::get('punishments/{idUsuario}','PunishmentController@infoCastigo');
		Route::post('punishments/deactivate/{idCastigo}','PunishmentController@pedirDesactivacionCastigo');
		Route::post('punishments/delete/{idCastigo}','PunishmentController@pedirEliminacionCastigo');
		Route::get('punishments/export/{idUsuario}','PunishmentController@pedirExportacion');


		//Ruta para Stands
		Route::get('stands','StandController@index');
		Route::post('stands/store','StandController@store');
		Route::get('stands/{id}/edit', 'StandController@edit');
		Route::post('stands/update', 'StandController@update');
		Route::post('stands/{id}/destroyValidation', 'StandController@destroyValidation');
		Route::post('stands/{id}/destroy', 'StandController@destroy');
		//Ruta para Usuarios
		Route::get('users','UserController@index');
		Route::post('users/store','UserController@store');
		Route::post('users/uploadImg','UserController@uploadImg');
		Route::post('users/codeValidation','UserController@codeValidation');
		Route::post('users/instEmailValidation','UserController@instEmailValidation');
		Route::post('users/dniValidation','UserController@dniValidation');
		Route::get('users/{id}/information','UserController@information');

		Route::get('users/{id}/edit', 'UserController@edit');
		Route::post('users/update', 'UserController@update');
		Route::post('users/{id}/destroyValidation', 'UserController@destroyValidation');
		Route::post('users/{id}/destroy', 'UserController@destroy');


		Route::get('account','AccountController@index');
		Route::post('account/updatePassword','AccountController@updatePassword');



		// // RUTA PARA LOS PRESTAMOS
		Route::post('prestamos/rechazar', 'LoanController@rechazar')->name('prestamos.rechazar');
		Route::post('prestamos/prestar', 'LoanController@prestar')->name('prestamos.prestar');
		Route::post('prestamos/devolver', 'LoanController@devolver')->name('prestamos.devolver');
		Route::post('prestamos/actualizar', 'LoanController@actualizar')->name('prestamos.actualizar');
		Route::get('prestamos/actualizarPedidos','LoanController@actualizarPedidos');
		Route::get('prestamos/actualizarPrestamos','LoanController@actualizarPrestamos');
		Route::get('prestamos/actualizarHistorial','LoanController@actualizarHistorial');
		Route::get('prestamos/historial','LoanController@historial');
		Route::post('prestamos/sePuedeEliminarFeriado','LoanController@sePuedeEliminarFeriado');
		Route::get('prestamos/{user}/informacionUsuario','LoanController@informacionUsuario');
		Route::get('prestamos/{book}/informacionLibro','LoanController@informacionLibro');
		Route::get('prestamos/{book}/informacionTesis','LoanController@informacionTesis');
		Route::get('prestamos/{book}/informacionRevistas','LoanController@informacionRevistas');
		Route::get('prestamos/{book}/informacionCompendios','LoanController@informacionCompendios');
		Route::get('prestamos', 'LoanController@index');

	});
});

Route::namespace('User')->group(function(){
	Route::prefix('user')->group(function(){
		Route::get('index', function(){
		  return view('user.home');
		});
		 
		Route::get('theses','ThesisController@index');
		Route::post('theses/search','ThesisController@search');
		Route::get('theses/{id}/information','ThesisController@information');
		Route::post('theses/{id}/order','ThesisController@order');

		Route::get('books','BookController@index');
		Route::post('books/search','BookController@search');
		Route::get('books/{id}/information','BookController@information');
		Route::post('books/{id}/order','BookController@order');

		Route::get('configurations','ConfigurationController@index');
		Route::post('configurations/updatePassword','ConfigurationController@updatePassword');
		Route::post('configurations/highlightSearch','ConfigurationController@highlightSearch');


	});
});
