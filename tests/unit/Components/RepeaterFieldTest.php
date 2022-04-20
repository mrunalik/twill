<?php

namespace A17\Twill\Tests\Unit\Components;

use A17\Twill\View\Components\Repeater;

class RepeaterFieldTest extends ComponentTestBase
{
    public string $component = Repeater::class;
    public array $data = [
        'type' => 'type',
    ];
    public string $expectedView = 'twill::partials.form._repeater';
}
