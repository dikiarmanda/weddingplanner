<?php

namespace App\Models;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invitation extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function guest(): HasMany
  {
    return $this->hasMany(Guest::class);
  }
}
