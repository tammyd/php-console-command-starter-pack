<?php

namespace Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{

    protected function configure()
    {
        $this
            ->setDescription("Example command")
            ->setName('example')
            ->addArgument('text', InputArgument::REQUIRED, "Example text to output");

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment>Example Echo: </comment><info>" . $input->getArgument('text') . "</info>");
    }

}