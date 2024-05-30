<?php

header("Content-Type: application/json");
echo json_encode([
    [
        'id' => 1,
        'image_url' => 'https://srv.latostadora.com/image/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A1;b:f2f2f2;w:520;f:f.jpg',
        'name' => 'I\'m Art Estoy Harto Black',
        'price' => '18,90 €',
        'available' => true,
    ],
    [
        'id' => 2,
        'image_url' => 'https://srv.latostadora.com/image/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A13;b:f2f2f2;w:520;f:f.jpg',
        'name' => 'I\'m Art Estoy Harto Orange',
        'price' => '19,90 €',
        'available' => true,
    ],
    [
        'id' => 3,
        'image_url' => 'https://srv.latostadora.com/image/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A5;b:f2f2f2;w:520;f:f.jpg',
        'name' => 'I\'m Art Estoy Harto White',
        'price' => '20,90 €',
        'available' => false,
    ],
    [
        'id' => 4,
        'image_url' => 'https://srv.latostadora.com/image/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A14;b:f2f2f2;w:520;f:f.jpg',
        'name' => 'I\'m Art Estoy Harto Yellow',
        'price' => '21,90 €',
        'available' => true,
    ],
]);