<?php

class Cookie {
    // Приватное свойство для хранения типа печенья
    private $type;

    // Список доступных типов печенья
    private $availableTypes = ['шоколадное', 'овсяное', 'сахарное', 'имбирное'];

    // Публичный метод для установки типа печенья
    public function setType($type) {
        if (in_array($type, $this->availableTypes)) {
            $this->type = $type;
        } else {
            echo "Ошибка: данный тип печенья недоступен.\n";
        }
    }

    // Публичный метод для получения типа печенья
    public function getType() {
        return $this->type;
    }
}

// Пример использования
$cookie = new Cookie();
$cookie->setType('шоколадное');
?>
<div class="datas">
    <div class="data">
        <?
        echo "Тип печенья: " . $cookie->getType();
        ?>
    </div>
    <div class="data">
        <?
        $cookie->setType('ванильное'); // Попытка установить недопустимый тип
        echo "Тип печенья: " . $cookie->getType() . "\n"; // Вывод текущего типа
    ?>
    </div>
</div>

<style>
    .datas{
        display: flex;
        flex-direction: column;
        gap: 25px;
        background-color: gray;
        padding: 25px;
    }

    .data{
        color: white;
    }
</style>