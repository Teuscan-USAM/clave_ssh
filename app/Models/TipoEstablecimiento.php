<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoEstablecimiento extends Model
{
    protected $table = 'ctl_tipo_establecimiento';

    public $timestamps = false;

    public function unidadesSalud(): HasMany
    {
        return $this->hasMany(UnidadSalud::class, 'id_tipo_establecimiento');
    }
}
