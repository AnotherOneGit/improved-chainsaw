<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getAvailableBonuses()
    {
        $bonus = json_decode(Bonus::where('amount', '!=', 0)->orWhere('amount', null)->get('id'));
        return array_rand(array_flip(array_column($bonus, 'id')));
    }

    public function decrementBonus($bonus_id)
    {
        return Bonus::where('id', $bonus_id)->decrement('amount');
    }
}
