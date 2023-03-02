<?php
// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);
