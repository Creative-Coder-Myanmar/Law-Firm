<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait MediaCaster
{
    public function cast(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->pathToFileDiskURL($value),
            set: fn ($value) => $this->diskToFilePathURL($value),
        );
    }

    public function pathToFileDiskURL($value)
    {
        if (! $value) {
            return null;
        }

        if (str_contains($value, 'https://')) {
            return $value;
        }

        return $this->getDOSpacesURL().$value;
    }

    public function diskToFilePathURL($value)
    {
        if (! str_contains($value, $this->getDOSpacesURL())) {
            return $value;
        }

        return explode($this->getDOSpacesURL(), $value)[1];
    }

    public function getDOSpacesURL()
    {
        $driver = config('filesystems.default');

        return config("filesystems.disks.{$driver}.url");
    }
}
