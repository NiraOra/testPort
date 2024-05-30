    <footer>
        <p>&copy; 2024 Niranjana Arun Menon. All rights reserved. </p>
        <div> 
            <?php
            // Define your social media profile links
            $githubLink = "https://github.com/NiraOra";
            $linkedinLink = "https://www.linkedin.com/in/NiranjanaArunMenon";
            $replitLink = "https://replit.com/@yourusername";
            $gmailLink = "mailto:niraarunmenon@gmail.com";

            // Output the icons with links
            echo "<a href='$githubLink'><img src='footerIcon/github.png' alt='GitHub'></a>";
            echo "<a href='$linkedinLink'><img src='footerIcon/linkedin.png' alt='LinkedIn'></a>";
            echo "<a href='$replitLink'><img src='footerIcon/replit.png' alt='repl.it'></a>";
            echo "<a href='$gmailLink'><img src='footerIcon/gmail.png' alt='Gmail'></a>";
            ?>
        </div>
    </footer>
</body>
</html>

<script>
    $(document).ready(function() {
        $('#main-container').addClass('show');
    });
</script>
