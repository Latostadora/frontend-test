document.addEventListener('DOMContentLoaded', function() {
    loadProducts();
    document.getElementById('addToCart').addEventListener('click', addToCart);
});

function loadProducts() {
    fetch('/products')
        .then(response => response.json())
        .then(data => {
            let productsDiv = document.getElementById('products');
            productsDiv.innerHTML = '<h2>Products:</h2>';
            data.forEach(product => {
                productsDiv.innerHTML += `<p>${product.name}: $${product.price}</p>`;
            });
        })
        .catch(error => console.error('Error fetching products:', error));
}

function addToCart() {

    let formData = new FormData();
    formData.append('id', 1);
    formData.append('email', 'john.doe@example.com');
    const options = {
        method: 'POST',
        body: formData
    };
    fetch('/add-to-cart', options)
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => console.error('Error adding to cart:', error));
}
