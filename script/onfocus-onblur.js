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
  </head>
  <body>
  Enter your firstname: <input type="text" onfocus="JavaScript:highlight(this);" onBlur="JavaScript:reset(this);">
<br/>
Enter your lastname: <input type="text" onfocus="JavaScript:highlight(this);" onBlur="JavaScript:reset(this);">

<p>When the input field gets focus, a function is triggered to change the background color using the <b>onFocus</b> event.</p>
<p>When the input field loses focus, a function is triggered to change the background color back to white using the <b>onBlur</b> event.</p>
<p><b>Did you notice?</b> Using "<b>this</b>" as a parameter in the JavaScript function enables to access the form control that triggered the event. So the same function could be used for more than one form control.</p>
  <script>
  function highlight(x) {
    x.style.background = "#EF86F2";
}

function reset(x) {
    x.style.background = "#FFFFFF";
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
