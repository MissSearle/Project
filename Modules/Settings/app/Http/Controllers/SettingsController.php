<?php

namespace Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\Settings;
use Illuminate\Http\Request;
use App\Models\MenuCategory;

class SettingsController extends Controller
{
    public function index()
    {
        $themes = array_map('basename', glob(base_path('Themes/*'), GLOB_ONLYDIR));
        $settings = [
            'site_name' => [
                'value' => Settings::get('site_name'),
                'type' => 'text',
            ],
            'active_theme' => [
                'value' => Settings::get('active_theme'),
                'type' => 'select',
                'options' => $themes,
            ],
            // Add more settings here
        ];
        return view('settings::admin.index', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'key' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);

        Settings::set($request->input('key'), $request->input('value'));

        return redirect()->route('settings.admin.index')->with(['message' => 'Settings updated successfully.', 'type' => 'success']);
    }

    public function editMenu()
    {
        $menus = MenuCategory::all();
        return view('settings::admin.menu', compact('menus'));
    }

    public function updateMenu(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:menu_categories,id',
            'name' => 'required|string|max:255',
            'priority' => 'required|integer',
        ]);

        $menu = MenuCategory::find($request->input('id'));
        $menu->name = $request->input('name');
        $menu->priority = $request->input('priority');
        $menu->save();

        return redirect()->route('settings.admin.editMenu')->with(['message' => 'Menu updated successfully.', 'type' => 'success']);
    }

    public function createMenu(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'priority' => 'required|integer',
        ]);

        MenuCategory::create($request->only('name', 'priority'));

        return redirect()->route('settings.admin.editMenu')->with(['message' => 'Menu created successfully.', 'type' => 'success']);
    }

    public function deleteMenu(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:menu_categories,id',
        ]);

        if (MenuCategory::destroy($request->input('id'))) {
            return redirect()->route('settings.admin.editMenu')->with(['message' => 'Menu deleted successfully.', 'type' => 'success']);
        } else {
            return redirect()->route('settings.admin.editMenu')->with(['message' => 'Failed to delete menu.', 'type' => 'error']);
        }
    }
}
