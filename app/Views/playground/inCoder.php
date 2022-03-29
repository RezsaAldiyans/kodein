<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Playground</title>
    <style>
        /* * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        } */
        .preview-area iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
    <style>
        /* chrome scrollbars */
        textarea::-webkit-scrollbar {
            width: 16px;
            background-color: #444;
            cursor: pointer;
        }

        textarea::-webkit-scrollbar-track {
            background-color: #333;
            cursor: pointer;
        }

        textarea::-webkit-scrollbar-corner {
            background-color: #484;
            -webkit-box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.3);
        }

        textarea::-webkit-scrollbar-thumb {
            background-color: #444;
            /*outline: 1px solid #666;*/
            -webkit-box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.3);
            cursor: pointer;
        }

        .rectangle-code {
            display: block;
            /* width: 100%; */
            /* height: 100%; */
            padding: 5px;
            margin: 5px;
            background-color: #353635;
            color: white;
        }

        .preview-web {
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px;
            margin: 5px;
            background-color: #2a2b2a;
        }

        .preview-console {
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px;
            margin: 10px 0px 0px 5px;
            background-color: #131313;
            color: white;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="rectangle-code">
                    <div class="preview-code"></div>
                </div>
                <input class="prev" type="submit" onclick="prev()" value="Cek Code!">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="preview-web">
                            <iframe id="preview-window"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="preview-console">
                            <div id="console"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function change(){
            $("textarea").each(function () {
            var timer = null;
            $(this).change(function(){
                var node = this;
                if(timer != null)
                    clearTimeout(timer);

                timer = setTimeout(function(){
                    $(node).trigger('lastchange');
                }, 500);
            });
        });
        }
        // Listen for messages
        window.addEventListener('message', function(response) {
            // Make sure message is from our iframe, extensions like React dev tools might use the same technique and mess up our logs
            if (response.data && response.data.source === 'iframe') {
                if(response.data.message[0] !== undefined){
                    // Do whatever you want here.
                    let divId = document.getElementById("console");
                    var newDiv = document.createElement("div");
                    var span = document.createElement('span');
                    newDiv.id  = 'console-output';
                    var newContent = document.createTextNode(response.data.message[0]);
                    span.appendChild(newContent);
                    newDiv.appendChild(span);
                    divId.appendChild(newDiv);
                }
            }
        },false);

        function prev() {
            // use custom event
            $("textarea#js").bind("lastchange", function (e) {
                console.log($(this).val(), e);
            });
            // var coderHTML = document.getElementById("html").value;
            // var coderCSS = "<style>" + document.getElementById("css").value + "</style>";
            var codeValue = document.getElementById("js").value;
            if(codeValue === ""){
                let console = document.getElementById("console-output");
                console.remove();
            }
            var coderJS = "<scri" + "pt>" +
                `
            ["log","warn","error"].forEach((level)=>{
                const _log = console[level];
                console[level] = (...args)=>{
                    window.parent.postMessage({
                        source:'iframe',
                        message: args
                    },"*");
                    // _log(args);
                }
            });
            ` + "</scri" + "pt>" +
                "<scri" + "pt>" + codeValue + "</scri" + "pt>";
            var frame = document.getElementById("preview-window").contentWindow.document;
            document.getElementById("preview-window").contentWindow.location.reload();
            frame.open();
            frame.write(coderJS);
            frame.close();
            // document.getElementById("console").innerHTML = document.getElementById("preview-window").contentWindow.console
            // console.log(document.getElementById("preview-window").contentWindow.console.log)
            // if(validHTML(coderHTML)) {
            //     sendToServer(coderHTML,frame);
            // }
            // else {
            //     alert('Invalid HTML');
            //     var frameset = document.getElementById("preview-window")
            //     frameset.style.display = "none"
            // }
        }

        function validHTML(html) {
            var openingTags, closingTags;
            html = html.replace(/<[^>]*\/\s?>/g, ''); // Remove all self closing tags
            html = html.replace(/<(br|hr|img).*?>/g, ''); // Remove all <br>, <hr>, and <img> tags
            openingTags = html.match(/<[^\/].*?>/g) || []; // Get remaining opening tags
            closingTags = html.match(/<\/.+?>/g) || []; // Get remaining closing tags

            return openingTags.length === closingTags.length ? true : false;
        }

        function sendToServer(datas, frame) {
            var form = new FormData();
            form.append("data", datas);

            var settings = {
                "url": "http://localhost:8080/coders",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
            };

            $.ajax(settings).done(function(response) {
                let json = JSON.parse(response)
                // alert(response)
                console.log(json)
                if (json.result) {
                    var frameset = document.getElementById("preview-window")
                    frameset.style.display = "block"
                    frame.open();
                    frame.write(datas);
                    frame.close();
                } else {
                    var frameset = document.getElementById("preview-window")
                    frameset.style.display = "none"
                    alert("jawaban tidak tepat")
                }
            });
        }
    </script>
    <script>
    //
    // desc: ?
    // auth: ?
    //
    var TextAreaLineNumbersWithCanvas = function()
    {
        var preview_code = document.querySelector(".preview-code")
        preview_code.className = "coder"
        var cssTable = 'padding:0px 0px 0px 0px!important; margin:0px 0px 0px 0px!important; font-size:1px;line-height:0px; width:auto;';
        var cssTd1 = 'border:1px #345 solid; border-right:0px; vertical-align:top; width:1px;';
        var cssTd2 = 'border:1px #345 solid; border-left:0px; vertical-align:top;';
        var cssButton = 'width:120px; height:40px; border:1px solid #333 !important; border-bottom-color: #484!important; color:#ffe; background-color:#222;';
        var cssCanvas = 'border:0px; background-color:#1c1c20; margin-top:0px; padding-top:0px;';
        var cssTextArea = 'width:400px;'
                        + 'height:250px;'
                        + 'font-size:11px;'
                        + 'font-family:monospace;'
                        + 'line-height:15px;'
                        + 'font-weight:500;'
                        + 'margin: 0px 0px 0px 0px;'
                        + 'padding: 0px 0px 0px 0px;'
                        + 'resize: none;'
                        + 'color:#ffa;'
                        + 'border:none;outline: none;'
                        + 'background-color:#222;'
                        + 'white-space:nowrap; overflow:auto;'
                        // supported only in opera 12.x
                        + 'scrollbar-arrow-color: #ee8;'
                        + 'scrollbar-base-color: #444;'
                        + 'scrollbar-track-color: #666;'
                        + 'scrollbar-face-color: #444;'
                        + 'scrollbar-3dlight-color: #444;' /* outer light */
                        + 'scrollbar-highlight-color: #666;' /* inner light */
                        + 'scrollbar-darkshadow-color: #444;' /* outer dark */
                        + 'scrollbar-shadow-color: #222;' /* inner dark */
                        ;

        // LAYOUT (table 2 panels)
        var table = document.createElement('table');
            table.setAttribute('cellspacing','0');
            table.setAttribute('cellpadding','0');
            table.setAttribute('style', cssTable);
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
            td1.setAttribute('style', cssTd1);
        var td2 = document.createElement('td');
            td2.setAttribute('style', cssTd2);
            tr.appendChild(td1);
            tr.appendChild(td2);
            table.appendChild(tr);

        // TEXTAREA
        var ta = this.evalnode = document.createElement('textarea');
            ta.setAttribute('id','js');
            ta.setAttribute('cols','80');
            ta.setAttribute('style', cssTextArea);
            ta.setAttribute('placeholder',"JAVASCRIPT AREA")
            ta.setAttribute('onchange','change()')
            //ta.value = this.S.get('eval') || '';  // get previous executed value ;)

        // TEXTAREA NUMBERS (Canvas)
        var canvas = document.createElement('canvas');
            canvas.width = 48;    // must not set width & height in css !!!
            canvas.height = 500;  // must not set width & height in css !!!
            canvas.setAttribute('style', cssCanvas);
            ta.canvasLines = canvas;
            td1.appendChild(canvas);
            td2.appendChild(ta);
            preview_code.appendChild(table);

        // PAINT LINE NUMBERS
        ta.paintLineNumbers = function()
        {
            try
            {
            var canvas = this.canvasLines;
            if (canvas.height != this.clientHeight) canvas.height = this.clientHeight; // on resize
            var ctx = canvas.getContext("2d");
            ctx.fillStyle = "#303030";
            ctx.fillRect(0, 0, 42, this.scrollHeight+1);
            ctx.fillStyle = "#808080";
            ctx.font = "11px monospace"; // NOTICE: must match TextArea font-size(11px) and lineheight(15) !!!
            var startIndex = Math.floor(this.scrollTop / 15,0);
            var endIndex = startIndex + Math.ceil(this.clientHeight / 15,0);
            for (var i = startIndex; i < endIndex; i++)
            {
            var ph = 10 - this.scrollTop + (i*15);
            var text = ''+(1+i);  // line number
            ctx.fillText(text,40-(text.length*6),ph);
            }
            }
            catch(e){ alert(e); }
        };
        ta.onscroll     = function(ev){ this.paintLineNumbers(); };
        ta.onmousedown  = function(ev){ this.mouseisdown = true; }
        ta.onmouseup    = function(ev){ this.mouseisdown=false; this.paintLineNumbers(); };
        ta.onmousemove  = function(ev){ if (this.mouseisdown) this.paintLineNumbers(); };
        
        // make sure it's painted
        ta.paintLineNumbers();
        return ta;
};

var ta = TextAreaLineNumbersWithCanvas();
// ta.value = TextAreaLineNumbersWithCanvas.toString();
</script>
</body>

</html>