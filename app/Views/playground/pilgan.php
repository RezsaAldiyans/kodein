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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
            margin:-2px;
            padding: 10px 12px;
            background-color: #e7e7e7;
            border-color: #ddd;
            width: 40%;
            height: 40px;
        }
        input[type=radio]:checked + label{
            background-image: none;
            background-color: #4CAF50;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="grid grid-cols-10 h-14 flex justify-between items-center capitalize text-xl bg-[#E8EAEB] border-b border-[#333] text-dark">
        <div class="grid grid-cols-12 col-span-7">
            <div class="col-span-4 text-2xl px-4">
                <a href="/" class="inline-flex">
                    <img src="<?= base_url()?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein" style="height: 3rem;"></a>
                </div>
            <div class="col-span-8 flex items-center space-x-8 text-[17px]">
                <div class="link"><?php echo $kelas["materi_title"];?></div>
            </div>
        </div>
        <!-- right content -->
        <div class="col-span-3 relative flex flex-col pr-2.5">
            <p class="text-left text-[16px] mb-0.5 -mt-3"><?= $progressing ?>% Progress</p>
            <div class="progress min-w-full bg-white">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $progressing ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $progressing ?>%"></div>
            </div>
        </div>
    </div>
    <!-- main pilgan -->
    <div class="container pl-5">
        <div class="flex items-center mb-4">
            <div class="p"><?= $kelas["soal_pilgan"]?></div>
        </div>
        <form action="#" method="post">
            <div class="flex items-center mb-4">
                <input id="default-radio-1" type="radio" value="a" name="radio" class="jwb1">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-black-900"><?= $kelas["pilgan_a"]?></label>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-radio-2" type="radio" value="b" name="radio" class="jwb-2">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_b"]?></label>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-radio-3" type="radio" value="c" name="radio" class="jwb-3">
                <label for="default-radio-3" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_c"]?></label>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-radio-4" type="radio" value="d" name="radio" class="jwb-4">
                <label for="default-radio-4" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300"><?= $kelas["pilgan_d"]?></label>
            </div>
            <button type="submit" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-sky-400 hover:bg-opacity-30 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                Kirim
            </button>
            <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                Kembali
            </button>
        </form>
    </div>
</body>

</html>