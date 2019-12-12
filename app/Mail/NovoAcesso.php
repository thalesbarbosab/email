<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoAcesso extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NovoAcesso')->with(
            [
            'nome' => $this->user->name,
            'email' => $this->user->email,
            'datahora' => now()->setTimezone('America/Sao_Paulo')->format('d-m-Y H:i:s')
            ]
        );
        //comando para anexar arquivo no email.
        //->attach(public_path() . '/arquivos/arquivo.pdf');
    }
}
