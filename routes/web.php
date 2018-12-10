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

Route::singularResourceParameters();

// Rotas públicas
	Route::get('/', function () {
	    return view('home');
	});


	Route::get('/teste', function () {
	    return view('teste');
	});


	Route::get('/equipe', function () {
	    return view('equipe');
	});

	Route::get('/projetos', function () {
	    return view('projetos');
	});	

	Route::get('/cursos', function () {
	    return view('cursos');
	});

	Route::get('/galeria', function () {
	    return view('galeria');
	});

	Route::get('/contato', function () {
	    return view('contato');
	});	

	Route::get('/pseletivo', function () {
	    return view('pseletivo');
	});

	Route::get('/userarea', function () {
	    return view('userarea');
	});

	Route::get('/home', 'HomeController@index')->name('home');

	Route::model('evento', 'App\Evento');
	Route::resource('eventos', 'EventoController');


// Rotas relacionadas à autenticação usuário normal
	// Login
	Route::get('/admin/entrar', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/admin/entrar', 'Auth\LoginController@login');
	
	// Logout
	Route::post('/admin/sair', 'Auth\LoginController@logout')->name('logout');

	// Registration
	Route::get('/admin/registrar', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('/admin/registrar', 'Auth\RegisterController@register');

	// Redifinição de senha
	Route::get('/admin/senha/redefinir', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('/admin/senha/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('/admin/senha/redefinir/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('/admin/senha/redefinir', 'Auth\ResetPasswordController@reset');

//Rotas para dashboard

	//home
	Route::get('/admin/home', function () {
	    return view('dashboard/home_dash');
	});

	//home
	Route::get('/admin', function () {
	    return view('dashboard/home_dash');
	});



// Setores e membros
	Route::resource('admin/setores', 'SetorController');
	Route::resource('admin/membros', 'MembroController');

//AREA DOS CURSOS

	//cursos
	Route::get('/admin/cursos_home', function () {
	    return view('dashboard/cursos_db_home');
	});

	//cursos cadastrar
	Route::get('/admin/cursos_cadastro', function () {
	    return view('dashboard/cursos_db_novo');
	});

	//cursos historico
	Route::get('/admin/cursos_historico', function () {
	    return view('dashboard/cursos_db_fechados');
	});

	//cursos em andamento
	Route::get('/admin/cursos_abertos', function () {
	    return view('dashboard/cursos_db_abertos');
	});

	//lista de presenca
	Route::get('/admin/cursos_lista', function () {
	    return view('dashboard/cursos_db_presenca');
	});

//AREA DE PROJETOS
	//projetos_home
	//projetos
	Route::get('/admin/projetos_home', function () {
	    return view('dashboard/projetos_db_home');
	});

	//projetos cadastrar
	Route::get('/admin/projetos_cadastro', function () {
	    return view('dashboard/projetos_db_novo');
	});

//AREA DE GALERIA
	//galeria_home
	Route::get('/admin/galeria_home', function () {
	    return view('dashboard/galeria_db_home');
	});	

	//galeria_cadastrar
	Route::get('/admin/galeria_cadastro', function () {
	    return view('dashboard/galeria_db_novo');
	});	

	//galeria_cadastrar
	Route::get('/admin/galeria_editar', function () {
	    return view('dashboard/galeria_db_editar');
	});	

//AREA DE SLIDE
	Route::resource('admin/slides', 'SlideController');

//AREAD DE PROCESSO SELETIVO 
	Route::get('admin/processo_seletivo', 'ProcessoSeletivoController@edit')->name('processo.edit');

	Route::patch('admin/processo_seletivo/{processo_seletivo}', 'ProcessoSeletivoController@update')->name('processo.update');

//AREA DE USUARIO
	Route::get('/admin/adm_perfil', function () {
	    return view('dashboard/adm_perfil');
	});


