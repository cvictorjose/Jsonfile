<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ExampleTest extends TestCase {

	/**
	 * Test request Get.
	 *
	 */
	public function testGetExample()
	{
		$response = $this->action('GET', 'UserController@getIndex');
	}

    /**
     * Test request Post.
     *
     */

    public function testPostExample()
    {
        $response = $this->action('POST', 'UserController@postIndex');
    }

    /**
     * Test Json format.
     *
     */

    public function testJsonExist()
    {
        $this->assertFileExists('public/simple.json');
    }

    public function testJsonempty()
    {
        $people = json_decode(file_get_contents('public/simple.json'));
        $this->assertNotEmpty($people);
    }

}

