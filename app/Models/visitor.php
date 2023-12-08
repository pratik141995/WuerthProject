<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $fillable=['purpose_visit','visitor_name','company','email','cc_email','visit_date','start_time','end_time','meeting_room'];
}
