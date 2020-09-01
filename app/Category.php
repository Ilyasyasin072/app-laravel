<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillabel = [
        'name',
        'description',
    ];

    // definition type data
    protected $casts = [
        'field' => 'boolean',
        'field' => 'float',
    ];

    protected $rules = [
        'name' => 'required|unique:categories',
        'descirption' => 'required',
    ];

    // validation atribute
    protected $validationAttributeNames = [
        'name' => 'Name Category',
        'description' => 'Name Category Description'
    ];

    // relational belongsTo , Hasone HasMany
    public function table() {
        return $this->belongsTo('model');
    }

    // Scope query in models
    public function scopeForDatatable($query) {
        return $query
            ->select([
               'id', 'name', 'description'
            ])
            ->take('10');
    }
    
    // Scope where condition
    public function scopeFindByColorCode($query, $color_code) {
        return $query
          ->where('color_code', $color_code)
          ->orderBy('id', 'desc');
    }

    public function scopeStandard($query) {
        return $query
          ->where('is_standard', '1')
          ->orderBy('id', 'asc');
      }

    public function scopeUpperName($query, $name) {
    return $query->whereRaw('(UPPER("name") = ? OR UPPER("nama2") = ?)', [
                                strtoupper($name),
                                strtoupper($name),
                            ]);
    }
}
