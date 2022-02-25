<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Playground</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/incoderss.css">

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
    <script src="assets/playground/js/main.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="soal">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo magnam ea quisquam nobis. Voluptatum sequi adipisci expedita maiores magni. Fuga ullam illum a optio repudiandae, inventore debitis alias! Facere?</p>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <div class="playground">
                    <textarea name="playgrounds" id="container-playground" class="codeEditor"></textarea>
                    <div class="submitBtn">
                        <div class="row">
                            <div class="col-12">
                                <p class="float-left">Button Submit -></p>
                                <button class="btn btn-success float-right" id="btnS" >Submit</button>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        // $("#btnS").on('click',()=>{
        //     const log = ["log","warn","error"];
        //     log.forEach(element => {
        //         console[element] = function(...args){
        //             console.log(args)
        //             // document.getElementById("console").innerHTML = args;
        //         }
        //     });
        // })
        var msg = $('#msg');
        $(document).keydown(function (e) {
            // if (e.keyCode == 16) {
            //     if (e.originalEvent.location == 1)
            //         msg.html('Left SHIFT pressed.');
            //     else
            //         msg.html('Right SHIFT pressed.');
            // } else if (e.keyCode == 17) {
            //     if (e.originalEvent.location == 1)
            //         msg.html('Left CTRL pressed.');
            //     else
            //         msg.html('Right CTRL pressed.');
            // } else if (e.keyCode == 18) {
            //     if (e.originalEvent.location == 1)
            //         msg.html('Left ALT pressed.');
            //     else
            //         msg.html('Right ALT pressed.');
            //     e.preventDefault(); //because ALT focusout the element
            // }
            if(e.ctrlKey && e.key === "s"){
                alert("Tenang file kamu selalu disimpan didalam server kami\nTetap semangat!")
                e.preventDefault();
            }
        });
    </script>
</body>
</html>