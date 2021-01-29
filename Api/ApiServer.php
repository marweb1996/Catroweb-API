<?php
/**
 * ApiServer.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.53
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

/**
 * ApiServer Class Doc Comment.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class ApiServer
{
  /**
   * @var array
   */
  private $apis = [];

  /**
   * Adds an API handler to the server.
   *
   * @param string $api     An API name of the handle
   * @param mixed  $handler A handler to set for the given API
   */
  public function addApiHandler($api, $handler)
  {
    if (isset($this->apis[$api]))
    {
      throw new \InvalidArgumentException('API has already a handler: '.$api);
    }

    $this->apis[$api] = $handler;
  }

  /**
   * Returns an API handler.
   *
   * @param string $api An API name of the handle
   *
   * @throws \InvalidArgumentException When no such handler exists
   *
   * @return mixed Returns a handler
   */
  public function getApiHandler($api)
  {
    if (!isset($this->apis[$api]))
    {
      throw new \InvalidArgumentException('No handler for '.$api.' implemented.');
    }

    return $this->apis[$api];
  }
}
