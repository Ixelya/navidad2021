<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Mail;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed',  'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
            'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        /** 
         * Proceso para enviar el email de Bienvenida despues que el usuario ha sido registrado
         * correctamente en la BBDD
         */
        $data = array('name'=>$request->name);
        $toEmail = $request->email;

        Mail::send(['text'=>'mail'], $data, function($message) use ($toEmail) {
            $message->to($toEmail)->subject('Registro en Opipelis');
            $message->from('project2022fin@gmail.com','Antonio Sierra');
         });

         Mail::send(['text'=>'mail2'], $data, function($message) use ($toEmail) {
            $message->to("project2022fin@gmail.com")->subject('Registro en Opipelis');
            $message->from('noreply@noreply.com','Opipelis');
         });

         /**
          * El Usuario es autenticado.
          */

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Auth::login($user);
       
        // return redirect(RouteServiceProvider::HOME);
    }

}