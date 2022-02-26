function update() {
  var idoc = document.getElementById("iframe").contentWindow.document;

  idoc.open();
  idoc.write(editor.getValue());
  idoc.close();
}

function setupEditor() {
  window.editor = ace.edit("editor");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(
    `<!DOCTYPE html>
  <html>
  <head>
  <style>     
  BODY {
    background-color: #000000;
    
  }
  #digipad {
    width: 200px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }
  
  .key {
    display: inline-block;
    color: #00FF00;
    padding: 10px 15px 10px 15px;
    margin: 10px;
    box-shadow: 0px 0px 5px #00FF00;
    border-radius: 3px;
  }
  
  .key:hover {
    box-shadow: 0px 0px 5px #00FFFF;
    color: #00FFFF;  
  }
  
  /* When a button is clicked it becomes "active"*/
  .key:active {
    box-shadow: 0px 0px 5px #28B6FC;
    color: #28B6FC;
  }
  
  
  </style>
  </head>
  <body>
  <div id="digipad">
  <div class="key">1</div>
  <div class="key">2</div>
  <div class="key">3</div>
  <br/>
  <div class="key">4</div>
  <div class="key">5</div>
  <div class="key">6</div>
  <br/>
  <div class="key">7</div>
  <div class="key">8</div>
  <div class="key">9</div>
  <br/>
  <div class="key">0</div>
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
