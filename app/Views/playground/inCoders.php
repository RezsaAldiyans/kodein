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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap-reboot.min.css">
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
    </style>

    <!-- cdn js editor playground -->
    <!-- <script src="assets/web/assets/jquery/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                    <!-- <div class="link">asd</div>
          <div class="link">zxc</div>
          <div class="link">rty</div> -->
                </div>
            </div>
            <!-- right content -->
            <div class="col-span-3 relative flex flex-col pr-2.5">
                <p class="text-left text-[16px] mb-0.5 -mt-3"><?= $progressing ?>% Progress</p>
                <div class="progress min-w-full">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="<?= $progressing ?>" aria-valuemin="0" aria-valuemax="100"
                        style="width:<?= $progressing ?>%"></div>
                </div>
            </div>
        </div>
        <!-- end topbar -->

        <!-- content -->
        <div class="grid grid-cols-10 height-context text-white">
            <div class="grid grid-cols-12 col-span-7">
                <!-- questions -->
                <div class="col-span-4 bg-[#1f2227] border-r border-[#333] sidebar overflow-y-auto p-3 text-[14px]">
                    <?php echo $kelas["soal_code"]; ?>
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
                        <button onClick="send()"
                            class="bg-green-500 hover:bg-green-700 rounded-sm h-10 px-6">Submit</button>
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
                        <div class="bg-[#1a1d21] border-[#333] p-2">console.js</div>
                    </div>
                </div>
            </div>
            <!-- end result -->
        </div>
        <!-- end content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    loadHtml($('#container-playground').val());
    editor.on('change', function(cMirror) {
        if (myTimeoutId !== null) {
            clearTimeout(myTimeoutId);
        }
        myTimeoutId = setTimeout(function() {
            try {
                loadHtml(cMirror.getValue());
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
                    formdata.append("jawaban_user", editor.getValue());
                    formdata.append("bantuan", bantuan);
                    var requestOptions = {
                        method: 'POST',
                        body: formdata,
                        redirect: 'follow'
                    };
                    fetch(link, requestOptions)
                        .then(response => response.json())
                        .then(
                            result => {
                                // console.log(result)
                                let jawaban = result[0];
                                if (result[1] == 'b' && jawaban == 1) {
                                    swal({
                                        title: "Selamat Anda Berhasil",
                                        text: "Selamat anda telah menyelasaikan quest ini",
                                        icon: "success",
                                        buttons: true,
                                    })
                                }
                                if (jawaban == 1 && !result[1]) {
                                    // berhasil
                                    swal({
                                        title: "Selamat Anda Berhasil",
                                        text: "Selamat anda mendapatkan +100xp",
                                        icon: "success",
                                        buttons: true,
                                    })
                                }
                                if (jawaban == "failed") {
                                    // failed auth
                                    swal({
                                        title: jawaban,
                                        text: "",
                                        icon: "danger",
                                        buttons: true,
                                    })
                                }
                                if (jawaban == 0) {
                                    // gagal
                                    swal({
                                        title: "Sayang sekali",
                                        text: "Sayang sekali masih belum tepat jawabannya silahkan dicoba kembali!",
                                        icon: "error",
                                        button: true,
                                    })
                                }
                            }
                        )
                        .catch(error => console.log('error', error));
                }
            })
        }
    </script>
    <script>
    var msg = $('#msg');
    $(document).keydown(function(e) {
        if (e.ctrlKey && e.key === "s") {
            alert("Tenang file kamu selalu disimpan didalam server kami\nTetap semangat!")
            e.preventDefault();
        }
    });
    </script>
</body>

</html>