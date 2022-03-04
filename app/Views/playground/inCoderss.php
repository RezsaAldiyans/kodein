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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/incoderss.css">

    <!-- cdn css editor playground -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/theme/material-ocean.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/addon/hint/show-hint.css">

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
    <script src="<?php echo base_url();?>/assets/playground/js/main.js" defer></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row proc">
            <div class="col-5">
                <div class="materi pl-3">
                    <h5><?php echo $kelas["materi_title"];?></h5>
                </div>
            </div>
            <div class="col-6">
                <p class="percent"><?= $progressing ?>% Progress</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $progressing?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $progressing ?>%;"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="soal">
                    <h4>Pertanyaan!</h4>
                    <p><?php echo $kelas["soal_code"]; ?></p>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <div class="playground">
                    <textarea name="playgrounds" id="container-playground" name="playground" class="codeEditor"></textarea>
                    <div class="submitBtn">
                        <div class="row">
                            <div class="col-12">
                                <p class="float-left">Button Submit -></p>
                                <a class="btn btn-success float-right" id="btnT" onClick="show()">Bantuan</a>
                                <a class="btn btn-success float-right" id="btnS" onClick="send()">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="output">
                    <div class="result">
                        <iframe id="hasil"></iframe>
                    </div>
                    <div id="console">console js</div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        let berhasil = 1;
        if(berhasil == '<?= $session->get("berhasil")?>'){
            swal({
                title: "Selamat",
                text: "User Berhasil",
                icon: "success",
                buttons: true,
                // dangerMode: true,
            })
            .then(t =>{
                if(t){
                    console.log("berhasil")
                }
            })
        }
    </script>
    <script>
        // $(document).ready(function(){
            var validation = false;
            var myTimeoutId = null;
            var config = {
                mode: "text/html",
                lineNumbers: true,
                keyMap:"sublime",
                tabSize:4,
            };
            // initialize editor
            var editor = CodeMirror.fromTextArea(document.getElementById("container-playground"),config);
            editor.setOption("theme", "material-ocean");

            function loadHtml(html) {
                const document_pattern = /( )*?document\./i;
                let finalHtml = html.replace(document_pattern, "document.getElementById('result').contentWindow.document.");
                $('#hasil').contents().find('html').html(finalHtml);
            }

            loadHtml($('#container-playground').val());
            editor.on('change',function(cMirror){
                if (myTimeoutId!==null) {
                    clearTimeout(myTimeoutId);
                }
                myTimeoutId = setTimeout(function() {
                        try{
                            loadHtml(cMirror.getValue());
                        }catch(err){
                            console.log('err:'+err);
                        }
                    }, 1000);
            });
            function show(){
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

                        fetch("http://localhost:8080/cekBantuan/<?= $kelas['id_materi']?>/<?= $kelas['id_soal']?>/<?= $kelas['tipe_soal']?>", requestOptions)
                        .then(response => response.json())
                        .then(
                            result =>{
                                // console.log(result)
                                jawaban = result[0].jawaban_code ? result[0].jawaban_code : result[0].jawaban_pilgan;
                                editor.setValue(jawaban);
                            }
                        )
                        .catch(error => console.log('error', error));
                    } else {
                        editor.setValue("nay")
                    }
                });
            }
            function send(){
                let link = "http://localhost:8080/cekKebenaran/<?= $kelas['id_materi']?>/<?= $kelas['id_soal']?>/<?= $kelas['tipe_soal']?>";
                swal({
                    title: "Apakah sudah yakin?",
                    text: "Periksa kembali jika belum yakin",
                    icon: "warning",
                    buttons: true,
                    // dangerMode: true,
                })
                .then(t =>{
                    if(t){
                        var formdata = new FormData();
                        formdata.append("jawaban_user", editor.getValue());
                        var requestOptions = {
                            method: 'POST',
                            body: formdata,
                            redirect: 'follow'
                        };
                        fetch(link, requestOptions)
                        .then(response => response.json())
                        .then(
                            result =>{
                                // console.log(result[0])
                                jawaban = result[0];
                                if(jawaban){
                                    // berhasil
                                }
                                if(jawaban == "failed"){
                                    // failed auth
                                    console.log(jawaban)
                                }
                                else{
                                    // gagal
                                }
                            }
                        )
                        .catch(error => console.log('error', error));
                    }
                })
            }
        // })
    </script>
    <script>
        var msg = $('#msg');
        $(document).keydown(function (e) {
            if(e.ctrlKey && e.key === "s"){
                alert("Tenang file kamu selalu disimpan didalam server kami\nTetap semangat!")
                e.preventDefault();
            }
        });
    </script>
</body>
</html>