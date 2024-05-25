<?php


namespace Model;


class Cita extends ActiveRecord
{
    protected static $tabla = 'cita';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuario_id'];

    public $id;
    public $fecha;
    public $hora;
    public $usuario_id;

    public function __construct( $args = [] )
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? null;
        $this->hora = $args['hora'] ?? null;
        $this->usuario_id = $args['usuario_id'] ?? null;
    }   // Here End Construct
}   // Here End Class Cita