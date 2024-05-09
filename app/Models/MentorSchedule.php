<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorSchedule extends Model
{
  
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mentor_schedule';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'mentorschedule_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mentor_id',
        'time',
        'date',
    ]; 
}
