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

  #plate {
    display: block;
    width: 450px;
    height: 100px;
    background-color: #FFFF00;
    box-shadow: 10px 10px 5px #888888;
    border: 5px solid;
    border-radius: 20px;
  }
  #number {
    text-align: center;
    padding: 10px 50px 50px 50px;
    color: #000000;
    font-family: Trebuchet MS;
    font-size: 70px;
    font-weight: bold;
  }
  </style>
  </head>
  
  <body>
  <div id="plate">
  <div id="number">
  CS15 NET
  <div>
</div>
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
  