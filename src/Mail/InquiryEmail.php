<?php

namespace Laraphant\Contactform\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
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
        return $this->from('naganandhini3012@gmail.com', 'Your Name')
                    ->subject($this->data['subject'])
                    ->to($this->data['email']) // Optional: Only if you want to set the recipient dynamically
                    ->view('contactform::emails.inquiryemail')
                    ->with('data', $this->data);
    }
}
