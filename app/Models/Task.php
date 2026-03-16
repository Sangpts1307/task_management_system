<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // ─── Table ───────────────────────────────────────────────────────

    protected $table = 'tasks';

    // ─── Mass-assignable ─────────────────────────────────────────────

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date',
    ];

    // ─── Casts ───────────────────────────────────────────────────────

    protected $casts = [
        'due_date' => 'date',
    ];

    // ─── Enum constants ──────────────────────────────────────────────

    // Status values
    const STATUS_PENDING     = 'pending';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED   = 'completed';
    const STATUS_CANCELLED   = 'cancelled';

    public static function statuses(): array
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
        ];
    }

    // Priority values
    const PRIORITY_LOW    = 'low';
    const PRIORITY_MEDIUM = 'medium';
    const PRIORITY_HIGH   = 'high';

    public static function priorities(): array
    {
        return [
            self::PRIORITY_LOW,
            self::PRIORITY_MEDIUM,
            self::PRIORITY_HIGH,
        ];
    }

    // ─── Relationships ───────────────────────────────────────────────

    /**
     * Task thuộc về một user.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
