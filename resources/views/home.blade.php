<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bike Webshop</title>

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>

    </head>
    <body>
        <header class="sticky top-0 z-50">
            <nav class="bg-white border-gray-200 dark:bg-gray-900">
                <div
                    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
                >
                    <a
                        href="https://flowbite.com/"
                        class="flex items-center space-x-3 rtl:space-x-reverse"
                    >
                        <img
                            src="https://flowbite.com/docs/images/logo.svg"
                            class="h-8"
                            alt="Flowbite Logo"
                        />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                            >BikeShop</span
                        >
                    </a>

                    <!-- <div
                        class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
                    >
                        <a
                        href="#"
                        class="text-gray-900 bg-white mx-1 md:mx-2 border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                        >
                            Sign in
                        </a>
                        <a
                            href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Sign up
                        </a>

                        </ul>
                    </div> -->

                    <div class="relative md:order-2">
                        <button
                            id="cart-button"
                            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                        >
                            Cart
                        </button>
                        <div
                            id="cart-dropdown"
                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 hidden"
                        >
                            <div class="p-4">
                                <p class="text-gray-600 dark:text-gray-300">Your cart is empty.</p>
                                <a
                                    href="/shoppingcart"
                                    class="mt-4 inline-block bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    Purchase
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
            </nav>
        </header>
        <main>
            <section
                class="bg-gray-100 dark:bg-gray-800 py-20"
                style="height: calc(100vh - 64px)"
            >
                <div
                    class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center"
                >
                    <div class="text-left">
                        <h1
                            class="text-4xl font-bold text-gray-900 dark:text-white"
                        >
                            Welcome to Bike Webshop
                        </h1>
                        <p
                            class="mt-4 text-lg text-gray-600 dark:text-gray-300"
                        >
                            Find your perfect bike with us. Quality bikes at
                            affordable prices.
                            <span
                                id="extra-content"
                                class="mt-4 text-lg text-gray-600 dark:text-gray-300 hidden"
                            >
                                We offer a wide range of bikes for all <br />
                                types of riders. Whether you're looking for a
                                mountain bike, road bike, or city bike, we have
                                something <br />
                                for everyone. Our bikes are built with quality
                                materials and come with a warranty <br />
                                to ensure your satisfaction.
                            </span>
                        </p>
                        <div class="mt-8 space-x-4">
                            <a
                                href="#products"
                                class="inline-block bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >Shop</a
                            >
                            <a
                                id="learn-more-btn"
                                href="#"
                                class="inline-block bg-gray-300 text-gray-900 font-medium rounded-lg text-sm px-6 py-3 hover:bg-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                >Learn More</a
                            >
                        </div>
                    </div>
                </div>
            </section>

            <section id="products" class="bg-white dark:bg-gray-900 py-20">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2
                        class="text-3xl font-bold text-gray-900 dark:text-white mb-12"
                    >
                        Our Products
                    </h2>
                    <div class="flex justify-between items-center mb-4">
                        <select
                            id="sort-select"
                            class="p-2 border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-white"
                        >
                            <option value="asc">Price: Low to High</option>
                            <option value="desc" selected>Price: High to Low</option>
                        </select>
                    </div>
                    <div
                        id="product-list"
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
                    >
                        @foreach($products as $product)
                        <div
                            class="product bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md"
                            data-price="{{ $product->price }}"
                            data-name="{{ $product->name }}"
                        >
                            <h3
                                class="text-xl font-semibold text-gray-900 dark:text-white"
                            >
                                {{ $product->model }}
                            </h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">
                                ${{ $product->price }}
                            </p>
                            <p class="mt-4 text-gray-600 dark:text-gray-300">
                                {{ $product->description }}
                            </p>
                            <button
                                class="mt-4 bg-blue-700 text-white font-medium rounded-lg text-sm px-6 py-3 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Add to Cart
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-white dark:bg-gray-900 py-8">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="flex flex-col md:flex-row justify-between items-center"
                >
                    <div class="text-gray-600 dark:text-gray-300 mb-4 md:mb-0">
                        &copy; <span id="current-year">2023</span> Bike Webshop.
                        All rights reserved.
                    </div>
                    <div class="flex space-x-4">
                        <a
                            href="#"
                            class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white"
                            >Privacy Policy</a
                        >
                        <a
                            href="#"
                            class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white"
                            >Terms of Service</a
                        >
                        <a
                            href="#"
                            class="text-gray-600 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white"
                            >Contact Us</a
                        >
                    </div>
                </div>
            </div>
        </footer>
    </body>

    <!-- Shopping Cart -->
    <script>
        document.getElementById("cart-button").addEventListener("click", function () {
            const cartDropdown = document.getElementById("cart-dropdown");
            cartDropdown.classList.toggle("hidden");
        });
    </script>

    <!-- Learn More Hero -->
    <script>
        document
            .getElementById("learn-more-btn")
            .addEventListener("click", function (event) {
                event.preventDefault();
                const extraContent = document.getElementById("extra-content");
                if (extraContent.classList.contains("hidden")) {
                    extraContent.classList.remove("hidden");
                    this.textContent = "Learn Less";
                } else {
                    extraContent.classList.add("hidden");
                    this.textContent = "Learn More";
                }
            });
    </script>


    <!-- Sort & Search Products -->
    <script>
        function sortProducts() {
            const productList = document.getElementById("product-list");
            const products = Array.from(
                productList.getElementsByClassName("product")
            );
            const sortOrder = document.getElementById("sort-select").value;

            products.sort((a, b) => {
                const priceA = parseInt(a.getAttribute("data-price"));
                const priceB = parseInt(b.getAttribute("data-price"));
                return sortOrder === "asc" ? priceA - priceB : priceB - priceA;
            });

            productList.innerHTML = "";
            products.forEach((product) => productList.appendChild(product));
        }

        document
            .getElementById("sort-select")
            .addEventListener("change", sortProducts);

        // Sort products on initial load
        document.addEventListener("DOMContentLoaded", sortProducts);
    </script>

    <!-- Footer Copyright Year Updator -->
    <script>
        document.getElementById("current-year").textContent =
            new Date().getFullYear();
    </script>
</html>
