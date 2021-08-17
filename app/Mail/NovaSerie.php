<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovaSerie extends Mailable
{
    use Queueable, SerializesModels;

    private $nome;
    private $qtd_temporadas;
    private $ep_por_temporada;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($serie)
    {
        $this->nome = $serie->nome;
        $this->qtd_temporadas = $serie->qtd_temporadas;
        $this->ep_por_temporada = $serie->ep_por_temporada;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.serie.nova-serie')
            ->with('nome', $this->nome)
            ->with('qtd_temporadas', $this->qtd_temporadas)
            ->with('ep_por_temporada', $this->ep_por_temporada);
    }
}
