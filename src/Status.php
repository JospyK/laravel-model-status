<?php

namespace Spatie\ModelStatus;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Status extends Model
{
    protected $guarded = [];

    protected $table = 'statuses';

    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
