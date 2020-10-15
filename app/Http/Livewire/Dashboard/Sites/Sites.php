<?php

namespace App\Http\Livewire\Dashboard\Sites;

use App\Models\Site;
use Livewire\Component;

class Sites extends Component
{
    public function render()
    {
        return view('livewire.dashboard.sites.sites', [
            'sites' => Site::paginate(20)
        ]);
    }
}
