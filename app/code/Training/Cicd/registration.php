<?php
use Magento\Framework\Component\ComponentRegistrar;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Training_Cicd',
    __DIR__
);
echo "Testing CI"