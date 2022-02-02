function update() {
  var idoc = document.getElementById("iframe3").contentWindow.document;

  idoc.open();
  idoc.write(editor.getValue());
  idoc.close();
}

function setupEditor() {
  window.editor = ace.edit("editor3");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(
    `<!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  Enter your name: <input type="text" onchange="JavaScript: changeCase(this);">
<p>When you leave the input field, a function is triggered using the <b>onChange</b> event to transform the input text to upper case.</p>
<p><b>Did you notice?</b> Using "<b>this</b>" as a parameter in the JavaScript function enables to access the form control that triggered the event. So the same function could be used for more than one form control.</p>
  <script>
  function changeCase(x) {
    x.value = x.value.toUpperCase();
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
