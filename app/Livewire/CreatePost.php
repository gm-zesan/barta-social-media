<?php
namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $user;
    public $content ='';
    public $picture;
    

    protected $rules = [
        'content' => 'required|string|max:255',
        'picture' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $validate = $this->validate();
        if ($this->picture) {
            $validate['picture'] = $this->picture->store('posts', 'public');
        }
        $post = Post::create([
            'content' => $validate['content'],
            'picture' => $validate['picture'] ?? null,
            'user_id' => Auth::id(),
        ]);
        $this->reset(['content', 'picture']);
        $this->content = '';

        session()->flash('success', 'Post created successfully');
        $this->dispatch('post-created', $post);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
