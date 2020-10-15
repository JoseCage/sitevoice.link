<?php

namespace App\Services;

use Illuminate\Support\Str;
use AWS;

class SpeechService
{
    /**
     * @param $input
     * @param array $options
     * @return mixed
     */
    public static function transformToVoice($input, $options = [])
    {
        $client = AWS::createClient('polly');

        try {
            $config = [
                'Text' => $input,
                'OutputFormat' => $options['format'] ?: 'mp3',
                'TextType' => $options['text_type'] ?: 'text',
                'VoiceId' => $options['voice_id'] ?: 'Emma'
            ];

            $synthesizeText = $client->syntesizeSpeech($config);

            $audioFileName =Str::uuid();

            // Save the file to the storage or User specific provider
            file_put_contents(storage_path('audio'), $audioFileName . 'mp3', $synthesizeText['AudioStream']);

            echo 'Converted audio saved as ' . $audioFileName . '"mp3"' . PHP_EOL;

            return $synthesizeText;

        } catch (PollyException $exception) {
            throw $exception;
        }
    }
}
