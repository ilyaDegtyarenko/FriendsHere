<?php

namespace App\Models\Tools;

use Illuminate\Database\Eloquent\Model;

class BugReport extends Model
{
    /**
     * Guarded columns.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Time stamps switch.
     *
     * @var bool
     */
    public $timestamps = false;
}
