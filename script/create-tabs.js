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
  #tab1, #tab2, #tab3 {
    float: left;
    padding: 5px 10px 5px 10px;
    background: #B00098;
    color: #FFFFFF;
    margin: 0px 5px 0px 5px;
    cursor: pointer;
    border-radius: 5px;
  }
  
  #tab1:hover, #tab2:hover, #tab3:hover {
    background: #E800C9;
  }
  
  #tab1Content, #tab2Content, #tab3Content {
    width: 500px;
    height: 100px;
    padding: 20px;
    border: 1px solid #B00098;
    border-radius: 10px;
  }
  
  #tab1Content {
   display: block; 
  }
  
  #tab2Content, #tab3Content {
   display: none; 
  }}
  
  </style>
  </head>
  <body>
  <div id="tab1" onClick="JavaScript:selectTab(1);">Tab 1</div>
  <div id="tab2" onClick="JavaScript:selectTab(2);">Tab 2</div>
  <div id="tab3" onClick="JavaScript:selectTab(3);">Tab 3</div>
  <br/>
  <div id="tab1Content">
    This is the content to display in the first tab.
  </div>
  <div id="tab2Content">
    Welcome to tab 2!
  </div>
  <div id="tab3Content">
    Tab 3 is probably the best of the three tabs.
  </div>
  <script>
  function selectTab(tabIndex) {
    //Hide All Tabs
    document.getElementById('tab1Content').style.display="none";
    document.getElementById('tab2Content').style.display="none";
    document.getElementById('tab3Content').style.display="none";
    
    //Show the Selected Tab
    document.getElementById('tab' + tabIndex + 'Content').style.display="block";  
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
  