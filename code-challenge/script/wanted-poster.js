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
@import url(https://fonts.googleapis.com/css?family=Ewert);
@import url(https://fonts.googleapis.com/css?family=Ultra);
</style>
</head>

<body>
  <div class="poster">
  <h1>WANTED</h1>
  <p class="subheading">Dead or Alive</p>
  <img id="mugshot" src="https://www.101computing.net/wp/wp-content/uploads/mugshot.png"/>
  <p class="name">Billy the Kid</p>
  <p class="description">Armed & very dangerous</p>
  <h2>Reward</h2>
  <div id="price">$50.000</div>
</body

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
