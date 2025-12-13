<?php
$buttonStyles = [
    'GameZone' => 'margin-top: 10px;',
    'Encrypta Chat' =>
        'position: absolute; top: 728px; left: 15.8%; transform: translateX(-50%);',
]; ?>

<div class="background--custom"></div>  
<div class="portfolio-container">
    <h1 class="main-title">Projects</h1>

    <div class="project-line1"></div>
    <div class="project-line2"></div>

    <div class="projects">
        <?php foreach ($projects as $project): ?>
            <div class="project-card">
                
                <!-- Title & Description ABOVE the image -->
                <div class="project-info">
                    <h2 class="project-title"><?= h($project['title']) ?></h2>
                    <p class="project-description"><?= h(
                        $project['description']
                    ) ?></p>
                </div>

                <!-- Check if there are videos, and display each video if available -->
                <?php if (isset($project['videos'])): ?>
                    <div class="project-videos-container">
                        <?php foreach ($project['videos'] as $video): ?>
                            <div class="project-video">
                                <video width="20%" height="10%" controls>
                                    <source src="<?= $this->Url->build(
                                        $video
                                    ) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Carousel for images -->
                <div class="carousel">
                    <?php foreach ($project['images'] as $image): ?>
                        <img src="<?= $this->Url->image($image) ?>" alt="<?= h(
    $project['title']
) ?>">
                    <?php endforeach; ?>
                </div>
                
                <!-- View Project Button with Inline Style -->
                <a href="<?= h($project['link']) ?>" 
                   class="view-btn" 
                   target="_blank"
                   style="<?= $buttonStyles[$project['title']] ??
                       '' ?>">View Project</a>

            </div>
        <?php endforeach; ?>
    </div>
</div>
