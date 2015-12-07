<?php

namespace Kah;

interface Cacheable
{
    /**
     * Get Cache Entry
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key);

    /**
     * Set Cache Entry
     *
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value);

    /**
     * Delete Cache Entry
     *
     * @param string $key
     */
    public function delete($key);
}
