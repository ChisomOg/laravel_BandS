<?php
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Product extends Model
    {
        use HasFactory;

        protected $table = 'product';
        protected $fillable =['user_id','name', 'phone_no','price', 'category', 'description', 'logo'];

        public function scopeFilter($query, array $filters) {
            if($filters['category'] ?? false) {
                $query->where('category', 'like', '%' . request('category') . '%');
            }

            if($filters['search'] ?? false) {
                $query->where('name', 'like', '%' . request('search') . '%')
                ->orwhere('description', 'like', '%' . request('search') . '%')
                ->orwhere('category', 'like', '%' . request('search') . '%');
            }
    }


    

    protected static function boot()
    {
        parent::boot();

        self::creating(function($model) {
            $model->user_id = auth()->id();
        });

    }

        //Relationship to user
        public function user() {
            return $this->belongsTo(User::class, 'user_id');
        }
    }