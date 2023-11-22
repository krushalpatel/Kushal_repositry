<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--->
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
         /* Sidebar Styles */
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
     #MainManu{
  text-align: center;
  margin-top: 20px;
  color: #fff;
  
}
  
    #socialProfiles {
  text-align: center;
  margin-top: 20px; 
  color: #fff; 
}  
  
    /* Main Content Styles */
    #main {
      transition: margin-left 0.5s;
      padding: 16px;
    }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, #0091ad);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, #ff8c42, #ffbc3b);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>
<div class="container-fluid">
        <div class="row">
                                     <!-- Sidebar -->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <div id="MainManu">
      <h2>Main Manu</h2>
    <ul class="list-group">
        <li class="list-group-item"><a href="#">Menu 1</a></li>
        <li class="list-group-item"><a href="#">Menu 2</a></li>
        <li class="list-group-item"><a href="#">Menu 3</a></li>
    </ul>
    </div>
      <div id="socialProfiles">
        <h2>Social Profiles</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="" target="_blank">Google Site</a></li>
            <li class="list-group-item"><a href="https://www.linkedin.com/in/krushal-patel-b71167235/">LinkedIn</a></li>
            <li class="list-group-item"><a href="https://github.com//krushalpatel/" target="_blank">GitHub</a></li>
        </ul>
    </div>
  </div>

  
                
             <!-- Main Content -->
  <div id="main">
    <button class="openbtn" onclick="openNav()" onclick="clo">☰ Open Sidebar</button>
    <h2></h2>
    <p>This is the main content of the page.</p>
  </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <p>Hello! My name is Krushal. <br> 
                            I am Studying in Atmiya University.
                        </p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>Skill</h2>
                        </div>
                            <li>Unity Designe</li>
                            <li>Dlender</li>
                            <li>PHP</li>
                            <li>HTML</li>
                            <li> C </li>
                            <li>Photoshope</li>
                    </div>
                    
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">

<button class="ocean-blue-button gradient-button"><a href="https://github.com/krushalpatel/web_development_using_php/tree/main/task_1" target="_blank">Task 1</a></button>
<button class="sunset-orange-button gradient-button"><a href="https://github.com/krushalpatel/web_development_using_php/tree/main/task_2" target="_blank">Task 2</a></button>
<button class="spring-green-button gradient-button"><a href="https://github.com/krushalpatel/web_development_using_php/tree/main/task_3" target="_blank">Task 3</a></button>
<button class="royal-purple-button gradient-button">Task 4</button>
<button class="ruby-red-button gradient-button">Task 5</button>
<button class="goldenrod-yellow-button gradient-button">Minor Project Module</button><br>

<button class="spring-green-button gradient-button">Database  Module</button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>Projects</h2>
                        </div>
                        <p>Details about your projects go here.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <img src="footer-logo.png" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  
  </script>
</body>
</html>
