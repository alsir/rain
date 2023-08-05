<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable =[
            'ad_1_825' ,
            'heading_1' ,
            'sub_heading_1',
            'description_1',
            'ad_2_825' ,
            'heading_2',
            'sub_heading_2' ,
            'description_2' ,
            'ad_3_825' ,
            'heading_3' ,
            'sub_heading_3',
            'description_3' ,

    ];

}
