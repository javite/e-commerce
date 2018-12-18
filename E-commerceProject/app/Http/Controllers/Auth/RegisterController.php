<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Resources\view\auth\register;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

          return Validator::make($data, [
            'usuario' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'domicilio' => 'required|string|min:3|max:100',
            'sexo' => 'required|in:m,f',
            'foto' => 'required|file|image'
        ],
      [
        'required' => 'Debe completar el campo :attribute',
        'string'=> 'El :attribute no debe contener numeros',
        'max'=> 'Supera el maximo de caracteres',
        'confirmed' => 'Cuidado! La confirmación no coincide con la contraseña ingresada',
        'email'=>'El campo :attribute no cumple con el formato de mail',
        'min' => 'El campo :attribute es muy corto',
        'image'=> 'Solo archivos tipo jpeg, png, bmp, gif, o svg menores a 2Mb'
      ]);
}
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $rutaAlmacenado = $data['foto']->store('public/imagenes');
      $nombreArchivo = basename($rutaAlmacenado);

        return User::create([
            'name' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'domicilio' => $data['domicilio'],
            'sexo' => $data['sexo'],
            'foto' => $nombreArchivo
        ]);
    }
}
