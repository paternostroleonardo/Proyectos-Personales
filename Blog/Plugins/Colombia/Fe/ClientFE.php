<?php

namespace FacturaScripts\Plugins\Colombia\Fe;

use Error;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use FacturaScripts\Core\Base\ToolBox;
use GuzzleHttp\Exception\TransferException;

/**
 * Client FE
 */
class ClientFE
{
    /**
     * Client
     *
     * @var \GuzzleHttp\Client
     */
    private static $client;

    public static function client($token = null, $timeout = 140, $connectTimeout = 20)
    {
        try {
            self::$client = new Client([
                'verify' => false,
                'timeout' => $timeout,
                'connect_timeout' => $connectTimeout,
                'base_uri' => 'https://apifacturascripts.soenac.com/api/',
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . self::toolBox()->appSettings()->get('fe', 'token', $token),
                ],
            ]);
        } catch (Exception $e) {
            self::toolBox()->log('fe')->error(mb_substr($e->getMessage(), 0, 480));
        } catch (Error $e) {
            self::toolBox()->log('fe')->error(mb_substr($e->getMessage(), 0, 480));
        }

        return new self();
    }

    /**
     * Send
     *
     * @param string $method
     * @param string $uri
     * @param array  $data
     *
     * @return mixed
     */
    public static function send($method = 'POST', $uri = '/', $data = [])
    {
        try {
            $request = new Request($method, $uri);

            $response = self::$client->send($request, $data);

            return json_decode($response->getBody()->getContents(), true) ?? true;
        } catch (TransferException $e) {
            if (!$e->hasResponse()) {
                self::toolBox()->log('fe')->error(mb_substr($e->getMessage(), 0, 480));

                return false;
            }

            $response = $e->getResponse();
            $responseBodyContents = json_decode($response->getBody()->getContents(), true);
            $erros = implode(', ', [$responseBodyContents['message']] ?? []);

            self::toolBox()->log('fe')->error(mb_substr("{$response->getStatusCode()} ({$response->getreasonPhrase()}): {$erros}", 0, 480));
            self::setErrors($responseBodyContents);

            return false;
        } catch (Exception $e) {
            self::toolBox()->log('fe')->error(mb_substr($e->getMessage(), 0, 480));

            return false;
        } catch (Error $e) {
            self::toolBox()->log('fe')->error(mb_substr($e->getMessage(), 0, 480));

            return false;
        }
    }

    /**
     * Tool box
     *
     * @return \FacturaScripts\Core\Base\ToolBox
     */
    protected static function toolBox()
    {
        return new ToolBox();
    }

    /**
     * Set errors
     *
     * @param void
     */
    public static function setErrors(array $responseBodyContents = [])
    {
        if (array_key_exists('errors', $responseBodyContents)) {
            $errors = [];

            foreach ($responseBodyContents['errors'] as $field) {
                foreach ($field as $error) {
                    $errors[] = $error;
                }
            }

            self::toolBox()->log('fe')->warning(mb_substr(implode('<br/>', $errors), 0, 480));
        }
    }
}
