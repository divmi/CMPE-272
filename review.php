<?php
function getReviews($url)
{
    $ch = curl_init();
//Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    foreach ($json as $row) {
        echo '<div class="swiper-slide">
    <div class="card">
        <div class="card-body">
            <div class="testimonial-text">' . $row['ReviewComment'] . '</div>
            <div class="testimonial-text">Rating ' . $row['Rating'] . '</div>
            <div class="testimonial-author">' . $row['Username'] . '</div>
        </div>
    </div>
</div>';
    }
}