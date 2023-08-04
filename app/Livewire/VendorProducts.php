<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class VendorProducts extends Component
{
    // #[Layout('layouts.main')] // set the layout to be main.blade.php not app.blade.php
    public function render()
    {
        // set the layout to be main.blade.php not app.blade.php

        return view('livewire.vendor-products');
    }
}
