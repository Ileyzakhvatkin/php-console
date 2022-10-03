<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PrintStringMultiple extends Command
{
    protected function configure()
    {
        $this
            ->setName('print_string')
            ->setDescription('Print string multiple')
            ->addArgument('printString', InputArgument::REQUIRED, 'what to print')
            ->addArgument('timesToPrint', InputArgument::OPTIONAL, 'how many times to print')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $times = $input->getArgument('timesToPrint') ? $input->getArgument('timesToPrint') : 2;
        for ($i = 1; $i <= $times; $i++) {
            $output->writeln($input->getArgument('printString'));
        }
        
        return Command::SUCCESS;
    }
}