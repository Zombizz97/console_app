<?php
$messages = [
    'fr' => [
        'greeting_day' => "Bonjour",
        'greeting_evening' => "Bonsoir",
        'farewell_day' => "Au revoir",
        'farewell_evening' => "Bonne soirée",
        'well_said' => "Bien dit !"
    ],
    'en' => [
        'greeting_day' => "Good morning",
        'greeting_evening' => "Good evening",
        'farewell_day' => "Goodbye",
        'farewell_evening' => "Have a good evening",
        'well_said' => "Well said!"
    ],
];

echo "Choisissez la langue / Choose language (fr, en) : ";
$lang = trim(fgets(STDIN));
$lang = array_key_exists($lang, $messages) ? $lang : 'fr';

$hour = date('H');
$isEvening = ($hour < 6 || $hour >= 18);
if ($isEvening) {
    $greeting = $messages[$lang]['greeting_evening'];
} else {
    $greeting = $messages[$lang]['greeting_day'];
}

while (true) {
    $input = trim(fgets(STDIN));

    echo strrev($input) . "\n";

    $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/u', '', $input));
    if ($cleaned && $cleaned === strrev($cleaned)) {
        echo $messages[$lang]['well_said'] . "\n";
    }

    $farewell = $isEvening ? $messages[$lang]['farewell_evening'] : $messages[$lang]['farewell_day'];
    echo "$farewell\n";
    break;
}
