<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.zip.manager' shared service.

return $this->services['prestashop.module.zip.manager'] = new \PrestaShop\PrestaShop\Adapter\Module\ModuleZipManager(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});