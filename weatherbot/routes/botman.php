<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Hola', function ($bot) {
    $bot->reply('Hola Juan david!, en que te puedo ayudar?');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->fallback(function ($bot) {
    $bot->reply('No entiendo un culo');
});
