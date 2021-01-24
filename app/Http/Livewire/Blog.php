<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\CommonMarkConverter;

class Blog extends Component
{
    public $articles;
    public $article_list;

    public function mount()
    {
        $this->articles = Storage::files('posts');

        foreach ($this->articles as $article) {
            if (pathinfo($article)['extension'] === 'md') {
                $article_file = pathinfo($article)['filename'];

                $this->article_list[] = [
                    'link' => $article_file,
                    'title' => Str::ucfirst($this->getTitle($article_file)),
                    'date' => $this->getDate($article_file),
                ];
            }
        }
    }

    /**
     * Get formatted title from filename
     */
    private function getTitle($filename)
    {
        return str_replace('-', ' ', substr($filename, 11));
    }

    /**
     * Get formatted date from filename
     */
    private function getDate($filename)
    {
        return substr($filename, 0, 10);
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
