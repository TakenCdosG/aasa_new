<?php

$files_path = realpath(dirname(__FILE__)) . "/news_xml"; //tcg (TEST)
//print $files_path;
//$files_path = "C:\\wamp\\www\\aasanewtcg\\sites\\all\\themes\\aasa\\news_xml\\"; //tcg (TEST)

$theme_path = path_to_theme();

$domNPR = new DomDocument();
if (@$domNPR->load($files_path . "/npr_healthcare.xml")) {
    $titles = $domNPR->getElementsByTagName("title");
    $links = $domNPR->getElementsByTagName("link");
    $count = 0;

    foreach ($titles as $node) {
        $link = $links->item($count)->textContent;
        if ($count > 1)
            echo "<div class='div_a'><a target='_blank'  href='" . $link . "'>" . $node->textContent . "</a></div>";
        if ($count > 1)
            break;

        $count++;
    }
} else
    echo "<div class='title_widget'><span>News feed is unavailable</span></div>";


$domNPR = new DomDocument();
if (@$domNPR->load($files_path . "/cnn_health.xml")) {
    $titles = $domNPR->getElementsByTagName("title");
    $links = $domNPR->getElementsByTagName("link");

    $count = 0;

    foreach ($titles as $node) {
        $link = $links->item($count + 2)->textContent;
        if ($count > 2)
            echo "<div class='div_a'><a target='_blank'  href='" . $link . "'>" . $node->textContent . "</a></div>";
        if ($count > 2) //solo muestra UNO.
            break;

        $count++;
    }
} else
    echo "<div class='title_widget'><span>CNN Feed is unavailable</span></div>";


$domNPR = new DomDocument();
if (@$domNPR->load($files_path . "/wsj_health.xml")) {
    $titles = $domNPR->getElementsByTagName("title");
    $links = $domNPR->getElementsByTagName("link");
    $count = 0;

    foreach ($titles as $node) {
        $link = $links->item($count + 1)->textContent;
        if ($count > 1)
            echo "<div class='div_a'><a target='_blank'  href='" . $link . "'>" . $node->textContent . "</a></div>";
        if ($count > 1)
            break;

        $count++;
    }
} else
    echo "<div class='title_widget'><span>Feed is unavailable</span></div>";



?>