<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learn HTML - Tables</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <section class="header">
        <div class="header-wrapper" id="2">
            <h1>Tables</h1>
            <div class="menu">
                <ul>
                    <li><h3>TOPICS</h3></li>
                    <li id="1"><a href="./elements and structures.php">Elements and Structures</a></li>
                    <li id="2"><a href="./tables.php">Tables</a></li>
                    <li id="3"><a href="./forms.php">Forms</a></li>
                </ul>
            </div>
        </div>
    </section>

    <main class="main-wrapper">
        <article class="table-row">
            <div class="explanation">
                <h2 class="heading">&lt;tr&gt; Table Row Element</h2>
                <p>
                    The table row element, <span class="highlight-keyword">&lt;tr&gt;</span>, is used to add rows to a table before adding table data and table headings. 
                </p>
            </div>
            
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span>...</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>
          
        </article>

        <article class="table-data">
            <div class="explanation">
                <h2 class="heading">&lt;td&gt; Table Data Element</h2>
                <p>
                    The table data element, <span class="highlight-keyword">&lt;td&gt;</span>, can be nested inside a table row element, <span class="highlight-keyword">&lt;tr&gt;</span>, to add a cell of data to a table.
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>cell one data</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>
        </article>
        <article class="thead">
            <div class="explanation">
                <h2 class="heading"> <h2 class="heading">&lt;thead&gt; Table Head Element</h2>
                <p>
                    The table head element, <span class="highlight-keyword">&lt;thead&gt;</span>, defines the headings of columns encapsulated in the tables rows of the table. 
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;thead&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>heading 1</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>heading 2</span>
                <span class="tag">&lt;/th&gt;</span>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/thead&gt;</span>
                <br>
                <span class="tag">&lt;tbody&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>data 1</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>data 2</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/tbody&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>
        </article>
        <article class="th">
            <div class="explanation">
                <h2 class="heading"> <h2 class="heading">&lt;th&gt; Table Heading Element</h2>
                <p>
                    The table heading element, <span class="highlight-keyword">&lt;th&gt;</span>, is used to add titles to rows and columns of a table and must be enclosed in a table row element, <span class="highlight-keyword">&lt;tr&gt;</span>.
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>column 1</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>column 2</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>1</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>2</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <span class="tag">&lt;/table&gt;</span>
            </div>
        </article>
        <article class="tbody">
            <div class="explanation">
                <h2 class="heading"> <h2 class="heading">&lt;tbody&gt; Table Body Element</h2>
                <p>
                    The table body element, <span class="highlight-keyword">&lt;tbody&gt;</span>, will contains all table row <span class="highlight-keyword">&lt;tr&gt;</span>
                    elements, and indicated that <span class="highlight-keyword">&lt;/tr&gt;</span> elements make up the body of the table. 
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tbody&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>row 1</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/tbody&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>
        
        </article>
        <article class="rowspan">
            <div class="explanation">
                <h2 class="heading">The rowspan Attribute</h2>
                <p>
                    The <span class="highlight-keyword">&lt;rowspan&gt;</span>attribute on a table header or table data element indicates how many rows that particular cell should span within the table. 
                    The <span class="highlight-keyword">&lt;rowspan&gt;</span> value is set to 1 by default and will take any positive integer up to 65534.
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>Lecture</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>Lab</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;td</span> 
                <span class="attribute-tag">rowspan</span>
                <span>= 2</span>
                <span class="tag">&gt;</span>
                <span>Monday 8:30-10:30</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>Tuesday 13:00-14:00</span>
                <span class="tag">&lt;/td &gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>

        </article>
        <article class="colspan">
            <div class="explanation">
                <h2 class="heading">The colspan Attribute</h2>
                <p>
                    Similar to <span class="highlight-keyword">&lt;rowspan&gt;</span>, The <span class="highlight-keyword">&lt;colspan&gt;</span> attribute indicates how many columns that particular cell should span within the table. The <span class="highlight-keyword">&lt;colspan&gt;</span> value is set to 1 by default and will take any positive integer between 1 and 1000. 
                </p>
            </div>
            <div class="code-snippet">
                <span class="tag">&lt;table&gt; </span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>Lecture</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;th&gt;</span>
                <span>Lab</span>
                <span class="tag">&lt;/th&gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td</span> 
                <span class="attribute-tag">colspan</span>
                <span>= 2</span>
                <span class="tag">&gt;</span>
                <span>Monday 8:30-10:30</span>
                <span class="tag">&lt;/td&gt;</span>
                <br>
                <span class="tag">&lt;tr&gt;</span>
                <br>
                <span class="tag">&lt;td&gt;</span>
                <span>Tuesday 13:00-14:00</span>
                <span class="tag">&lt;/td &gt;</span>
                <br>
                <span class="tag">&lt;/tr&gt;</span>
                <br>
                <span class="tag">&lt;/table&gt;</span>
            </div>

        </article>
        
    </main>

    <script src="../script/styleLi.js"></script>
    <script src="./script/validateAnswer.js"></script>

</body>
</html>