<?php
/**
 * 第三方bundle的服务
 * 此处写业务逻辑,图片上传服务
 */
namespace Hyperbolaa\Symfony\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Class ImageService
 * @package Hyperbolaa\Symfony\Service
 */
class ImageService implements ContainerAwareInterface
{

    private $container;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    //下面可增加方法写入逻辑









}
