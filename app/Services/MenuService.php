<?php

namespace App\Services;

use Nwidart\Modules\Facades\Module;
use App\Models\MenuCategory;

class MenuService
{
    public static function getMenus($type = 'admin')
    {
        $modules = Module::allEnabled();
        $menus = [];

        // Get predefined categories from the database
        $predefinedCategories = MenuCategory::orderBy('priority')->pluck('priority', 'name')->toArray();

        foreach ($modules as $module) {
            $configPath = module_path($module->getName()) . '/module.json';

            if (!file_exists($configPath)) {
                continue;
            }

            $config = json_decode(file_get_contents($configPath), true);

            if (isset($config['menus'][$type])) {
                foreach ($config['menus'][$type] as $menuItem) {
                    $category = $menuItem['category'] ?? 'Other';
                    $priority = $menuItem['priority'] ?? 999;

                    // Check if category is predefined
                    if (isset($predefinedCategories[$category])) {
                        $categoryPriority = $predefinedCategories[$category];
                    } else {
                        $categoryPriority = 1000; // Unlisted categories go after predefined ones
                    }

                    $menus[$category][] = array_merge($menuItem, [
                        'priority' => $priority,
                        'category_priority' => $categoryPriority
                    ]);
                }
            }
        }

        // Sort categories: Predefined first, others alphabetically
        uksort($menus, function ($a, $b) use ($predefinedCategories) {
            $priorityA = $predefinedCategories[$a] ?? 1000;
            $priorityB = $predefinedCategories[$b] ?? 1000;

            // If both categories are predefined, sort by priority
            if ($priorityA !== $priorityB) {
                return $priorityA <=> $priorityB;
            }

            // If both are non-predefined, sort alphabetically
            return strcasecmp($a, $b);
        });

        // Sort items within each category by priority
        foreach ($menus as $category => &$items) {
            usort($items, fn($a, $b) => $a['priority'] <=> $b['priority']);
        }

        return $menus;
    }
}

