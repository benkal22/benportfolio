<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $sujet, $message = "";

    public function submit () {
        // ....
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
