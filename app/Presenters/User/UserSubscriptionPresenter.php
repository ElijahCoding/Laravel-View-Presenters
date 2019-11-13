<?php

namespace App\Presenters\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserSubscriptionPresenter
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function currentPlan()
    {
        return Str::title('monthly');
    }
}
