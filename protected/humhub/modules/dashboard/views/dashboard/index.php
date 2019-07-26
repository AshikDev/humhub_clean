<?php

/**
 * @var \humhub\modules\user\models\User $contentContainer
 * @var bool $showProfilePostForm
 */
//use humhub\modules\activity\widgets\ActivityStreamViewer;
use humhub\modules\dashboard\widgets\DashboardContent;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\widgets\FooterMenu;

// Custom
//use humhub\modules\directory\widgets\NewSpaces;
?>

<div class="container">
    <div class="row">
        <div class="col-md-3 layout-sidebar-container">
            <?php foreach ($commuityAll as $community) : ?>
                <?= \humhub\modules\space\widgets\ChooserCustom::widget([
                    'community' => $community
                ]);
                ?>
            <?php endforeach; ?>
            <?/*=
            Sidebar::widget([
            'widgets' => [
            // Custom
            [
            NewSpaces::class,
            ['showMoreButton' => false],
            ['sortOrder' => 0]
            ],
            // Custom
            //                    [
            //                        ActivityStreamViewer::class,
            //                        ['streamAction' => '/dashboard/dashboard/activity-stream'],
            //                        ['sortOrder' => 150]
            //                    ]
            ]
            ]);
            */?>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
        </div>
        <div class="col-md-9 layout-content-container">
            <?=
            DashboardContent::widget([
                'contentContainer' => $contentContainer,
                'showProfilePostForm' => $showProfilePostForm
            ]);
            ?>
        </div>
    </div>
</div>
