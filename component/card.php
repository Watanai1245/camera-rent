<?php
function fetchDataAndCreateCards($jsonFilePath, $elementId)
{
    $jsonData = json_decode(file_get_contents($jsonFilePath), true);
    echo '<div id="' . $elementId . '">' . createCards($jsonData) . '</div>';
}

function createCards($data)
{
    $cards = array_map('createCard', $data);
    return implode('', $cards);
}

function createCard($data)
{
    $card = '<div class="card">';
    $card .= '<img src="' . $data['imageSrc'] . '" alt="Card Image">';

    $cardContent_1 = '<div class="card-content">';
    $cardContent_1 .= '<h3>' . $data['productName'] . '</h3>';
    $cardContent_1 .= '<p>' . $data['productDescription'] . '<br><br>' . implode('<br>', $data['features']) . '<br></p>';
    $cardContent_1 .= '</div>'; // closing div for card-content
    $card .= $cardContent_1;

    $cardContent_2 = '<div class="card-content_2">';
    $price = '<h3 class="text-content_2">' . $data['price'] . '</h3>';
    $linkOpening = '<a href="' . $data['link'] . '" target="_blank">';
    $button = '<button class="card-button">ข้อมูลเพิ่มเติม</button>';
    $linkClosing = '</a>';
    $link = $linkOpening . $button . $linkClosing;
    $cardContent_2 .= $price . $link; // Concatenate values here
    $cardContent_2 .= '</div>'; // closing div for card-content
    $card .= $cardContent_2;

    $card .= '</div>'; // closing div for card

    return $card;
}

?>

