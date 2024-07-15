<?php

    require_once __DIR__ . '/auth/helper.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockHero</title>
</head>
<body>
    <form action="auth/profile.php" method="post">
        <div class="container">

            <div class="profile-card">
                <div class="profile-header"><!-- profile header section -->
                    <div class="main-profile">
                        <div class="profile-image"></div>
                        <div class="profile-names">
                            <h1 class="username">Mohammad.S</h1>
                            <small class="page-title">Front-End developer</small>
                        </div>
                    </div>
                </div>

                <div class="profile-body"><!-- profile body section -->
                    <div class="profile-actions">
                        <button class="follow">Follow</button>
                        <button class="message">Message</button>
                        <section class="bio">
                            <div class="bio-header">
                                <i class="fa fa-info-circle"></i>
                                Bio
                            </div>
                            <p class="bio-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </p>
                        </section>
                    </div>

                    <div class="account-info">
                        <div class="data">
                            <div class="important-data">
                                <section class="data-item">
                                    <h3 class="value">104</h3>
                                    <small class="title">Post</small>
                                </section>
                                <section class="data-item">
                                    <h3 class="value">21K</h3>
                                    <small class="title">Follower</small>
                                </section>
                                </section>
                                <section class="data-item">
                                    <h3 class="value">51</h3>
                                    <small class="title">Following</small>
                                </section>
                            </div>
                            <div class="other-data">
                                <section class="data-item">
                                    <h3 class="value">41K</h3>
                                    <small class="title">Likes</small>
                                </section>
                                <section class="data-item">
                                    <h3 class="value">12K</h3>
                                    <small class="title">Comments</small>
                                </section>
                                <section class="data-item">
                                    <h3 class="value">2K</h3>
                                    <small class="title">Saved</small>
                                </section>
                            </div>
                        </div>

                        <div class="social-media">
                            <span>Follow me in:</span>
                            <a href="" class="media-link"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/MammadSahragard" class="media-link"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://www.linkedin.com/in/mohammadsahragard/" class="media-link"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/mammad.sahragard/" class="media-link"><i class="fab fa-instagram-square"></i></a>
                            <a href="https://github.com/MohammadSahragard" class="media-link"><i class="fab fa-github-square"></i></a>
                        </div>

                        <div class="last-post">
                            <div class="post-cover">
                                <span class="last-badge">Last Post</span>
                            </div>
                            <h3 class="post-title">3D layer</h3>
                            <button class="post-CTA">View</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</body>
</html>