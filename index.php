<?php
// Simple PHP page about Jenkins
$title = "Jenkins CI/CD Information";
$date = date("d-m-Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
            padding:0;
        }
        header{
            background:#d33833;
            color:white;
            padding:20px;
            text-align:center;
        }
        .container{
            width:80%;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }
        h2{ color:#d33833; }
        ul{ line-height:1.8; }
        footer{
            text-align:center;
            padding:10px;
            margin-top:20px;
            background:#222;
            color:white;
        }
        .card{
            background:#f9f9f9;
            padding:15px;
            border-left:5px solid #d33833;
            margin:10px 0;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
    <p>Generated on: <?php echo $date; ?></p>
</header>

<div class="container">

    <h2>🔹 What is Jenkins?</h2>
    <p>
        Jenkins is an open-source automation server used for Continuous Integration (CI) 
        and Continuous Deployment (CD). It helps developers automatically build, test, 
        and deploy applications.
    </p>

    <h2>🔹 Why Jenkins is Used?</h2>
    <ul>
        <li>Automates software build process</li>
        <li>Runs tests automatically</li>
        <li>Deploys applications to servers</li>
        <li>Improves code quality and productivity</li>
    </ul>

    <h2>🔹 Key Features</h2>
    <div class="card">✔ Open Source & Free</div>
    <div class="card">✔ Supports 1000+ Plugins</div>
    <div class="card">✔ Integrates with Git, Docker, Kubernetes</div>
    <div class="card">✔ Cross Platform (Windows, Linux, Mac)</div>

    <h2>🔹 Jenkins CI/CD Pipeline</h2>
    <ol>
        <li>Developer pushes code to GitHub</li>
        <li>Jenkins detects the change</li>
        <li>Builds the project automatically</li>
        <li>Runs automated tests</li>
        <li>Deploys to production server</li>
    </ol>

    <h2>🔹 Example Jenkins Pipeline Script</h2>
    <pre>
pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Building project...'
      }
    }
    stage('Test') {
      steps {
        echo 'Running tests...'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying application...'
      }
    }
  }
}
    </pre>

</div>

<footer>
    <p>Mini PHP Project - Jenkins Overview</p>
</footer>

</body>
</html>
