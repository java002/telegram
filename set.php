<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '124559346:AAGLoIZ6nTKX70pG-RdL_PcXf2mfkIFHvKg';
$BOT_NAME = 'Новая империя';
$hook_url = 'https://github.com/path/to/hook.php';
try {
    // Create Telegram API object
    $telegram = java002\TelegramBot\Telegram($124559346:AAGLoIZ6nTKX70pG-RdL_PcXf2mfkIFHvKg, $Новая империя);

    // Set webhook
    $result = $telegram->setWebHook($https://github.com/path/to/hook.php);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
