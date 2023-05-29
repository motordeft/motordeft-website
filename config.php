<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => env('BASE_URL','http://localhost:3000'),
    'production' => false,
    'siteName' => 'Motordeft Valuers and Assessors Limited',
    'siteDescription' => 'Experts in Full Mechanical Valuation, Motor Vehicle Valuation & Motor Claims Assessment With presence in Nairobi, Rift Valley, Coastal Region, Nyanza, Western, Mt. Kenya Region',

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
