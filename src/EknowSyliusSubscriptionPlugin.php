<?php
declare(strict_types=1);

namespace Eknow\SyliusSubscriptionPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class EknowSyliusSubscriptionPlugin extends Bundle
{
    use SyliusPluginTrait;
}