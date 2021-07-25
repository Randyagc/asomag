<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        //  Las validaciones para un formulario, deben estar en el controlador y la vista
        //  Aquí está el mejor ejemplo, adicionalmente cuando se requiere personalizar
        //  mensajes de error, se puede hacer como está abajo mostrado con la etiqueta
        //  'name.required', que es el nombre del campo y la acción que se necesita
        //  personalizar
        $msg = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' =>  'Ingrese su nombre, es obligatorio',
            'email.email'   =>  'Debe poseer el formato de correo electrónico'
        ]);

        //  Una recomensación es mejor usar "queue", en lugar de "send", luego de la flecha
        // Mail::to('rgranda@consutoriaexpertaec.online')->queue(new MessageReceived($msg));

        //  Para enviar la información al browser, se puede hacer lo de la línea de abajo sin
        //  usar la definición "Mail::"
        //  return new MessageReceived($msg);

        return back()->with('status', 'Recibimos tu mensaje, responderemos en menos de 24 horas');
    }
}
