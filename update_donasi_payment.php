<?php

$file = 'resources/views/donasi.blade.php';
$content = file_get_contents($file);

// Replace the programInput hidden field to store ID and add title
$content = str_replace(
    '<input type="hidden" id="programInput" name="program" value="{{ $campaigns->first()->slug ?? \'umum\' }}">',
    '<input type="hidden" id="programInput" name="program" value="{{ $campaigns->first()->id ?? 1 }}">'."\n".'                                        <input type="hidden" id="programTitle" value="{{ $campaigns->first()->name ?? \'Program Donasi\' }}">',
    $content
);

// Update selectProgram JS to set id and title instead of slug
$content = str_replace(
    'function selectProgram(slug, name) {
            const input = document.getElementById(\'programInput\');
            if (input) input.value = slug;',
    'function selectProgram(id, slug, name) {
            const input = document.getElementById(\'programInput\');
            if (input) input.value = id;
            const titleInput = document.getElementById(\'programTitle\');
            if (titleInput && name) titleInput.value = name;',
    $content
);

// Update the onclick in program cards to pass ID
// Currently it is onclick="selectProgram('{{ $campaign->slug }}', '{{ $campaign->name }}')"
$content = str_replace(
    'onclick="selectProgram(\'{{ $campaign->slug }}\', \'{{ $campaign->name }}\')"',
    'onclick="selectProgram(\'{{ $campaign->id }}\', \'{{ $campaign->slug }}\', \'{{ $campaign->name }}\')"',
    $content
);

// Update Lanjutkan Pembayaran button
$content = str_replace(
    '<button class="w-full py-4 rounded-2xl bg-[#D62828] text-white font-extrabold text-sm hover:bg-[#B91C1C] transition-colors shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:-translate-y-0.5" onclick="window.location.href=\'/login\'">Lanjutkan Pembayaran</button>',
    '<button class="w-full py-4 rounded-2xl bg-[#D62828] text-white font-extrabold text-sm hover:bg-[#B91C1C] transition-colors shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:-translate-y-0.5" onclick="prosesPembayaran()">Lanjutkan Pembayaran</button>',
    $content
);

// Add prosesPembayaran logic
$jsScript = '
        let selectedAmount = 0;
        function selectNominal(btnElement, amount) {
            selectedAmount = amount;
            // Update buttons
            document.querySelectorAll(\'.nominal-btn\').forEach(btn => {
                btn.classList.remove(\'border-[#D62828]\', \'bg-red-50\', \'text-[#D62828]\');
                btn.classList.add(\'border-gray-100\', \'text-[#1B1B1B]\');
            });
            btnElement.classList.remove(\'border-gray-100\', \'text-[#1B1B1B]\');
            btnElement.classList.add(\'border-[#D62828]\', \'bg-red-50\', \'text-[#D62828]\');
            
            // Clear input
            document.getElementById(\'customNominal\').value = \'\';
        }
        
        function clearNominalButtons() {
            selectedAmount = 0;
            document.querySelectorAll(\'.nominal-btn\').forEach(btn => {
                btn.classList.remove(\'border-[#D62828]\', \'bg-red-50\', \'text-[#D62828]\');
                btn.classList.add(\'border-gray-100\', \'text-[#1B1B1B]\');
            });
        }
        
        function prosesPembayaran() {
            let nominal = document.getElementById(\'customNominal\').value;
            if (!nominal || nominal <= 0) {
                nominal = selectedAmount;
            }
            if (!nominal || nominal <= 0) {
                alert("Silakan pilih atau masukkan nominal donasi");
                return;
            }
            
            let campaignId = document.getElementById(\'programInput\').value;
            let title = document.getElementById(\'programTitle\').value;
            
            window.location.href = `/pembayaran?nominal=${nominal}&campaign_id=${campaignId}&payment=QRIS&category=Donasi&title=${encodeURIComponent(title)}`;
        }
';

// Replace all multiple occurrences of selectNominal with just one
$content = preg_replace('/function selectNominal.*?function clearNominalButtons.*?}/s', '', $content);

// Add the JS block right before </body>
$content = str_replace('</body>', "<script>\n".$jsScript."\n</script>\n</body>", $content);

file_put_contents($file, $content);
echo "Updated $file\n";
