<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\File;
use Statamic\View\ViewModel;

class UIIcons extends ViewModel
{
    public function data(): array
    {
        return [
            'icons' => collect(File::files(statamic_path('packages/ui/icons')))
                ->map(function ($file) {
                    return $file->getFilenameWithoutExtension();
                })
                ->all(),
        ];
    }
}
