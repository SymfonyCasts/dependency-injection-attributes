<?php

namespace App\Remote;

use Symfony\Component\Mailer\MailerInterface;

class ParentalControls
{
    public function __construct(
        private MailerInterface $mailer,
    ) {
    }

    public function volumeToHigh(): void
    {
        dump('send volume alert email');
    }
}
