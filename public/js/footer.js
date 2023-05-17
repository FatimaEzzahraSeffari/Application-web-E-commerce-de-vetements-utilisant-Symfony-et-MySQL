const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="img/light-logo.png" class="logo" alt="">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">men</li>
                <li><a href="/mtshirt" class="footer-link">t-shirts</a></li>
                <li><a href="/mtshirt" class="footer-link">sweatshirts</a></li>
                <li><a href="/mtshirt" class="footer-link">shirts</a></li>
                <li><a href="/mjeans" class="footer-link">jeans</a></li>
                <li><a href="/mjeans" class="footer-link">trousers</a></li>
                <li><a href="/shoes" class="footer-link">shoes</a></li>
                <li><a href="/men" class="footer-link">casuals</a></li>
                <li><a href="/men" class="footer-link">formals</a></li>
                <li><a href="/hommesp" class="footer-link">sports</a></li>
                <li><a href="/montre" class="footer-link">watch</a></li>
            </ul>
            <ul class="category">
                <li class="category-title">women</li>
                <li><a href="/shirtw" class="footer-link">t-shirts</a></li>
                <li><a href="/shirtw"" class="footer-link">sweatshirts</a></li>
                <li><a href="/shirtw"" class="footer-link">shirts</a></li>
                <li><a href="/jeansw" class="footer-link">jeans</a></li>
                <li><a href="/jeansw" class="footer-link">trousers</a></li>
                <li><a href="/shoesw" class="footer-link">shoes</a></li>
                <li><a href="femme" class="footer-link">casuals</a></li>
                <li><a href="femme" class="footer-link">formals</a></li>
                <li><a href="/femmesp" class="footer-link">sports</a></li>
                <li><a href="/montrew" class="footer-link">watch</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-title">about clothing</p>
    <p class="info">Welcome to clothing, your one-stop-shop for all your fashion and lifestyle needs. We are a team of passionate individuals who are dedicated to providing you with the best possible online shopping experience.

    Our journey began with a simple idea - to create a platform where people could shop for the latest trends and styles from the comfort of their homes. Today, we have grown into a leading online retailer, offering a wide range of products from some of the most sought-after brands in the industry.
    
    At clothing, we believe that shopping should be easy, convenient, and enjoyable. That's why we have designed our webapp to be user-friendly and intuitive, with features such as easy navigation, quick search, and secure checkout.
    
    We take great pride in our commitment to customer satisfaction. From the quality of our products to the speed of our shipping and our friendly customer support team, we are always striving to exceed your expectations.</p>
    <p class="info">Thank you for choosing clothing  as your preferred online shopping destination. We look forward to serving you and providing you with the best possible shopping experience./p>
    <p class="info">support emails - help@clothing.com, customersupport@clothing.com</p>
    <p class="info">telephone - 180 00 00 001, 180 00 00 002</p>
    <div class="footer-social-container">
        <div>
            <a href="#" class="social-link">terms & services</a>
            <a href="#" class="social-link">privacy page</a>
            <a href="/contact" class="social-link">Reclamation platform</a>
        </div>
        <div>
            <a href="https://www.instagram.com/" class="social-link">instagram</a>
            <a href="https://www.facebook.com/" class="social-link">facebook</a>
            <a href="https://twitter.com" class="social-link">twitter</a>
        </div>
    </div>
    <p class="footer-credit">Clothing, Best apparels online store</p>
    `;
}

createFooter();
