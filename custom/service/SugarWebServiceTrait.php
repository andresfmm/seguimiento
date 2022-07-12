<?php


trait SugarWebServiceTrait
{

  /**
   * @param $required_params
   * @param $received_params
   * @return mixed|void
   */
  protected function checkParams($required_params, $received_params, $http_response_code = '400')
  {
    $missing_params = array_diff($required_params, array_keys($received_params));
    if ($missing_params)
    {
      $missing_params = "'" . implode("', '", $missing_params) . "'";
      $this->displaySoapError400("missing_params", "Faltan parámetros", $http_response_code, "Faltan parametros. Los siguientes parámetros son requeridos: {$missing_params}");
      return false;
    }
    return true;
  }

  /**
   * @param $params
   * @return mixed|void
   */
  protected function refuseParam($param_name, $mensaje = '', $http_response_code = '400')
  {
      $mensaje = empty($mensaje) ? "El valor o formato del parámetro '{$param_name}' no es válido." : $mensaje;
      return $this->displaySoapError400("invalid_param", "Parámetro no válido", $http_response_code, $mensaje);
  }

  /**
   * Añade un error de tipo SOAP a la respuesta del servidor.
   *
   * @param  string  $name_code    Nombre código del error.
   * @param  string  $name         Titulo del error.
   * @param  string  $code         Código del error.
   * @param  string  $description  Descripción del error.
   * @param  array   $extra_params Parametros adicionales que deben pasarse al objeto del error.
   * @param  boolean $sys          Si el nombre código del error es del sistema o no.
   *
   * @return void|mixed
   */
  protected function displaySoapError($name_code, $name = '', $code = '', $description = '', $extra_params = array(), $sys = false)
  {
    $error = new SoapError();

    $error->set_error($name_code);

    if (!$sys) {
      $error->name = $name;
      $error->number = $code;
      $error->description = $description;
    }

    $error->hasErrors = true;
    foreach ($extra_params as $key => $value) {
      $error->{$key} = $value;
    }

    self::$helperObject->setFaultObject($error);
  }

  /**
   * @param $name_code
   * @param string $name
   * @param string $http_response_code
   * @param string $description
   * @param array $extra_params
   * @param bool $sys
   * @return mixed|void
   */
  protected function displaySoapError400($name_code, $name = '', $http_response_code = '400', $description = '', $extra_params = array(), $sys = false)
  {
    if (intval($http_response_code) >= 400)
    {
      http_response_code(400);
    }
    return $this->displaySoapError($name_code, $name, $http_response_code, $description, $extra_params, $sys);
  }
}
