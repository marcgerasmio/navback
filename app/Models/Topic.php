<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'topic';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'topic_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'milestone_id',
        'topic_name',
        // 'submission_link',
        // 'status',
    ]; 
}