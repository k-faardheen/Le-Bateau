function update() {
  var idoc = document.getElementById("iframe1").contentWindow.document;

  idoc.open();
  idoc.write(editor.getValue());
  idoc.close();
}

function setupEditor() {
  window.editor = ace.edit("editor1");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(
    `<!DOCTYPE html>
  <html>
  <head>
  <style>     
  #timeBox {
    display: block;
    width:300px;
    height: 40px;
    text-align:center;
    border: 1px solid #FF0000;
    padding-top:20px;
    margin-top:20px;
    }
  
  </style>
  </head>
  <body>
  <INPUT type="button" value="Display Current Time" onClick="JavaScript: displayCurrentTime();">
<div id="timeBox"></div>
  <script>
  function displayCurrentTime() {
    document.getElementById('timeBox').innerHTML=Date();
    }
  </script>
  </body>
  </html>`,
    1
  ); //1 = moves cursor to end

  editor.getSession().on("change", function () {
    update();
  });

  editor.focus();

  editor.setOptions({
    fontSize: "16pt",
    showLineNumbers: false,
    showGutter: false,
    vScrollBarAlwaysVisible: true,
    enableBasicAutocompletion: false,
    enableLiveAutocompletion: false,
  });

  editor.setShowPrintMargin(false);
  editor.setBehavioursEnabled(false);
}

setupEditor();
update();
