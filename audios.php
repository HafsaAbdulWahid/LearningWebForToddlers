<?php
// Create connection
$con = mysqli_connect('localhost', 'root', '', 'islamiclearningfortoddlers');


$result = mysqli_query($con, $sql);


while ($row = mysqli_fetch_assoc($result)) {
    $data = $row['videoUrl'];
    $final = str_replace('watch?v=', 'embed/', $data);

    echo "<iframe class='rounded wow zoomIn' data-wow-delay='0.8s' 
                width='1025' height='500' 
                src='$final' 
                frameborder='0' 
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
                allowfullscreen></iframe>";
}
?>