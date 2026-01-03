<?php
declare(strict_types=1);
require __DIR__ . '/../src/helpers.php';

$title = 'BaldwinIT — Remote-first IT support';
$description = 'Remote-first IT support for home users and small setups. Fast, calm troubleshooting. No upselling.';
?><!doctype html>
<html lang="en" class="dark">
<head><?php include __DIR__ . '/../src/views/partials/head.php'; ?></head>
<body class="grain bg-neutral-950 text-white">
<?php include __DIR__ . '/../src/views/partials/nav.php'; ?>

<main class="mx-auto max-w-5xl px-4 pt-10 pb-14">
    <section class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-10 shadow-soft">
        <div class="flex flex-col gap-6">
            <div class="inline-flex items-center gap-2 text-xs text-white/60">
                <span class="px-2 py-1 rounded-full bg-white/10 border border-white/10">Remote-first</span>
                <span class="px-2 py-1 rounded-full bg-white/10 border border-white/10">Mobile-friendly</span>
                <span class="px-2 py-1 rounded-full bg-white/10 border border-white/10">No upselling</span>
            </div>

            <h1 class="text-3xl md:text-5xl font-semibold tracking-tight text-white">
                Clear, competent IT support — built for real problems. —
                <span class="text-white/70">not just fixes symptoms.</span>
            </h1>

            <p class="text-base md:text-lg text-white/70 max-w-3xl">
                From everyday tech issues to deeper system troubleshooting, I focus on fixing the problem and explaining what’s happening along the way.
                Remote support is usually all that’s needed.
            </p>

            <div class="flex flex-col sm:flex-row gap-3">
                <a href="/contact.php" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white text-black font-semibold hover:bg-white/90 transition shadow-soft">
                    Request Remote Help <span class="ml-2" aria-hidden="true">→</span>
                </a>

                <?php if (config('ticket_url')): ?>
                    <a href="<?= e(config('ticket_url')) ?>" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white/10 border border-white/10 text-white hover:bg-white/15 transition">
                        Open a Ticket
                    </a>
                <?php endif; ?>

                <a href="/services.php" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white hover:bg-white/10 transition">
                    What I help with
                </a>
            </div>
        </div>
    </section>

    <section class="mt-10 grid md:grid-cols-3 gap-4">
        <?php
        $cards = [
            ['Fast remote fixes', 'Most issues don’t need an on-site visit. Remote support is the default: faster, cheaper, less hassle.'],
            ['Clear scope & flat rates', 'We agree on the work and the cost before anything starts. No surprise “diagnostic fees.”'],
            ['Depth when needed', 'Home-user problems are often symptoms of deeper system issues. I can go as deep as it requires.'],
        ];
        foreach ($cards as [$h, $p]):
            ?>
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6 hover:bg-white/7 transition">
                <div class="text-lg font-semibold text-white/90"><?= e($h) ?></div>
                <div class="mt-2 text-sm text-white/65"><?= e($p) ?></div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <div class="text-xl font-semibold text-white/90">Part of a bigger toolbox</div>
                <div class="text-sm text-white/65 max-w-2xl mt-1">
                    BaldwinIT is the human-facing arm. Behind it is infrastructure work: Linux systems, automation, and a support platform (MSPGuild + FrontDesk)
                    I’m building to run real operations.
                </div>
            </div>
            <a href="/contact.php" class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-white/10 border border-white/10 text-white hover:bg-white/15 transition">
                Get help now <span class="ml-2" aria-hidden="true">→</span>
            </a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../src/views/partials/footer.php'; ?>
</body>
</html>
