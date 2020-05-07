<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
class registerConfirmed extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */


    public function build()
    {
        return $this->to($this->user['email'],$this->user['name'])
                    ->bcc('another@another.com')
                    ->subject('Registrazione Nebula.com')
                    ->markdown('emails.orders.registered');
    }
}
