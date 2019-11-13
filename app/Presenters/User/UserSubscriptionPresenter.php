<?php

namespace App\Presenters\User;

use App\Presenters\Presenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserSubscriptionPresenter extends Presenter
{
    public function currentPlan()
    {
        return Str::title('monthly');
    }
}
