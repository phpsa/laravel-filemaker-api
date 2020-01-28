<?php

return [
    'database' => '', //The database file name which is just hosting
    'user' => '', //The fmrest privilege accessible user to the database || If you are going to call useOAuth method, you have to specify the data for X-FM-Data-OAuth-Request-Id.
    'password' => '', //The password of above user. || If you are going to call useOAuth method, you have to specify the data for X-FM-Data-OAuth-Identifier.
    'host' => 'localhost', //FileMaker Server's host name or IP address. If omitted, 'localhost' is chose || The value "localserver" tries to connect directory 127.0.0.1, and you don't have to set $port and $protocol.
    'port' => 443, // FileMaker Server's port number. If omitted, 443 is chosen
    'protocol' => 'https', //FileMaker Server's protocol name. If omitted, 'https' is chosen.
    'fmDataSource' => null, //Authentication information for external data sources. Ex.  [{"database"=>"<databaseName>", "username"=>"<username>", "password"=>"<password>"]. If you use OAuth, "oAuthRequestId" and "oAuthIdentifier" keys have to be spedified.
    'isUnitTest' => false, //It it's set to true, the communication provider just works locally.
];
