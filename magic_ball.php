<?php
$responses = [
    [
        'color' => '#4169E1',
        'phrases' => [
            'Бесспорно',
            'Предрешено',
            'Никаких сомнений',
            'Определённо да',
            'Можешь быть уверен в этом',
            ],
    ],
    [
        'color' => '#00FF7F',
        'phrases' => [
            'Мне кажется — «да»',
            'Вероятнее всего',
            'Хорошие перспективы',
            'Знаки говорят — «да»',
            'Да',
            ],
    ],
    [
        'color' => '#FFFF00',
        'phrases' => [
            'Пока не ясно, попробуй снова',
            'Спроси позже',
            'Лучше не рассказывать',
            'Сейчас нельзя предсказать',
            'Сконцентрируйся и спроси опять',
                ],
    ],
    [
        'color' => '#FF4500',
        'phrases' => [
            'Даже не думай',
            'Мой ответ — «нет»',
            'По моим данным — «нет»',
            'Перспективы не очень хорошие',
            'Весьма сомнительно',
                ],
    ],

];


$index=rand (0,3);
$index2= rand (0,4);


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            background-color: <?=$responses[$index]['color']?>
        }
    </style>
</head>
<body>

<h1><?=$responses[$index]['phrases'][$index2]?></h1>

</body>
</html>