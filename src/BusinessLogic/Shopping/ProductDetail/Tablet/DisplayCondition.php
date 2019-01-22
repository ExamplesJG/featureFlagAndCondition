<?php
declare(strict_types=1);

namespace MyApp\BusinessLogic\Shopping\ProductDetail\Tablet;


use MyApp\Infrastructure\Shopping\Tablet\FeatureFlag;
use Psr\Log\LoggerInterface;


class DisplayCondition
{
    /**
     * @var FeatureFlag
     */
    private $featureFlag;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(FeatureFlag $featureFlag, LoggerInterface $logger)
    {
        $this->featureFlag = $featureFlag;
        $this->logger = $logger;
    }

    public function isPossible()
    {
        if ($this->featureFlag->isEnabled()) {
            return $this->featureFlag->isEnabled();
        }

        //... next logic
    }
}
