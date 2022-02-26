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
    font-family: Trebuchet MS;
    margin:20px;
    background-color: #600040;
  }
  
  H1 {
    text-align: center;
    color: #FFFFFF;
  }
  
  .myTimetable {
    width:100%;
    border-collapse: collapse;
    table-layout: fixed;
  }
  
  .myTimetable THEAD{
    color: #FFFFFF;
  }
  
  .myTimetable TBODY {
    background-color: #AAAAFF;
  }
  
  .myTimetable TD {
    border: 1px solid black;
    padding: 6px;
    text-align: center;
  }
  .myTimetable TBODY TR TD:first-child {
    background-color: #FF0066;
    font-weight: bold;
  }
  
  .break, .lunch {
    background-color: #FF0066 !important;
    font-style: italic;
  }
  
  .subject {
    font-size: 12pt;
    margin-bottom:4px;
  }
  
  .room {
    font-size: 10pt;
    font-style: italic;
  }
  
  </style>
  </head>
  
  <H1>My Timetable</H1>
  <TABLE class="myTimetable"> 
    <THEAD>
      <TR>
        <TH></TH>
        <TH>Monday</TH>
        <TH>Tuesday</TH>
        <TH>Wednesday</TH>
        <TH>Thursday</TH>
        <TH>Friday</TH>     
      </TR>
    </THEAD>
    <TBODY>
      <TR>
        <TD>P1</TD>
        <TD>
          <div class="subject">Maths</div>
          <div class="room">A120</div>
        </TD>
        <TD>
          <div class="subject">Art</div>
          <div class="room">C1</div>
        </TD>
        <TD>        
          <div class="subject">English</div>
          <div class="room">B21</div>
        </TD>
        <TD>        
          <div class="subject">Maths</div>
          <div class="room">A120</div>
        </TD>
         <TD>        
           <div class="subject">Geography</div>
          <div class="room">B101</div>
        </TD>     
      </TR>
      <TR>
        <TD>P2</TD>
        <TD>        
          <div class="subject">Science</div>
          <div class="room">Lab1</div>
        </TD>
        <TD>        
          <div class="subject">History</div>
          <div class="room">B104</div>
        </TD>
        <TD>        
          <div class="subject">Spanish</div>
          <div class="room">C17</div>
        </TD>
        <TD>        
          <div class="subject">P.E.</div>
          <div class="room">A Gym</div>
        </TD>
        <TD>        
          <div class="subject">Maths</div>
          <div class="room">A120</div>
        </TD>
      </TR>
        <TR>
        <TD colspan="6" class="break">Break</TD>
        </TR>
        <TR>
        <TD>P3</TD>
        <TD>        
          <div class="subject">I.T.</div>
          <div class="room">ICT 1</div>
        </TD>
        <TD>        
          <div class="subject">English</div>
          <div class="room">B21</div>
        </TD>
        <TD>        
          <div class="subject">Musique</div>
          <div class="room">C5</div>
        </TD>
        <TD>        
          <div class="subject">English</div>
          <div class="room">B21</div>
        </TD>
        <TD>        
          <div class="subject">PSHE</div>
          <div class="room">A24</div>
        </TD>
      </TR>
        <TR>
        <TD colspan="6" class="lunch">Lunch</TD>
      </TR>
        <TR>
        <TD>P4</TD>
        <TD>        
          <div class="subject">History</div>
          <div class="room">B104</div>
        </TD>
        <TD>        
          <div class="subject">Drama</div>
          <div class="room">C17</div>
        </TD>
        <TD>        
          <div class="subject">Maths</div>
          <div class="room">A120</div>
        </TD>
        <TD>        
          <div class="subject">Geography</div>
          <div class="room">B101</div>
        </TD>
        <TD>        
          <div class="subject">P.E.</div>
          <div class="room">A Gym</div>
        </TD>
      </TR>
        <TR>
        <TD>P5</TD>
        <TD>        
          <div class="subject">Spanish</div>
          <div class="room">C17</div>
        </TD>
        <TD>        
          <div class="subject">Science</div>
          <div class="room">Lab1</div>
        </TD>
        <TD>        
          <div class="subject">English</div>
          <div class="room">B21</div>
        </TD>
        <TD>        
          <div class="subject">Science</div>
          <div class="room">Lab1</div>
        </TD>
        <TD>        
          <div class="subject">R.E.</div>
          <div class="room">B18</div>
        </TD>
      </TR>
     </TBODY>
    </TABLE>
  
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
  