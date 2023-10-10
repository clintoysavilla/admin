<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;
use OpenAdmin\Admin\Facades\Admin;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        // Define an array of menu items
        $menuItems = [
            [
                'url' => 'http://127.0.0.1:8000/admin/users',
                'icon' => 'icon-users-cog',
                'title' => 'Users',
            ],
            [
                'url' => 'http://127.0.0.1:8000/admin/teachers',
                'icon' => 'icon-chalkboard-teacher',
                'title' => 'Teachers',
            ],
            [
                'url' => 'http://127.0.0.1:8000/admin/certification-requests',
                'icon' => 'icon-certificate',
                'title' => 'Certification Requests',
            ],
            [
                'url' => 'http://127.0.0.1:8000/admin/form137-requests',
                'icon' => 'icon-envelope-open-text',
                'title' => 'Form-137 Requests',
            ],
            [
                'url' => 'http://127.0.0.1:8000/admin/good-moral-requests',
                'icon' => 'icon-handshake',
                'title' => 'Good Moral Requests',
            ],
            [
                'url' => 'http://127.0.0.1:8000/admin',
                'icon' => 'icon-chart-bar',
                'title' => 'Dashboard',
            ],
        ];

        return $content
            ->css_file(Admin::asset("open-admin/css/pages/dashboard.css"))
            ->title('Dashboard')
            ->row(function (Row $row) use ($menuItems) {
                foreach ($menuItems as $menuItem) {
                    $row->column(4, function (Column $column) use ($menuItem) {
                        // Display menu items as styled cards with internal styling
                        $cardHtml = '<div class="card card-custom text-center" style="width: 15rem; margin-bottom: 20px; padding: 20px; min-height: 200px;">';
                        $cardHtml .= '<a href="' . $menuItem['url'] . '"  class="card-link text-decoration-none">';
                        $cardHtml .= '<div class="card-body">';
                        $cardHtml .= '<i class="' . $menuItem['icon'] . ' icon-custom" style="font-size: 48px; color: #3498db;"></i>';
                        $cardHtml .= '<h5 class="card-title" style="font-size: 24px; color: #333;">' . $menuItem['title'] . '</h5>';
                        $cardHtml .= '</div>';
                        $cardHtml .= '</a>';
                        $cardHtml .= '</div>';

                        $column->append($cardHtml);
                    });
                }
            });
    }
}
