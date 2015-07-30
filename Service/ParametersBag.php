<?php
/**
 * Date: 14.07.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\SettingsBundle\Service;


use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ParametersBag extends ContainerAware
{

    private  $parameters = [];

    public function __construct(ContainerInterface $serviceContainer)
    {
        $this->setContainer($serviceContainer);

        $settings = $this->container->get('doctrine')
            ->getRepository('YSettingsBundle:SiteSetting')
            ->findAllAsArray();

        foreach($settings as $setting){
            if($setting['value']){
                $this->parameters[$setting['parameter']] = $setting['value'];
            }
        }
    }

    public function setParameter($key, $value)
    {
        $this->parameters[$key] = $value;
    }

    public function getParameter($key, $default = null)
    {
        return array_key_exists($key, $this->parameters) ? $this->parameters[$key] : $default;
    }

}