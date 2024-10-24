<?php

namespace App\Remote\Button;

use App\Remote\ParentalControls;
use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;
use Symfony\Component\DependencyInjection\Attribute\AutowireCallable;

#[AsTaggedItem('volume-up', priority: 20)]
final class VolumeUpButton implements ButtonInterface
{
    /**
     * @param \Closure():void $parentalControls
     */
    public function __construct(
        #[AutowireCallable(service: ParentalControls::class, method: 'volumeToHigh', lazy: true)]
        private \Closure $parentalControls,
    ) {
    }

    public function press(): void
    {
        if (true) { // detect if volume is too high
            ($this->parentalControls)();
        }

        dump('Change the volume up');
    }
}
