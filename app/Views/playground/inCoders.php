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
    <title>Code Playground</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- cdn css editor playground -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/theme/material-ocean.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/show-hint.css">

    <style>
    .height-context {
        /* calculate height for context (full screen - height of the topbar) */
        height: calc(100% - 3.5rem);
    }

    .editor-height {
        height: calc(100% - 5rem);
        overflow-y: auto !important;
    }

    .CodeMirror {
        position: relative;
        overflow: hidden;
    }

    /* remove scrollbar from this element */
    .incoder-editor {
        scrollbar-width: none;
        scroll-behavior: smooth;
        overflow-y: auto !important;
    }

    .incoder-editor::-webkit-scrollbar {
        width: 0 !important;
    }

    .incoder-editor::-webkit-scrollbar-thumb {
        background-color: transparent;
        border: none;
    }

    /* make the iframe full screen */
    #hasil {
        width: 100%;
        height: 100%;
    }

    /* css modal, i love you caffy */
    .caffy {
        margin-bottom: 0;
        display:block;
        width:1000px;
        height:200px;
        overflow:hidden;
    }
    .caffyImage{
        transform: translateY(110px);
    }
    #static-example{
        transform: translateY(170px);
        display: none;
    }
    .caffyImage:hover
    {
        transform: translateY(-20px);
        transition: 0.7s;
    }
    </style>

    <!-- cdn js editor playground -->
    <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/mode/xml/xml.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/mode/javascript/javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/mode/css/css.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/mode/htmlmixed/htmlmixed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/edit/matchbrackets.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/show-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/javascript-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/html-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/xml-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/css-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/keymap/sublime.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- <script src="../../../public/assets/playground/js/main.js" defer></script> -->
</head>

