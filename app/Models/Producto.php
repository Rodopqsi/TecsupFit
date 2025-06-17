<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'precio_nuevo', 'precio_antes', 'imagen', 
        'descripcion', 'categoria_id', 'stock_id', 'marca_id', 
        'es_delmes', 'ventas_mes'
    ];

    protected $casts = [
        'precio_nuevo' => 'decimal:2',
        'precio_antes' => 'decimal:2',
        'es_delmes' => 'boolean',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('nombre', 'like', "%{$search}%")
                ->orWhereHas('categoria', function($cat) use ($search) {
                    $cat->where('nombre', 'like', "%{$search}%");
                })
                ->orWhereHas('marca', function($marca) use ($search) {
                    $marca->where('nombre', 'like', "%{$search}%");
                });
        });
    }

    public function scopeByCategoria($query, $categoriaId)
    {
        return $query->where('categoria_id', $categoriaId);
    }

    public function scopeByMarca($query, $marcaId)
    {
        return $query->where('marca_id', $marcaId);
    }

    public function scopeByPrecio($query, $min, $max)
    {
        return $query->whereBetween('precio_nuevo', [$min, $max]);
    }

    public function scopeDelMes($query)
    {
        return $query->where('es_delmes', true);
    }

    public function scopeTopVentas($query)
    {
        return $query->orderBy('ventas_mes', 'desc');
    }
}