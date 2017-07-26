<?php

declare(strict_types=1);

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppCreateUserCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:create-user')
            ->setDescription('create a new user')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        $output->writeln('<info>Command result.</info>');
        $output->writeln('<comment>Command result.</comment>');
        $output->writeln('<error>Command result.</error>');
        //        $output->writeln('<cerror>Command result.</cerror>');
        $output->writeln('<question>Command result.</question>');
        //        $output->write('lx1036');
        $output->write($input->getArgument('argument') . ' is a new user.');
    }
}
