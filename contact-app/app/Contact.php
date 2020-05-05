<?php

namespace App;

use App\Scopes\FilterScope;
use App\Scopes\ContactFilterScope;
use App\Scopes\ContactSearchScope;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['first_name','last_name','phone','email','address'];
    public $filterColumns=['company_id'];
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function scopelatestFirst($query){
        return $query->orderBy('id','desc');
    }
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new ContactSearchScope);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

