<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }

    protected $fillable = [
        'user_id',
        'shop_id'
    ];

    public static function favorite($user_id, $shop_id)
    {
        $param = [
            "user_id" => $user_id,
            "shop_id" => $shop_id
        ];
        $favorite = Favorite::create($param);

        return $favorite;
    }
}
