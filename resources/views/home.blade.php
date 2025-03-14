<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bike Webshop</title>

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>



    </head>
    <body>
        <header class="sticky top-0 z-50">
            <nav class="bg-white shadow-md dark:bg-gray-900">
            <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Bike Webshop</span>
                </a>
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <a href="#" class="text-gray-700 hover:text-blue-700 dark:text-gray-400 dark:hover:text-white font-medium rounded-lg text-sm px-4 py-2">Sign In</a>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</a>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                </div>
            </div>
            </nav>
        </header>
        <main>

            <section class="bg-gray-100 dark:bg-gray-800 py-20" style="height: calc(100vh - 64px);">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                    <div class="text-left">
                        <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Welcome to Bike Webshop</h1>
                        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                            Find your perfect bike with us. Quality bikes at affordable prices.
                            <span id="extra-content" class="mt-4 text-lg text-gray-600 dark:text-gray-300 hidden">
                                We offer a wide range of bikes for all <br>
                                types of riders. Whether you're looking for a mountain bike, road bike, or city bike, we have something <br>
                                for everyone. Our bikes are built with quality materials and come with a warranty <br>
                                to ensure your satisfaction.
                            </span>
                        </p>
                        <!-- <div id="extra-content" class="mt-4 text-lg text-gray-600 dark:text-gray-300 hidden">
                            <p>We offer a wide range of bikes for all types of riders. Whether you're looking for a mountain bike, road bike, or city bike, we have something for everyone. Our bikes are built with quality materials and come with a warranty to ensure your satisfaction.</p>
                        </div> -->
                        <div class="mt-8 space-x-4">
                            <a href="#" class="inline-block bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Shop</a>
                            <a id="learn-more-btn" href="#" class="inline-block bg-gray-300 text-gray-900 font-medium rounded-lg text-sm px-6 py-3 hover:bg-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900 py-20">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Our Products</h2>
                    <div class="flex justify-between items-center mb-8">
                        <input type="text" id="search-input" class="p-2 border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-white" placeholder="Search products...">
                        <select id="sort-select" class="p-2 border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-white">
                            <option value="asc">Price: Low to High</option>
                            <option value="desc">Price: High to Low</option>
                        </select>
                    </div>
                    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="product bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md" data-price="500" data-name="Mountain Bike">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Mountain Bike</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">$500</p>
                            <p class="mt-4 text-gray-600 dark:text-gray-300">A durable mountain bike perfect for off-road adventures.</p>
                            <button class="mt-4 bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to Cart</button>
                        </div>
                        <div class="product bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md" data-price="700" data-name="Road Bike">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Road Bike</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">$700</p>
                            <p class="mt-4 text-gray-600 dark:text-gray-300">A lightweight road bike designed for speed and efficiency.</p>
                            <button class="mt-4 bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to Cart</button>
                        </div>
                        <div class="product bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md" data-price="300" data-name="City Bike">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">City Bike</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">$300</p>
                            <p class="mt-4 text-gray-600 dark:text-gray-300">A comfortable city bike ideal for daily commutes.</p>
                            <button class="mt-4 bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to Cart</button>
                        </div>

                    </div>
                </div>
            </section>
        </main>


        <footer class="bg-white dark:bg-gray-900 py-8">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-600 dark:text-gray-300 mb-4 md:mb-0">
                        &copy; <span id="current-year">2023</span> Bike Webshop. All rights reserved.
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white">Privacy
                            Policy</a>
                        <a href="#" class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white">Terms of
                            Service</a>
                        <a href="#" class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </footer>


    </body>

    <script>
        document.getElementById('learn-more-btn').addEventListener('click', function(event) {
            event.preventDefault();
            const extraContent = document.getElementById('extra-content');
            if (extraContent.classList.contains('hidden')) {
                extraContent.classList.remove('hidden');
                this.textContent = 'Learn Less';
            } else {
                extraContent.classList.add('hidden');
                this.textContent = 'Learn More';
            }
        });
    </script>

    <script>
        document.getElementById('sort-select').addEventListener('change', function() {
            const productList = document.getElementById('product-list');
            const products = Array.from(productList.getElementsByClassName('product'));
            const sortOrder = this.value;

            products.sort((a, b) => {
                const priceA = parseInt(a.getAttribute('data-price'));
                const priceB = parseInt(b.getAttribute('data-price'));
                return sortOrder === 'asc' ? priceA - priceB : priceB - priceA;
            });

            productList.innerHTML = '';
            products.forEach(product => productList.appendChild(product));
        });

        document.getElementById('search-input').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const products = document.getElementsByClassName('product');

            Array.from(products).forEach(product => {
                const productName = product.getAttribute('data-name').toLowerCase();
                if (productName.includes(searchTerm)) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</html>
