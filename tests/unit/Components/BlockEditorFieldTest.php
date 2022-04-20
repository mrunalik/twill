<?php

namespace A17\Twill\Tests\Unit\Components;

use A17\Twill\View\Components\BlockEditor;

class BlockEditorFieldTest extends ComponentTestBase
{
    public string $component = BlockEditor::class;
    public string $expectedView = 'twill::partials.form._block_editor';
}
