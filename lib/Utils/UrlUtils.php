<?php declare(strict_types=1);

namespace Kcs\MessengerExtra\Utils;

class UrlUtils
{
    /**
     * Build URL from parse_url array params.
     *
     * @param array $url
     *
     * @return string
     */
    public static function buildUrl(array $url): string
    {
        $authority = ($url['user'] ?? '').(isset($url['pass']) ? ':'.$url['pass'] : '');

        return
            (isset($url['scheme']) ? $url['scheme'].'://' : '').
            ($url['host'] ?? '').
            (isset($url['port']) ? ':'.$url['port'] : '').
            ($authority ? $authority.'@' : '').
            ($url['path'] ?? '').
            (isset($url['query']) ? '?'.$url['query'] : '').
            (isset($url['fragment']) ? '#'.$url['fragment'] : '')
        ;
    }
}
