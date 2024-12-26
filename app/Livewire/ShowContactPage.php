<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required'
    ];

    public function submit(){
        $this->validate();

        $mailData = [
            'subject' => 'You have received a contact email',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('olumideshode@gmail.com')->send(new ContactEmail($mailData));
        session()->flash('success', 'Thanks for your email. We will be in touch soon.');
        $this->redirect('/contact');
    }
    
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}