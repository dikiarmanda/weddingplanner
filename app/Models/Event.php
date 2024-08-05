<?php

namespace App\Models;

use App\Models\Event_service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function Event_service(): HasMany
  {
    return $this->hasMany(Event_service::class);
  }
}
