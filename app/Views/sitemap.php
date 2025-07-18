<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($urls as $url): ?>
    <url>
        <loc><?= esc($url['loc']) ?></loc>
        <lastmod><?= esc($url['lastmod']) ?></lastmod>
        <changefreq><?= esc($url['changefreq']) ?></changefreq>
        <priority><?= esc($url['priority']) ?></priority>
    </url>
    <?php endforeach; ?>
</urlset>
