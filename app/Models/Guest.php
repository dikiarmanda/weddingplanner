<?php

namespace App\Models;

use App\Models\Invitation;
use App\Models\Responsible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function responsible(): BelongsTo
  {
    return $this->belongsTo(Responsible::class);
  }

  public function invitation(): BelongsTo
  {
    return $this->belongsTo(Invitation::class);
  }
}
