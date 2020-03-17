<head>
    <link rel="stylesheet" type="text/css" href="/application/css/view_css.css">
</head>
<?php
$row = $data->fetch();
echo '<h1>' . $row['title'] . '</h1>';
echo '<p>' . $row['content'] . '</p>';
echo '<div class="all_news"><a href="/news">Все новости >></a></div>';