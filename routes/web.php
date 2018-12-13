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

	Route::get('/cursos', 'EventoController@publico')->name('publico');

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

// AREA DE EQUIPE
	Route::resource('admin/setores', 'SetorController');
	Route::resource('admin/membros', 'MembroController');

//AREA DOS CURSOS

	Route::get('admin/cursos/lista_abertos/', 'EventoController@lista_abertos')->name('cursos.lista_abertos');

	Route::get('admin/cursos/lista_fechados/', 'EventoController@lista_fechados')->name('cursos.lista_fechados');

	Route::get('admin/cursos/lista_presenca/{id}', 'EventoController@lista_presenca')->name('cursos.lista_presenca');

	Route::get('admin/cursos/lista_fechados/{id}', 'EventoController@concluir')->name('cursos.concluir');

	Route::resource('admin/cursos', 'EventoController');

//AREA DE PROJETOS
	Route::resource('/admin/projetos', 'ProjetoController');

//AREA DE CONTEUDO
	Route::get('admin/conteudo', 'ConteudoController@index')->name('conteudo.index');

	Route::patch('admin/conteudo/quem_somos', 'ConteudoController@quem_somos')->name('conteudo.update.quem_somos');

	Route::patch('admin/conteudo/missao', 'ConteudoController@missao')->name('conteudo.update.missao');

	Route::patch('admin/conteudo/visao', 'ConteudoController@visao')->name('conteudo.update.visao');

	Route::patch('admin/conteudo/valores', 'ConteudoController@valores')->name('conteudo.update.valores');

//AREA DE SLIDE
	Route::resource('admin/slides', 'SlideController');

//AREA DE SERVIÇO
	Route::resource('admin/servicos', 'ServicoController');

//AREAD DE PROCESSO SELETIVO 
	Route::resource('admin/processo_seletivo', 'ProcessoSeletivoController');

	Route::get('/admin/processo_seletivo', 'ProcessoSeletivoController@edit')->name('processo.edit');

	Route::patch('/admin/processo_seletivo/{processo_seletivo}', 'ProcessoSeletivoController@update')->name('processo.update');

//AREA DE USUARIO
	Route::get('/admin/adm_perfil', function () {
	    return view('dashboard/adm_perfil');
	});

//AREA DE GALERIA
	Route::patch('/admin/galeria/{galeria}', 'GaleriaController@updatefotos')->name('galeria.updatefotos');
	Route::get('/admin/galeria/{galeria}/{foto}', 'GaleriaController@deletefoto')->name('galeria.deletefoto');

	Route::resource('admin/galeria', 'GaleriaController');

