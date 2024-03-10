<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    // 1つの投稿は1人のユーザーに属する
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}

// 特定のカラムを昇順（ASC）または降順（DESC）で並び替え、その順番でデータを取得する
DB::table('posts')->orderBy('created_at', 'desc')->get();

