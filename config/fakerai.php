<?php

return [
    'openai_api_key' => env('OPENAI_API_KEY'),

    // If you have a paid account, you can use GPT4
    'openai_model' => env('OPENAI_MODEL', 'gpt-3.5-turbo'),

    // The number of results returned for each custom faker type.
    // They will be retrieved on the first call to the factory and stored locally.
    // The list will be accessed randomly of later calls.
    // Artisan command will allow you to update the list.
    'number_of_results' => 100,

    // this array contains the custom faker types that you want to use
    // if you want to be more specific with the type of content you want to generate, you can place the value in an array
    // the first element of the array is the name of the faker type and the second element is an array of options
    'custom_faker_types' => [
        'postTitle' => 'Generate titles of posts relating to the topic of developing with PHP and Laravel',
        'postBody' => ['Generate content of posts relating to the topic of developing with PHP and Laravel', ['paragraphs' => 3]],
    ],
];
