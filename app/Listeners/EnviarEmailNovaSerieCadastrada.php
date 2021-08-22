<?php

namespace App\Listeners;

use App\Events\NovaSerie;
use App\Mail\NovaSerie as NovaSerieMail;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnviarEmailNovaSerieCadastrada
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NovaSerie  $event
     * @return void
     */
    public function handle(NovaSerie $event)
    {
        $users = User::all();

        foreach ($users as $ind => $user){
            $multiplicador = ($ind+1) * 5;
            $email = new NovaSerieMail($event->serie);
            $email->subject = "Nova série criada!";

            $when = now()->addSecond($multiplicador);
            Mail::to($user)->later($when, $email);

            //Mail::to($user)->queue($email);
            //sleep(5);
        }


        //$email = new NovaSerieMail($serie);

        //$email->subject = "Nova série criada!";

        //Mail::to($request->user())->send($email);
    }
}
