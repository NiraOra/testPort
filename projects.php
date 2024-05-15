<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>My Projects</h2>
        <div class="projects">
            <?php
            // Example array of projects
            $projects = [
                [
                    'title' => 'Project 1',
                    'description' => 'Description of project 1.',
                    'image' => 'images/project1.jpg'
                ],
                [
                    'title' => 'Project 2',
                    'description' => 'Description of project 2.',
                    'image' => 'images/project2.jpg'
                ],
                [
                    'title' => 'Project 3',
                    'description' => 'Description of project 3.',
                    'image' => 'images/project3.jpg'
                ]
            ];

            // Loop through projects and display them
            foreach ($projects as $project) {
                echo '<div class="project">';
                echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
                echo '<h3>' . $project['title'] . '</h3>';
                echo '<p>' . $project['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Niranjana Arun Menon. All rights reserved.</p>
    </footer>
</body>
</html>
