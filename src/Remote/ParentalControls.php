<?php

namespace App\Remote;

use Symfony\Component\DependencyInjection\Attribute\Lazy;
use Symfony\Component\Mailer\MailerInterface;

#[Lazy]
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
