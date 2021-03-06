<?php

namespace Nwidart\LaravelNormalizer\Traits;

trait CanNormalizeData
{
    /**
     * @param array $data
     * @return array
     */
    public function normalize(array $data) : array
    {
        foreach ($this->getNormalizers() as $normalizer) {
            $data = (new $normalizer)->normalize($data);
        }

        return $data;
    }

    /**
     * @return array
     */
    public function getNormalizers() : array
    {
        return $this->normalizers ?: [];
    }
}
