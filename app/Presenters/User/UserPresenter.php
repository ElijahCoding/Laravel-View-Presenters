<?php

namespace App\Presenters\User;

use App\Presenters\Presenter;
use Illuminate\Database\Eloquent\Model;

class UserPresenter extends Presenter
{
    public function fullName()
    {
        return trim($this->model->first_name . ' ' . $this->model->last_name);
    }
}

