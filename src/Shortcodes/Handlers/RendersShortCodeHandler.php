<?php

namespace Moovly\Shortcodes\Handlers;

use Moovly\Shortcodes\Factories\RendersShortCodeFactory;
use Moovly\Shortcodes\Traits\PermissionTrait;

class RendersShortCodeHandler extends ShortcodeHandler
{
    use PermissionTrait;

    public function handle()
    {
        $this->checkShortcodePermission(RendersShortCodeFactory::$tag, true);

        return $this->makeReactTag([
            'project-id' => $this->getAttribute('project-id', null),
            'view-type' => $this->getAttribute('view-type', 'grid'),
            'with-delete' => $this->getAttribute('with-delete', false),
        ]);
    }
}