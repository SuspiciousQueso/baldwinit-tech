<?php declare(strict_types=1); ?>
<footer class="border-t border-white/10 mt-14">
    <div class="mx-auto max-w-5xl px-4 py-10 text-sm text-white/60">
        <div class="flex flex-col md:flex-row gap-6 md:items-center md:justify-between">
            <div>
                <div class="text-white/80 font-semibold"><?= e(config('app_name')) ?></div>
                <div class="text-white/50">Calm, honest tech help. Remote-first.</div>
            </div>

            <div class="flex items-center gap-4">
                <?php if (config('ticket_url')): ?>
                    <a class="hover:text-white transition" href="<?= e(config('ticket_url')) ?>">Open a ticket</a>
                <?php endif; ?>
                <a class="hover:text-white transition" href="mailto:<?= e(config('contact_email')) ?>">Email</a>
            </div>
        </div>

        <div class="mt-8 text-xs text-white/40">
            © <?= date('Y') ?> <?= e(config('app_name')) ?>. Built as part of the MSPGuild suite.
        </div>
    </div>
</footer>
