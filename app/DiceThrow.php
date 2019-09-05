<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiceThrow extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'player_id'
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
     * Get the Player for the DiceThrow.
     */
    public function player()
    {
        return $this->belongsTo(\App\Player::class);
    }

    /**
     * Get the Game for the DiceThrow.
     */
    public function game()
    {
        return $this->belongsTo(\App\Game::class);
    }
}