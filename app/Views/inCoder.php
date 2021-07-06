<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder</title>
</head>
<body>
<style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .prev{
            margin-top:10px;
            width:33%;
            height:40px
        }
        .preview-area iframe {
            width: 100%;
            height: 50%;
            border: none;
        }
    </style>
<div class="code-area">
    <?php
        include "coderHTML.php";
    ?>
    <?php
        include "coderCSS.php";
    ?>
    <?php
        include "coderJS.php";
    ?>
</div>
<div class="preview-area">
    <input class="prev" type="submit" onclick="prev()" value="Cek Code!">
    <iframe id="preview-window"></iframe>
</div>
<script>
function prev(){
    var coderHTML = document.getElementById("html").value;
    var coderCSS = "<style>" + document.getElementById("css").value + "</style>";
    var coderJS = "<scri" + "pt>" + document.getElementById("js").value + "</scri" + "pt>";
    var frame = document.getElementById("preview-window").contentWindow.document;
    frame.open();
    frame.write(coderHTML + coderCSS + coderJS);
    frame.close();
}
</script>
</body>
</html>