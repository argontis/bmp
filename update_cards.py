import re

with open('resources/views/donasi.blade.php', 'r') as f:
    content = f.read()

# Card 1: Bencana
content = content.replace(
    '<!-- Card Program Mendesak -->\n                                <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100 flex flex-col sm:flex-row gap-6 hover:-translate-y-1 transition-transform duration-300">',
    '<!-- Card Program Mendesak -->\n                                <div id="card-bencana" onclick="selectProgram(\'bencana\')" class="program-card cursor-pointer bg-white rounded-3xl p-6 shadow-xl border-2 border-transparent hover:border-[#D62828]/30 flex flex-col sm:flex-row gap-6 hover:-translate-y-1 transition-all duration-300 ring-2 ring-[#D62828]">'
)

# Card 2: Guru
content = content.replace(
    '<!-- Card Program Umum -->\n                                <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col sm:flex-row gap-6 hover:shadow-md transition-shadow">',
    '<!-- Card Program Umum -->\n                                <div id="card-guru" onclick="selectProgram(\'guru\')" class="program-card cursor-pointer bg-white rounded-3xl p-6 shadow-sm border-2 border-transparent hover:border-[#D62828]/30 flex flex-col sm:flex-row gap-6 hover:-translate-y-1 transition-all duration-300">'
)

# Card 3: Lingkungan
content = content.replace(
    '<!-- Card Program Umum 2 -->\n                                <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col sm:flex-row gap-6 hover:shadow-md transition-shadow">',
    '<!-- Card Program Umum 2 -->\n                                <div id="card-lingkungan" onclick="selectProgram(\'lingkungan\')" class="program-card cursor-pointer bg-white rounded-3xl p-6 shadow-sm border-2 border-transparent hover:border-[#D62828]/30 flex flex-col sm:flex-row gap-6 hover:-translate-y-1 transition-all duration-300">'
)

# Also add JS function before </body>
js = """
    <script>
        function selectProgram(val) {
            // Update select dropdown
            const select = document.getElementById('programSelect');
            if (select) {
                select.value = val;
            }
            highlightCard(val);
        }
        
        function highlightCard(val) {
            // Reset all cards
            document.querySelectorAll('.program-card').forEach(card => {
                card.classList.remove('ring-2', 'ring-[#D62828]', 'shadow-xl');
                card.classList.add('shadow-sm');
                card.classList.remove('border-transparent');
                card.classList.add('border-gray-100');
            });
            
            // Highlight selected
            const activeCard = document.getElementById('card-' + val);
            if (activeCard) {
                activeCard.classList.remove('shadow-sm', 'border-gray-100');
                activeCard.classList.add('ring-2', 'ring-[#D62828]', 'shadow-xl', 'border-transparent');
            }
        }
        
        // Initialize highlight on load if needed based on select value
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('programSelect');
            if (select && select.value) {
                // If it's a value that has a card, highlight it, otherwise remove all highlights
                highlightCard(select.value);
            }
        });
    </script>
"""

content = content.replace('</body>', js + '\n</body>')

with open('resources/views/donasi.blade.php', 'w') as f:
    f.write(content)

