<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mensagem extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'mensagem', 'usuario_id', 'canal_id'];

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
