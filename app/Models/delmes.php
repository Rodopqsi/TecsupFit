<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class delmes extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'marca',
        'descripcion',
        'precio_original',
        'precio_oferta',
        'imagen',
        'stock',
        'categoria',
        'activo',
        'destacado'
    ];

    protected $casts = [
        'precio_original' => 'decimal:2',
        'precio_oferta' => 'decimal:2',
        'activo' => 'boolean',
        'destacado' => 'boolean',
    ];

    /**
     * Obtener el porcentaje de stock para la barra visual
     */
    public function getPorcentajeStockAttribute()
    {
        $maxStock = 100; // Definir stock máximo para el cálculo
        return min(($this->stock / $maxStock) * 100, 100);
    }

    /**
     * Scope para productos activos
     */
    public function scopeActivo($query)
    {
        return $query->where('activo', true);
    }

    /**
     * Scope para productos destacados
     */
    public function scopeDestacado($query)
    {
        return $query->where('destacado', true);
    }

    /**
     * Scope para filtrar por categoría
     */
    public function scopeCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

    /**
     * Obtener productos por categoría
     */
    public static function getProductosPorCategoria()
    {
        return [
            'keratinas' => self::activo()->categoria('keratinas')->destacado()->get(),
            'proteinas' => self::activo()->categoria('proteinas')->destacado()->get(),
            'ganadores_peso' => self::activo()->categoria('ganadores_peso')->destacado()->get(),
            'quemadores_grasa' => self::activo()->categoria('quemadores_grasa')->destacado()->get(),
            'barras_energeticas' => self::activo()->categoria('barras_energeticas')->destacado()->get(),
            'vitaminas_otros' => self::activo()->categoria('vitaminas_otros')->destacado()->get(),
        ];
    }

    /**
     * Obtener nombre de categoría formateado
     */
    public function getCategoriaFormateadaAttribute()
    {
        $categorias = [
            'keratinas' => 'KERATINAS',
            'proteinas' => 'PROTEÍNAS',
            'ganadores_peso' => 'GANADORES DE PESO',
            'quemadores_grasa' => 'QUEMADORES DE GRASA',
            'barras_energeticas' => 'BARRAS ENERGÉTICAS',
            'vitaminas_otros' => 'VITAMINAS Y OTROS'
        ];

        return $categorias[$this->categoria] ?? $this->categoria;
    }
}
