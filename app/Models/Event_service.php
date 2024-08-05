<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Category;
use App\Models\Responsible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event_service extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function event(): BelongsTo
  {
    return $this->belongsTo(Event::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function responsible(): BelongsTo
  {
    return $this->belongsTo(Responsible::class);
  }
}
