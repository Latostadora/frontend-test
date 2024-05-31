## Setup
### Run APP with docker compose

docker compose up -d

### Access the app

http://localhost:8100


## Description

We want to implement a simple html page to show products loaded at the begging from backend.

Endpoint to get products: 

GET /products

Response:
[
    {
        "id": 1,
        "image_url": "https:\/\/srv.latostadora.com\/image\/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A1;b:f2f2f2;w:520;f:f.jpg",
        "name": "I'm Art Estoy Harto Black",
        "price": "18,90 \u20ac",
        "available": true
    },
    {
        "id": 2,
        "image_url": "https:\/\/srv.latostadora.com\/image\/i_m_art_estoy_harto--id:c52dbb2e-50be-4019-86df-63caee0cd4a0;s:H_A13;b:f2f2f2;w:520;f:f.jpg",
        "name": "I'm Art Estoy Harto Orange",
        "price": "19,90 \u20ac",
        "available": true
    }
]




Once products are loaded, the first product in the list will be shown.

When user click "Add to Cart" button, you have to call another endpoint:

POST /add-to-cart

Form data param:

id (int)

When response is success, /add-to-cart will return 201 http code and will return 500 when fails.

You have handle both cases.
