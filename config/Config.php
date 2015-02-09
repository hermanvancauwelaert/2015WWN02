<?php

final class Config {

    /** @var array config data */
    private static $data = null;


    /**
     * @return array
     * @throws Exception
     */
    public static function getConfig($section = null) {

        if ($section === null) {
                    echo "$section";
            return self::getData();
        }
        $data = self::getData();
        echo 'ku<BR>';
        var_dump($data);
        if (!array_key_exists($section, $data)) {
            throw new Exception('Unknown config section: ' . $section);
        }
        return $data[$section];
    }

    /**
     * @return array
     */
    private static function getData() {
        if (self::$data !== null) {
            return self::$data;
        }
        self::$data = parse_ini_file(INC_CONF.'Config.ini', true);
        return self::$data;
    }

}
