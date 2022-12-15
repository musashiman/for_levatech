<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getOrderBy(int $count=10)
    {
        return $this->orderBy("updated_at","DESC")->limit($count)->get();
    }
}
