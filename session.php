<?php

class Session
{
  /**
   * @var string|array $key
   * @var mixed $options [clear, default]
   * 
   * @return mixed
   */
  public static function get($key, $options = [])
  {
    $defaultOptions = [
      'default' => null,
      'clear' => false,
    ];

    $options = array_merge($defaultOptions, $options);

    $clear = $options['clear'];

    if (is_array($key)) {
      $val = [];
      foreach ($key as $k) {
        $val[] = [$k => $_SESSION[$k]];
        if ($clear) {
          unset($_SESSION[$k]);
        }
      }
      return count($val) ? $val : $options['default'];
    }

    if (isset($_SESSION[$key])) {
      $val = $_SESSION[$key];
      if ($clear) {
        unset($_SESSION[$key]);
      }
      return $val;
    }

    return $options['default'];
  }

  /**
   * @param string|array $key
   * @param string $value
   */
  public static function set($key, $value = null)
  {
    if (is_array($key)) {
      foreach ($key as $k => $v) {
        $_SESSION[$k] = $v;
      }
      return;
    }

    $_SESSION[$key] = $value;
  }

  public static function delete($key)
  {
    if (is_array($key)) {
      foreach ($key as $k) {
        if (isset($_SESSION[$k]))
          unset($_SESSION[$k]);
      }
      return;
    }

    if (isset($_SESSION[$key]))
      unset($_SESSION[$key]);
  }

  /**
   * @var string|array $key
   * 
   * @return bool
   */
  public static function has($key) {
    $val = self::get($key);

    if (is_array($val) && is_array($key)) {
      return count($val) == count($key);
    }

    return $val != null;
  }

  public static function clear() {
    session_unset();
  }
}
