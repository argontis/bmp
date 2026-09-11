import re

# 1. Update DashboardController to include withSum('donations', 'amount')
with open('app/Http/Controllers/DashboardController.php', 'r') as f:
    controller = f.read()
controller = controller.replace("Campaign::latest()->take(4)->get();", "Campaign::withSum('donations', 'amount')->where('status', 'Aktif')->latest()->take(5)->get();")
with open('app/Http/Controllers/DashboardController.php', 'w') as f:
    f.write(controller)

print("Dashboard controller updated.")
