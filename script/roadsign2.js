function update() {
    var idoc = document.getElementById("iframe2").contentWindow.document;
  
    idoc.open();
    idoc.write(editor.getValue());
    idoc.close();
  }
  
  function setupEditor() {
    window.editor = ace.edit("editor2");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/html");
    editor.setValue(
      `<!DOCTYPE html>
  <html>
  <head>
  <style> 

  #road-sign {
    display: block;
    width: 150px;
    height: 150px;
    background-color: #FFFFFF;
    box-shadow: 10px 10px 5px #888888;
    border: 20px solid #EE0000;
    border-radius: 100px;
  }
    
  #speed-limit {
    text-align: center;
    padding-top: 20px;
    margin: auto; /*Will center the text*/
    color: #000000;
    font-family: Trebuchet MS;
    font-size: 90px;
    font-weight: bold;
  }
  
  /* The second part of this CSS is for the gradient. This may seem quite complex as it generates some code for each browser. To create your own gradient effect use:
  http://www.colorzilla.com/gradient-editor/
  */
  </style>
  </head>
  
  <body>
  <div id="road-sign">
  <div id="speed-limit">
    50
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
  