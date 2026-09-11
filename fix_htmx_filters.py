import re

# 1. Update dashboard.blade.php
with open('resources/views/dashboard.blade.php', 'r') as f:
    dashboard_content = f.read()

# Replace the script block
dashboard_script = """    <script>
        if (!window.dashboardFilterInitialized) {
            window.dashboardFilterInitialized = true;
            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.dashboard-category-btn');
                if (!btn) return;
                
                const programContainer = document.getElementById('dashboardProgramContainer');
                if (!programContainer) return;
                
                const articles = programContainer.querySelectorAll('article');
                const countText = document.getElementById('dashboardProgramCount');
                const category = btn.getAttribute('data-category');
                
                // Update active state
                const allBtns = document.querySelectorAll('.dashboard-category-btn');
                allBtns.forEach(b => {
                    if (b === btn) {
                        b.classList.add('bg-[#D62828]', 'text-white', 'border-[#D62828]');
                        b.classList.remove('bg-white', 'text-[#12355B]', 'border-[#12355B]/10', 'hover:bg-[#F1EEE8]');
                    } else {
                        b.classList.remove('bg-[#D62828]', 'text-white', 'border-[#D62828]');
                        b.classList.add('bg-white', 'text-[#12355B]', 'border-[#12355B]/10', 'hover:bg-[#F1EEE8]');
                    }
                });
                
                let count = 0;
                articles.forEach(article => {
                    const categorySpan = article.querySelector('.absolute.left-3.top-3')?.textContent.toLowerCase() || '';
                    const matchCategory = category === 'all' || categorySpan.includes(category.toLowerCase());
                    
                    if (matchCategory) {
                        article.style.display = 'flex';
                        count++;
                    } else {
                        article.style.display = 'none';
                    }
                });
                if (countText) {
                    countText.textContent = `${count} Program Tersedia`;
                }
            });
        }
    </script>
</body>"""

dashboard_content = re.sub(r'<script>\s*document\.addEventListener\(\'DOMContentLoaded\'.*?</body>', dashboard_script, dashboard_content, flags=re.DOTALL)

with open('resources/views/dashboard.blade.php', 'w') as f:
    f.write(dashboard_content)

# 2. Update explore.blade.php
with open('resources/views/explore.blade.php', 'r') as f:
    explore_content = f.read()

explore_script = """    <script>
        if (!window.exploreFilterInitialized) {
            window.exploreFilterInitialized = true;
            
            // For Search inputs (Input event)
            document.addEventListener('input', function(e) {
                if (e.target.id === 'mobileSearchInput' || e.target.id === 'desktopSearchInput') {
                    window.exploreCurrentSearch = e.target.value.toLowerCase();
                    // sync the other input
                    const otherId = e.target.id === 'mobileSearchInput' ? 'desktopSearchInput' : 'mobileSearchInput';
                    const otherInput = document.getElementById(otherId);
                    if (otherInput && otherInput.value !== e.target.value) {
                        otherInput.value = e.target.value;
                    }
                    if(typeof window.executeExploreFilter === 'function') window.executeExploreFilter();
                }
            });

            // For Category Buttons (Click event)
            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.category-filter-btn');
                if (!btn) return;
                
                const category = btn.getAttribute('data-category');
                if (window.exploreCurrentCategory === category) {
                    window.exploreCurrentCategory = 'all';
                } else {
                    window.exploreCurrentCategory = category;
                }
                
                // Update active state
                const categoryBtns = document.querySelectorAll('.category-filter-btn');
                categoryBtns.forEach(b => {
                    const bCat = b.getAttribute('data-category');
                    if (bCat === window.exploreCurrentCategory) {
                        b.classList.add('bg-red-50', 'border-[#D62828]', 'text-[#D62828]');
                        b.classList.remove('bg-white', 'text-[#12355B]', 'border-[#12355B]/10');
                        b.querySelector('svg').classList.remove('text-[#12355B]');
                        b.querySelector('svg').classList.add('text-[#D62828]');
                    } else {
                        b.classList.remove('bg-red-50', 'border-[#D62828]', 'text-[#D62828]');
                        b.classList.add('bg-white', 'text-[#12355B]', 'border-[#12355B]/10');
                        b.querySelector('svg').classList.remove('text-[#D62828]');
                        b.querySelector('svg').classList.add('text-[#12355B]');
                    }
                });
                if(typeof window.executeExploreFilter === 'function') window.executeExploreFilter();
            });
        }

        // We run this outside so if page is swapped we reset variables for this page instance
        window.exploreCurrentCategory = 'all';
        window.exploreCurrentSearch = '';

        window.executeExploreFilter = function() {
            const articles = document.querySelectorAll('.explore-item');
            let count = 0;
            articles.forEach(article => {
                const title = (article.querySelector('h3') || article.querySelector('p'))?.textContent.toLowerCase() || '';
                const desc = article.querySelector('p.line-clamp-2.text-[#62758A]')?.textContent.toLowerCase() || '';
                const categorySpan = article.querySelector('.category-badge')?.textContent.toLowerCase() || '';
                
                const matchSearch = title.includes(window.exploreCurrentSearch) || desc.includes(window.exploreCurrentSearch);
                const matchCategory = window.exploreCurrentCategory === 'all' || categorySpan.includes(window.exploreCurrentCategory.toLowerCase());
                
                if (matchSearch && matchCategory) {
                    article.style.display = 'flex';
                    count++;
                } else {
                    article.style.display = 'none';
                }
            });
            const countText = document.getElementById('exploreProgramCount');
            if (countText) {
                countText.textContent = `Menampilkan ${count} Program`;
            }
        };
        // Initial run for when swapped in
        window.executeExploreFilter();
    </script>
</body>"""

explore_content = re.sub(r'<script>\s*\(\(\) => \{.*?</body>', explore_script, explore_content, flags=re.DOTALL)

with open('resources/views/explore.blade.php', 'w') as f:
    f.write(explore_content)

print("Filters fixed successfully.")
