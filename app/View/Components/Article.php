<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $title;
    public $body;
    public $author;
    public $username;
    public $slug;
    public $createdAt;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $body, $author, $username, $slug, $createdAt)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->username = $username;
        $this->slug = $slug;
        $this->createdAt = $createdAt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }

    public function excerpt($length = 100)
    {
        return substr($this->body, 0, $length) . '...';
    }
}
