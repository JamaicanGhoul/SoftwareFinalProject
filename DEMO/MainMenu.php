<?php 
session_start();
include('Database.php');



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Main_menu</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css\Main_menu_style.css"/>
<script id="applicationScript" type="text/javascript" src="js\Main_menu_script.js"></script>
</head>
<body>
<div id="MainMenu" class="">
	<div data-type="Symbol" data-name="Icon / Menu / Rounded" id="Icon___Menu___Rounded" class="Icon___Menu___Rounded">
		<svg data-type="Rectangle" data-name="Box" class="Box">
			<rect fill="transparent" id="Box" rx="0" ry="0" x="0" y="0" width="36" height="36">
			</rect>
		</svg>
		<svg data-type="Path" data-name="Path 2023" class="Path_2023" viewBox="0.9 4 30 12">
			<path fill="rgba(0,0,0,1)" id="Path_2023" d="M 0.9000001549720764 5 C 0.9000001549720764 5.599999904632568 1.733333587646484 6 2.566667079925537 6 L 29.23333358764648 6 C 30.06666564941406 6 30.89999961853027 5.599999904632568 30.89999961853027 5 C 30.89999961853027 4.400000095367432 30.06666564941406 4 29.23333358764648 4 L 2.5666663646698 4 C 1.733333587646484 4 0.9000001549720764 4.400000095367432 0.9000001549720764 5 Z M 2.566667079925537 11 L 29.23333358764648 11 C 30.06666564941406 11 30.89999961853027 10.5 30.89999961853027 10 C 30.89999961853027 9.5 30.06666564941406 9 29.23333358764648 9 L 2.5666663646698 9 C 1.733332872390747 9 0.8999996781349182 9.5 0.8999996781349182 10 C 0.8999996781349182 10.5 1.733333587646484 11 2.566667079925537 11 Z M 2.566667079925537 16 L 29.23333358764648 16 C 30.06666564941406 16 30.89999961853027 15.5 30.89999961853027 15 C 30.89999961853027 14.5 30.06666564941406 14 29.23333358764648 14 L 2.5666663646698 14 C 1.733332872390747 14 0.8999996781349182 14.5 0.8999996781349182 15 C 0.8999996781349182 15.5 1.733333587646484 16 2.566667079925537 16 Z">
			</path>
		</svg>
	</div>
	<div data-type="Text" data-name="Welcome" id="Welcome">
		<span>Welcome</span>
	</div>
 <button type="button" name="button" onclick="salesIndex()">
	<svg data-type="Rectangle" data-name="SalesButton" class="SalesButton">
		<rect fill="rgba(222,35,24,0.549)" id="SalesButton" rx="7" ry="7" x="0" y="0" width="581" height="161">
		</rect>
		
	</svg>
  <button>
  <button type="button" name="button" onclick="inventryIndex()">
	<svg data-type="Rectangle" data-name="InventoryButton" class="InventoryButton">
		<rect fill="rgba(24,196,222,0.91)" id="InventoryButton" rx="7" ry="7" x="0" y="0" width="581" height="153">
		</rect>
	</svg>
	</button>
	<button type="button" name="button" onclick="trendsIndex()">
	<svg data-type="Rectangle" data-name="TrendsButton" class="TrendsButton">
		<rect fill="rgba(136,24,222,0.839)" id="TrendsButton" rx="7" ry="7" x="0" y="0" width="581" height="142">
		</rect>
	</svg>
	</button>
	<button type="button" name="button" onclick="exitIndex()">
	<svg data-type="Rectangle" data-name="ExitButton" class="ExitButton">
		<rect fill="rgba(225,93,17,0.812)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="ExitButton" rx="0" ry="0" x="0" y="0" width="523" height="60">
		</rect>
	</svg>
	</button>
	<a href="Sales.php"><svg data-type="Rectangle" data-name="Sales_Icon" class="Sales_Icon">
		<pattern elementId="Sales_Icon_A0_Rectangle_7" id="Sales_Icon_A0_Rectangle_7_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="img\Sales_Icon_A0_Rectangle_7_pattern.png" xlink:href="img\Sales_Icon_A0_Rectangle_7_pattern.png"></image>
		</pattern>
		<rect fill="url(#Sales_Icon_A0_Rectangle_7_pattern)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Sales_Icon" rx="0" ry="0" x="0" y="0" width="96" height="84">
		</rect>
	</svg></a>
	<a href="InventoryIndex.php"><svg data-type="Rectangle" data-name="Inventory_Icon" class="Inventory_Icon">
		<pattern elementId="Inventory_Icon_A0_Rectangle_9" id="Inventory_Icon_A0_Rectangle_9_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="img\Inventory_Icon_A0_Rectangle_9_pattern.png" xlink:href="img\Inventory_Icon_A0_Rectangle_9_pattern.png"></image>
		</pattern>
		<rect fill="url(#Inventory_Icon_A0_Rectangle_9_pattern)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Inventory_Icon" rx="0" ry="0" x="0" y="0" width="97" height="79">
		</rect>
	</svg></a>
	<a href="TrendsIndex.php"><svg data-type="Rectangle" data-name="Trends_Icon" class="Trends_Icon">
		<pattern elementId="Trends_Icon_A0_Rectangle_11" id="Trends_Icon_A0_Rectangle_11_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="img\Trends_Icon_A0_Rectangle_11_pattern.png" xlink:href="img\Trends_Icon_A0_Rectangle_11_pattern.png"></image>
		</pattern>
		<rect fill="url(#Trends_Icon_A0_Rectangle_11_pattern)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Trends_Icon" rx="0" ry="0" x="0" y="0" width="78" height="77">
		</rect>
        </svg></a>
	<div data-type="Text" data-name="Sales" id="Sales">
		<span>Sales</span>
	</div>
	<div data-type="Text" data-name="Inventory" id="Inventory">
		<span>Inventory</span>
	</div>
	<div data-type="Text" data-name="Trends" id="Trends">
		<span>Trends</span>
	</div>
	<svg data-type="Rectangle" data-name="Exit_Icon" class="Exit_Icon">
		<pattern elementId="Exit_Icon_A0_Rectangle_13" id="Exit_Icon_A0_Rectangle_13_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="img\Exit_Icon_A0_Rectangle_13_pattern.png" xlink:href="img\Exit_Icon_A0_Rectangle_13_pattern.png"></image>
		</pattern>
		<rect fill="url(#Exit_Icon_A0_Rectangle_13_pattern)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Exit_Icon" rx="0" ry="0" x="0" y="0" width="35" height="35">
		</rect>
	</svg>
</div>
</body>
</html>