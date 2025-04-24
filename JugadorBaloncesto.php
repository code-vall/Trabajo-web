<?php

// Clase 1: Niño
class Nino {
    public $nombre;
    public $edad;
    public $altura;
    public $colorRopa;
    public $energia;

    public function __construct($nombre, $edad, $altura, $colorRopa, $energia) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
        $this->colorRopa = $colorRopa;
        $this->energia = $energia;
    }

    public function saltar() {
        return "$this->nombre está saltando para encestar.";
    }

    public function correr() {
        return "$this->nombre corre rápidamente por la cancha.";
    }

    public function descansar() {
        return "$this->nombre está descansando.";
    }

    public function mostrarDatos() {
        return "Nombre: $this->nombre, Edad: $this->edad años, Altura: $this->altura m";
    }

    public function cambiarRopa($nuevoColor) {
        $this->colorRopa = $nuevoColor;
        return "$this->nombre se cambió la ropa a color $nuevoColor.";
    }
}

// Clase 2: Balon
class Balon {
    public $marca;
    public $color;
    public $tamano;
    public $estado;
    public $presion;

    public function __construct($marca, $color, $tamano, $estado, $presion) {
        $this->marca = $marca;
        $this->color = $color;
        $this->tamano = $tamano;
        $this->estado = $estado;
        $this->presion = $presion;
    }

    public function rebotar() {
        return "El balón $this->marca está rebotando.";
    }

    public function inflar($nuevaPresion) {
        $this->presion = $nuevaPresion;
        return "El balón fue inflado a $nuevaPresion PSI.";
    }

    public function cambiarEstado($nuevoEstado) {
        $this->estado = $nuevoEstado;
        return "El estado del balón ahora es $nuevoEstado.";
    }

    public function mostrarDetalles() {
        return "Balón de color $this->color, tamaño $this->tamano, presión $this->presion PSI.";
    }

    public function cambiarColor($nuevoColor) {
        $this->color = $nuevoColor;
        return "El balón ahora es de color $nuevoColor.";
    }
}

// Clase 3: Canasta
class Canasta {
    public $altura;
    public $colorAro;
    public $material;
    public $ubicacion;
    public $estado;

    public function __construct($altura, $colorAro, $material, $ubicacion, $estado) {
        $this->altura = $altura;
        $this->colorAro = $colorAro;
        $this->material = $material;
        $this->ubicacion = $ubicacion;
        $this->estado = $estado;
    }

    public function verificarEstado() {
        return "La canasta está en estado: $this->estado.";
    }

    public function cambiarUbicacion($nuevaUbicacion) {
        $this->ubicacion = $nuevaUbicacion;
        return "La canasta fue movida a $nuevaUbicacion.";
    }

    public function cambiarColorAro($nuevoColor) {
        $this->colorAro = $nuevoColor;
        return "El aro ahora es de color $nuevoColor.";
    }

    public function reparar() {
        $this->estado = "reparada";
        return "La canasta ha sido reparada.";
    }

    public function mostrarInformacion() {
        return "Canasta de $this->material en $this->ubicacion, altura: $this->altura m.";
    }
}

// Crear 1 objeto de cada clase
$nino1 = new Nino("Lucas", 6, 1.1, "Azul", "Alta");
$balon1 = new Balon("Nike", "Naranja", "Mediano", "Nuevo", 7.5);
$canasta1 = new Canasta(2.5, "Rojo", "Metal", "Patio", "Buen estado");

// Imprimir un método de cada objeto
echo $nino1->saltar();
echo "<br>";
echo $balon1->rebotar();
echo "<br>";
echo $canasta1->mostrarInformacion();

?>
