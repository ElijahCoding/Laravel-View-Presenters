<?php

namespace App\Presenters\User;

use Illuminate\Database\Eloquent\Model;

class UserPresenter
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function fullName()
    {
        return trim($this->model->first_name . ' ' . $this->model->last_name);
    }
}

