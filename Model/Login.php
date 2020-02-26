<?php
/**
 * Login.
 *
 * PHP version 5
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
 * The version of the OpenAPI document: v1.0.16
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the Login model.
 *
 * @author  OpenAPI Generator team
 */
class Login
{
  /**
   * Name of the user.
   *
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   * @Assert\Length(
   *     max=180
   * )
   * @Assert\Length(
   *     min=3
   * )
   */
  protected $username;

  /**
   * A secure password.
   *
   * @var string|null
   * @SerializedName("password")
   * @Assert\Type("string")
   * @Type("string")
   * @Assert\Length(
   *     max=4096
   * )
   * @Assert\Length(
   *     min=6
   * )
   */
  protected $password;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->password = isset($data['password']) ? $data['password'] : null;
  }

  /**
   * Gets username.
   *
   * @return string|null
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @param string|null $username Name of the user
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   *
   * @return string|null
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @param string|null $password a secure password
   *
   * @return $this
   */
  public function setPassword(string $password = null)
  {
    $this->password = $password;

    return $this;
  }
}
