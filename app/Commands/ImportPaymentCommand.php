<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Features\CreatePaymentFeature;
use League\Csv\Reader;
use League\Csv\Statement;

class ImportPaymentCommand extends Command
{
    protected function configure()
    {
        $this->setName('payment:import')
            ->setDescription('Payment import service!')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('date', InputArgument::REQUIRED, 'Pass the date.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Payment import service..!, %s',   $input->getArgument('date')));

        $csv = Reader::createFromPath(STORAGE_PATH.'/'. 'payments.csv', 'r');
        $csv->setHeaderOffset(0);
        $stmt = Statement::create();
        $records = $stmt->process($csv);
        $createPaymentFeature = (new CreatePaymentFeature)->fire($records);

        return Command::SUCCESS;
    }
}