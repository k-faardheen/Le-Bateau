function update() {
  var idoc = document.getElementById("iframe4").contentWindow.document;

  idoc.open();
  idoc.write(editor.getValue());
  idoc.close();
}

function setupEditor() {
  window.editor = ace.edit("editor4");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(
    `<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <img src="https://www.101computing.net/wp/wp-content/uploads/RollOverButton-1.png" 
    onMouseOver="JavaScript: this.src='https://www.101computing.net/wp/wp-content/uploads/RollOverButton-2.png';" 
    onMouseOut="JavaScript: this.src='https://www.101computing.net/wp/wp-content/uploads/RollOverButton-1.png';">
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
