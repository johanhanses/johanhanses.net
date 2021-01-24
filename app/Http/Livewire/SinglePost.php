<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\CommonMarkConverter;

class SinglePost extends Component
{
    public $post;

    public function mount($slug)
    {
        if (!Storage::exists('posts/'.$slug.'.md')) {
            return redirect("/");
        }

        $this->post = Storage::get('posts/'.$slug.'.md');

        $converter = new CommonMarkConverter();
        $this->post = $converter->convertToHtml($this->post);
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
