<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'competition';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'competition_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'organization_host',
    'competition_name',
    'theme',
    'competition_description',
    'requirements',
    'registration_link',
    'venue',
    'date',
    'competition_mode',
    'prize_details',
    'date_submission',
    'image_path',

    ];
}
