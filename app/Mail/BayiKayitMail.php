<?php

namespace App\Mail;

use App\Models\Bayilik;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BayiKayitMail extends Mailable
{
    use Queueable, SerializesModels;
    public $bayilik;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bayilik $bayilik)
    {
        $this->bayilik= $bayilik;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(config('app.name'). ' - Bayi Kaydı ')
            ->view('mails.bayi_kayit');
    }
}
