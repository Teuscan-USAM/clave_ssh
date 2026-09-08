<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnidadSalud extends Model
{
    protected $table = 'unidades_salud';

    public $timestamps = false;

    public function tipoEstablecimiento(): BelongsTo
    {
        return $this->belongsTo(TipoEstablecimiento::class, 'id_tipo_establecimiento');
    }
}
