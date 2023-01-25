<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    protected $fillable = [
        'bl_number',
        'supplier_name',
        'container_no',
        'c_size',
        'seal_no',
        'receiver_name',
        'vessel_name',
        'voyage',
        'place_receipt',
        'place_loading',
        'port_discharge',
        'final_destination',
        'comidity',
        'mode',
        'gross_weight',
        'remarks',
        'etd',
        'eta',
        'shipped_board',
        'bl_type',
        'softDeletes',
        'issue_date',
        'location',
        'status',
    ];
    protected $table = 'containers';
}
