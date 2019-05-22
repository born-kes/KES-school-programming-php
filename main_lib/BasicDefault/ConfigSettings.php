<?php



namespace BasicDefault;

class ConfigSettings
{

    public static function load(array $DefaultConfig, string $ConfigName, $config = [])
    {
        $configByFile = self::loadConfig( $ConfigName );

        return array_merge(
            (array) $DefaultConfig,
            (array) $configByFile,
            (array) $config
        );
    }

    protected function loadConfig (string $configFile)
    {
        $config = (string) Tools::getFile($configFile);

        if(is_null ($config)) {
            return [];
        }
        return json_decode($config, true);
    }

    public function saveConfig (string $configFileName, array $data)
    {
        Tools::saveFile ($data, $configFileName);
    }
}