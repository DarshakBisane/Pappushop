
function updateOrderDetails(orderId, totalPrice, refundedPrice) {
    document.querySelector('.orderid').innerHTML = "ORDER ID: " + orderId;
    document.getElementById('total').value = "₹" + totalPrice.toFixed(2) + " (including all tax)";
    document.getElementById('refunded').value = "₹" + refundedPrice.toFixed(2);
}
