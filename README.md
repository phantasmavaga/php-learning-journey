<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background: #f5f7fa;
      color: #333;
    }
    header {
      background: #0066cc;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 2.5em;
    }
    header p {
      font-size: 1.2em;
    }
    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }
    h2 {
      border-bottom: 2px solid #0066cc;
      padding-bottom: 8px;
      margin-top: 40px;
    }
    ul.file-list {
      list-style-type: none;
      padding: 0;
    }
    ul.file-list li {
      background: white;
      margin: 10px 0;
      padding: 12px 16px;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .badge {
      display: inline-block;
      background: #e1f5fe;
      color: #0066cc;
      padding: 2px 8px;
      font-size: 0.9em;
      margin-right: 8px;
      border-radius: 4px;
      font-family: monospace;
    }
    footer {
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
      color: #777;
    }
    a.button {
      display: inline-block;
      padding: 10px 20px;
      background: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      margin-top: 20px;
    }
    a.button:hover {
      background: #0055aa;
    }
  </style>
</head>
<body>
  <header>
    <h1>PHP Learning Journey 🎓</h1>
    <p>Explore, learn, and grow with real-world PHP & HTML examples 💡</p>
  </header>
  <div class="container">
    <h2>📂 File Overview</h2>
    <p>Below is a curated list of files in this repository, grouped by topic for easy navigation.</p>

    <h3>Authentication & Session Management 🔐</h3>
    <ul class="file-list">
      <li><span class="badge">basic_auth.php</span> Basic password authentication example</li>
      <li><span class="badge">session_cookie.php</span> Session and Cookie usage comparison</li>
      <li><span class="badge">session_vs_arithmetic.php</span> Session data persistence and arithmetic operations</li>
    </ul>

    <h3>Loops & Control Structures 🔁</h3>
    <ul class="file-list">
      <li><span class="badge">break_at_five.php</span> Loop termination with break command</li>
      <li><span class="badge">do_while_numbers.php</span> Do-while loop example</li>
      <li><span class="badge">reverse_count.php</span> Reverse counting loop</li>
      <li><span class="badge">skip_three_countdown.php</span> Conditional skipping with continue</li>
      <li><span class="badge">switch-case_example.php</span> Switch-case structure example</li>
    </ul>

    <h3>Browser & Device Detection 🖥️📱</h3>
    <ul class="file-list">
      <li><span class="badge">browser.php</span> Detect user browser</li>
      <li><span class="badge">detect_device_browser.php</span> Device and browser detection</li>
    </ul>

    <h3>Price Calculations & Math Operations 💲</h3>
    <ul class="file-list">
      <li><span class="badge">bulk_discount_calculator.php</span> Bulk purchase discount calculation</li>
      <li><span class="badge">final_price.php</span> Price calculation including VAT</li>
      <li><span class="badge">product_total_calculator.php</span> Product total price calculation</li>
      <li><span class="badge">tax_rate.php</span> Tax rate calculation</li>
      <li><span class="badge">rounding_numbers.php</span> Number rounding methods</li>
    </ul>

    <h3>Date & Time Operations ⏰</h3>
    <ul class="file-list">
      <li><span class="badge">day.php</span> Determine time period based on hour</li>
      <li><span class="badge">dynamic_year_select.php</span> Dynamic year selector</li>
      <li><span class="badge">zodiac_finder.php</span> Zodiac sign calculation</li>
    </ul>

    <h3>File Operations 📂</h3>
    <ul class="file-list">
      <li><span class="badge">file_lister_with_glob.php</span> File listing with Glob</li>
      <li><span class="badge">formatted_text.php</span> printf, sprintf, fprintf usage</li>
    </ul>

    <h3>Condition & Operator Examples ❓</h3>
    <ul class="file-list">
      <li><span class="badge">age.php</span> Message based on age range</li>
      <li><span class="badge">even_odd_check.php</span> Odd/even number check</li>
      <li><span class="badge">ternary_conditions.php</span> Ternary operator examples</li>
      <li><span class="badge">variable_check.php</span> Variable existence check</li>
    </ul>

    <h3>Array & Character Operations 🔤</h3>
    <ul class="file-list">
      <li><span class="badge">char_range_demo.php</span> Create character array with range</li>
    </ul>

    <h3>HTML & Mixed Examples 🌐</h3>
    <ul class="file-list">
      <li><span class="badge">choose.html</span> HTML select initial example</li>
      <li><span class="badge">choose.php</span> PHP version of select demo</li>
      <li><span class="badge">choose2.html</span> Variant HTML select</li>
      <li><span class="badge">choose2.php</span> Variant PHP select</li>
      <li><span class="badge">choose3.html</span> Third variant HTML select</li>
      <li><span class="badge">choose3.php</span> Third variant PHP select</li>
      <li><span class="badge">html-test.php</span> PHP script rendering HTML test</li>
      <li><span class="badge">html.article.php</span> PHP script for HTML article structure</li>
      <li><span class="badge">isset.html</span> HTML demo of isset()</li>
      <li><span class="badge">isset.php</span> PHP demo of isset()</li>
      <li><span class="badge">textarea.html</span> HTML textarea demo</li>
      <li><span as="badge">textarea.php</span> PHP textarea demo</li>
      <li><span class="badge">webpage_structure.php</span> PHP demo of webpage structure</li>
      <li><span class="badge">json-output.php</span> PHP demo of JSON output</li>
    </ul>

    <h2>🚀 Getting Started</h2>
    <ol>
      <li>Clone the repo: <code>git clone https://github.com/phantasmavaga/php-learning-journey.git</code></li>
      <li>Upload the files to a PHP-enabled web server (Apache, Nginx, etc.)</li>
      <li>Open in your browser a file like <code>age.php</code>, <code>final_price.php</code> or any other to see how it works.</li>
    </ol>

    <h2>🔧 Requirements</h2>
    <ul>
      <li>PHP 7.4 or higher</li>
      <li>Web server (Apache, Nginx, etc.)</li>
      <li>ZipArchive extension (for <code>list_zip_contents.php</code>)</li>
    </ul>

    <h2>📚 Concepts Covered</h2>
    <p>This repository covers:</p>
    <ul>
      <li>Basic PHP syntax – variables, operators, conditions</li>
      <li>Loops (for, while, do-while, foreach)</li>
      <li>File operations – glob, zip archives</li>
      <li>Session and cookie management</li>
      <li>Form processing and dynamic selects</li>
      <li>Mathematical calculations – discounts, taxes, rounding</li>
      <li>Date and time functions</li>
      <li>String operations – strpos, printf, etc.</li>
      <li>Array processing – ranges, loops</li>
    </ul>

    <h2>✨ Coming Soon</h2>
    <p>More examples and advanced topics are on the way!</p>
    <ul>
      <li>Database operations with MySQL</li>
      <li>Object-oriented programming examples</li>
      <li>API integration examples</li>
      <li>Form validation and security</li>
      <li>File upload and manipulation</li>
    </ul>

    <h2>👤 About the Developer</h2>
    <p>The examples in this repository were created during the learning process and are intended for educational use. Free to use and modify under the terms described.</p>

    <a class="button" href="https://github.com/phantasmavaga/php-learning-journey" target="_blank">View on GitHub</a>
  </div>

  <footer>
    &copy; 2025 • PHP Learning Journey • All learning, no pressure 😊
  </footer>
</body>
</html>
