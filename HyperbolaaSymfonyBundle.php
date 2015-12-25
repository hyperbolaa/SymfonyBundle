<?php
/**
 * bundle 内部载入 service 配置
 */
namespace Hyperbolaa\SymfonyBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;
use Hyperbolaa\SymfonyBundle\DependencyInjection\HyperbolaaSymfonyExtension;

/**
 * Class HyperbolaaSymfonyBundle
 * @package Hyperbolaa\SymfonyBundle
 */
class HyperbolaaSymfonyBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new HyperbolaaSymfonyExtension();
        }

        return $this->extension;
    }
}
