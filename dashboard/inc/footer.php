    </main>
    <footer>
        <ul class="status-bar">
            <li>Rank: $rank</li>
            <li>Posts: <a href="posts.php">$int</a></li>
            <li>Favorite Games: $int</li>
            <li></li>
        </ul>
        <div class="logout-container">
            <span class="icon-small"><?php echo file_get_contents("../img/icons/exit-door.svg"); ?></span>
            <a class="logout" href="#logout">Logout</a>
        </div>
    </footer>

    <script src="../js/dashboard.js"></script>
</body>
</html>