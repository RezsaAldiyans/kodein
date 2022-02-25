$(document).ready(function(){
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
})