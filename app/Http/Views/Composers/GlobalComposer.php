<?php

namespace sicoVars;

use SicoHelpers\Helpers;
use Illuminate\View\View;

class GlobalComposer
{
    public function compose(View $view)
    {
        $version=Helpers::version();
        // Puis, ajoutez la variable à la vue
        $view->with('versions', $version);
    }
}
