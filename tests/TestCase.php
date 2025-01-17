<?php
/**
 * @link https://github.com/vuongxuongminh/laravel-async
 *
 * @copyright (c) Vuong Xuong Minh
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace VXM\Async\Tests;

use VXM\Async\AsyncFacade;
use VXM\Async\AsyncServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [AsyncServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Async' => AsyncFacade::class,
        ];
    }
}
