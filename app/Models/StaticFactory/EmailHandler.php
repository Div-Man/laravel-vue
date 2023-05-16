<?php

namespace App\Models\StaticFactory;

class EmailHandler implements DataHandler {
    
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }

    public function save() {
        //различные действия, над $this->data, для отправки на Email
        return 'Отправка на email'; //для примера (знаю, что сообщение возвращать нехорошо)
    }

}
