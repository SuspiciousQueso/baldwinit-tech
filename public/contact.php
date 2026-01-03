<?php
declare(strict_types=1);
require __DIR__ . '/../src/helpers.php';

$title = 'Contact — BaldwinIT';
$description = 'Request remote support or open a ticket. Fast, calm help.';
?><!doctype html>
<html lang="en" class="dark">
<head><?php include __DIR__ . '/../src/views/partials/head.php'; ?></head>
<body class="grain bg-slate-950 text-white">
<?php include __DIR__ . '/../src/views/partials/nav.php'; ?>

<main class="mx-auto max-w-5xl px-4 pt-10 pb-14">
    <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Contact</h1>
    <p class="mt-3 text-white/70 max-w-3xl">
        Remote-first support. If you can describe the issue, I can usually get you fixed without an on-site visit.
    </p>

    <div class="mt-8 grid md:grid-cols-2 gap-4">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <div class="text-lg font-semibold text-white/90">Email</div>
            <p class="mt-2 text-sm text-white/65">Fastest way to start. Include what’s happening + your availability.</p>
            <a class="mt-4 inline-flex items-center justify-center w-full px-5 py-3 rounded-2xl bg-white text-black font-semibold hover:bg-white/90 transition shadow-soft"
               href="mailto:<?= e(config('contact_email')) ?>?subject=Remote%20Support%20Request&body=What%20issue%20are%20you%20having%3F%0A%0ADevice%20%2F%20OS%3A%0AWhen%20did%20it%20start%3F%0AAny%20error%20messages%3F%0A%0ABest%20times%20to%20help%3A%0A">
                Email <?= e(config('contact_email')) ?>
            </a>
        </div>

        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <div class="text-lg font-semibold text-white/90">Ticket Intake</div>
            <p class="mt-2 text-sm text-white/65">If you prefer a structured workflow, open a ticket.</p>

            <?php if (config('ticket_url')): ?>
                <a class="mt-4 inline-flex items-center justify-center w-full px-5 py-3 rounded-2xl bg-white/10 border border-white/10 text-white hover:bg-white/15 transition"
                   href="<?= e(config('ticket_url')) ?>">
                    Open a Ticket <span class="ml-2" aria-hidden="true">→</span>
                </a>
            <?php else: ?>
                <div class="mt-4 text-sm text-white/60">
                    Ticketing link not configured yet. (Set <code class="text-white/80">TICKET_URL</code> in the container env.)
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
        <div class="text-lg font-semibold text-white/90">What to send me</div>
        <ul class="mt-3 space-y-2 text-sm text-white/65">
            <li>• What’s broken (and what you expected instead)</li>
            <li>• Device + OS (Windows/macOS/Linux/phone)</li>
            <li>• Any error messages (copy/paste or screenshot)</li>
            <li>• When you’re available today/tomorrow</li>
        </ul>
    </div>
</main>

<?php include __DIR__ . '/../src/views/partials/footer.php'; ?>
</body>
</html>

