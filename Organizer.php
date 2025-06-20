<?php

class Organizer extends Model
{
    protected $primaryKey = 'Organizer_id';
    public $timestamps = false;

    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'organizer_id', 'Organizer_id');
    }
}
