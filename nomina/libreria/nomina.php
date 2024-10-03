<?php
class Nomina {
    private $valorDia;
    private $diasTrabajados;
    private $edad;

    public function __construct($valorDia, $diasTrabajados, $edad) {
        $this->valorDia = $valorDia;
        $this->diasTrabajados = $diasTrabajados;
        $this->edad = $edad;
    }

    public function salario() {
        return $this->valorDia * $this->diasTrabajados;
    }

    public function salud() {
        return $this->salario() * 0.12;
    }

    public function pension() {
        return $this->salario() * 0.16;
    }

    public function arl() {
        return $this->salario() * 0.052;
    }

    public function subTrans() {
        $salarioPer = $this->salario();
        $salarioMinimo = 1300000;

        if ($salarioPer <= 2 * $salarioMinimo) {
            return 114000;
        } else {
            return 0;
        }
    }

    public function retencion() {
        $salarioPer = $this->salario();
        $salarioMinimo = 1300000;

        if ($salarioPer >= 6 * $salarioMinimo) {
            return $salarioPer * 0.04;
        } elseif ($salarioPer >= 4 * $salarioMinimo) {
            return $salarioPer * 0.02;
        } else {
            return 0;
        }
    }

    public function extra() {
        $salarioPer = $this->salario();
        $pextra = 0;

        // Apply extra 6% if the person is over 40 years old
        if ($this->edad > 40) {
            $pextra = $salarioPer * 1.06;
        }

        if ($this->edad > 60) {
            $pextra = $salarioPer * 0.08;
        }

        return $pextra;
    }

    public function deducible() {
        $saludPer = $this->salud();
        $pensionPer = $this->pension();
        $arlPer = $this->arl();
        $pretencion = $this->retencion();
        return $saludPer + $pensionPer + $arlPer + $pretencion;
    }

    public function totalPagar() {
        $salarioPer = $this->salario();
        $psubTrans = $this->subTrans();
        $pextra = $this->extra();
        $descuento = $this->deducible();
        return $salarioPer + $psubTrans + $pextra - $descuento;
    }
}
?>