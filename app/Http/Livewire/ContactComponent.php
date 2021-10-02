<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
  public string $contact_name = "";
  public string $contact_email = "";
  public string $contact_number = "";
  public string $contact_subject = "";
  public string $contact_message = "";

    protected $rules = [
        'contact_name' => 'required',
        'contact_email' => 'required | email',
        'contact_number' => 'required | numeric',
        'contact_subject' => 'required',
        'contact_message' => 'required',
    ];

    public function addContact()
    {
        $this->validate();

        $contact = new Contact();
        $contact->contact_name = $this->contact_name;
        $contact->contact_email = $this->contact_email;
        $contact->contact_number = $this->contact_number;
        $contact->contact_subject = $this->contact_subject;
        $contact->contact_message = $this->contact_message;

        $contact->save();
        session()->flash('message', 'Thank you, Your message has been sent successfully! ');
        $this->reset();

    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.master');
    }
}
