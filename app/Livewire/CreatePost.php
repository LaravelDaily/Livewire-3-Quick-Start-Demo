<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;

    public function save(): void
    {
        $this->validate();

        $this->form->save();

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.create-post');
    }

}
