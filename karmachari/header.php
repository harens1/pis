<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'कर्मचारी व्यवस्थापन प्रणाली'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    $current = basename($_SERVER['PHP_SELF']);
?>

<header class="site-header">
    <div class="container">
        <h1 class="site-title">कर्मचारी व्यवस्थापन प्रणाली</h1>
        <nav class="site-nav" role="navigation" aria-label="मुख्य नेभिगेशन">
            <ul>
                <li><a href="index.php" class="<?php echo $current === 'index.php' ? 'active' : ''; ?>">गृहपृष्ठ</a></li>
                <li><a href="employ_list.php" class="<?php echo $current === 'employ_list.php' ? 'active' : ''; ?>">कर्मचारी सूची</a></li>
                <li><a href="post_employee.php" class="<?php echo $current === 'post_employee.php' ? 'active' : ''; ?>">कर्मचारी विवरण</a></li>
                <li><a href="recommendation.php" class="<?php echo $current === 'recommendation.php' ? 'active' : ''; ?>">सिफारिस</a></li>
                <li><a href="recommandation.php" class="<?php echo $current === 'recommandation.php' ? 'active' : ''; ?>">सिफारिस (पुरानो)</a></li>
                <li><a href="transfer.php" class="<?php echo $current === 'transfer.php' ? 'active' : ''; ?>">सरुवा</a></li>
                <li><a href="promotion.php" class="<?php echo $current === 'promotion.php' ? 'active' : ''; ?>">बढुवा</a></li>
                <li><a href="leave.php" class="<?php echo $current === 'leave.php' ? 'active' : ''; ?>">बिदा</a></li>
                <li><a href="salary.php" class="<?php echo $current === 'salary.php' ? 'active' : ''; ?>">पारिश्रामिक</a></li>
                <li><a href="retirement.php" class="<?php echo $current === 'retirement.php' ? 'active' : ''; ?>">अवकाश</a></li>
                <li><a href="law.php" class="<?php echo $current === 'law.php' ? 'active' : ''; ?>">कानून</a></li>
                <li><a href="formfill.html" class="<?php echo $current === 'formfill.html' ? 'active' : ''; ?>">फाराम</a></li>
                <li><a href="notice.html" class="<?php echo $current === 'notice.html' ? 'active' : ''; ?>">सूचना</a></li>
                <li><a href="vacancy.html" class="<?php echo $current === 'vacancy.html' ? 'active' : ''; ?>">दरवन्दी</a></li>
            </ul>
        </nav>
    </div>
</header>
