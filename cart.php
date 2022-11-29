<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="output.css" rel="stylesheet" type="text/css">
    <title>Shopping Cart - Flash Computer</title>
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
            <div class="overflow-y-auto py-4 px-3 space-y-6 bg-gray-100 rounded-lg h-auto">
                <div class="text-3xl font-bold font-montserrat text-almost-black">Cart</div>
                <!-- Card Cart -->
                <div class='overflow-y-auto flex space-x-2 h-16 bg-almost-white'>
                    <div class="item w-1/5 h-16">
                        <img src='images/psutest.jpg' />
                    </div>
                    <div class="item w-3/5 h-16 space-y-1">
                        <h3>Testing PSU</h3>
                        <p>Rp. 10,000</p>
                    </div>
                    <div class="item w-1/5 h-16 items-center justify-center">
                        <a href=''>Delete</a>
                    </div>
                </div>
                <!-- -->
                <div class="h-[1px] bg-almost-black px-1"/>
                <div class="text-3xl font-bold font-montserrat text-almost-black">Metode Pembayaran</div>
                <div class="flex items-center mb-4">
                    <input type="radio" name="transfer" id="transfer" class="w-4 h-4 text-blue-600 bg-white-100 border-white-300 focus:ring-almost-black focus:ring-2">
                    <label for="transfer" class="ml-2 text-sm font-medium text-almost-black ">Transfer</label>
                </div>
                <div class="flex items-center mb-4">
                    <input type="radio" name="ambil" id="ambil" class="w-4 h-4 text-blue-600 bg-white-100 border-white-300 focus:ring-almost-black focus:ring-2">
                    <label for="ambil" class="ml-2 text-sm font-medium text-almost-black ">Bayar Saat Mengambil</label>
                </div>
            </div>
        </div>
    </div>
        <div class="item w-2/4 h-auto">
            <div class="overflow-y-auto py-4 px-3 space-y-6 bg-gray-100 rounded-lg h-auto">
                <div class="text-3xl font-bold font-montserrat text-almost-black">Total</div>
                <div class="h-[1px] bg-almost-black px-1"/>
                <div class="text-base font-normal font-montserrat text-almost-black">Testing PSU</div>
                <div class="text-base font-normal font-montserrat text-almost-black">Diskon</div>
                <div class="h-[1px] bg-almost-black px-1"/>
                <div class="text-base font-normal font-montserrat text-almost-black">Total</div>
                <button class="text-almost-white text-2xl bg-almost-black rounded-xl px-6 py-4 border border-almost-black hover:bg-almost-white hover:text-almost-black">
                    <a href="success.php">Bayar</a>
                </button>
            </div>
        </div>
    </div>
</main>
    <!-- Footer -->
    <footer class="grid container place-items-center px-32 relative bottom-0 h-16">
        <div class='text-center text-almost-black text-sm font-light py-2'>Copyright &copy; 2022 Flash Computer</div>
    </footer>
    <!-- -->
</body>
</html>