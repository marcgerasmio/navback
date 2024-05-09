<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teams';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'team_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_name',
        'logo_path',
        'product_details',
        'team_ceo',
        'tbi_id'
    ]; 
}
