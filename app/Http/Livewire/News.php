<?php

namespace App\Http\Livewire;

use Livewire\Component;

class News extends Component
{
    public $news_amount = 6;

    public function render()
    {
        $news = \App\Models\News::take($this->news_amount)->orderBy('data', 'desc')->skip(1)->get();

        return view('livewire.news', compact('news'));
    }

    public function load()
    {
        $this->news_amount += 6;
    }
}
