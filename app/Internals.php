<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Internals extends Model
{
    protected $table = 'internals';
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'id',
        'dts',
        'in_route_id',
        'status',
        'department',
        'office',
        'div_unit',
        'personnel',
        'doc_class',
        'doc_type',
        'title',
        'subject',
        'mode_of_trans',
        's_profile',
        's_name',
        's_address',
        's_email',
        's_contact',
        'file_title',
        'filename',
        'received_by',
        'received_by_div_unit',
        'comment',
        'date_received',
        'time_received',
        'created_by',
        'created_by_user_id',
        'created_by_department',
        'created_by_office',
        'created_by_div_unit',
        'modified_by',
        'modified_by_div_unit',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('external_created_user', function(Builder $builder) {
    //         if (auth()->check()) {
    //             return $builder->where('created_by_user_id', auth()->id());
    //         }
    //     });
    // }

    //has many in route table
    public function inRoute()
    {
        return $this->hasMany(InRoute::class);
    }
}
