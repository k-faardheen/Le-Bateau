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
    `Lemon Drizzle Cake Recipe

    About the Recipe:
    Preparation Time: 15 mins
    Cooking Time: 45 mins
    Level of difficulty: Easy
    Number of servings: 6
    
    Ingredients:
    225g unsalted butter
    180g caster sugar
    4 eggs
    225g self-raising flour
    1 lemon, zested
    2 lemons, juiced
    65g caster sugar
    
    Recipe for the cake:
    Pre-heat the oven to 180°C.
    Beat together the butter and caster sugar until creamy, then add the eggs, one at a time, slowly mixing through.
    Sift in the self-raising flour, then add the lemon zest and mix until well combined.
    Line a loaf tin (8 x 21cm) with greaseproof paper, then pour in the mixture and level the top with a spoon.
    Bake for 45 to 50 minutes.
    
    Recipe for the lemon drizzle:
    Mix the lemon juice and caster sugar to make the drizzle.
    Prick the cake all over with a fork, then pour over the drizzle – Let the juice sink in. The sugar will form a sweet, crisp topping.
    Leave the cake in the tin until completely cool before serving.
    
    Finding more recipes online:
    You will more recipes on the BBC Good Food website: https://www.bbcgoodfood.com/`,
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

  ansdiv.innerHTML += "<hr>";
  ansdiv.innerHTML += "<h2>Answer</h2>";
  ansdiv.innerHTML += `

  &lt;h2&gt;Ingredients:&lt;/h2&gt;<br>
  &lt;p&gt;225g unsalted butter<br>
    180g caster sugar<br>
    4 eggs<br>
    225g self-raising flour<br>
    1 lemon, zested<br>
    2 lemons, juiced<br>
    65g caster sugar&lt;/p&gt;<br>
    <br>
    &lt;h2&gt;Recipe for the cake:&lt;/h2&gt;<br>
    &lt;p&gt;Pre-heat the oven to 180°C.<br>
    Beat together the butter and caster sugar until creamy, then add the eggs, one at a time, slowly mixing through.<br>
    Sift in the self-raising flour, then add the lemon zest and mix until well combined.<br>
    Line a loaf tin (8 x 21cm) with greaseproof paper, then pour in the mixture and level the top with a spoon.<br>
    Bake for 45 to 50 minutes.&lt;/p&gt;<br>
  <br>
  &lt;h2&gt;Recipe for the lemon drizzle:&lt;/h2&gt;<br>
  &lt;p&gt;Mix the lemon juice and caster sugar to make the drizzle.<br>
    Prick the cake all over with a fork, then pour over the drizzle – Let the juice sink in. The sugar will form a sweet, crisp topping.<br>
    Leave the cake in the tin until completely cool before serving.&lt;/p&gt;<br>
    <br>
    &lt;h2&gt;Finding more recipes online:&lt;/h2&gt;<br>
    &lt;p&gt;You will more recipes on the BBC Good Food website: https://www.bbcgoodfood.com/<br>
    &lt;/p&gt;`;

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

  &lt;h2&gt;Ingredients:&lt;/h2&gt;<br>
  &lt;ol&gt;<br>
  &lt;li&gt;225g unsalted butter &lt;/li&gt;<br>
  &lt;li&gt; 180g caster sugar &lt;/li&gt;<br>
  &lt;li&gt; 4 eggs &lt;/li&gt;<br>
  &lt;li&gt;225g self-raising flour &lt;/li&gt;<br>
  &lt;li&gt; 1 lemon, zested &lt;/li&gt;<br>
  &lt;li&gt; 2 lemons, juiced &lt;/li&gt;<br>
  &lt;li&gt;65g caster sugar &lt;/li&gt;<br>
  &lt;/ol&gt;
    <br>
    &lt;h2&gt;Recipe for the cake:&lt;/h2&gt;<br>
    &lt;ul&gt;<br>
    &lt;li&gt;Pre-heat the oven to 180°C.&lt;/li&gt;<br>
    &lt;li&gt;Beat together the butter and caster sugar until creamy, then add the eggs, one at a time, slowly mixing through.&lt;/li&gt;<br>
    &lt;li&gt; Sift in the self-raising flour, then add the lemon zest and mix until well combined.&lt;/li&gt;<br>
    &lt;li&gt;Line a loaf tin (8 x 21cm) with greaseproof paper, then pour in the mixture and level the top with a spoon.&lt;/li&gt;<br>
    &lt;li&gt; Bake for 45 to 50 minutes.&lt;/li&gt;<br>
    &lt;/ol&gt;
  <br>
  &lt;h2&gt;Recipe for the lemon drizzle:&lt;/h2&gt;<br>
  &lt;ol&gt;<br>
  &lt;li&gt;Mix the lemon juice and caster sugar to make the drizzle.&lt;/li&gt;<br>
  &lt;li&gt; Prick the cake all over with a fork, then pour over the drizzle – Let the juice sink in. The sugar will form a sweet, crisp topping.&lt;/li&gt;<br>
  &lt;li&gt; Leave the cake in the tin until completely cool before serving.&lt;/li&gt;<br>
  &lt;/ol&gt;<br> 
  <br>
    &lt;h2&gt;Finding more recipes online:&lt;/h2&gt;<br>
    &lt;p&gt;You will more recipes on the BBC Good Food website: https://www.bbcgoodfood.com/<br>
    &lt;/p&gt;`;

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

  &lt;p&gt;<br>
  Preparation Time: &lt;font color = "red"&gt;15 mins&lt;/font&gt;<br>
    Cooking Time: &lt;font color = "red"&gt;45 mins&lt;/font&gt;<br>
    Level of difficulty: &lt;font color = "green"&gt;Easy&lt;/font&gt;<br>
    Number of servings: &lt;font color = "blue"&gt;6&lt;/font&gt;<br>
    &lt;/p&gt;`

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

  &lt;p&gt;<br>
  &lt;b&gt; Preparation Time:&lt;/b&gt; &lt;font color = "red"&gt;&lt;i&gt;15 mins&lt;/i&gt;&lt;/font&gt;<br>
  &lt;b&gt;Cooking Time: &lt;/b&gt;&lt;font color = "red"&gt;&lt;i&gt;45 mins&lt;/i&gt;&lt;/font&gt;<br>
  &lt;b&gt; Level of difficulty:&lt;/b&gt; &lt;font color = "green"&gt;&lt;i&gt;Easy&lt;/i&gt;&lt;/font&gt;<br>
  &lt;b&gt;Number of servings: &lt;/b&gt;&lt;font color = "blue"&gt;&lt;i&gt;6&lt;/i&gt;&lt;/font&gt;<br>
    &lt;/p&gt;`

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

  &lt;p&gt;<br>
  You will more recipes on the BBC Good Food website:<br>
  &lt;a<br>
  href = "https://www.bbcgoodfood.com/"&gt;https://www.bbcgoodfood.com/&lt;/a&gt;<br>
  &lt;/p&gt;`

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

