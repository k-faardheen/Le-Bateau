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
    `Rainbow Facts!

      Colours of the rainbow:
      The 7 colours of the rainbow are: red, orange, yellow, green, blue, indigo, violet.
      
      What Makes a Rainbow?
      A rainbow is an arch of colours visible in the sky, caused by the refraction and dispersion of the sun's light by rain or other water droplets in the atmosphere. So to see a rainbow, you need mixed weather with a bit of sunshine and a bit of rain too!
      
      Rainbow Myth!
      There are several myths related to rainbows. Here is the most popular rainbow myth:
      There's a pot of gold at the rainbow's end.
      
      Find out more:
      Check the wikipedia page about rainbows to find out more.`,
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
//show answer for tabs
function showAns1() {
  let tab = document.getElementById("tab1");
  let oldtab = document.getElementById("tab1").innerHTML;
  let showAnsbtn = document.getElementById("btn1");
  showAnsbtn.remove();

  let ansdiv = document.getElementById("answer1");
  //&lt;h2&gt;
  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `

  &lt;h1&gt; Rainbow Facts!&lt;/h1&gt;<br>

&lt;h2&gt; Colours of the rainbow:&lt;h2&gt;<br>

&lt;p&gt;The 7 colours of the rainbow are: red, orange, yellow, green, blue, indigo, violet.&lt;/p&gt;<br>
  
  &lt;h2&gt; What Makes a Rainbow?&lt;/h2&gt;<br>
  &lt;p&gt; A rainbow is an arch of colours visible in the sky, caused by the refraction and dispersion of the sun's light by rain or other water droplets in the atmosphere. So to see a rainbow, you need mixed weather with a bit of sunshine and a bit of rain too!&lt;/p&gt;
  <br>
  &lt;h2&gt; Rainbow Myth!&lt;/h2&gt;<br>
  &lt;p&gt; There are several myths related to rainbows. Here is the most popular rainbow myth:
  There's a pot of gold at the rainbow's end.&lt;/p&gt;<br>

  &lt;h2&gt; Find out more:&lt;/h2&gt;<br>
  &lt;p&gt; Check the wikipedia page about rainbows to find out more.&lt;p&gt;`;

  let btndiv = document.createElement("div");

  tab.appendChild(btndiv);
  btndiv.setAttribute("id", "btn");
  let btn = document.createElement("button");
  btn.innerHTML = "Hide Answer";
  btndiv.append(btn);
  btn.onclick = function () {
    tab.innerHTML = oldtab;
  };
}
function showAns2() {
  let tab = document.getElementById("tab2");
  let oldtab = document.getElementById("tab2").innerHTML;
  let showAnsbtn = document.getElementById("btn2");
  showAnsbtn.remove();

  let ansdiv = document.getElementById("answer2");
  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `
  
    &lt;h1&gt; Rainbow Facts!&lt;/h1&gt;<br>
    &lt;h2&gt; Colours of the rainbow:&lt;h2&gt;<br>
    &lt;p&gt;The 7 colours of the rainbow are:&lt;/p&gt;<br>
    &lt;ul&gt;<br>
    &lt;li&gt;red&lt;/li&gt;<br>
    &lt;li&gt;orange&lt;/li&gt;<br>
    &lt;li&gt;yellow&lt;li&gt;<br>
    &lt;li&gt;green&lt;/li&gt;<br>
    &lt;li&gt;blue&lt;/li&gt;<br>
    &lt;li&gt;indigo&lt;/li&gt;<br>
    &lt;li&gt;violet.&lt;/li&gt;<br>
    &lt;/ul&gt;`

  let btndiv = document.createElement("div");

  tab.appendChild(btndiv);
  btndiv.setAttribute("id", "btn");
  let btn = document.createElement("button");
  btn.innerHTML = "Hide Answer";
  btndiv.append(btn);
  btn.onclick = function () {
    tab.innerHTML = oldtab;
  };
}
function showAns3() {
  let tab = document.getElementById("tab3");
  let oldtab = document.getElementById("tab3").innerHTML;
  let showAnsbtn = document.getElementById("btn3");
  showAnsbtn.remove();

  let ansdiv = document.getElementById("answer3");
  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `
  
    &lt;h1&gt; Rainbow Facts!&lt;/h1&gt;<br>
    &lt;h2&gt; Colours of the rainbow:&lt;h2&gt;<br>
    &lt;p&gt;The 7 colours of the rainbow are:&lt;/p&gt;<br>
    &lt;ul&gt;<br>
    &lt;li&gt;&lt;font color = "red"&gt;red&lt;/font&gt;&lt;/li&gt;<br>
    &lt;li&gt;&lt;font color = "orange"&gt;orange&lt;/font&gt&lt;/li&gt;<br>
    &lt;li&gt;&lt;font color = "yellow"&gt;yellow&lt;/font&gt&lt;li&gt;<br>
    &lt;li&gt;&lt;font color = "green"&gt;green&lt;/font&gt&lt;/li&gt;<br>
    &lt;li&gt;&lt;font color = "blue"&gt;blue&lt;/font&gt&lt;/li&gt;<br>
    &lt;li&gt;&lt;font color = "indigo"&gt;indigo&lt;/font&gt&lt;/li&gt;<br>
    &lt;li&gt;&lt;font color = "violet"&gt;violet&lt;/font&gt&lt;/li&gt;<br>
    &lt;/ul&gt;`

  let btndiv = document.createElement("div");

  tab.appendChild(btndiv);
  btndiv.setAttribute("id", "btn");
  let btn = document.createElement("button");
  btn.innerHTML = "Hide Answer";
  btndiv.append(btn);
  btn.onclick = function () {
    tab.innerHTML = oldtab;
  };
}
function showAns4() {
  let tab = document.getElementById("tab4");
  let oldtab = document.getElementById("tab4").innerHTML;
  let showAnsbtn = document.getElementById("btn4");
  showAnsbtn.remove();

  let ansdiv = document.getElementById("answer4");
  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `
  
  &lt;p&gt;&lt;center&gt;&lt;b&gt;&lt;i&gt; There are several myths related to rainbows. Here is the most popular rainbow myth:
  There's a pot of gold at the rainbow's end.&lt;/center&gt;&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;`

  let btndiv = document.createElement("div");

  tab.appendChild(btndiv);
  btndiv.setAttribute("id", "btn");
  let btn = document.createElement("button");
  btn.innerHTML = "Hide Answer";
  btndiv.append(btn);
  btn.onclick = function () {
    tab.innerHTML = oldtab;
  };
}
function showAns5() {
  let tab = document.getElementById("tab5");
  let oldtab = document.getElementById("tab5").innerHTML;
  let showAnsbtn = document.getElementById("btn5");
  showAnsbtn.remove();

  let ansdiv = document.getElementById("answer5");
  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `
  
  &lt;p&gt; Check&lt;a href = "https://en.wikipedia.org/wiki/Rainbow" target = "_blank"&gt; the wikipedia page&lt;/a&gt; about rainbows to find out more.&lt;p&gt;`

  let btndiv = document.createElement("div");

  tab.appendChild(btndiv);
  btndiv.setAttribute("id", "btn");
  let btn = document.createElement("button");
  btn.innerHTML = "Hide Answer";
  btndiv.append(btn);
  btn.onclick = function () {
    tab.innerHTML = oldtab;
  };
}
