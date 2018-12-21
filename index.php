<?php
    require_once "functions.php";
    $careerData = require_once ("./career_data.php");
    $profileData = require_once ("./profile_data.php");

    $educations = getSortedArray($profileData["education"]);
    $experinces = getSortedArray($careerData["experience"]);
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="assets/images/Albert.png" alt="" />
            <h1 class="name"><?= $profileData["about"]["name"] ?></h1>
            <h3 class="tagline"><?= $profileData["about"]["post"] ?></h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com"><?= $profileData["about"]["email"] ?> </a></li>
                <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?= $profileData["about"]["phone"] ?>"><?= $profileData["about"]["phone"] ?></a></li>
                <li class="website"><i class="fa fa-globe"></i><a href="<?= $profileData["about"]["site"] ?>" target="_blank"><?= $profileData["about"]["site"] ?></a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Образование</h2>
            <?php foreach ($educations as $education) : ?>
            <div class="item">
                <h4 class="degree"><?=$education["speciality"] ?></h4>
                <h5 class="meta"><?=$education["title"] ?></h5>
                <div class="time"><?=$education["yearStart"] ?> - <?=$education["yearEnd"] ?></div>
            </div><!--//item-->
            <?php endforeach; ?>
        </div><!--//education-container-->

        <div class="languages-container container-block">
            <h2 class="container-block-title">Языки</h2>
            <ul class="list-unstyled interests-list">
                <?php foreach ($profileData["languages"] as $language ) : ?>
                <li><?=$language["title"] ?> <span class="lang-desc">(<?=$language["level"] ?> )</span></li>
                <?php endforeach ?>
            </ul>
        </div><!--//interests-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Интересы</h2>
            <ul class="list-unstyled interests-list">
                <?php foreach ($profileData["Interests"] as $interest) : ?>
                <li><?=$interest ?></li>
                <?php endforeach ?>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Обо мне</h2>
            <div class="summary">
                <p> <?=$careerData["about"]?> <p> </div><!--//summary-->
        </section><!--//section-->

        <section class="section experiences-section">

            <h2 class="section-title"><i class="fa fa-briefcase"></i>Опыт работы</h2>
            <?php foreach ($experinces as $experince) : ?>

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title"><?=$experince["post"] ?></h3>
                        <div class="time"><?=$experince["yearStart"] ?> - <?=$experince["yearEnd"] ?: "По настоящее время" ?> </div>
                    </div><!--//upper-row-->
                    <div class="company"> <?=$experince["company"] ?> </div>
                </div><!--//meta-->
                <div class="details">
                    <?=$experince["about"]  ?>
                </div><!--//details-->
            </div><!--//item-->

            <?php endforeach?>

        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Проекты</h2>
            <div class="intro">
                <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
            </div><!--//intro-->
            <?php foreach ($careerData["projects"] as $project) : ?>
            <div class="item">
                <span class="project-title"><a href="<?=$project["link"] ?>"><?=$project["title"] ?></a></span> - <span class="project-tagline"><?=$project["about"] ?></span>

            </div><!--//item-->
            <?php endforeach ?>
        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Навыки</h2>
            <?php foreach ($careerData["skills"] as $skill) : ?>
            <div class="skillset">
                <div class="item">
                    <h3 class="level-title"><?=$skill["title"] ?></h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="<?=$skill["data-level"] ?>%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->
            </div>
            <?php endforeach ?>
        </section><!--//skills-section-->

    </div><!--//main-body-->
</div>


<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>

