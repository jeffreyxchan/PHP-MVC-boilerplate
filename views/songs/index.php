<p>Hello from /songs/index.php</p>

<?php

foreach($songs as $song) {
    echo '<p>' . $song->title . '</p>';
}
