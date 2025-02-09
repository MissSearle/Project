<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ThemeAssetController extends Controller
{
    public function serve($theme, $path)
    {
        $fullPath = base_path("Themes/{$theme}/assets/{$path}");

        if (!\Illuminate\Support\Facades\File::exists($fullPath)) {
            abort(404, 'Asset not found.');
        }

        $extension = pathinfo($fullPath, PATHINFO_EXTENSION);

        // Default detection
        $mimeType = \Illuminate\Support\Facades\File::mimeType($fullPath);

        // Force correct mime types for known extensions
        switch ($extension) {
            case 'css':
                $mimeType = 'text/css';
                break;
            case 'js':
                $mimeType = 'application/javascript';
                break;
                // You could add cases for .svg, .woff, etc., if needed
        }

        return response()->file($fullPath, [
            'Content-Type' => $mimeType
        ]);
    }

}
