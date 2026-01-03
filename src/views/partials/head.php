<?php declare(strict_types=1); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="dark light">
<title><?= e($title ?? config('app_name')) ?></title>
<meta name="description" content="<?= e($description ?? 'Remote-first IT support for home users and small setups. Calm, honest help. No upselling.') ?>">
<link rel="stylesheet" href="/assets/css/app.css"
<!-- Tailwind CDN (MVP) -->
<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: { sans: ['ui-sans-serif','system-ui','-apple-system','Segoe UI','Roboto','Ubuntu','Cantarell','Noto Sans','Helvetica Neue','Arial'] },
                boxShadow: {
                    soft: '0 10px 25px rgba(0,0,0,.35)'
                }
            }
        }
    }
</script>

<style>
    /* Tiny MSPG/ON-ish feel */
    .grain:before{
        content:"";
        position:fixed;
        inset:0;
        pointer-events:none;
        opacity:.07;
        background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='140' height='140' filter='url(%23n)' opacity='.5'/%3E%3C/svg%3E");
    }
</style>
