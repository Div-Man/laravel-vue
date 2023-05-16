<?php

namespace App\Models\StaticFactory;

class DatabaseHandler implements DataHandler {
    
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }

    public function save() {
        //различные действия, над $this->data, для записи в базу
        return 'Сохранение в базу'; //для примера (знаю, что сообщение возвращать нехорошо)
    }

}
