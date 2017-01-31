<?php 


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

Class Reminder extends Mailable{

	use Queueable, SerializesModels;

	public function __construct(){

	}

	public function build(){
		return $this->view('mail.reminder');
	}

}