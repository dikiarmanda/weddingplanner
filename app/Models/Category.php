<?php

namespace App\Models;

use App\Models\Event_service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function event_services(): HasMany
  {
    return $this->hasMany(Event_service::class);
  }
}
