<?php
$technologyIcons = [
    'JavaScript' => 'https://cdn.simpleicons.org/javascript/323330',
    'HTML' => 'https://cdn.simpleicons.org/html5/E34F26',
    'CSS' => 'https://cdn.simpleicons.org/css/1572B6',
];
?>
<section class="shell" id="projetos">
    <div class="section-head">
        <div>
            <span class="section-index mono">01 / Seleção de trabalho</span>
            <h2>Projetos em destaque</h2>
        </div>
        <p class="section-note">Uma seleção de websites e experiências digitais em diferentes áreas.</p>
    </div>
    <div class="project-grid">
        <?php foreach ($projects as $project): ?>
            <?php $projectDestination = $project['demo'] ?? $project['url'] ?? null; ?>
            <article class="project">
                <?php if ($projectDestination !== null): ?>
                    <a class="project-art project-art-link <?= htmlspecialchars($project['style'], ENT_QUOTES, 'UTF-8') ?>" href="<?= htmlspecialchars($projectDestination, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Visitar <?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?>">
                <?php else: ?>
                    <div class="project-art <?= htmlspecialchars($project['style'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
                <?php endif; ?>
                    <span class="art-mark"><?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="art-caption mono">Projeto <?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php if ($projectDestination !== null): ?>
                    </a>
                <?php else: ?>
                    </div>
                <?php endif; ?>
                <div class="project-meta mono"><span><?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?></span><span><?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span></div>
                <h3><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
                <div class="project-bottom">
                    <div class="tags">
                        <?php foreach ($project['stack'] as $technology): ?>
                            <?php $icon = $technologyIcons[$technology] ?? null; ?>
                            <span class="tag<?= $icon === null ? ' tag-text' : '' ?>" title="<?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?>">
                                <?php if ($icon !== null): ?>
                                    <img src="<?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
                                <?php else: ?>
                                    <span><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-links">
                        <?php if (isset($project['demo'])): ?>
                            <a href="<?= htmlspecialchars($project['demo'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Visitar ↗</a>
                        <?php endif; ?>
                        <?php if (isset($project['url'])): ?>
                            <a href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Código ↗</a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>