<?php


/**
 * controleur pour la consultation des exemplaires 
 */
switch ($action) {
    case 'article':
        include './App/model/M_article.php';
        $lesArticle = M_article::trouveLesArticleDeFleur();
        break;
}


?>