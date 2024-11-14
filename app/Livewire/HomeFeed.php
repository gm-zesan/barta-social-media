<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class HomeFeed extends Component
{
    public $user;
    public $posts;
    public $page = 1;
    public $hasMorePages = true;

    public function mount($user)
    {
        $this->user = $user;
        $this->posts = collect();
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $newPosts = Post::with('user')->latest()->paginate(10, ['*'], 'page', $this->page);
        $this->posts = $this->posts->concat($newPosts->items());
        $this->hasMorePages = $newPosts->hasMorePages();
        $this->page++;
    }

    public function render()
    {
        return view('livewire.home-feed');
    }
}