<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="output.css" rel="stylesheet" type="text/css">
    <title>List Katalog - Flash Computer</title>
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
        <div class="flex items-start px-32 py-8 space-x-4 mx-auto my-auto h-full">
            <aside aria-label="Sidebar" class="item w-1/4 h-auto">
                <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded-lg">
                    <div class="py-4 items-center text-xl text-center font-bold text-almost-black">
                        <span class="self-center whitespace-nowrap">Etalase Barang</span>
                    </div>
                    <div class="h-[1px] bg-almost-black px-1"/>
                    <ul class="space-y-4 py-4">
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">CPU</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Motherboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">RAM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Power Supply</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Case</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">VGA</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Peripherals</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Rakitan PC</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-200">
                                <span class="ml-3">Lainnya</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded-lg item w-3/4 h-auto">
                <div class="grid overflow-hidden grid-cols-4 grid-rows-3 gap-y-4 gap-x-2 grid-flow-row w-auto h-auto">
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
                    <a class="mx-auto my-auto" href="product.php">
                        <!-- Card Catalog -->
                        <div class='relative w-48 rounded-lg bg-almost-white' id='card'>
                            <img class="rounded-lg max-w-full" src='images/psutest.jpg' />
                            <h3 class='pl-2 pt-2' id='name'>Testing Card</h3>
                            <div class='pl-2 pb-2' id='price'>
                                <p>Rp. 10,000</p>
                            </div>
                        </div>
                        <!-- -->
                    </a>
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