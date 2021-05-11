<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class report extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name= $this->data['name'];
        $email= $this->data['email'];
        $locations= $this->data['locations'];
        $image= $this->data['image'];
        $descriptions= $this->data['descriptions'];
       
        return $this->subject('User have send Report')
                 ->view('frontend.email', compact('name','email','locations','image','descriptions'))
                 ->attach($this->data['image']->getRealPath(), [
                     'as' => $this->data['image']->getClientOriginalName()
                  ]);
    }
}
