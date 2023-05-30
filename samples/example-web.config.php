<?php

/*

CONFIGURACION PARA LARAVEL CON PLESK SERVER WEB

Video: https://www.youtube.com/watch?v=t0bO3c-ys3E

Archivo: web.config

<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="Imported Rule 1" stopProcessing="true">
                    <match url="^(.*)$" ignoreCase="false" />
                        <conditions logicalGrouping="MatchAll">
                            <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
                            <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                        </conditions>
                        <action type="Rewrite" url="index.php?url={R:1}" appendQueryString="true" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>

*/
