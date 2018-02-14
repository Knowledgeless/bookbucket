<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mostly Fluid - Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      /*
      These are the default styles. No need to change these.
      */
      @import url(https://fonts.googleapis.com/css?family=Roboto);
      html, body {
        margin: 0;
        padding: 0;
      }

      body {
        font-family: 'Roboto', sans-serif;
				background-color: #e9ebee;
      }

      .title {
        font-size: 2.5em;
        text-align: center;
      }

      .box {
        min-height: 150px;
      }

      .header {
				background-color: #4266b3;
        color: #efefef;
      }

      .light_blue {
        background-color: #099DD9;
      }

      .green {
        //background-color: #0C8542;
				background-color: #f6f7f9;
      }

      .lime {
        background-color: rgb(179, 210, 52);
      }

      .seafoam {
        background-color: rgb(77, 190, 161);
      }

      .orange {
        //background-color: #F79420;
				//background-color: #e9ebee;
      }
			.no_underline {
				text-decoration: none;
			}
			.post {
				background-color: #fff;
				padding: 20px;
			}

			.time_location{
				font-size: 12px;
				font-weight: normal;
			}

			.purpose_price {
				font-weight: bold;
			}

			.post_img{
				width: 7cm;
				height: 5cm;
				background-color: #e9ebee;
			}
    </style>
    <style type="text/css">
      /*
      These are the responsive styles. Throw some breakpoints in here!
      */
      .container {
        display: flex;
        flex-wrap: wrap;
      }

      .box {
        width: 100%;
      }

      @media screen and (min-width: 450px) {
        .light_blue, .green{
          width: 50%;
        }
      }
      @media screen and (min-width: 550px) {
				.header {
          width: 50%;
				}

				.header, .light_blue{
					height: 1cm;
				}

				.leftside_menu{
          width: 25%;
					height: 5cm;
        }
        .timeline{
          width: 75%;
					height: 10cm;
        }
        .bottom{
          width: 100%;
					height: 2cm;
        }
      }
      @media screen and (min-width: 800px) {
        .container {
          width: 1000px;
          margin-left: auto;
          margin-right: auto;
        }
      }
    </style>
  </head>
  <body>
		<div style="text-align:center;">
			<h1>Block Diagram where Updating soon</h1>
			<br><br>
		</div>

    <div class="container">
      <div class="header">
				<div class="search_box">Search box</div>
			</div>
      <div class="header">
				<div class="nav_options">Navigation Options</div>
			</div>
      <div class="leftside_menu green">
				Side menu
			</div>
      <div class="timeline">
				<div align="center" style="padding:20px;">Rent, Sell, Buy posts</div>
				<div class="post">
					<p>User commented on this.</p>
					<hr>
					<p class="purpose_price"><span>Purpose: Sell<span>, <span>Price: 280 tk</span><p>
					<p class="time_location"><span>1 hr ago<span>, <span>Aftabnagar</span><p>
					<div class="post_img"></div>
				</div>

				<div class=""></div>
			</div
			<hr>
      <div class="bottom">
				<div style="text-align: left; float:left; padding:10px;"><a class="no_underline" href="#">Advertising</a> <a class="no_underline" href="#">Business</a></div>
				<div style="text-align: right; padding:10px;"><a class="no_underline" href="#">Privacy</a> <a class="no_underline" href="#">Terms</a> <a class="no_underline" href="#">Settings</a></div>
				<div align="center" style="padding-bottom:20px;"><span>Playlagom © 2018<span></div>
			</div>
    </div>

		<?php
			if($_POST){
				header("Location:../index.php");
			}
		?>
  </body>
</html>
