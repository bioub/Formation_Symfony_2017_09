<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('generate:fixtures')
            ->setDescription('Generates fixtures using Alice');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        
        $loader = $container->get('nelmio_alice.file_loader.simple');
        $objectSet = $loader->loadFile(__DIR__ . '/../Resources/fixtures/demo.yml');

        $em = $container->get('doctrine.orm.default_entity_manager');
        $entities = $objectSet->getObjects();
        
        foreach ($entities as $entity) {
            $em->persist($entity);
        }
        
        $em->flush();
        
        $output->writeln(count($entities) . ' entities inserted');
    }

}
