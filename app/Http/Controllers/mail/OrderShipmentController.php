<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use App\Mail\mail\Order;
use App\Mail\mail\OrderShipped;
use App\Mail\NovaSerie;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\Object_;

class OrderShipmentController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param Request $request
     * @return string
     * return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$order = Order::findOrFail($request->order_id);
        $serie = new Serie();

        $mail = new NovaSerie(
            'Arrow',
            '20',
            '3'

        );

        $mail->subject = "Nome test";

        $user = (object)[
            'email' => 'leo.hamp@teste.com',
            'nome' => 'Leonardo'
        ];

        Mail::to($user)->send($mail);

        return 'Email Enviado!';
    }
}
