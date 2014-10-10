<?php
echo 'Welcome';

if (isset($_GET['debug'])) {
    echo 'Show errors';
} else {
    echo 'No errors';
}
