<?php declare(strict_types=1); ?>
<header class="sticky top-0 z-40 backdrop-blur supports-[backdrop-filter]:bg-black/30 bg-black/60 border-b border-white/10">
    <div class="mx-auto max-w-5xl px-4 py-3 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-2xl bg-white/10 border border-white/10 grid place-items-center shadow-soft">
                <span class="text-sm font-semibold tracking-tight">BI</span>
            </div>
            <div class="leading-tight">
                <div class="text-sm font-semibold text-white/90 group-hover:text-white transition">
                    <?= e(config('app_name')) ?>
                </div>
                <div class="text-xs text-white/50">remote-first support</div>
            </div>
        </a>

        <nav class="flex items-center gap-2 text-sm">
            <a href="/" class="px-3 py-2 rounded-xl <?= is_active('/') ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5' ?> transition">Home</a>
            <a href="/services.php" class="px-3 py-2 rounded-xl <?= is_active('/services.php') ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5' ?> transition">Services</a>
            <a href="/contact.php" class="px-3 py-2 rounded-xl <?= is_active('/contact.php') ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5' ?> transition">Contact</a>

            <a href="/contact.php" class="ml-2 inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-white text-black font-semibold hover:bg-white/90 transition shadow-soft">
                Request Help
                <span aria-hidden="true">→</span>
            </a>
        </nav>
    </div>
</header>
