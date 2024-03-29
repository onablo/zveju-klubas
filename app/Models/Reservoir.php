<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservoir extends Model
{
    use HasFactory;

    public function reservoirMembers()
    {
        return $this->dependsTo('App\Models\Member', 'reservoir_id', 'id');
    }
}
