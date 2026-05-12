<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

#[Fillable(['title', 'description', 'user_id'])]
#[Table(dateFormat: 'Y-m-d H:i')]
class Task extends Model
{
    use HasFactory;

}
