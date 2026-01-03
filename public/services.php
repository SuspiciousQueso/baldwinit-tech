<?php
declare(strict_types=1);
require __DIR__ . '/../src/helpers.php';

$title = 'Services — BaldwinIT';
$description = 'Remote-first IT services: troubleshooting, Wi-Fi, email, cleanup, security basics, and deeper system work when needed.';
?><!doctype html>
<html lang="en" class="dark">
<head><?php include __DIR__ . '/../src/views/partials/head.php'; ?></head>
<body class="grain bg-neutral-950 text-white">
<?php include __DIR__ . '/../src/views/partials/nav.php'; ?>

<main class="mx-auto max-w-5xl px-4 pt-10 pb-14">
    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Services</h1>
    <p class="mt-3 text-white/70 max-w-3xl">
        Remote-first by default. If it can be solved without an on-site visit, that’s what we’ll do — faster and cheaper.
    </p>

    <div class="mt-8 grid md:grid-cols-2 gap-4">
        <?php
        $items = [
            ['Remote troubleshooting (primary)', 'Screen-share support for fast diagnosis and fixes. Same-day when possible.'],
            ['Slow computer cleanup', 'Performance issues, startup bloat, browser nonsense, storage pressure, updates.'],
            ['Wi-Fi & home network issues', 'Dead zones, flaky connections, router misconfig, device drops, DNS weirdness.'],
            ['Email & account problems', 'Sync issues, login loops, MFA confusion, password manager setup.'],
            ['Printer & device setup', 'Yes, printers are evil. We tame them anyway.'],
            ['Security basics', 'Cleanup + sensible hardening: updates, browser safety, account hygiene, backups.'],
            ['Deeper systems work (when needed)', 'When “simple” issues are symptoms — system configuration, logs, services, root-cause.'],
            ['Plain-English explanations', 'Sometimes you don’t need a fix — you need clarity. I’m good at that too.'],
        ];
        foreach ($items as [$h, $p]):
            ?>
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6 hover:bg-white/7 transition">
                <div class="text-lg font-semibold text-white/90"><?= e($h) ?></div>
                <div class="mt-2 text-sm text-white/65"><?= e($p) ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
        <div class="text-lg font-semibold text-white/90">Pricing</div>
        <p class="mt-2 text-sm text-white/65 max-w-3xl">
            I prefer flat-rate scoped work. Tell me what’s happening, I’ll confirm the approach, and we agree on cost before we start.
        </p>
        <div class="mt-4 flex flex-col sm:flex-row gap-3">
            <a href="/contact.php" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white text-black font-semibold hover:bg-white/90 transition shadow-soft">
                Request Remote Help <span class="ml-2" aria-hidden="true">→</span>
            </a>
            <?php if (config('ticket_url')): ?>
                <a href="<?= e(config('ticket_url')) ?>" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white/10 border border-white/10 text-white hover:bg-white/15 transition">
                    Open a Ticket
                </a>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../src/views/partials/footer.php'; ?>
</body>
</html>

