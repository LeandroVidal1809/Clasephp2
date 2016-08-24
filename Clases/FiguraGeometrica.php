<?php
	/**
	* 
	*/
	 class FiguraGeometrica
	{
		protected $_color;

		function __construct()
		{
			$_color='';
		}

	public function getColorDireccion()
    {
        return $this->_direccion;
    }
 
    public function setColor($color)
    {
        $this->_color = $color;
    }

    public abstract function Dibujar();

    protected abstract function calcularDatos();

	}


?>