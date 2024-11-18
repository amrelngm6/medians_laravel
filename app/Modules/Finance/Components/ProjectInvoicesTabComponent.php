<?php

namespace App\Modules\Finance\Components;

use Illuminate\View\Component;

class ProjectInvoicesTabComponent extends Component
{
    public function render()
    {
        return '
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="?tab=invoices">
                            Invoices </a>
                    </li>
                    ';
    }
}
