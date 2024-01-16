<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Livewire\Forms\PostForm;

class EditPost extends Component
{
    public PostForm $form;

    public bool $success = false;

    public function mount(Post $post): void
    {
        $this->form->setPost($post);
    }

    public function update(): void
    {
        $this->validate();

        $this->form->update();

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}