<?php
class Discord
{
    public static function sendCurlPOST($url, $arrayContent)
    {
        $payload = json_encode(array("content" => $arrayContent));
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            CURLOPT_RETURNTRANSFER => true,
        ));

        $response = curl_exec($curl);

        if ($error = curl_error($curl)) {
            throw new Exception($error);
        }

        curl_close($curl);
        $response = json_decode($response, true);
    }

    public static function postToChannel($channelName, $messageContent)
    {
        if ($_SERVER['SERVER_NAME'] != "localhost") {
            switch ($channelName) {
                case '#1v1-games':
                    $url = 'https://discord.com/api/webhooks/729852119796154428/k8-UQe4lqsgzmIlnPF15pJ_anjRy15S6yAXmz0T6j3xkY5Dxa4fn0qjFFAnRG5j4bdJe';
                    break;
                case '#draft-picks':
                    $url = 'https://discord.com/api/webhooks/725614349154123827/jCSdcfEhV_MYcIVU7PqXgXa1mMLek337hqtmP5Wa3EMVfDN8arCOwzu3HbWKB2si0ndd';
                    break;
                case '#extensions':
                    $url = 'https://discord.com/api/webhooks/961497099533451344/VaVhuXtIkaDeyAwVur5AE3wdcg-Madm7GfqA2fB3i1npKaSBy-Xxa0iQWq-NH57Pqx0g';
                    break;
                case '#free-agency':
                    $url = 'https://discord.com/api/webhooks/1215096842937700402/_GD2ujGeocTEZIaqFCh3bZpEJk5hEUT5HAGDI3ETPoVd_0esZK5IQuT2FAyOGjGyqeFZ';
                    break;
                case '#rookie-options':
                    $url = 'https://discord.com/api/webhooks/961497099533451344/VaVhuXtIkaDeyAwVur5AE3wdcg-Madm7GfqA2fB3i1npKaSBy-Xxa0iQWq-NH57Pqx0g';
                    break;
                case '#trades':
                    $url = 'https://discord.com/api/webhooks/961497099533451344/VaVhuXtIkaDeyAwVur5AE3wdcg-Madm7GfqA2fB3i1npKaSBy-Xxa0iQWq-NH57Pqx0g';
                    break;
                case '#waiver-wire':
                    $url = 'https://discord.com/api/webhooks/961497099533451344/VaVhuXtIkaDeyAwVur5AE3wdcg-Madm7GfqA2fB3i1npKaSBy-Xxa0iQWq-NH57Pqx0g';
                    break;
            }
        } else {
            $url = 'https://discord.com/api/webhooks/870171571090772019/pmFovDKDr_gmrJfeNsmug6dnoabJRzNhH2dOADYCK5uvZHjJJa17qs7MlNyZQPG_dhtq';
        }

        $messageContent = str_replace('<br>', "\n", $messageContent);

        Discord::sendCurlPOST($url, $messageContent);
    }
}
