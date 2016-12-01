<?php

namespace AlambicRestConnector\Endpoints;

use AlambicRestConnector\Common\Exceptions\InvalidArgumentException;
use AlambicRestConnector\Common\Exceptions;

/**
 * Class SingleEndPoint
 */
class SingleEndPoint extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \AlambicRestConnector\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "";
        return $uri;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
