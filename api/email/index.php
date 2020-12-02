<?php
echo json_encode([
    'data' => [
        'result' => $result = mail(
            'mirakulpieva@yandex.ru',
            'mira-gadaniya.ru: Отправлена форма "Нужна помощь"',
            'Поля:'
            . "\n" . 'Дата: ' . date('d.m.Y H:i:s')
            . "\n" . 'Телефон: ' . $_POST['phone']
            . "\n" . 'Email: ' . $_POST['email']
            . "\n" . 'Сообщение: ' . $_POST['message']
        )
    ]
]);
