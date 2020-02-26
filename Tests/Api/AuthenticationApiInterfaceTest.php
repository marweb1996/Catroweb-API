<?php
/**
 * AuthenticationApiInterfaceTest
 * PHP version 5.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * AuthenticationApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @internal
 * @coversNothing
 */
class AuthenticationApiInterfaceTest extends WebTestCase
{
  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass()
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass()
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp()
  {
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown()
  {
  }

  /**
   * Test case for authenticateDelete.
   *
   * Logout a user.
   */
  public function testAuthenticateDelete()
  {
    $client = static::createClient();

    $path = '/authenticate';

    $crawler = $client->request('DELETE', $path);
  }

  /**
   * Test case for authenticateGet.
   *
   * Check token.
   */
  public function testAuthenticateGet()
  {
    $client = static::createClient();

    $path = '/authenticate';

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for authenticatePost.
   *
   * Login a user.
   */
  public function testAuthenticatePost()
  {
    $client = static::createClient();

    $path = '/authenticate';

    $crawler = $client->request('POST', $path);
  }

  protected function genTestData($regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
