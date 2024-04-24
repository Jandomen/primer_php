
<?php
require 'vendor/autoload.php';

use MongoDB\Client as Mongo;

class PersonaModel {
    private $collection;

    public function __construct() {
        $mongo = new Mongo("mongodb+srv://alquizor8:alquizor8@cluster0.t5rqhi8.mongodb.net/datosPHP");
        $db = $mongo->selectDatabase('datosPHP');
        $this->collection = $db->selectCollection('personas');
    }

    public function guardarPersona($nombre, $edad, $matricula) {
        $documento = [
            'nombre' => $nombre,
            'edad' => (int)$edad,
            'matricula'=> (int)$matricula
        ];

        $insertResult = $this->collection->insertOne($documento);

        return $insertResult->getInsertedCount() > 0;
    }
 }
?>
