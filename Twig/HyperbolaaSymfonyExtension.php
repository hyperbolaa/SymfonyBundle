<?php
/**
 * 注册twig模板的 函数 和  过滤器
 * 后期可增加自定义的函数和过滤器
 */
namespace Hyperbolaa\Symfony\Twig;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class HyperbolaaSymfonyExtension
 * @package Hyperbolaa\Symfony\Twig
 */
class HyperbolaaSymfonyExtension extends \Twig_Extension implements ContainerAwareInterface
{
    /**
     * {@inheritdoc}
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('hyperbolaa_author', array($this, 'hyperbolaaAuthorFilter')),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('hyperbolaa_author', array($this, 'hyperbolaaAuthorFunction')),
        );
    }
    
    /**
     * Get the URL for the QRCode with the specified text, format and size
     *
     * @param string $text
     * @return string The URL for the QRCode
     */
    public function hyperbolaaAuthorFilter($text = '')
    {
        return $this->getAuthor($text);
    }

    
    /**
     * Get the URL for the QRCode with the specified text, format and size
     *
     * @param string $text
     * @return string The URL for the QRCode
     */
    public function hyperbolaaAuthorFunction($text = '')
    {
        return $this->getAuthor($text);
    }

    /**
     * @param string $text
     * @return mixed
     */
    private function getAuthor($text = '')
    {
        $options = $this->container->getParameter('hyperbolaa_symfony');
        $author = $options['author'];
        return $author;
    }

    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hyperbolaa_symfony_extension';
    }
}
