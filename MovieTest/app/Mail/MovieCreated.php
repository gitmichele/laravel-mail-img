<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MovieCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $movie;

    public function __construct($movie)
    {
        $this -> movie = $movie;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.movie-create');
    }
}
