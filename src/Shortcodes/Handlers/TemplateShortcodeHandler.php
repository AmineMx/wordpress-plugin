<?php

namespace Moovly\Shortcodes\Handlers;

class TemplateShortcodeHandler extends ShortcodeHandler
{
    public function handle()
    {
        return $this->make([
            'id' => $this->getAttribute('id'),
        ]);
    }
}