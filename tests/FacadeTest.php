<?php

namespace R0bdiabl0\Laravel5Phumbor\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use R0bdiabl0\Laravel5Phumbor\Facades\Phumbor;
use Thumbor\Url\BuilderFactory;

class FacadeTest extends AbstractPackageTestCase
{
    use FacadeTrait;
    private $testImage = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';

    function test_facade_loads_target_of_service_provider()
    {
        $this->assertTrue(\Phumbor::url($this->testImage) instanceof \Thumbor\Url\Builder);
    }

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'phumbor';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Phumbor::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return BuilderFactory::class;
    }

    protected function getPackageAliases($app)
    {
        return ['Phumbor' => \R0bdiabl0\Laravel5Phumbor\Facades\Phumbor::class];
    }
}
