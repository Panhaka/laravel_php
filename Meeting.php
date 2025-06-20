<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $primaryKey = 'Meeting_id';

    protected $fillable = [
        'Meeting_name',
        'organizer_id',
        'staff_id',
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'organizer_id', 'Organizer_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'Staff_id');
    }
}
