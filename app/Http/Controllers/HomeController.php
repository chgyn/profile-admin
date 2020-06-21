<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class HomeController extends Controller
{
    //
    public function enviarMsg(Request $request)
    {
        $request->validate([
            'nome' =>  'required|max:191',
            'assunto' => 'required',
            'email' => 'required|email',
            'mensagem'  => 'required',
        ]);

        // ENVIAR EMAIL com assinatura.
        Mail::send('email.mensagem', ['nome' => $request->nome, 'assunto' => $request->assunto, 'mensagem' => $request->mensagem, 'email' => $request->email ], function($message) use ($request) {
            $message->from($request->email, $request->nome);
            $message->to('charlesegidio@gmail.com');
            $message->subject($request->assunto);
        });

        return response()->json(['status' => 'success'], 200);

    }
}
