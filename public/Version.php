<?php



 class VersionClass
{
    protected $appVersion;
    public function __construct(string $version)
    {
        $this->appVersion = $version;
    }

    public function getVersion(): string
    {
        return $this->appVersion;
    }
}