<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mensagem;
use App\Models\Noticia;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Canal extends Model
{
    use HasFactory;

    public function mensagens() : HasMany {
        return $this->hasMany(Mensagem::class)->orderBy("id", 'DESC');
    }
    
    public function noticias() : HasMany {
        return $this->hasMany(Noticia::class)->orderBy("id", 'DESC');
    }
}
