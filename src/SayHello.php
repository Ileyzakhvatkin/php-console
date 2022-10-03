<?php

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('show hello string')
            ->addArgument('message', InputArgument::REQUIRED, 'Who will we greet!')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Привет ' . $input->getArgument('message'));
        return Command::SUCCESS;
    }
}