<div id="desktopDonationModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-[#102A47]/60 p-4 backdrop-blur-sm transition-opacity duration-300">
    <div class="w-full max-w-lg rounded-3xl bg-[#FBFAF7] p-6 sm:p-8 shadow-2xl relative" onclick="event.stopPropagation();">
        <div class="flex items-start justify-between pb-4 border-b border-[#12355B]/10">
            <div>
                <span id="desktop-modal-category" class="text-[10px] font-extrabold uppercase tracking-wider text-[#D62828]">Kesehatan</span>
                <h3 id="desktop-modal-title" class="font-['Plus_Jakarta_Sans'] text-lg font-extrabold text-[#12355B] leading-snug">Terapi Medis Gratis (Listrik &amp; Laser) &amp; Pengobatan Pasien Bawaan</h3>
            </div>
            <button onclick="closeDesktopDonationModal()" class="rounded-full p-1 text-[#62758A] hover:bg-[#E5E0D8]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
            </button>
        </div>
        <div class="mt-6 space-y-5">
            <div>
                <label class="block text-xs font-bold text-[#12355B] mb-2">Pilih Nominal Donasi</label>
                <div class="grid grid-cols-3 gap-2">
                    <button data-value="25000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">Rp 25.000</button>
                    <button data-value="50000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">Rp 50.000</button>
                    <button data-value="100000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#D62828] bg-[#FFF1F1] text-[#D62828]">Rp 100.000</button>
                    <button data-value="250000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">Rp 250.000</button>
                    <button data-value="500000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">Rp 500.000</button>
                    <button data-value="1000000" class="desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">Rp 1.000.000</button>
                </div>
            </div>
            <div>
                <label class="block text-xs font-bold text-[#12355B] mb-1.5">Atau Masukkan Nominal Lain</label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 font-bold text-xs text-[#12355B]">Rp</span>
                    <input type="number" id="desktop-custom-nominal" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-4 text-sm font-bold text-[#12355B] outline-none focus:border-[#D62828]" placeholder="Nominal lain">
                </div>
            </div>
            <div>
                <label class="block text-xs font-bold text-[#12355B] mb-2">Metode Pembayaran Instant</label>
                <div class="grid grid-cols-2 gap-2">
                    <button data-value="QRIS" class="desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B] bg-[#12355B] text-white"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>QRIS / All E-Wallet</button>
                    <button data-value="GOPAY" class="desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B]/10 bg-white text-[#12355B]"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>GoPay / OVO / ShopeePay</button>
                    <button data-value="VA_BCA" class="desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B]/10 bg-white text-[#12355B]"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>Virtual Account BCA</button>
                    <button data-value="TRANSFER_BANK" class="desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B]/10 bg-white text-[#12355B]"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>Mandiri / BSI / BRI</button>
                </div>
            </div>
            <div class="rounded-xl bg-[#F1EEE8] p-3 text-[11px] text-[#62758A] flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check text-[#16A34A] shrink-0"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                Donasi Anda terlindungi sistem keamanan enkripsi 256-bit Bakti Merah Putih.
            </div>
            <button id="desktop-lanjutkan-btn" onclick="window.location.href='/pembayaran'" class="w-full rounded-xl bg-[#D62828] py-4 text-sm font-bold text-white shadow-md transition hover:bg-[#b91e26] active:scale-95">Lanjutkan Pembayaran Rp 100.000</button>
        </div>
    </div>
</div>

<script>
window.activeCampaignId = null;

function openDesktopDonationModal(category = 'Kesehatan', title = 'Donasi Program Kebaikan', campaignId = null) {
    const modal = document.getElementById('desktopDonationModal');
    if (modal) {
        window.activeCampaignId = campaignId;
        document.getElementById('desktop-modal-category').innerText = category;
        document.getElementById('desktop-modal-title').innerText = title;
        modal.classList.remove('hidden');
    }
}

function closeDesktopDonationModal() {
    const modal = document.getElementById('desktopDonationModal');
    if (modal) {
        modal.classList.add('hidden');
    }
}

// Close when clicking outside
(function initDesktopDonationModal() {
    const modal = document.getElementById('desktopDonationModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeDesktopDonationModal();
            }
        });
    }

    // Logic for Desktop Modal
    const desktopNominalBtns = document.querySelectorAll('.desktop-nominal-btn');
    const desktopCustomNominal = document.getElementById('desktop-custom-nominal');
    const desktopLanjutkanBtn = document.getElementById('desktop-lanjutkan-btn');
    const desktopPaymentBtns = document.querySelectorAll('.desktop-payment-btn');
    let dSelectedNominal = 100000;
    let dSelectedPayment = 'QRIS';
    
    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
    }
    
    function updateDesktopUI() {
        desktopNominalBtns.forEach(btn => {
            const val = parseInt(btn.dataset.value);
            if (val === dSelectedNominal && !desktopCustomNominal.value) {
                btn.className = "desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#D62828] bg-[#FFF1F1] text-[#D62828]";
            } else {
                btn.className = "desktop-nominal-btn rounded-xl border py-2.5 text-xs font-bold transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30";
            }
        });
        
        desktopPaymentBtns.forEach(btn => {
            const val = btn.dataset.value;
            if (val === dSelectedPayment) {
                btn.className = "desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B] bg-[#12355B] text-white";
            } else {
                btn.className = "desktop-payment-btn flex items-center gap-2 rounded-xl border p-3 text-left text-xs font-semibold transition border-[#12355B]/10 bg-white text-[#12355B]";
            }
        });
        
        desktopLanjutkanBtn.innerHTML = `Lanjutkan Pembayaran ${formatRupiah(dSelectedNominal)}`;
        const categoryText = document.getElementById('desktop-modal-category').innerText;
        const titleText = document.getElementById('desktop-modal-title').innerText;
        desktopLanjutkanBtn.setAttribute('onclick', `window.location.href='/pembayaran?nominal=${dSelectedNominal}&payment=${dSelectedPayment}&category=${encodeURIComponent(categoryText)}&title=${encodeURIComponent(titleText)}&campaign_id=${window.activeCampaignId}'`);
    }
    
    desktopNominalBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            dSelectedNominal = parseInt(e.currentTarget.dataset.value);
            desktopCustomNominal.value = '';
            updateDesktopUI();
        });
    });
    
    desktopCustomNominal.addEventListener('input', (e) => {
        const val = parseInt(e.target.value);
        if (!isNaN(val) && val > 0) {
            dSelectedNominal = val;
        } else {
            dSelectedNominal = 0;
        }
        updateDesktopUI();
    });
    
    desktopPaymentBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const targetBtn = e.currentTarget;
            dSelectedPayment = targetBtn.dataset.value;
            updateDesktopUI();
        });
    });
    
    updateDesktopUI();
})();
</script>
