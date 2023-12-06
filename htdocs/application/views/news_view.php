<head>
    <link rel="stylesheet" type="text/css" href="/application/css/news_css.css">
</head>
<h1>Новости2</h1>
<p>
    <?php
    $rows = $data->fetchAll();
    $r1 = (($params - 1) * 5);
    $r2 = $r1 + 5;
    for($i = $r1; $i < $r2; $i++) {
        if(!empty($rows[$i])) {
            echo '<p><span class="date">' . gmdate('d.m.Y', $rows[$i]['idate']) . '</span> ';
            echo '<a href=/view/id/' . $rows[$i]['id'] . ' >' . $rows[$i]['title'] . '</a></br>';
            echo $rows[$i]['announce'] . '</p>';
        }
    }
    ?>
    <h4>Страницы:</h4>
    <?php
    for($i = 1; $i <= ceil(count($rows) / 5); $i++) {
        echo '<a href=/news/page/' . $i . ' class="btn">' . $i . '</a> ';
    }
    ?>
</p>