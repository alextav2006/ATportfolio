<?php $projects = require __DIR__ . '/data/projects.php'; ?>
<!doctype html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfólio de Alexandre Taveira: desenvolvimento backend, jogos, web e sistemas de dados.">
    <meta name="theme-color" content="#f5f7f2">
    <title>Alexandre Taveira | Programador</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
            --paper: #f5f7f2;
            --ink: #14251f;
            --muted: #63736c;
            --line: #d8e0d9;
            --green: #174a39;
            --lime: #d9fa72;
            --coral: #fa7757;
            --blue: #c8e7ef;
            --mono: "DM Mono", monospace;
            --sans: "Space Grotesk", sans-serif;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background-color: var(--paper);
            background-image: radial-gradient(#174a3910 .8px, transparent .8px);
            background-size: 7px 7px;
            color: var(--ink);
            font-family: var(--sans);
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; }
        .shell { width: min(1120px, calc(100% - 48px)); margin: 0 auto; }
        .mono { font-family: var(--mono); font-size: 11px; letter-spacing: 0; text-transform: uppercase; }

        .topbar {
            position: relative;
            isolation: isolate;
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #53e3cd;
        }
        .topbar::before {
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 100vw;
            content: "";
            transform: translateX(-50%);
            background-color: #e3f1e9;
            background-image: radial-gradient(ellipse at 82% 50%, #53e3cd45, transparent 42%), radial-gradient(#174a3930 .8px, transparent .8px), linear-gradient(105deg, #edf6ef, #d9eee5);
            background-size: auto, 10px 10px, auto;
        }
        .brand { display: flex; align-items: center; gap: 11px; color: var(--ink); font-size: 16px; text-decoration: none; font-weight: 700; }
        .brand-mark { display: grid; width: 31px; height: 31px; place-items: center; background: var(--green); color: var(--lime); border-radius: 50%; font-size: 13px; }
        .nav { display: flex; align-items: center; gap: 31px; }
        .nav a { color: var(--ink); font-family: var(--mono); text-decoration: none; font-size: 12px; font-weight: 500; text-transform: uppercase; }
        .nav a:hover { color: var(--green); }
        .nav .nav-contact { padding: 10px 14px; border: 1px solid var(--green); border-radius: 3px; color: #fff; background: var(--green); }
        .nav .nav-contact:hover { border-color: #123b2f; color: #fff; background: #123b2f; }

        .hero {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 225px;
            align-items: center;
            gap: 64px;
            padding: 88px 0 82px;
            border-bottom: 1px solid #53e3cd40;
            animation: arrive .65s ease-out both;
        }
        .hero::before {
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 100vw;
            content: "";
            transform: translateX(-50%);
            background-color: #0b2026;
            background-image: radial-gradient(ellipse at 78% 48%, #167c7070, transparent 43%), linear-gradient(#5be2d010 1px, transparent 1px), linear-gradient(90deg, #5be2d010 1px, transparent 1px), linear-gradient(135deg, transparent 49.8%, #5be2d018 50%, transparent 50.2%);
            background-size: auto, 32px 32px, 32px 32px, 100% 100%;
        }
        .eyebrow { display: flex; align-items: center; gap: 10px; color: #72e8d2; }
        .status-dot { width: 8px; height: 8px; background: #69a76c; border-radius: 50%; box-shadow: 0 0 0 4px #69a76c20; }
        h1 { max-width: 760px; margin: 22px 0 18px; color: #f1f7f2; font-size: clamp(48px, 7vw, 84px); line-height: .98; letter-spacing: 0; font-weight: 600; }
        h1 span { color: #72e8d2; }
        .hero-copy { max-width: 590px; margin: 0; color: #b8c9c6; font-size: 17px; line-height: 1.7; }
        .hero-actions { display: flex; align-items: center; gap: 21px; margin-top: 29px; }
        .button { display: inline-flex; align-items: center; gap: 12px; padding: 13px 17px; background: #72e8d2; color: #0b2026; text-decoration: none; border-radius: 3px; font-size: 13px; font-weight: 600; }
        .button:hover { background: var(--lime); }
        .text-link { color: #e3efeb; font-size: 13px; font-weight: 600; text-decoration-thickness: 1px; text-underline-offset: 4px; }
        .portrait-wrap { position: relative; justify-self: end; width: 190px; height: 220px; }
        .portrait-frame { position: absolute; inset: 0 12px 12px 0; overflow: hidden; background: var(--blue); border: 1px solid #c4d9d5; border-radius: 2px; }
        .portrait-frame img { width: 100%; height: 100%; object-fit: cover; }
        .portrait-accent { position: absolute; right: 0; bottom: 0; width: 82px; height: 82px; background: var(--lime); z-index: -1; }
        .portrait-label { position: absolute; left: -43px; bottom: 24px; padding: 8px 10px; background: #102c31; border: 1px solid #53e3cd60; color: #c7f8e9; transform: rotate(-5deg); }

        .section-head { display: flex; align-items: end; justify-content: space-between; gap: 24px; padding: 58px 0 23px; }
        .section-index { display: block; margin-bottom: 11px; color: var(--muted); }
        h2 { margin: 0; font-size: 35px; line-height: 1.1; letter-spacing: 0; font-weight: 600; }
        .section-note { max-width: 330px; margin: 0 0 2px; color: var(--muted); font-size: 13px; line-height: 1.6; }
        .project-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); border-top: 1px solid var(--line); border-left: 1px solid var(--line); }
        .project { min-width: 0; padding: 19px; border-right: 1px solid var(--line); border-bottom: 1px solid var(--line); animation: arrive .55s ease-out both; }
        .project:nth-child(2) { animation-delay: .07s; }
        .project:nth-child(3) { animation-delay: .14s; }
        .project:nth-child(4) { animation-delay: .21s; }
        .project:nth-child(5) { animation-delay: .28s; }
        .project-art { position: relative; display: flex; height: 166px; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 19px; }
        .project-art::after { position: absolute; inset: 0; content: ""; opacity: .25; background-image: linear-gradient(135deg, transparent 48%, #14251f 49%, transparent 50%); background-size: 19px 19px; }
        .project-art.chess { background: var(--lime); }
        .project-art.calendar { background: #d9e8dc; }
        .project-art.web { background: var(--coral); }
        .project-art.data { background: var(--blue); }
        .project-art.sport { background: #f1c875; }
        .art-mark { z-index: 1; display: grid; width: 76px; height: 76px; place-items: center; border: 1px solid #14251f50; border-radius: 50%; font-size: 33px; font-weight: 500; }
        .art-caption { position: absolute; z-index: 1; right: 13px; bottom: 11px; }
        .project-meta { display: flex; align-items: center; justify-content: space-between; gap: 12px; margin-bottom: 9px; color: var(--muted); }
        .project h3 { margin: 0; font-size: 21px; line-height: 1.25; letter-spacing: 0; }
        .project p { min-height: 62px; margin: 10px 0 17px; color: #5d6c65; font-size: 13px; line-height: 1.65; }
        .project-bottom { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding-top: 13px; border-top: 1px solid var(--line); }
        .tags { display: flex; flex-wrap: wrap; gap: 6px; }
        .tag { padding: 5px 7px; background: #e9eee8; color: #43564c; border-radius: 2px; font-family: var(--mono); font-size: 9px; }
        .project-links { display: flex; align-items: center; gap: 13px; white-space: nowrap; }
        .project-links a { color: var(--green); font-size: 11px; font-weight: 700; text-decoration: none; }
        .project-links a:hover { text-decoration: underline; text-underline-offset: 3px; }

        .about { display: grid; grid-template-columns: 1fr 1fr; gap: 70px; padding: 72px 0 76px; border-bottom: 1px solid var(--line); }
        .about-copy { max-width: 500px; }
        .about-copy p { margin: 0 0 14px; color: #52635b; font-size: 14px; line-height: 1.8; }
        .focus-list { display: grid; grid-template-columns: 1fr 1fr; align-content: center; border-top: 1px solid var(--line); }
        .focus-item { display: flex; align-items: center; gap: 12px; min-height: 61px; border-bottom: 1px solid var(--line); font-size: 13px; }
        .focus-item:nth-child(odd) { margin-right: 17px; }
        .focus-number { color: #8a9b91; font-family: var(--mono); font-size: 10px; }

        .footer { display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 24px 0 30px; color: var(--muted); }
        .footer p { margin: 0; font-size: 11px; }
        .footer a { color: var(--green); text-decoration: none; }
        .footer a:hover { text-decoration: underline; }

        @keyframes arrive { from { opacity: 0; transform: translateY(11px); } to { opacity: 1; transform: translateY(0); } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; } }
        @media (max-width: 720px) {
            .shell { width: min(100% - 32px, 540px); }
            .topbar { min-height: 65px; }
            .nav { gap: 16px; }
            .nav a { font-size: 12px; }
            .nav a:nth-child(2) { display: none; }
            .nav .nav-contact { padding: 8px 10px; }
            .hero { grid-template-columns: 1fr 124px; gap: 18px; padding: 62px 0 56px; }
            h1 { font-size: clamp(43px, 11vw, 66px); }
            .hero-copy { font-size: 15px; }
            .hero-actions { align-items: flex-start; flex-direction: column; gap: 16px; }
            .portrait-wrap { width: 120px; height: 150px; }
            .portrait-label { left: -23px; bottom: 16px; font-size: 9px; }
            .section-head { align-items: flex-start; flex-direction: column; padding-top: 46px; }
            h2 { font-size: 30px; }
            .project-grid { grid-template-columns: 1fr; }
            .project-art { height: 150px; }
            .project p { min-height: 0; }
            .about { grid-template-columns: 1fr; gap: 28px; padding: 54px 0; }
        }
        @media (max-width: 390px) {
            .shell { width: calc(100% - 26px); }
            .brand { gap: 7px; font-size: 13px; }
            .nav { gap: 11px; }
            .hero { grid-template-columns: 1fr 95px; gap: 11px; }
            .portrait-wrap { width: 94px; height: 122px; }
            .portrait-label { left: -14px; padding: 6px; }
            .project { padding: 13px; }
            .project-bottom { align-items: flex-start; flex-direction: column; }
            .focus-list { grid-template-columns: 1fr; }
            .focus-item:nth-child(odd) { margin-right: 0; }
            .footer { align-items: flex-start; flex-direction: column; }
        }
    </style>
</head>
<body>
    <?php require __DIR__ . '/sections/header.php'; ?>

    <main>
        <?php require __DIR__ . '/sections/hero.php'; ?>
        <?php require __DIR__ . '/sections/projects.php'; ?>
        <?php require __DIR__ . '/sections/about.php'; ?>
    </main>

    <?php require __DIR__ . '/sections/footer.php'; ?>
</body>
</html>