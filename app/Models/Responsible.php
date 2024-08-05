<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Responsible extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function event_services(): HasMany
  {
    return $this->hasMany(Event_service::class);
  }

  public function guests(): HasMany
  {
    return $this->hasMany(Guest::class);
  }

}
