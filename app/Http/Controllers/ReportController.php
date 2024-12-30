<?php
// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generateDashboardPdf()
    {
        // Data untuk PDF
        $data = [
            'user_name' => 'Fauzan',
            'inbox_count' => 23,
            'visits' => '45K+',
            'views' => '78K+',
            'comments' => [
                [
                    'name' => 'Diaz',
                    'comment' => 'MANAWI',
                    'created_at' => now()->subDays(2),
                ],
                [
                    'name' => 'Bin',
                    'comment' => 'infokan servis layar leptop termurah woilah cik',
                    'created_at' => now()->subDays(1),
                ],
            ],
        ];        
        
        // Load view untuk PDF
        $pdf = Pdf::loadView('pdf.dashboard-report', $data);

        // Unduh PDF
        return $pdf->download('dashboard-report.pdf');
    }
}

