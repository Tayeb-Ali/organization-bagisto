<?php

namespace DOCore\Organization\Widgets;

use Arrilot\Widgets\AbstractWidget;
//use DOCore\Organization\Models\{MODEL-NAME};

class MainWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //$recents = {MODEL-NAME}::orderBy('created_at', 'desc')->take(2)->get();
        $recents = 'Test Widget';

        return view('organization::widgets.mainwidget', [
            'config' => $this->config,
            'recents' => $recents
        ]);
    }
}
