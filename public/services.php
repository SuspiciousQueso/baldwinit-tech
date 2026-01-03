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

    <p class="mt-3 max-w-3xl text-white/70">
        Remote-first by default. Most issues don’t require a visit — we can usually diagnose, fix, and explain what’s happening over secure screen-share.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">Windows</span>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">macOS</span>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">Linux</span>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">iOS</span>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">Android</span>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/60">…and mixed home setups</span>
    </div>

    <?php
    // Icon + label + description cards
    $services = [
            [
                    'label' => 'Remote troubleshooting (primary)',
                    'desc'  => 'Screen-share support for fast diagnosis and fixes. Same-day when possible.',
                    'accent' => 'emerald',
                    'icon' => 'monitor',
            ],
            [
                    'label' => 'Slow computer cleanup',
                    'desc'  => 'Performance issues, startup bloat, browser nonsense, storage pressure, updates.',
                    'accent' => 'cyan',
                    'icon' => 'spark',
            ],
            [
                    'label' => 'Wi-Fi & home network issues',
                    'desc'  => 'Dead zones, flaky connections, router misconfig, device drops, DNS weirdness.',
                    'accent' => 'emerald',
                    'icon' => 'wifi',
            ],
            [
                    'label' => 'Email & account problems',
                    'desc'  => 'Sync issues, login loops, MFA confusion, password manager setup.',
                    'accent' => 'cyan',
                    'icon' => 'mail',
            ],
            [
                    'label' => 'Printer & device setup',
                    'desc'  => 'Yes, printers are evil. We tame them anyway.',
                    'accent' => 'emerald',
                    'icon' => 'printer',
            ],
            [
                    'label' => 'Security basics',
                    'desc'  => 'Cleanup + sensible hardening: updates, browser safety, account hygiene, backups.',
                    'accent' => 'cyan',
                    'icon' => 'shield',
            ],
            [
                    'label' => 'Deeper systems work (when needed)',
                    'desc'  => 'When “simple” issues are symptoms — logs, services, configuration, root-cause.',
                    'accent' => 'emerald',
                    'icon' => 'wrench',
            ],
            [
                    'label' => 'Plain-English explanations',
                    'desc'  => 'Sometimes you don’t need a fix — you need clarity. I’m good at that too.',
                    'accent' => 'cyan',
                    'icon' => 'chat',
            ],
    ];

    // Small inline SVG icon set (no dependencies)
    function svc_icon(string $name): string {
        $common = 'class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"';
        return match ($name) {
            'monitor' => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 5h16v10H4z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.75 17L7 21h10l-2.75-4\"/></svg>",
            'wifi'    => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 9.75C6.75 6 17.25 6 21.75 9.75\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5.25 13.5c3-2.25 10.5-2.25 13.5 0\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.25 17.25c1.5-1.125 6-1.125 7.5 0\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 20.25h.01\"/></svg>",
            'mail'    => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 6.75h15v10.5h-15z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 7.5l7.5 6 7.5-6\"/></svg>",
            'printer' => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 8.25V4.5h9v3.75\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18.75h12v-6H6z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6.75 14.25H5.25A2.25 2.25 0 013 12V9.75A2.25 2.25 0 015.25 7.5h13.5A2.25 2.25 0 0121 9.75V12a2.25 2.25 0 01-2.25 2.25H17.25\"/></svg>",
            'shield'  => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 2.25l7.5 4.5V12c0 5.25-3.3 9.9-7.5 9.9S4.5 17.25 4.5 12V6.75z\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 12l2 2 4-5\"/></svg>",
            'wrench'  => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 7.5a5.25 5.25 0 01-7.47 4.77l-7.03 7.03a1.5 1.5 0 01-2.12 0l-.88-.88a1.5 1.5 0 010-2.12l7.03-7.03A5.25 5.25 0 0121 7.5z\"/></svg>",
            'chat'    => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 8.25h9\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7.5 12h6\"/><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 19.5V6.75A2.25 2.25 0 016.75 4.5h10.5A2.25 2.25 0 0119.5 6.75v6A2.25 2.25 0 0117.25 15H9l-4.5 4.5z\"/></svg>",
            'spark'   => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 2.25l1.5 5.25L18.75 9l-5.25 1.5L12 15.75l-1.5-5.25L5.25 9l5.25-1.5L12 2.25z\"/></svg>",
            default   => "<svg xmlns=\"http://www.w3.org/2000/svg\" $common><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6v6h6\"/></svg>",
        };
    }
    ?>

    <div class="mt-8 grid gap-4 md:grid-cols-2">
        <?php foreach ($services as $s):
            $isEmerald = ($s['accent'] ?? '') === 'emerald';
            $ring = $isEmerald ? 'hover:border-emerald-500/40 hover:shadow-emerald-500/10' : 'hover:border-cyan-500/40 hover:shadow-cyan-500/10';
            $glow = $isEmerald ? 'rgba(16,185,129,0.12)' : 'rgba(34,211,238,0.12)';
            $iconBorder = $isEmerald ? 'group-hover:border-emerald-500/40' : 'group-hover:border-cyan-500/40';
            ?>
            <div class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-6 shadow-sm transition hover:-translate-y-0.5 <?= $ring ?>">
                <div class="absolute inset-0 opacity-0 transition group-hover:opacity-100"
                     style="background: radial-gradient(700px circle at 25% 0%, <?= $glow ?>, transparent 45%);"></div>

                <div class="relative flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white/90 <?= $iconBorder ?>">
                        <?= svc_icon($s['icon']) ?>
                    </div>

                    <div>
                        <div class="text-lg font-semibold text-white/90"><?= e($s['label']) ?></div>
                        <div class="mt-1 text-sm text-white/65"><?= e($s['desc']) ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Pricing (hover cards) -->
    <section class="mt-10">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
            <div class="flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
                <div>
                    <div class="text-lg font-semibold text-white/90">Pricing</div>
                    <p class="mt-2 max-w-3xl text-sm text-white/65">
                        Clear scope up front. You’ll know the plan and the cost before I start — no surprise charges, no upsells.
                    </p>
                </div>
                <div class="mt-2 md:mt-0">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                        Remote-first • Same-day when possible
                    </span>
                </div>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-3">
                <!-- Remote -->
                <a href="/contact.php"
                   class="group relative overflow-hidden rounded-2xl border border-white/10 bg-black/20 p-5 shadow-sm transition
                          hover:-translate-y-0.5 hover:border-emerald-500/40 hover:shadow-emerald-500/10">
                    <div class="absolute inset-0 opacity-0 transition group-hover:opacity-100"
                         style="background: radial-gradient(600px circle at 30% 0%, rgba(16,185,129,0.12), transparent 45%);"></div>

                    <div class="relative flex items-start justify-between gap-4">
                        <div>
                            <div class="text-sm text-white/60">Remote</div>
                            <div class="mt-1 text-lg font-semibold text-white/90">Remote Support</div>
                        </div>
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white/90 group-hover:border-emerald-500/40">
                            <?= svc_icon('monitor') ?>
                        </div>
                    </div>

                    <div class="relative mt-3 text-sm text-white/65">
                        Troubleshoot, fix, and explain — over secure screen-share.
                    </div>

                    <div class="relative mt-5 rounded-xl border border-white/10 bg-white/5 p-3 transition group-hover:border-emerald-500/30">
                        <div class="flex items-baseline justify-between">
                            <div class="text-sm font-semibold text-white/90">$50 / hour</div>
                            <div class="text-xs text-white/60">1-hour minimum</div>
                        </div>
                        <div class="mt-1 text-xs text-white/60">Most issues don’t require an on-site visit.</div>
                    </div>
                </a>

                <!-- On-site -->
                <a href="/contact.php"
                   class="group relative overflow-hidden rounded-2xl border border-white/10 bg-black/20 p-5 shadow-sm transition
                          hover:-translate-y-0.5 hover:border-cyan-500/40 hover:shadow-cyan-500/10">
                    <div class="absolute inset-0 opacity-0 transition group-hover:opacity-100"
                         style="background: radial-gradient(600px circle at 30% 0%, rgba(34,211,238,0.12), transparent 45%);"></div>

                    <div class="relative flex items-start justify-between gap-4">
                        <div>
                            <div class="text-sm text-white/60">On-site</div>
                            <div class="mt-1 text-lg font-semibold text-white/90">On-Site Support</div>
                        </div>
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white/90 group-hover:border-cyan-500/40">
                            <?= svc_icon('wrench') ?>
                        </div>
                    </div>

                    <div class="relative mt-3 text-sm text-white/65">
                        For hardware, networking, and problems remote can’t realistically solve.
                    </div>

                    <div class="relative mt-5 rounded-xl border border-white/10 bg-white/5 p-3 transition group-hover:border-cyan-500/30">
                        <div class="flex items-baseline justify-between">
                            <div class="text-sm font-semibold text-white/90">$80 / hour</div>
                            <div class="text-xs text-white/60">1-hour minimum</div>
                        </div>
                        <div class="mt-1 text-xs text-white/60">Available within ~80 miles round-trip.</div>
                    </div>
                </a>

                <!-- Ship-in -->
                <a href="/contact.php"
                   class="group relative overflow-hidden rounded-2xl border border-white/10 bg-black/20 p-5 shadow-sm transition
                          hover:-translate-y-0.5 hover:border-emerald-500/40 hover:shadow-emerald-500/10">
                    <div class="absolute inset-0 opacity-0 transition group-hover:opacity-100"
                         style="background: radial-gradient(600px circle at 30% 0%, rgba(16,185,129,0.10), transparent 45%);"></div>

                    <div class="relative flex items-start justify-between gap-4">
                        <div>
                            <div class="text-sm text-white/60">Ship-In</div>
                            <div class="mt-1 text-lg font-semibold text-white/90">Ship-In Support</div>
                        </div>
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white/90 group-hover:border-emerald-500/40">
                            <?= svc_icon('printer') ?>
                        </div>
                    </div>

                    <div class="relative mt-3 text-sm text-white/65">
                        Ship the device, I’ll service it, and ship it back.
                    </div>

                    <div class="relative mt-5 rounded-xl border border-white/10 bg-white/5 p-3 transition group-hover:border-emerald-500/30">
                        <div class="flex items-baseline justify-between">
                            <div class="text-sm font-semibold text-white/90">$50 / hour</div>
                            <div class="text-xs text-white/60">1-hour minimum</div>
                        </div>
                        <div class="mt-1 text-xs text-white/60">Shipping paid by client (labels available).</div>
                    </div>
                </a>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
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
