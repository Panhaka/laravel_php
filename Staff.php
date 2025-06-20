<?php

class Staff extends Model
{
    protected $primaryKey = 'Staff_id';
    public $timestamps = false;

    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'staff_id', 'Staff_id');
    }
}
