<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class HandleUserData extends Command
{
    protected function configure()
    {
        $this
            ->setName('user_data')
            ->setDescription('Handle User Data')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $question = new Question('Введите ваше имя: ');
        $userName = $helper->ask($input, $output, $question);

        $question = new Question('Введите ваш возраст: ');
        $userAge = $helper->ask($input, $output, $question);

        $question = new ChoiceQuestion(
            'Ваш пол (м): ',
            ['М', 'Ж'],
            0
        );
        $question->setErrorMessage('Пол указан не верно!');
        $userSex = $helper->ask($input, $output, $question);

        $output->writeln('Здравствуйте ' . $userName . ' Ваш возраст: ' . $userAge  . ' Ваш пол: ' . $userSex);

        return Command::SUCCESS;
    }
}