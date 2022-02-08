<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{   
    use AutoNumberTrait;

    protected $table = 'items';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_barang' => [
                'format' => function() {
                 return 'JNT-IDN/'.date('Ymd').'/?';
                },
             'length' => 5
             ]
        ];
    }

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
}

