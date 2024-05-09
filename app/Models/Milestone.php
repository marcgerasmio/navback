<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'milestone';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'milestone_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'team_id',
        // 'milestone_id',
        // 'topic_id',
        // 'submission_link',
        // 'status',
    ]; 
}