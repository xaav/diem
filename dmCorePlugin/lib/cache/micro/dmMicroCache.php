<?php

abstract class dmMicroCache
{
  private $cache = array();

  protected function getCache($key)
  {
    if(isset($this->cache[$key]))
    {
      return $this->cache[$key];
    }

    return null;
  }

  protected function hasCache($key)
  {
    return isset($this->cache[$key]);
  }

  protected function setCache($key, $value)
  {
    return $this->cache[$key] = $value;
  }

  protected function clearCache($key = null)
  {
    if (null === $key)
    {
      $this->cache = array();
    }
    elseif(isset($this->cache[$key]))
    {
      unset($this->cache[$key]);
    }

    return $this;
  }
}