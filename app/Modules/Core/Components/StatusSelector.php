<?php

namespace App\Modules\Core\Components;

use Illuminate\View\Component;

class StatusSelector extends Component
{
    public function render()
    {
        $statusList = []; // Load status list here
        return view('status.status-selector', compact('statusList'));
    }
}
