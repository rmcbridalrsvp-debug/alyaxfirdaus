<?php
// PHP to handle guest personalization via URL: index.php?guest=Dato+Azman
//$guestName = isset($_GET['guest']) ? htmlspecialchars($_GET['guest']) : "Our Valued Guest";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of Alya & Firdaus</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Montserrat:wght@200;300;400&family=Amiri&display=swap" rel="stylesheet">
    
    <style>
        [x-cloak] { display: none !important; }
        /* Background updated to a soft Sage-tinged Nude */
        body { font-family: 'Montserrat', sans-serif; background-color: #F7F8F2; color: #4A5D4E; scroll-behavior: smooth; }
        .serif { font-family: 'Playfair Display', serif; }
        .jawi { font-family: 'Amiri', serif; }
        
        /* New English Theme: Deep Sage and Champagne Blush */
        .bg-sage { background-color: #8A9A5B; }
        .text-sage { color: #6B7A48; }
        .border-sage { border-color: #8A9A5B; }
        
        .bg-blush { background-color: #F5E1DA; }
        .text-blush { color: #D4A396; }

        /* Drape Element: Organic Wave Shape */
        .drape-overlay {
            background: linear-gradient(180deg, rgba(138, 154, 91, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .hero-gradient {
            background: linear-gradient(rgba(247, 248, 242, 0.75), rgba(247, 248, 242, 0.75)), 
                        url('bg1.jpg');
            background-size: cover;
            background-position: center;
        }
		
		.hero-gradient2 {
            background: linear-gradient(rgba(247, 248, 242, 0.75), rgba(247, 248, 242, 0.75)), 
                        url('bg2.jpg');
            background-size: cover;
            background-position: center;
        }

        .no-scroll { overflow: hidden; height: 100vh; }
        
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 1.5s ease-out; }

        /* Custom Scrollbar - Themed to Sage */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #F7F8F2; }
        ::-webkit-scrollbar-thumb { background: #8A9A5B; border-radius: 10px; }

        /* Glassmorphism for Navigation */
        .nav-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(138, 154, 91, 0.2);
        }
    </style>
</head>
<body x-data="weddingApp()" :class="{ 'no-scroll': !opened }">

    <div x-show="!opened" 
         x-transition:leave="transition ease-in duration-1000"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[100] bg-[#F7F8F2] flex flex-col items-center justify-center text-center p-6">
        
        <div class="fade-up">
            <p class="uppercase tracking-[0.5em] text-[10px] mb-12 text-sage opacity-70">The Wedding of</p>
            <h1 class="serif text-3xl mb-4 text-[#4A5D4E]">Alya & Firdaus</h1>
            <p class="text-[11px] tracking-[0.4em] text-sage uppercase font-light">3rd April 2026</p>
        </div>

        <button @click="openInvitation()" 
                class="mt-16 group flex flex-col items-center gap-4 focus:outline-none">
            <div class="w-28 h-28 md:w-36 md:h-36 rounded-full border-2 border-sage/20 flex items-center justify-center bg-white shadow-2xl group-hover:scale-105 transition-all duration-700 overflow-hidden p-3 relative">
                <img src="logo.png" alt="AF Logo" class="w-full h-full object-contain z-10">
                <div class="absolute inset-0 bg-gradient-to-tr from-sage/5 to-transparent"></div>
            </div>
            <p class="text-[9px] uppercase tracking-[0.3em] text-sage animate-pulse font-bold mt-2">Open Invitation</p>
        </button>
    </div>

    <section class="h-screen flex flex-col items-center justify-center text-center px-6 hero-gradient relative">
        <div class="w-28 h-28 md:w-36 md:h-36 rounded-full border-2 border-sage/30 flex items-center justify-center transition-all duration-700 overflow-hidden p-3 mb-4 bg-white/40 backdrop-blur-sm">
                <img src="logo.png" alt="AF Logo" class="w-full h-full object-contain">
        </div>
        <p class="uppercase tracking-[0.4em] text-[10px] mb-8 text-sage opacity-80">Until the End of Time</p>
        <h1 class="serif text-4xl md:text-7xl mb-6 leading-tight text-[#4A5D4E]">Alya Nur Shahira<br>&<br>Mohd Firdaus</h1>
        <p class="text-lg tracking-[0.3em] border-y border-sage/20 py-2 inline-block px-10 text-sage">03 . 04 . 2026</p>
        <div class="mt-12 animate-bounce text-sage font-light text-xs tracking-widest">SCROLL</div>
    </section>

    <section class="min-h-screen flex flex-col items-center justify-center text-center px-6 py-24 hero-gradient2 drape-overlay">
        <h2 class="jawi text-4xl mb-10 text-sage">بِسْمِ ٱللَّهِ ٱلرَّحْمَـٰنِ ٱلرَّحِيمِ</h2>
        <p class="mb-12 italic serif text-xl text-sage opacity-80 max-w-lg leading-relaxed">We request the pleasure of your presence at our wedding ceremony</p>
        
        <h3 class="serif text-3xl md:text-5xl mb-4 text-[#4A5D4E] leading-snug uppercase tracking-wide">Alya Nur Shahira<br>&<br>Mohd Firdaus</h3>
        <p class="text-[10px] tracking-[0.2em] mb-16 text-sage/60 uppercase font-semibold">A Daughter of Zunaidi Ali and Azita Ngah</p>

        <div class="space-y-4 mb-14 text-lg text-[#4A5D4E]">
            <p class="font-semibold uppercase text-sm tracking-widest">Friday, 3rd of April 2026</p>
            <p class="serif italic opacity-70">At 8:00 PM Onwards</p>
        </div>

        <div class="bg-sage/10 px-10 py-4 rounded-full inline-block border border-sage/20 shadow-sm">
            <p class="text-[10px] tracking-widest uppercase font-bold text-sage">Theme: CHAMPAGNE BLUSH</p>
        </div>
    </section>

    <section class="py-24 px-6 text-center bg-[#F7F8F2]">
        <div class="max-w-md mx-auto bg-white p-12 rounded-[2.5rem] shadow-xl shadow-sage/5 mb-20 border border-sage/10">
            <p class="uppercase text-[10px] tracking-[0.4em] mb-4 text-sage opacity-60">Guest of Honor</p>
            <h4 class="serif text-3xl mb-4 text-[#4A5D4E]"><?php echo $guestName; ?></h4>
            <p class="text-[9px] text-sage italic font-medium tracking-widest leading-relaxed uppercase">Kindly show your QR ticket upon arrival</p>
        </div>

        <h2 class="serif text-4xl mb-12 italic text-sage opacity-60 font-light">To Have & To Hold</h2>
        
        <div class="flex justify-center gap-8 md:gap-16 mb-24">
            <template x-for="(val, label) in countdown" :key="label">
                <div class="flex flex-col items-center">
                    <span class="text-4xl md:text-6xl font-light serif text-[#4A5D4E]" x-text="val">00</span>
                    <span class="text-[9px] uppercase tracking-[0.3em] text-sage mt-3" x-text="label"></span>
                </div>
            </template>
        </div>

        <div class="max-w-lg mx-auto text-left border-l-2 border-dashed border-sage/30 pl-10 space-y-12 relative">
            <h3 class="serif text-3xl mb-12 -ml-10 bg-[#F7F8F2] pr-6 inline-block text-[#4A5D4E]">Ceremony Timeline</h3>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">7:45 PM</strong> — Guest Arrival & Registration</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">8:30 PM</strong> — Solemnization Begins</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">9:15 PM</strong> — Solemnization Ends</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">9:30 PM</strong> — Dinner is Served & Live Music</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">9:45 PM</strong> — Reception Begins</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">10:30 PM</strong> — Reception Ends</div>
            <div class="relative"><span class="absolute -left-[45px] top-1 w-2 h-2 rounded-full bg-sage"></span><strong class="text-sm tracking-tighter">11:00 PM</strong> — Closure</div>
        </div>
    </section>

    <section class="py-24 px-6 bg-white drape-overlay" x-init="fetchWishes()">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="serif text-4xl mb-12 text-[#4A5D4E]">Well Wishes</h2>
            <div class="grid gap-8">
                <template x-for="wish in wishes" :key="wish.message">
                    <div class="p-8 bg-sage/5 rounded-[2rem] text-left border border-sage/10 shadow-sm">
                        <p class="italic text-gray-700 mb-4 font-light leading-relaxed text-sm">" <span x-text="wish.message"></span> "</p>
                        <p class="text-[10px] uppercase tracking-[0.2em] font-bold text-sage">— <span x-text="wish.name"></span></p>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 nav-glass px-8 py-5 rounded-full shadow-2xl flex gap-6 md:gap-10 z-40 overflow-x-auto max-w-[95%] no-scrollbar">
        <button @click="modal = 'rsvp'" class="text-[9px] font-bold tracking-widest uppercase hover:text-sage transition text-[#4A5D4E]">RSVP</button>
        <button @click="modal = 'dresscode'" class="text-[9px] font-bold tracking-widest uppercase hover:text-sage transition text-[#4A5D4E]">Dress</button>
        <button @click="modal = 'location'" class="text-[9px] font-bold tracking-widest uppercase hover:text-sage transition text-[#4A5D4E]">Venue</button>
        <button @click="modal = 'calendar'" class="text-[9px] font-bold tracking-widest uppercase hover:text-sage transition text-[#4A5D4E]">Save</button>
        <button @click="modal = 'contact'" class="text-[9px] font-bold tracking-widest uppercase hover:text-sage transition text-[#4A5D4E]">Contact</button>
    </div>

    <div x-show="modal === 'rsvp'" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-sage/20 backdrop-blur-sm" x-cloak>
        <div @click.away="modal = null" class="bg-white rounded-[2.5rem] max-w-lg w-full p-10 shadow-2xl relative" x-data="{ sent: false }">
            <div x-show="!sent">
                <h2 class="serif text-4xl mb-2 text-[#4A5D4E]">RSVP</h2>
                <form @submit.prevent="submitRSVP($el); sent = true;" class="space-y-6 mt-8">
                    <input type="text" name="name" value="<?php echo $guestName == 'Our Valued Guest' ? '' : $guestName; ?>" placeholder="Full Name" class="w-full border-b border-sage/20 p-3 outline-none focus:border-sage bg-transparent text-[#4A5D4E]" required>
                    <div class="grid grid-cols-2 gap-6">
                        <select name="attendance" class="w-full border-b border-sage/20 p-3 outline-none bg-transparent text-xs text-sage uppercase tracking-widest">
                            <option value="yes">Will Attend</option>
                            <option value="no">Declined</option>
                        </select>
                        <input type="number" name="guests" placeholder="Pax" class="w-full border-b border-sage/20 p-3 outline-none bg-transparent text-sm">
                    </div>
                    <textarea name="message" placeholder="A wish for the couple..." class="w-full border-b border-sage/20 p-3 outline-none focus:border-sage bg-transparent text-sm" rows="3"></textarea>
                    <button type="submit" class="w-full bg-sage text-white py-5 rounded-full font-bold tracking-widest uppercase text-[10px] shadow-lg shadow-sage/30 hover:bg-[#6B7A48] transition-colors">Submit RSVP</button>
                </form>
            </div>
            <div x-show="sent" class="text-center py-10">
                <h2 class="serif text-3xl mb-4 text-[#4A5D4E]">Thank You</h2>
                <p class="text-sage italic mb-8">Your response has been saved.</p>
                <button @click="modal = null; sent = false" class="text-[10px] uppercase tracking-widest border-b border-sage text-sage pb-1">Close</button>
            </div>
        </div>
    </div>

    <div x-show="modal === 'dresscode'" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-sage/20 backdrop-blur-sm" 
     x-cloak>
    
    <div @click.away="modal = null" 
         class="bg-white rounded-[2.5rem] max-w-sm w-full shadow-2xl flex flex-col max-h-[85vh]">
        
        <div class="p-8 md:p-10 overflow-y-auto custom-scrollbar text-center">
            
            <h2 class="serif text-4xl mb-6 text-[#4A5D4E]">Dresscode</h2>

            <div class="rounded-2xl overflow-hidden mb-4 border border-sage/10 relative">
                <img src="lelaki.png" class="w-full h-auto object-cover opacity-90">
                <div class="flex h-6">
                    <div class="flex-1 bg-[#8A9A5B]"></div>
                    <div class="flex-1 bg-[#E8D7C5]"></div>
                    <div class="flex-1 bg-[#F5E1DA]"></div>
                </div>
            </div>
            <p class="text-[10px] uppercase tracking-widest font-bold text-[#4A5D4E]">Lelaki</p>
            <p class="text-[9px] text-sage mt-2 mb-8 leading-relaxed px-4 italic">
                We invite you to wear <br>
                <strong>COMPLETE SET OF NUDE BAJU MELAYU WITH SONGKOK, SAMPIN & SHOES</strong>
            </p>
            
            <div class="h-px w-10 bg-sage/20 mx-auto mb-8"></div>

            <div class="rounded-2xl overflow-hidden mb-4 border border-sage/10 relative">
                <img src="Perempuan.png" class="w-full h-auto object-cover opacity-90">
                <div class="flex h-6">
                    <div class="flex-1 bg-[#8A9A5B]"></div>
                    <div class="flex-1 bg-[#E8D7C5]"></div>
                    <div class="flex-1 bg-[#F5E1DA]"></div>
                </div>
            </div>
            <p class="text-[10px] uppercase tracking-widest font-bold text-[#4A5D4E]">Perempuan</p>
            <p class="text-[9px] text-sage mt-2 mb-4 leading-relaxed px-4 italic">
                We invite you to wear <br>
                <strong>COMPLETE SET WITH NUDE COLOR OF BAJU KURUNG, KEBAYA & LONG DRESS WITH SHAWL AND SHOES</strong>
            </p>
			
            <div class="bg-red-50/50 border border-red-100 rounded-xl p-4 mb-4">
                <p class="text-[10px] text-red-800 font-semibold uppercase tracking-widest mb-1">Attention</p>
                <p class="text-[9px] text-red-700 italic">
                    *Not allowed wearing slipper, casual pant & tshirt and shirt*
                </p>
            </div>
            <button @click="modal = null" class="mt-8 mb-2 text-[10px] uppercase tracking-widest text-sage opacity-50 hover:opacity-100 transition-opacity">
                Close
            </button>
        </div>
    </div>
</div>

<style>
    /* Optional: Makes the scrollbar inside the modal look cleaner */
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: rgba(138, 154, 91, 0.3);
        border-radius: 10px;
    }
</style>

    <div x-show="modal === 'calendar'" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-sage/20 backdrop-blur-sm" x-cloak>
        <div @click.away="modal = null" class="bg-white rounded-[2rem] max-w-sm w-full p-10 shadow-2xl text-center">
            <h2 class="serif text-4xl mb-10 text-[#4A5D4E]">Save Date</h2>
			<p class="text-sm font-bold text-[#4A5D4E]">03 April 2026 (Friday)<br><br></p>
            <div class="grid gap-4 px-2">
                <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Wedding+Alya+%26+Firdaus&dates=20260403T200000/20260403T230000&location=Mangala+Estate+Gambang" target="_blank" class="border border-sage/20 py-4 rounded-2xl text-[10px] font-bold uppercase tracking-widest text-[#4A5D4E] hover:bg-sage/5 transition">Google Calendar</a>
                <a href="data:text/calendar;charset=utf8,BEGIN:VCALENDAR%0AVERSION:2.0%0ABEGIN:VEVENT%0ADTSTART:20260403T120000Z%0ADTEND:20260403T150000Z%0ASUMMARY:Alya & Firdaus Wedding%0ALOCATION:Mangala Estate%0AEND:VEVENT%0AEND:VCALENDAR" download="Wedding.ics" class="border border-sage/20 py-4 rounded-2xl text-[10px] font-bold uppercase tracking-widest text-[#4A5D4E] hover:bg-sage/5 transition">Apple / Outlook</a>
            </div>
            <button @click="modal = null" class="mt-10 text-[10px] uppercase tracking-widest text-sage opacity-50">Close</button>
        </div>
    </div>

    <div x-show="modal === 'location'" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-sage/20 backdrop-blur-sm" x-cloak>
        <div @click.away="modal = null" class="bg-white rounded-[2rem] max-w-sm w-full p-10 shadow-2xl text-center">
            <h2 class="serif text-4xl mb-4 text-[#4A5D4E]">The Venue</h2>
            <p class="text-sm font-bold text-[#4A5D4E]">Mangala Estate Boutique Resort</p>
            <p class="text-[10px] text-sage mb-10">Lebuhraya Tun Razak, 26300 Gambang, Pahang</p>
            <a href="https://maps.google.com/?q=Mangala+Estate+Boutique+Resort+Gambang" target="_blank" class="bg-sage text-white px-10 py-4 rounded-full text-[10px] font-bold tracking-widest uppercase inline-block shadow-lg shadow-sage/20">Navigate with Maps</a>
            <button @click="modal = null" class="block w-full mt-10 text-[10px] uppercase tracking-widest text-sage opacity-50">Close</button>
        </div>
    </div>

    <div x-show="modal === 'contact'" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-sage/20" x-cloak>
        <div @click.away="modal = null" class="bg-white rounded-[2rem] max-w-sm w-full p-10 shadow-2xl">
            <h2 class="serif text-4xl mb-10 text-center text-[#4A5D4E]">Enquiry</h2>
            <div class="space-y-8 px-2">
                <div class="flex justify-between items-center border-b border-sage/10 pb-4">
                    <div><p class="text-[9px] uppercase tracking-widest text-sage opacity-60">Bride</p><p class="font-semibold text-[#4A5D4E]">017-810 0178</p></div>
                    <a href="tel:0178100178" class="text-sage">📞</a>
                </div>
                <div class="flex justify-between items-center border-b border-sage/10 pb-4">
                    <div><p class="text-[9px] uppercase tracking-widest text-sage opacity-60">Mother</p><p class="font-semibold text-[#4A5D4E]">012-981 9030</p></div>
                    <a href="tel:0129819030" class="text-sage">📞</a>
                </div>
                <div class="flex justify-between items-center border-b border-sage/10 pb-4">
                    <div><p class="text-[9px] uppercase tracking-widest text-sage opacity-60">Father</p><p class="font-semibold text-[#4A5D4E]">013-905 0121</p></div>
                    <a href="tel:0139050121" class="text-sage">📞</a>
                </div>
            </div>
            <button @click="modal = null" class="mt-12 w-full text-[10px] uppercase tracking-widest text-sage opacity-50 text-center">Back</button>
        </div>
    </div>

    <div class="fixed bottom-32 right-6 z-50">
        <audio x-ref="audio" id="weddingMusic" loop><source src="bgmusic.mp3" type="audio/mpeg"></audio>
        <button @click="playing = !playing; playing ? $refs.audio.play() : $refs.audio.pause()" 
                class="bg-white/95 p-4 rounded-full shadow-lg border border-sage/20 text-sage hover:scale-110 transition-transform">
            <template x-if="!playing"><span class="text-xs">🎵</span></template>
            <template x-if="playing"><span class="text-xs">⏸️</span></template>
        </button>
    </div>

    <script>
        function weddingApp() {
            return {
                opened: false,
                modal: null,
                playing: false,
                countdown: { days: '00', hours: '00', minutes: '00', seconds: '00' },
                wishes: [],
                scriptURL: 'YOUR_GOOGLE_APPS_SCRIPT_URL', 

                openInvitation() {
                    this.opened = true;
                    this.playing = true;
                    this.$refs.audio.play();
                },

                init() {
                    const weddingDate = new Date('April 3, 2026 20:00:00').getTime();
                    setInterval(() => {
                        const now = new Date().getTime();
                        const distance = weddingDate - now;
                        this.countdown.days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                        this.countdown.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                        this.countdown.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                        this.countdown.seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
                    }, 1000);
                },

                async fetchWishes() {
                    try {
                        const res = await fetch(this.scriptURL);
                        this.wishes = await res.json();
                    } catch (e) { console.log('Wishes loading...'); }
                },

                async submitRSVP(form) {
                    await fetch(this.scriptURL, { method: 'POST', body: new FormData(form) });
                    this.fetchWishes(); 
                }
            }
        }
    </script>
</body>

</html>
