<?php
declare(strict_types=1);
require __DIR__ . '/../src/helpers.php';

$title = 'The Admin — BaldwinIT';
$description = 'How BaldwinIT thinks: systems-first, remote-first support rooted in Linux and infrastructure. Fix the cause, explain the why.';
?><!doctype html>
<html lang="en" class="dark">
<head><?php include __DIR__ . '/../src/views/partials/head.php'; ?></head>
<body class="grain bg-neutral-950 text-white">
<?php include __DIR__ . '/../src/views/partials/nav.php'; ?>

<main class="mx-auto max-w-5xl px-4 pt-10 pb-14">
    <header class="max-w-3xl">
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">The Admin</h1>
        <p class="mt-3 text-white/70 text-lg leading-relaxed">
            I don’t approach IT as a collection of fixes — I approach it as systems that either work together, or don’t.
            Most problems aren’t random. They’re symptoms of drift, layering, or tools that were never designed to coexist.
            My job is to step back, understand the whole environment, and correct the cause — not just the symptom.
        </p>

        <div class="mt-5 flex flex-wrap gap-2">
            <span class="rounded-full border border-emerald-500/20 bg-emerald-500/10 px-3 py-1 text-xs text-emerald-200">Remote-first</span>
            <span class="rounded-full border border-cyan-500/20 bg-cyan-500/10 px-3 py-1 text-xs text-cyan-200">Systems mindset</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Linux-driven</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/70">Plain-English clarity</span>
        </div>
    </header>

    <?php
    $sections = [
        [
            'title' => 'How I Think',
            'body'  => "My background is rooted in Linux, infrastructure, and mixed environments where understanding why something behaves the way it does matters more than memorizing steps.\n\nThat mindset carries through everything I work on — from everyday desktop problems to deeper system issues involving networks, services, authentication, or virtualization. If a problem keeps coming back, it usually means the real cause was never addressed. That’s where I focus.\n\nI prefer tools that are transparent, composable, and boring — because boring systems are stable systems.",
            'accent' => 'emerald',
        ],
        [
            'title' => 'What That Means for You',
            'body'  => "Practically, it means I don’t rush to reinstall operating systems, replace hardware, or suggest upgrades unless there’s a clear technical reason.\n\nI’ll explain what’s happening, what matters, and what doesn’t — in plain language — so you’re not left guessing or dependent on the next emergency. The goal is always to leave things more understandable and more stable than I found them.\n\nMost work can be handled remotely, efficiently, and without disrupting your day.",
            'accent' => 'cyan',
        ],
        [
            'title' => 'Experience Without the Resume Dump',
            'body'  => "I’ve spent years supporting real environments — MSP work, multi-site operations, and desk-side support — where you learn quickly that the “simple” tickets are often hiding deeper causes.\n\nI’m comfortable across:\n• Windows, macOS, and Linux desktops\n• Home and small-office networks\n• Microsoft 365 / Google Workspace admin tasks\n• Servers (virtual and bare metal), backups, and migrations\n\nI spend most of my time in terminals, logs, and configs — but I translate that work into outcomes that make sense outside of them.",
            'accent' => 'emerald',
        ],
        [
            'title' => 'Why BaldwinIT Exists',
            'body'  => "BaldwinIT exists because good IT support shouldn’t feel like a transaction.\n\nIt should feel like someone competent took ownership of the problem, handled it properly, and left things better than they found them. Not rushed. Not confusing. Not upsold.\n\nIf you want quick fixes with no context, I’m probably not the right fit.\nIf you want clarity, stability, and systems that actually behave — we’ll work well together.",
            'accent' => 'cyan',
        ],
        [
            'title' => 'When to Reach Out',
            'body'  => "If you’re unsure whether something is “worth calling about,” it usually is.\n\nStart with remote support — we’ll take it from there.",
            'accent' => 'emerald',
        ],
    ];

    function paragraphize(string $text): string {
        $parts = preg_split("/\n\s*\n/", trim($text)) ?: [];
        $out = '';
        foreach ($parts as $p) {
            // Simple bullet rendering
            if (str_contains($p, "•")) {
                $lines = array_values(array_filter(array_map('trim', explode("\n", $p))));
                $before = [];
                $bullets = [];
                foreach ($lines as $ln) {
                    if (str_starts_with($ln, "•")) $bullets[] = ltrim($ln, "• ");
                    else $before[] = $ln;
                }
                if ($before) {
                    $out .= '<p class="text-white/70 leading-relaxed">'.e(implode(' ', $before)).'</p>';
                }
                if ($bullets) {
                    $out .= '<ul class="mt-3 space-y-2 text-sm text-white/65">';
                    foreach ($bullets as $b) {
                        $out .= '<li class="flex gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-white/40"></span><span>'.e($b).'</span></li>';
                    }
                    $out .= '</ul>';
                }
            } else {
                $out .= '<p class="text-white/70 leading-relaxed">'.e($p).'</p>';
            }
            $out .= '<div class="h-4"></div>';
        }
        return $out;
    }
    ?>

    <section class="mt-10 grid gap-4">
        <?php foreach ($sections as $s):
            $isEmerald = ($s['accent'] ?? '') === 'emerald';
            $ring = $isEmerald ? 'hover:border-emerald-500/35 hover:shadow-emerald-500/10' : 'hover:border-cyan-500/35 hover:shadow-cyan-500/10';
            $glow = $isEmerald ? 'rgba(16,185,129,0.10)' : 'rgba(34,211,238,0.10)';
            ?>
            <details class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-0 shadow-sm transition hover:-translate-y-0.5 <?= $ring ?>">
                <summary class="list-none cursor-pointer select-none p-6 md:p-8">
                    <div class="absolute inset-0 opacity-0 transition group-hover:opacity-100"
                         style="background: radial-gradient(700px circle at 20% 0%, <?= $glow ?>, transparent 45%);"></div>

                    <div class="relative flex items-center justify-between gap-4">
                        <h2 class="text-xl font-semibold tracking-tight text-white/90"><?= e($s['title']) ?></h2>

                        <span class="flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white/70 transition
                         group-hover:border-white/20 group-hover:text-white/90">
                <!-- chevron -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition duration-200 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 9l-7.5 7.5L4.5 9" />
                </svg>
            </span>
                    </div>

                    <p class="relative mt-2 text-sm text-white/60">
                        Tap to expand
                    </p>
                </summary>

                <div class="px-6 pb-6 md:px-8 md:pb-8">
                    <div class="text-sm">
                        <?= paragraphize($s['body']) ?>
                    </div>
                </div>
            </details>

        <?php endforeach; ?>
    </section>

    <section class="mt-10">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
            <div class="text-lg font-semibold text-white/90">Want to start remote?</div>
            <p class="mt-2 text-sm text-white/65 max-w-3xl">
                Tell me what’s happening. I’ll confirm the approach, set expectations, and we agree on cost before work begins.
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
    </section>
</main>

<?php include __DIR__ . '/../src/views/partials/footer.php'; ?>
</body>
</html>
