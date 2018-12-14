<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**

     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

// -------------------------------------------------
// Validar el ingreso
// --------------------------------------------------


    public function showLogin()
   {
       // Ver si hay sesión activa
       if (Auth::check())
       {
           // Si tenemos sesión activa ir a la home
           return Redirect::to('home');
       }
       // Si no hay sesión activa mostramos el formulario
       return View::make('login');
   }

   public function postLogin()
   {
       // Obtenemos los datos del formulario
       $data = [
           'username' => Input::get('email'),
           'password' => Input::get('password')
       ];

       // Verificamos los datos
       if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para saber si queremos recordar la contraseña
       {
           // Si nuestros datos son correctos mostramos la página de inicio
           return Redirect::intended('home');
       }
       // Si los datos no son los correctos volvemos al login y mostramos un error
       return Redirect::back()->with('error_message', 'Invalid data')->withInput();
       // Cerramos la sesión
   }
   public function logOut()
   {
     Auth::logout();
     // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
     return Redirect::to('login')->with('error_message', 'Hasta pronto!');
   }

}
