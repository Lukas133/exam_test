<header>
        <nav>
            <?php foreach ($data as $section_id => $section): ?>
                <ul class="<?php print $section_id; ?>">
                    <?php foreach ($section as $nav_id => $link): ?>
                        <div class="link-wrapper <?php print ($link['active'] ?? false) ? 'active' : ''; ?>">
                            <a href="<?php print $link['url']; ?>">
                                <?php print $link['title']; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </nav>
</header>