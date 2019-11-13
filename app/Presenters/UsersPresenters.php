<?php

namespace App\Presenters;

use Illuminate\Support\Arr;

trait UsersPresenters
{
    public function presenter($type = 'default')
    {
        if (Arr::has($this->presenters, $type)) {
            return new $this->presenters[$type]($this);
        }

        throw new \Exception('Presenter not found.');
    }
}
