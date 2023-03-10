<?php
/**
 * Get the client
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Define configuration
 */

/* Username, password and endpoint used for server to server web-service calls */
Lyra\Client::setDefaultUsername("94277511");
Lyra\Client::setDefaultPassword("prodpassword_TgEw4pxpWsFxaqYbs6sAirSbuyWS7ynUPAjRUoiRlQ2On");
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");

/* publicKey and used by the javascript client */
Lyra\Client::setDefaultPublicKey("94277511:publickey_e2sEFaPnc0k7LQ8SZAUKbHZnECpRxXyqtbQtMcOQ1C5p3");

/* SHA256 key */
Lyra\Client::setDefaultSHA256Key("Z4WkCcN4MeLzlD531OxgYYaLmZNCckIxdRrmQXa10DYQ9");