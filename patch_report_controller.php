<?php

$content = file_get_contents('app/Http/Controllers/ReportController.php');

$userIndex = <<<PHP

    public function userIndex(Request \$request)
    {
        \$year = \$request->query('year', date('Y'));
        
        \$globalDonations = \App\Models\Donation::whereYear('created_at', \$year)
                                              ->where('status', 'Berhasil')
                                              ->count();
                                              
        \$globalNominal = \App\Models\Donation::whereYear('created_at', \$year)
                                            ->where('status', 'Berhasil')
                                            ->sum('amount');
                                            
        \$globalVolunteers = \App\Models\Volunteer::whereYear('created_at', \$year)->count();
        \$globalCampaigns = \App\Models\Campaign::whereYear('created_at', \$year)->count();

        return view('user_laporan', compact(
            'year', 
            'globalDonations', 
            'globalNominal', 
            'globalVolunteers', 
            'globalCampaigns'
        ));
    }
}
PHP;

$content = str_replace("}\n", $userIndex, $content);
file_put_contents('app/Http/Controllers/ReportController.php', $content);
echo "ReportController patched\n";
