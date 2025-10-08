<!DOCTYPE html>
<html lang="en">
<head>
    <title>Design with CSS</title>
    <meta charset="utf-8">
    <style>
        #top, #bottom {
            border: solid black 1px;
            padding: 5px;
        }
        #main {
            display: table;
            width: 100%;
            table-layout: fixed;
        }
        #content {
            width: 80%;
        }
        #left, #right, #content {
            display: table-cell;
            padding: 5px;
        }
        #left, #right {
            width: 20%;
        }
        #left {
            border-right: 1px solid black;
        }
        #right {
            border-left: 1px solid black;
        }
    </style>
</head>
<body>
    <div id="top">Top section</div>
    <div id="main">
        <div id="left">Left block</div>
        <div id="content">Main content</div>
        <div id="right">Right block</div>
    </div>
    <div id="bottom">Bottom section</div>
</body>
</html>
