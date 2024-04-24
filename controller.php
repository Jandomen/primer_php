<?php
require_once 'model.php';

class PersonaController {
    public function guardarPersona($nombre, $edad, $matricula) {
        $model = new PersonaModel();
        return $model->guardarPersona($nombre, $edad, $matricula );
    }
}

