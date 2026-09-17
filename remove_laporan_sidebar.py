import re
import os

files = [
    'resources/views/account.blade.php',
    'resources/views/dashboard.blade.php',
    'resources/views/explore.blade.php',
    'resources/views/history.blade.php',
    'resources/views/user_relawan.blade.php',
]

pattern = re.compile(r'\s*<button hx-get="/user/laporan".*?</button>', re.DOTALL)

for f in files:
    content = open(f).read()
    new_content = pattern.sub('', content)
    open(f, 'w').write(new_content)
    print("Cleaned " + f)

# Remove the route
web = open('routes/web.php').read()
web = web.replace("    Route::get('/user/laporan', [ReportController::class, 'userIndex'])->name('user.laporan');\n", "")
open('routes/web.php', 'w').write(web)
print("Removed route")

