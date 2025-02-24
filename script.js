let cart = [];

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', event => {
        const name = event.target.getAttribute('data-name');
        const price = parseFloat(event.target.getAttribute('data-price'));
        
        const product = cart.find(item => item.name === name);
        if (product) {
            product.quantity += 1;
        } else {
            cart.push({ name, price, quantity: 1 });
        }
        updateCart();
    });
});

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        const div = document.createElement('div');
        div.classList.add('cart-item');
        div.innerHTML = `
            <h3>${item.name}</h3>
            <p>Quantity: ${item.quantity}</p>
            <p>Price: $${item.price.toFixed(2)}</p>
            <p>Total: $${itemTotal.toFixed(2)}</p>
        `;
        cartItems.appendChild(div);
    });

    document.getElementById('cart-total').textContent = total.toFixed(2);
}

document.getElementById('checkout-btn').addEventListener('click', () => {
    alert('Checkout process started!');
    // Add your checkout logic here
});
