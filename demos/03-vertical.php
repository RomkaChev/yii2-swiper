<?php
/**
 * @var \yii\web\View $this
 */
use romkaChev\yii2\swiper\Swiper;

echo Swiper::widget( [
    'items'         => [
        'Slide 1',
        'Slide 2',
        'Slide 3',
        'Slide 4',
        'Slide 5',
        'Slide 6',
        'Slide 7',
        'Slide 8',
        'Slide 9',
        'Slide 10',
    ],
    'behaviors'    => [
        Swiper::BEHAVIOUR_PAGINATION
    ],
    'pluginOptions' => [
        Swiper::OPTION_PAGINATION_CLICKABLE => true,
        Swiper::OPTION_DIRECTION            => Swiper::DIRECTION_VERTICAL
    ]
] );