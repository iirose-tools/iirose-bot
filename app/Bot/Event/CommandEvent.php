<?php

namespace Bot\Event;

use Bot\Models\Sender;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;

class CommandEvent extends Event
{
    public $sign;
    /** @var Sender $sender */
    public $sender;
    /** @var InputInterface $input */
    public $input;
    /** @var BufferedOutput $output */
    public $output;
    public function __construct($sign, Sender $sender, InputInterface $input, OutputInterface $output)
    {
        $this->sign = $sign;
        $this->sender = $sender;
        $this->input = $input;
        $this->output = $output;
    }
}
