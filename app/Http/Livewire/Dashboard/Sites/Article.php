<?php

namespace App\Http\Livewire\Dashboard\Sites;

use App\Models\Article as Articles;
use Livewire\Component;

class Article extends Component
{
    public function render()
    {
        return view('livewire.dashboard.sites.article', [
            'articles' => Articles::paginate(30)
        ]);
    }
}
