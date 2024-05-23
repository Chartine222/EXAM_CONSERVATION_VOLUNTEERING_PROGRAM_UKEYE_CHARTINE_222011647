// Show login popup
document.getElementById('loginBtn').addEventListener('click', function() {
    document.getElementById('loginPopup').style.display = 'flex';
});

// Show register popup
document.getElementById('registerBtn').addEventListener('click', function() {
    document.getElementById('registerPopup').style.display = 'flex';
});

// Close login popup
document.getElementById('loginClose').addEventListener('click', function() {
    document.getElementById('loginPopup').style.display = 'none';
});

// Close register popup
document.getElementById('registerClose').addEventListener('click', function() {
    document.getElementById('registerPopup').style.display = 'none';
});

// Close popup when clicking outside of the popup content
window.addEventListener('click', function(event) {
    if (event.target === document.getElementById('loginPopup')) {
        document.getElementById('loginPopup').style.display = 'none';
    }
    if (event.target === document.getElementById('registerPopup')) {
        document.getElementById('registerPopup').style.display = 'none';
    }
});
