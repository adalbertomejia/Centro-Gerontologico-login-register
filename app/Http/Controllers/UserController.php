<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Medico;

class UserController extends Controller
{
    public function store(Request $request)
    {   
        //@dump($request->all());

        // Validación de los datos del formulario de registro
        $request->validate([
            'name' => 'required',
            'telefono' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'date_born' => 'required',
            'domicilio' => 'required',
            'ctutor' => 'required',
            'ttutor' => 'required|digits:10|unique:users',
        ]);

        

        // Crear un nuevo registro de usuario en la tabla users
        $user= User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'date_born' => $request->input('date_born'),

            'domicilio' => $request->input('domicilio'),
            'ctutor' => $request->input('ctutor'),
            'ttutor' => $request->input('ttutor'),

            'servicio1' => $request->input('servicio1'),
            'servicio2' => $request->input('servicio2'),
            'servicio3' => $request->input('servicio3'),
        ]);
        //dd($user);
        
        return redirect()->route('home'); // Redirecciona a la ruta home una vez registrado un usuario.
    }

    public function login(Request $request)
{   
    //Función de login de usuarios
    //@dump($request->all()); - Verificar insersión de registros
    
    $this->validate($request, [
        'telefono' => 'required',
    ]);

    $telefono = $request->input('telefono'); /**Valida que se requiera el campo de telefono para ingresar con el campo
    telefono**/
    
    $user = User::where('telefono', $telefono)->first(); // Busca si el número de teléfono coincide con la base de datos

    if ($user) {
        Auth::login($user);
        Log::info('Usuario autenticado con éxito.'); // Agregar un mensaje informativo
        return redirect()->route('otro');
    } else {
        return back()->with('error', 'Número de teléfono no encontrado.');
    }
}

public function crearMedico()
{   
    //Creación de usuario unico para medico
    $medico = new Medico;
    $medico->nombre = 'correo_medico@gmail.com';
    $medico->contrasena = bcrypt('qwerty12345'); // Se recomienda hashear la contraseña
    $medico->save();

    return 'Médico creado con éxito';
}

public function loginMedico(Request $request)
{
    //Función de ingreso para medicos
    //dd();
    $this->validate($request, [
        'nombre' => 'required|email', // Aunque se llama 'nombre', lo tratamos como un correo electrónico
        'contrasena' => 'required',
    ]);

    $correo = $request->input('nombre');
    $contrasena = $request->input('contrasena');

    $medico = Medico::where('nombre', $correo)->first();

    if ($medico && password_verify($contrasena, $medico->contrasena)) {
        Auth::login($medico);
        // Agregar un mensaje informativo si lo deseas
        return redirect()->route('otro'); // Rredirigir al vista nueva después de iniciar sesión.
    } else {
        return back()->with('error', 'Correo o contraseña incorrectos.');
    }
}

}
