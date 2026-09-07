import re

with open('resources/views/donasi.blade.php', 'r') as f:
    content = f.read()

# Replace the static buttons with interactive ones
nominal_html_old = """
                                    <div class="grid grid-cols-2 gap-3 mb-4">
                                        <button class="py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 50.000</button>
                                        <button class="py-3 px-4 rounded-xl border-2 border-[#D62828] bg-red-50 text-[#D62828] font-bold transition-all text-sm">Rp 100.000</button>
                                        <button class="py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 250.000</button>
                                        <button class="py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 500.000</button>
                                    </div>
                                    
                                    <div class="relative mb-6">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <span class="text-gray-500 font-bold">Rp</span>
                                        </div>
                                        <input type="text" placeholder="Nominal Lainnya" class="w-full py-3.5 pl-12 pr-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors">
                                    </div>
"""

nominal_html_new = """
                                    <div class="grid grid-cols-2 gap-3 mb-4" id="nominalButtons">
                                        <button type="button" onclick="selectNominal(this, 50000)" class="nominal-btn py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 50.000</button>
                                        <button type="button" onclick="selectNominal(this, 100000)" class="nominal-btn py-3 px-4 rounded-xl border-2 border-[#D62828] bg-red-50 text-[#D62828] font-bold transition-all text-sm">Rp 100.000</button>
                                        <button type="button" onclick="selectNominal(this, 250000)" class="nominal-btn py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 250.000</button>
                                        <button type="button" onclick="selectNominal(this, 500000)" class="nominal-btn py-3 px-4 rounded-xl border-2 border-gray-100 hover:border-[#D62828] hover:bg-red-50 hover:text-[#D62828] text-[#1B1B1B] font-bold transition-all text-sm">Rp 500.000</button>
                                    </div>
                                    
                                    <div class="relative mb-6">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <span class="text-gray-500 font-bold">Rp</span>
                                        </div>
                                        <input type="number" id="customNominal" onfocus="clearNominalButtons()" placeholder="Nominal Lainnya" class="w-full py-3.5 pl-12 pr-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors">
                                    </div>
"""

# Replace the HTML block
if nominal_html_old.strip() in content:
    pass
# Actually we can just regex it or use replace.
content = content.replace(nominal_html_old, nominal_html_new)
# Let's handle cases where whitespace might be slightly different.
import re
content = re.sub(r'<div class="grid grid-cols-2 gap-3 mb-4">.*?<input type="text" placeholder="Nominal Lainnya".*?</div>\s*</div>', nominal_html_new.strip() + '\n                                </div>', content, flags=re.DOTALL)


js_addition = """
        function selectNominal(btnElement, amount) {
            // Update buttons
            document.querySelectorAll('.nominal-btn').forEach(btn => {
                btn.classList.remove('border-[#D62828]', 'bg-red-50', 'text-[#D62828]');
                btn.classList.add('border-gray-100', 'text-[#1B1B1B]');
            });
            btnElement.classList.remove('border-gray-100', 'text-[#1B1B1B]');
            btnElement.classList.add('border-[#D62828]', 'bg-red-50', 'text-[#D62828]');
            
            // Clear input
            document.getElementById('customNominal').value = '';
        }
        
        function clearNominalButtons() {
            document.querySelectorAll('.nominal-btn').forEach(btn => {
                btn.classList.remove('border-[#D62828]', 'bg-red-50', 'text-[#D62828]');
                btn.classList.add('border-gray-100', 'text-[#1B1B1B]');
            });
        }
"""

content = content.replace('</script>', js_addition + '\n    </script>')

with open('resources/views/donasi.blade.php', 'w') as f:
    f.write(content)

