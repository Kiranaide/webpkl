<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="output.css" rel="stylesheet" type="text/css">
    <title>Produk - Flash Computer</title>
</head>
<body>
    <main class="container">
        <!-- Header -->
        <header class="container px-32 text-almost-black">
            <div class="flex py-4 px-4 h-16">
                <div class='flex items-center font-bold font-montserrat text-xl'>
                    <a href='index.php'>Flash Computer</a>
                </div>
                <!-- Navigation Menu -->
                <div class='flex-grow flex items-center justify-end'>
                    <nav>
                        <ul class='hidden lg:flex space-x-8 items-center font-montserrat'>
                            <li class='cursor-pointer font-light'>
                                <a href='catalog.php'>Catalog</a>
                            </li>
                            <li class='cursor-pointer font-light'>
                                <a href='cart.php'>Cart</a>
                            </li>
                            <button class='border-2 hover:border-almost-black hover:text-almost-black rounded-xl px-4 py-2'>
                                <a href='user.php'>Login / Register</a>
                            </button>
                        </ul>
                    </nav>
                </div>
                <!-- -->
            </div>
        </header>
        <!-- -->
        <div class="flex items-start px-32 py-8 space-x-4 mx-auto my-auto font-montserrat">
            <div class="item w-2/4 h-auto">
                <div class="flex flex-col space-y-2">
                    <div class="box-content">
                        <img src="images/psutest.jpg" alt="produk" class="">
                    </div>
                    <div class="flex flex-row items-center h-32 gap-4">
                        <div class="item w-1/4 h-32 bg-gray-100 rounded-lg max-w-1/4">1</div>
                        <div class="item w-1/4 h-32 bg-gray-100 rounded-lg max-w-1/4">2</div>
                        <div class="item w-1/4 h-32 bg-gray-100 rounded-lg max-w-1/4">3</div>
                        <div class="item w-1/4 h-32 bg-gray-100 rounded-lg max-w-1/4">4</div>
                    </div>
                </div>
            </div>
            <div class="item w-2/4 h-auto">
                <div class="overflow-y-auto py-4 px-3 space-y-4 bg-gray-100 rounded-lg h-auto">
                    <div class="text-4xl font-bold font-montserrat text-almost-black">Power Supply 550 Watt</div>
                    <div class="text-2xl font-semibold font-montserrat text-almost-black">Rp.10,000</div>
                    <div class="h-[1px] bg-black px-1"/>
                    <p class="text-justify text-base font-montserrat font-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quisquam laboriosam enim veritatis possimus vero impedit, aliquam voluptas adipisci ipsa itaque similique iure repellendus dignissimos esse commodi soluta eaque sequi?
                    </p>
                    <div>
                        <button class="text-almost-white text-base bg-almost-black rounded-xl px-6 py-4 border border-almost-black hover:bg-almost-white hover:text-almost-black">
                            <a href="cart.php">Add To Cart</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer -->
        <footer class="grid container place-items-center px-32 relative bottom-0 h-16">
            <div class='text-center text-almost-black text-sm font-light py-2'>Copyright &copy; 2022 Flash Computer</div>
        </footer>
        <!-- -->
    </main>
</body>
</html>
