<?php
$technologyIcons = [
    'Godot' => 'https://cdn.simpleicons.org/godotengine/478CBF',
    'n8n' => 'https://cdn.simpleicons.org/n8n/EA4B71',
    'OpenAI' => 'https://cdn.jsdelivr.net/npm/simple-icons@v15/icons/openai.svg',
    'Google Calendar' => 'https://cdn.simpleicons.org/googlecalendar/4285F4',
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
        <p class="section-note">Uma seleção de experiências em jogos, automação, desenvolvimento web e sistemas de dados.</p>
    </div>
    <div class="project-grid">
        <?php foreach ($projects as $project): ?>
            <article class="project">
                <div class="project-art <?= htmlspecialchars($project['style'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
                    <span class="art-mark"><?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="art-caption mono">Projeto <?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
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
                            <a href="<?= htmlspecialchars($project['demo'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Demo ↗</a>
                        <?php endif; ?>
                        <a href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Código ↗</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>