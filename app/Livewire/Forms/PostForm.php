<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    #[Validate('required|min:5')]
    public string $title = '';

    #[Validate('required|min:5')]
    public string $body = '';

    public function setPost(Post $post): void
    {
        $this->post = $post;

        $this->title = $post->title;

        $this->body = $post->body;
    }

    public function save(): void
    {
        Post::create($this->all());

        $this->reset('title', 'body');
    }

    public function update(): void
    {
        $this->post->update($this->all());
    }
}