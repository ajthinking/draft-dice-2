<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the DiceThrows for the Player.
     */
    public function diceThrows()
    {
        return $this->hasMany(\App\DiceThrow::class);
    }

    /**
     * Get the Games for the Player.
     */
    public function games()
    {
        return $this->belongsToMany(\App\Game::class);
    }
}