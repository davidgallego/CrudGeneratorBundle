<?php

namespace Davgava\Bundle\CrudGeneratorBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Davgava\Bundle\CrudGeneratorBundle\Generator\DavgavaCrudGenerator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

/**
 * Generates a CRUD for a Doctrine entity.
 *
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class DavgavaCrudCommand extends GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();

        $this->setName('davgava:generate:crud');
        $this->setDescription('Generates a CRUD and paginator based on a Doctrine entity');
    }

    protected function createGenerator($bundle = null)
    {
        return new DavgavaCrudGenerator($this->getContainer()->get('filesystem'));
    }

    protected function getSkeletonDirs(BundleInterface $bundle = null)
    {
        $skeletonDirs = array();

        if (isset($bundle) && is_dir($dir = $bundle->getPath().'/Resources/SensioGeneratorBundle/skeleton')) {
            $skeletonDirs[] = $dir;
        }

        if (is_dir($dir = $this->getContainer()->get('kernel')->getRootdir().'/Resources/SensioGeneratorBundle/skeleton')) {
            $skeletonDirs[] = $dir;
        }

        $skeletonDirs[] = __DIR__.'/../Resources/skeleton';
        $skeletonDirs[] = __DIR__.'/../Resources';

        return $skeletonDirs;
    }
}