<body class="overflow-y-auto">
    <div class="w-full max-h-screen">
        <!-- topbar -->
        <!--  -->
        <div
            class="grid grid-cols-10 h-14 flex justify-between items-center capitalize text-xl bg-[#1a1d21] border-b border-[#333] text-white">
            <!-- left content -->
            <!-- <div class="col-start-1 col-end-8 flex items-center space-x-14 px-10">
        <a href="/" class="inline-flex"><img src="/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein" style="height: 3rem;"></a>
        <div class="">
          materi
        </div>
      </div> -->
            <div class="grid grid-cols-12 col-span-7">
                <div class="col-span-4 text-2xl px-4">
                    <a href="/" class="inline-flex"><img
                            src="<?= base_url()?>/assets/images/kodein-logo-k-1-263x263.png" alt="Kodein"
                            style="height: 3rem;"></a>
                </div>
                <div class="col-span-8 flex items-center space-x-8 text-[17px]">
                    <div class="link"><?php echo $kelas["materi_title"];?></div>
                </div>
            </div>
            <!-- right content -->
            <div class="col-span-3 relative flex flex-col pr-2.5">
                <p class="text-left text-[16px] mb-0.5 -mt-3"><?= $progressing ?>%</p>
                <div class="w-full bg-gray-200 h-5 rounded-full">
                    <div class="bg-blue-600 h-5 rounded-full" style="width: <?= $progressing ?>%"></div>
                </div>
            </div>
        </div>
        <!-- end topbar -->
        <!-- content flashcard -->
        <div class="modal modal-xl fade" id="modals" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                        <button type="button" class="btn-close bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-0">
                        <div id="CarouselSlider" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <!-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="3" aria-label="Slide 3"></button>
                            </div> -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <p>Heading HTML! Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Heading HTML!Hea</p>
                                        </div>
                                        <div>
                                            Struktur HTML!
                                        </div>
                                        <div><img src="<?= base_url();?>/assets/images/headinghtml.png" class="d-block" alt="heading"></div>
                                        <div><img src="<?= base_url();?>/assets/images/strukturhtml.png" class="d-block" alt="heading"></div>
                                    </div>
                                    <div class="caffy">
                                        <div class="inline-flex scrolls">
                                            <img src="<?= base_url();?>/assets/images/caffy.png" class="w-[250px] caffyImage inline-flex" id="caffyna" alt="Caffyna">
                                            <div class="bg-blue-600 shadow-lg mx-auto w-96 h-[20px] text-sm pointer-events-auto bg-clip-padding rounded-lg block mb-3 toasts" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                                                <div class="bg-blue-600 flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-blue-500 rounded-t-lg">
                                                <p class="font-bold text-white flex items-center">Caffyna Coderyna</p>
                                                <div class="flex items-center">
                                                    <p class="text-white opacity-90 text-xs">Mahasiswi magang di Kodein</p>
                                                    <button type="button" class="btn-close btn-close-white box-content w-4 h-4 ml-2 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-white hover:opacity-75 hover:no-underline" data-mdb-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                </div>
                                                <div class="p-3 bg-blue-600 rounded-b-lg break-words text-white">
                                                Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../../../images/logo-2.png" class="d-block w-100" alt="Carousel Two">
                                    <div class="carousel-caption text-white d-none d-md-block col-6">
                                        <h3 class="fs-1">Where can I get some?</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                        <a href="#" class="btn btn-warning mt-3">Learn More</a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button> -->
                            <button class="btn btn-primary" type="button" data-bs-target="#CarouselSlider" data-bs-slide="next">
                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content flashcard -->
        <!-- content -->
        <div class="grid grid-cols-10 height-context text-white">
            <div class="grid grid-cols-12 col-span-7">
                <!-- questions -->
                <div class="col-span-4 bg-[#1f2227] border-r border-[#333] sidebar overflow-y-auto p-3 text-[14px]">
                    <?php echo $kelas["soal_code"]; ?>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open Materi</a>
                </div>
                <!-- end questions -->

                <!-- editor -->
                <div class="col-span-8 bg-[#1f2227] border-r border-[#333] incoder-editor overflow-y-auto">
                    <div class="cursor-text editor-height">
                        <textarea name="playgrounds" id="container-playground" name="playground"
                            class="codeEditor w-full h-full bg-[#0f111a] focus:outline-none outline-none"></textarea>
                    </div>
                    <div
                        class="w-full h-20 flex justify-end items-center bg-[#1a1d21] border-t border-[#333] space-x-2 p-3">
                        <?php
                            if($selesai["status"] == "selesai"){
                                echo '<a href="/materi/'.$kelas['id_kelas'].'/'.$next_soal['km_id'].'" class="bg-green-500 hover:bg-green-700 rounded-sm h-10 px-6 hover:no-underline hover:text-sky-400"><div class="pt-2">Next</div></a>';
                            }else{
                                echo '<button onClick="send()"class="bg-green-500 hover:bg-green-700 rounded-sm h-10 px-6">Submit</button>';
                            }
                        ?>
                        <button onClick="showBantuan()"
                            class="bg-green-500 hover:bg-green-700 rounded-sm h-10 px-6">Bantuan</button>
                    </div>
                </div>
                <!-- end editor -->
            </div>

            <!-- result -->
            <div class="col-span-3">
                <div class="grid grid-cols-1 h-full">
                    <div class="col-span-1 w-full h-full border-b border-[#333]">
                        <div class="bg-[#1a1d21] border-[#333] p-2">Result</div>
                        <iframe id="hasil"></iframe>
                    </div>
                    <div class="col-span-1 bg-[#1f2227] w-full h-full ">
                        <div class="bg-[#1a1d21] border-[#333] p-2">Console</div>
                        <div id="console-outputs"></div>
                    </div>
                </div>
            </div>
            <!-- end result -->
        </div>
        <!-- end content -->
    </div>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- script show modal first -->
    <script>
        $(document).ready(function(){
            // Show the Modal on load
            $("#modals").modal("show");

            let caffyImage = document.getElementById("caffyna");
            caffyImage.addEventListener("mouseover",function(){
                // $("#static-example").css("transition","10");
                $("#static-example").show(200);
                $("#static-example").css("display","visible");
                $("#static-example").css("transform","translateY(60px)");
            })
            caffyImage.addEventListener("mouseout",function(){
                $("#caffyna").css("transform","translateY(75px)");
                $("#static-example").hide(200);
            })

        });
    </script>
    <!-- scripts get console in iframe -->
    <script>
        // Listen for messages
        window.addEventListener('message', async function(response) {
            // Make sure message is from our iframe, extensions like React dev tools might use the same technique and mess up our logs
            if (response.data && response.data.source === 'iframe') {
                if(response.data.message[0] !== undefined){
                    // Do whatever you want here.
                    let divId = document.getElementById("console-outputs");
                    var newDiv = document.createElement("div");
                    var span = document.createElement('span');
                    newDiv.id  = 'console-output';
                    var newContent = document.createTextNode(response.data.message[0]);
                    span.appendChild(newContent);
                    newDiv.appendChild(span);
                    divId.appendChild(newDiv);

                    // showLogInIframe(response.data.message[0]);
                    // arrayLog.push(response.data.message[0]);
                    // console.log(response.data)
                }
            }
            // console.log(response)
        },false);
    </script>
    <script>
    var bantuan = 0;
    var validation = false;
    var myTimeoutId = null;
    var config = {
        mode: "text/html",
        lineNumbers: true,
        keyMap: "sublime",
        tabSize: 4,
    };
    // initialize editor
    var editor = CodeMirror.fromTextArea(document.getElementById("container-playground"), config);
    editor.setOption("theme", "material-ocean");

    function loadHtml(html) {
        const document_pattern = /( )*?document\./i;
        let finalHtml = html.replace(document_pattern, "document.getElementById('result').contentWindow.document.");
        $('#hasil').contents().find('html').html(finalHtml);
    }
    function loadJS(js){
        let consoles = document.querySelectorAll("[id='console-output']");
        if(js == ""){
            consoles.remove();
        }else{
            var coderJS = "<scri" + "pt>" +
            `
            ["log","warn","error"].forEach((level)=>{
                const _log = console[level];
                console[level] = (...args)=>{
                    window.parent.postMessage({
                        source:'iframe',
                        message: args,
                        length: '${js.split("\n").length}'
                    });
                    // _log();
                }
            });
            ` + "</scri" + "pt>" +
                "<scri" + "pt>" + js + "</scri" + "pt>";
            var frame = document.getElementById("hasil").contentWindow.document;
            document.getElementById("hasil").contentWindow.location.reload();
            frame.open();
            frame.write(coderJS);
            frame.close();
            if(consoles.length > 0){
                // console.log(consoles.length);
                consoles.forEach((console)=>{console.remove()});
            }
        }
    }

    // loadHtml($('#container-playground').val());
    editor.on('change', function(cMirror) {
        if (myTimeoutId !== null) {
            clearTimeout(myTimeoutId);
        }
        myTimeoutId = setTimeout(function() {
            try {
                loadHtml(cMirror.getValue());
                // let js = cMirror.getValue()
                // console.log(js.split("\n"));
            } catch (err) {
                console.log('err:' + err);
            }
        }, 1000);
    });

    const height = window.innerHeight;
    const elementEditor = document.getElementsByClassName("CodeMirror")
    const elementSidebar = document.getElementsByClassName("sidebar")
    Array.from([elementEditor, elementSidebar]).forEach(function(element) {
        // Calculate the editor height based on the entire document height - topbar (4rem) and bottombar (5rem)
        if (element[0].classList.contains("CodeMirror")) {
            element[0].style.height = height - ((5 * 16) + (3.5 * 16)) + "px";
        } else {
            element[0].style.height = (height - (3.5 * 16)) + "px";
        }
    });
    <?php if($selesai["status"] == "selesai"){?>
            editor.setValue(`<?= $selesai['jawaban_kelas']?>`)
        <?php }?>
    function showBantuan() {
        swal({
            title: "Apakah anda yakin",
            text: "Jika yakin maka poin tidak akan bertambah",
            icon: "info",
            buttons: true,
            cancel: true,
            dangerMode: true,
        })
        .then((shows) => {
            if (shows) {
                var requestOptions = {
                    method: 'GET',
                    redirect: 'follow'
                };

                fetch("<?php echo base_url();?>/cekBantuan/<?= $kelas['id_materi']?>/<?= $kelas['id_soal']?>/<?= $kelas['tipe_soal']?>", requestOptions)
                    .then(response => response.json())
                    .then(
                        result => {
                            jawaban = result[0].jawaban_code ? result[0].jawaban_code : result[0].jawaban_pilgan;
                            editor.setValue(jawaban);
                            bantuan = 1;
                        }
                    )
                    .catch(error => console.log('error', error));
            }
        });
    }
    function send() {
        let link = "<?php echo base_url();?>/cekKebenaran/<?= $kelas['id_kelas']?>/<?= $kelas['id_soal']?>/<?= $kelas['tipe_soal']?>";
        swal({
            title: "Apakah sudah yakin?",
            text: "Periksa kembali jika belum yakin",
            icon: "warning",
            buttons: true,
            // dangerMode: true,
        })
            .then(t => {
                if (t) {
                    var formdata = new FormData();
                    formdata.append("jawaban_user", editor.getValue().toLowerCase());
                    formdata.append("bantuan", bantuan);
                    formdata.append("id_soal", <?php echo $kelas['id_soal'];?>);
                    var settings = {
                        "url": link,
                        "method": "POST",
                        "timeout": 0,
                        "processData": false,
                        "mimeType": "multipart/form-data",
                        "contentType": false,
                        "data": formdata
                    };
                    $.ajax(settings).done(function(response) {
                        jawaban = JSON.parse(response);
                        console.log(jawaban)
                        // berhasil menjawab tanpa bantuan
                        if (jawaban[0] == 1) {
                            // berhasil
                            if(jawaban[1] == "success" && jawaban[2] == "success"){
                                swal({
                                    title: "Selamat Anda Berhasil",
                                    text: "Selamat anda mendapatkan +100xp",
                                    icon: "success",
                                    buttons: true,
                                })
                                .then((t) => {
                                    if(t){
                                        <?php
                                            $nextSoal = explode("/",$_SERVER["REQUEST_URI"])[4]+1;
                                        ?>
                                        window.location.replace("<?= base_url();?>/materi/<?= $kelas['id_kelas']?>/<?= $next_soal[$nextSoal]['km_id']?>/<?= $nextSoal?>");
                                    }
                                });
                            }
                            else if(jawaban[1] == "nexp" && jawaban[2] == "success"){
                                swal({
                                    title: "Silakan ke materi selanjutnya",
                                    text: "Selamat anda telah menyelesaikan materi ini",
                                    icon: "success",
                                    buttons: true,
                                })
                                .then((t) => {
                                    if(t){
                                        <?php
                                            $nextSoal = explode("/",$_SERVER["REQUEST_URI"])[4]+1;
                                        ?>
                                        window.location.replace("<?= base_url();?>/materi/<?= $kelas['id_kelas']?>/<?= $next_soal[$nextSoal]['km_id']?>/<?= $nextSoal?>");
                                    }
                                });
                            }
                        }else if(jawaban[0] == 0){
                            swal({
                                title: "Sayang sekali belum benar",
                                icon: "error",
                                buttonText: "Coba lagi",
                            })
                        }
                    });
                }
            })
        }
    </script>
    <script>
    // var msg = $('#msg');
    // $(document).keydown(function(e) {
    //     if (e.ctrlKey && e.key === "s") {
    //         alert("Tenang file kamu selalu disimpan didalam server kami\nTetap semangat!")
    //         e.preventDefault();
    //     }
    // });
    </script>
</body>

</html>