<?php

namespace App\Livewire;

use Livewire\Component;

class Hubungi extends Component
{
    public $nama;
    public $email;
    public $pesan;

    protected $rules = [
        'nama'  => 'required|min:3',
        'email' => 'required|email',
        'pesan' => 'required|min:10',
    ];

    public function kirim()
    {
        $this->validate();
        session()->flash('success', 'Pesan berhasil dikirim');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.hubungi');
    }
}
