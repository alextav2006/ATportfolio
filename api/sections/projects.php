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
                            <span class="tag"><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></span>
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