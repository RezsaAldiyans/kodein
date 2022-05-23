<!DOCTYPE html>
<html lang="en">
<?php
$progressing = round(($progress/$total_materi)*100);
$session = session();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PILGAN</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/    css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap-reboot.min.css"> -->
    <!-- script talwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        input[type="radio"] {
            display: none;
            margin: 10px;
        }
        input[type="radio"] + label {
            cursor: pointer;
            display:inline-block;
            /* margin:-2px; */
            padding: 10px 12px;
            background-color: #fff;
            /* border-color: #e7e7e7; */
            width: 100%;
            /* height: 40px; */
        }
        input[type=radio]:checked + label,
        input[type=radio]:hover + label{
            background-image: none;
            background-color: #4CAF50;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="grid grid-cols-10 h-14 flex justify-between items-center capitalize text-xl bg-sky-100 border-b border-sky-200 text-dark">
        <div class="grid grid-cols-12 col-span-7">
            <div class="col-span-4 text-2xl px-4 sm:w-1/2">
                <a href="/" class="inline-flex">
                    <img src="<?= base_url()?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein" style="height: 3rem;"></a>
                </div>
            <div class="col-span-8 flex items-center space-x-8 text-[20px]">
                <div class="link"><?php echo $kelas["materi_title"];?></div>
            </div>
        </div>
        <!-- right content -->
        <div class="col-span-3 relative flex flex-col pr-2.5">
            <p class="text-left text-[16px] mb-0.5 -mt-3"><?= $progressing ?>% Progress</p>
            <div class="w-full bg-gray-200 h-5 rounded-full">
                <div class="bg-blue-600 h-5 rounded-full" style="width: <?= $progressing ?>%"></div>
            </div>
        </div>
    </div>
    <!-- main pilgan -->
    <div class="flex justify-center mt-5">
    <div class="container flex justify-center pb-3 border-solid border-2 border-[#545454] w-3/4 p-4">
        <form action="#" method="post">
                <div class="flex mb-4 text-[24px]">
                    <div class="p font-semibold"><?= $kelas["soal_pilgan"]?></div>
                </div>
                <div class="mb-4 border-solid border-2 border-sky-500 w-full rounded">
                    <input id="default-radio-1" type="radio" value="a" name="radio" class="jwb1">
                    <label for="default-radio-1" class="text-sm font-medium text-black-900"><?= $kelas["pilgan_a"]?></label>
                </div>
                <div class="mb-4 border-solid border-2 border-sky-500 w-full rounded">
                    <input id="default-radio-2" type="radio" value="b" name="radio" class="jwb-2">
                    <label for="default-radio-2" class="text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_b"]?></label>
                </div>
                <div class="mb-4 border-solid border-2 border-sky-500 w-full rounded">
                    <input id="default-radio-3" type="radio" value="c" name="radio" class="jwb-3">
                    <label for="default-radio-3" class="text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_c"]?></label>
                </div>
                <div class="mb-4 border-solid border-2 border-sky-500 w-full rounded">
                    <input id="default-radio-4" type="radio" value="d" name="radio" class="jwb-4">
                    <label for="default-radio-4" class="text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_d"]?></label>
                </div>
                <div class="flex space-x-5">
                    <button type="submit" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-sky-400 hover:bg-opacity-30 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Kirim
                    </button>
                    <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Kembali
                    </button>
                </div>
        </form>
    </div>
    </div>
</body>

</html>