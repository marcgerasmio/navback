<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeedFunding extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seed_funding';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'funding_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
     
       'funding_agency',
       'grant_name',
       'budget_allocated',
       'funding_priorities',
       'funding_description',
       'requirements',
       'submission_link',
       'deadline',
    ];
}
