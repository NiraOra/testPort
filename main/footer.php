    <footer>
        <p>&copy; 2024 Niranjana Arun Menon. All rights reserved. </p>
        <div> 
            <?php
            // Define your social media profile links
            $githubLink = "https://github.com/NiraOra";
            $linkedinLink = "https://www.linkedin.com/in/niranjana-arun-menon";
            $replitLink = "https://replit.com/@NiranjanaArun1";
            $gmailLink = "mailto:niraarunmenon@gmail.com";

            // Output the icons with links
            echo "<a href='$githubLink'><img src='footerIcon/github.png' width='20' height='20' padding='100' alt='GitHub'></a>";
            echo "<a href='$linkedinLink'><img src='footerIcon/linkedin.png' width='20' height='20' alt='LinkedIn'></a>";
            echo "<a href='$replitLink'><img src='footerIcon/replit.png' width='50' height='20' alt='repl.it'></a>";
            echo "<a href='$gmailLink'><img src='footerIcon/gmail.png' width='20' height='20' alt='Gmail'></a>";
            ?>
        </div>
    </footer>
</body>
</html>
<script src="/../js/script.js"></script>
<!-- 
<script>
    $(document).ready(function() {
        $('#main-container').addClass('show');
    });
</script> -->
