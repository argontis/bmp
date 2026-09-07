import re

with open('resources/views/donasi.blade.php', 'r') as f:
    content = f.read()

# 1. Replace the dropdown HTML
dropdown_old = """                                    <div class="mb-6">
                                        <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Pilih Program Donasi</label>
                                        <div class="relative">
                                            <select id="programSelect" onchange="highlightCard(this.value)" class="w-full py-3.5 pl-4 pr-10 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors appearance-none cursor-pointer">
                                                <option value="umum">Donasi Reguler Umum</option>
                                                <option value="guru">Bakti Guru Pelosok</option>
                                                <option value="pendidikan">Bakti Pendidikan (Beasiswa)</option>
                                                <option value="lingkungan">Bakti Lingkungan</option>
                                                <option value="kesehatan">Bakti Kesehatan</option>
                                                <option value="pangan">Bakti Pangan & Gizi</option>
                                                <option value="bencana">Bakti Bencana</option>
                                            </select>
                                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down w-4 h-4 text-gray-500"><path d="m6 9 6 6 6-6"></path></svg>
                                            </div>
                                        </div>
                                    </div>"""

dropdown_new = """                                    <div class="mb-6">
                                        <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Program Pilihan</label>
                                        <div id="selectedProgramLabel" class="w-full py-3.5 px-4 rounded-xl bg-red-50 border border-[#D62828]/20 text-[#D62828] font-bold text-[15px] flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-5 h-5 fill-current"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                                            <span>Donasi Reguler Umum</span>
                                        </div>
                                        <input type="hidden" id="programInput" name="program" value="umum">
                                    </div>"""

if dropdown_old in content:
    content = content.replace(dropdown_old, dropdown_new)
else:
    # Use regex if spacing is different
    content = re.sub(r'<div class="mb-6">\s*<label class="block text-sm font-bold text-\[\#1B1B1B\] mb-2">Pilih Program Donasi</label>.*?</div>\s*</div>\s*</div>', dropdown_new, content, flags=re.DOTALL)

# 2. Update JavaScript
js_old = """        function selectProgram(val) {
            // Update select dropdown
            const select = document.getElementById('programSelect');
            if (select) {
                select.value = val;
            }
            highlightCard(val);
        }"""

js_new = """        const programNames = {
            'umum': 'Donasi Reguler Umum',
            'bencana': 'Bantuan Bencana Cianjur',
            'guru': 'Bakti Guru Pelosok',
            'lingkungan': 'Pembangunan Sumur Bor'
        };

        function selectProgram(val) {
            const input = document.getElementById('programInput');
            if (input) input.value = val;
            
            const labelSpan = document.querySelector('#selectedProgramLabel span');
            if (labelSpan && programNames[val]) {
                labelSpan.textContent = programNames[val];
            }
            
            highlightCard(val);
        }"""

content = content.replace(js_old, js_new)

# Remove the DOMContentLoaded listener part that highlights select.value
js_init_old = """        // Initialize highlight on load if needed based on select value
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('programSelect');
            if (select && select.value) {
                // If it's a value that has a card, highlight it, otherwise remove all highlights
                highlightCard(select.value);
            }
        });"""

content = content.replace(js_init_old, "")

with open('resources/views/donasi.blade.php', 'w') as f:
    f.write(content)

