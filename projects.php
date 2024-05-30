<div class="wrapper">

    <?php include 'header.php'; ?>

    <div class="container" id="main-container">
        <h2>My Projects</h2>
        <div class="projects">
            <?php
            $projects = [
                [
                    'title' => 'University Projects',
                    'url' => 'projects/UniversityProjects.php',
                    'description' => 'Some Projects Done as A part of University',
                    'image' => 'images/project1.jpg'
                ],
                [
                    'title' => 'Personal Projects',
                    'url' => 'projects/PersonalProjects.php',
                    'description' => 'Links to Some of my Personal Projects',
                    'image' => 'images/project2.jpg'
                ],
                [
                    'title' => 'CBA Internship Projects',
                    'url' => 'projects/CBAInternshipProjects.php',
                    'description' => 'Tasks done as a part of my CBA Internship',
                    'image' => 'images/project3.jpg'
                ],
                [
                    'title' => 'CPMSoc - Penguin Contest',
                    'url' => 'projects/CPMSocPenguin.php',
                    'description' => 'Some Tasks done as a part of a competition to Score the most based on questions put through.',
                    'image' => 'images/project3.jpg'
                ]
            ];

            foreach ($projects as $project) {
                echo '<div class="project">';
                echo '<h2><a href="' . $project['url'] . '">' . $project['title'] . '</a></h2>';
                echo '<p>' . $project['description'] . '</p>';
                echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>