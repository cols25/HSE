<?php
/*
 * Created on May 20, 2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1>Fibre Identification Bulk Sampling Form</h1>
<div ng-app="myApp" ng-controller="formCtrl">
	<div id="main">
	    <form action="insert.php" method="post">
		    <div class="sub">
				<div id="" class="clientInfo">
					<div class="entity">
						<div class="label">Job No: </div><div class="field"><input type="text" name="jobno" value="" autocomplete="off" ng-model="jobNo" ></div>
				    </div>
				    <div class="entity">
				    	<div class="label">Analyst: </div><div class="field"><select name="analyst" ng-model="selectedName" ng-options="x for x in analystnames"></select></div>
				    </div>
				</div>
				<div id="ClientDate" class="clientInfo">
					<div class="entity">
						<div class="label">Client : </div>
						<div class="field">
							<input type="text" name="client" ng-model="client" id="client" value="" autocomplete="off" ng-model="client">
						</div>
						<div class="field btn">    
					        <a target="_blank" href="#" title="Provide Client Name and click on 'Get Client Info' to get the existing client details">
					    	<img src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png" height="13px"/></a>
							<button type="button" ng-click="getPeople()">
					          	Get Client Info
					        </button>
					    </div>
					    <div id="addClient">
					    	<div class="entity clientInfo" style="padding-left: 0px">
								<div class="label">Client Address: </div><div class="field"><input type="text" name="address" value="" autocomplete="off" ng-model="address" ></div>
				    		</div>	
					    </div>
					    <div class="btnAddClient">
					    	<button type="button" id="addClientBtn" ng-click="addClient()">
					          	Add Client
					        </button>
						</div>
					</div>
				    <div class="entity">
				    	<div class="label">Analysis Date : </div>
				    	<div class="field">
				    		<input type="text" name="analysisdate" ng-model="analysisdate" value="" autocomplete="off"/>
				    	</div>
				    </div>
				</div>
				<div id="ReportClientRefNo" class="clientInfo">
				    <div class="entity">
				    	<div class="label">Report No : </div>
				    	<div class="field">
				    		<input type="text" ng-model="reportNo" name="reportNo" min="1">
				    	</div>
				   	</div>
				    <div class="entity">
				    	<div class="label">Client Ref No : </div>
				    	<div class="field">
				    		<input type="text" ng-model="clientRefNo" name="clientRefNo" min="1">
				    	</div>
				    </div>
				</div>
				<div class="clientInfo">
					<div class="entity">
						<div class="btnAddClient">
							<button type="submit" id="saveClient">Save Client Info</button>
						</div>
					</div>
				</div>
				<!--<div id="email" class="clientInfo">
					<div class="entity">
				    	<div class="label">E-mail: </div><div class="field"><input type="email" name="email" value="" ng-model="email"></div>
				    </div>
				</div>-->
			</div>
			<div class="sub">
				<div class="sampleInfo" style="padding-top: 5px;">
					<div class="entity">
						<span class="label">Sample No: </span><span class="field"><input type="text" ng-model="sampleNo" name="sampleNo" min="1"></span>
					</div>
					<div class="entity" style="border-left: 1px solid black;">
						<span class="label subEntity">Sample Type: </span><span class="field"><select name="sampleType" ng-model="sampleType" ng-options="x for x in sampletypes"></select></span>
						<span class="label subEntity">&nbsp;</span>
						<span class="label subEntity">Furnace Temperature: </span><span class="field"><input type="text" ng-model="furnaceTemp" name="furnaceTemp" value = "40" disabled></span>
					</div>
				</div>
				<div class="sampleInfo" style="border:none">
					<div class="entity" style="border-right: 1px solid black;">
						<span class="label subEntity">Size (mm) approximate dimensions: </span>
						<span class="field">
							<input type="number" ng-model="sampleLength" name="sampleLength" placeholder="Length" min="0" max="999" maxlength="3">
						</span>
						<span class="field">&nbsp;</span>
						<span class="field">
							<input type="number" ng-model="sampleBreadth" name="sampleBreadth" placeholder="Breadth" min="0" max="999" maxlength="3">
						</span>
						<span class="field">&nbsp;</span>
						<span class="field">
							<input type="number" ng-model="sampleHeight" name="sampleHeight" placeholder="Height" min="0" max="999" maxlength="3">
						</span>
					</div>
					<div class="entity">
						<span class="label subEntity">Weight of dust/debris samples (grams): </span><span class="field"><input type="text" ng-model="sampleWeight" name="sampleWeight" min="1"></span>
					</div>
				</div>
			</div>
			<div class="sub">
				<div class="sampleDetails">
					<div class="sampleEntity">
						<span class="label">Microscope Used: </span>
						<span class="field">
							<input type="text" ng-model="microscopeUsed" name="microscopeUsed" min="1">
						</span>
					</div>	
				</div>
				<div class="sampleDetails">
					<div class="sampleEntity">
						<span class="label">Sampled By: </span>
						<span class="field">
							<select name="sampledBy" ng-model="sampledBy" ng-options="x for x in sampledby"></select>
						</span>
					</div>
				</div>
				<div class="sampleDetails">
					<div class="sampleEntity">
						<span class="label">Sample Location/Address: </span>
						<span class="field">
							<textarea name="sampleLocation" rows="5" cols="30" wrap="off" placeholder="Enter Location/Address"></textarea>
						</span>
					</div>
				</div>
				<div class="sampleDetails">
					<div class="sampleEntity">
						<span class="label">Sample description (as seen under stereomicroscope): </span>
						<span class="field">
							<!--<select name="sampleDesc" ng-model="sampleDesc" ng-options="x for x in sampledesc"></select>-->
							<div class="multiselect">
							    <div class="selectBox" onclick="showCheckboxes()">
							      <select>
							        	<option>Select a Description</option>
							      </select>
							      <div class="overSelect"></div>
							    </div>
							    <div id="checkboxes">
							      <label for="one">
							        <input type="checkbox" id="one" onchange="checkIfChecked('one')" value="Fibres"/>Fibres</label>
							      <label for="two">
							        <input type="checkbox" id="two" onchange="checkIfChecked('two')" value="Cement"/>Cement</label>
							      <label for="three">
							        <input type="checkbox" id="three" onchange="checkIfChecked('three')" value="Paint"/>Paint</label>
								  <label for="four">
							        <input type="checkbox" id="four" onchange="checkIfChecked('four')" value="Cobwebs"/>Cobwebs</label>
								  <label for="five">
							        <input type="checkbox" id="five" onchange="checkIfChecked('five')" value="Glue"/>Glue</label>
								  <label for="six">
							        <input type="checkbox" id="six" onchange="checkIfChecked('six')" value="Insect Pieces"/>Insect Pieces</label>
								  <label for="seven">
							        <input type="checkbox" id="seven" onchange="checkIfChecked('seven')" value="Layered FCS"/>Layered FCS</label>
							    </div>
							</div>
						</span>
						<div class="entity">
							<p><span class="field" id="sampleDesc"></span></p>
						</div>
					</div>
				</div>
				<div class="sampleDetails">
					<div class="sampleEntity">
						<span class="label">Sub-sampling details: </span>
						<span class="field">
							<textarea name="subSample" rows="5" cols="30" wrap="off" placeholder="Enter Sub-sampling details"></textarea>
						</span>
					</div>
				</div>
				<div class="sampleDetails" id="border">
					<div class="entity">
						<span class="label">Ashing: </span>
						<span class="field"><input type="radio" name="ashing" value="">Yes</span>
						<span class="field"><input type="radio" name="ashing" value="">No</span>
					</div>
					<div class="entity">
						<span class="label">Crucible No: </span>
						<span class="field">
							<input type="number" ng-model="crucibleNo" name="crucibleNo" min="0" max="999">
						</span>
					</div>
				</div>
				<div class="sampleDetails">
					<div class="entity">
						<span class="label">Other Sample Treatment: </span>
					</div>
				</div>
				<div class="sampleDetails">
					<div class="entity">
						<span class="label">Sample is: </span>
						<span class="field"><input type="radio" name="sampleis" value="">Homogenous</span>
						<span class="field"><input type="radio" name="sampleis" value="">Non-homogenous</span>
					</div>
				</div>
			</div>
			<div class="sub">
				<div class="fibreDetails">
					<p id="fibreHeader">Fibre Morphology (Stereo Microscope)</p>
				</div>
				<div class="fibreDetails">
					<div class="entity">
						<p>Fibre</p>
					</div>
					<div class="entity">
						<p><span class="label">Description</span></p>
					</div>
				</div>
				<div class="fibreDetails">
					<div class="entity">
						<p>A <span>&nbsp;<select name="fibreA" ng-model="fibreA" ng-options="x for x in fibretypes" ng-change="getFibrePropA()">{{x}}</select></span></p>
					</div>
					<div class="entity">	
						<span class="field">
							<textarea ng-model="fibreADesc" rows="5" cols="30" wrap="off">{{fibreADesc}}</textarea>	
						</span>
					</div>
				</div>
				<div class="fibreDetails">
					<div class="entity">
						<p>B <span>&nbsp;<select name="fibreB" ng-model="fibreB" ng-options="x for x in fibretypes" ng-change="getFibrePropB()">{{x}}</select></span></p>
					</div>
					<div class="entity">
						<span class="field">
							<textarea ng-model="fibreBDesc" rows="5" cols="30" wrap="off">{{fibreADesc}}</textarea>
						</span>
					</div>
				</div>
				<div class="fibreDetails">
					<div class="entity">
						<p>C <span>&nbsp;<select name="fibreC" ng-model="fibreC" ng-options="x for x in fibretypes" ng-change="getFibrePropC()">{{x}}</select></span></p>
					</div>
					<div class="entity">
						<span class="field">
							<textarea ng-model="fibreCDesc" rows="5" cols="30" wrap="off">{{fibreADesc}}</textarea>
						</span>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('formCtrl', function($scope, $http) {
    $scope.name = "";
    $scope.email = "";    
    $scope.analystnames = ["Harmesh Shah", "Michelle Barnes", "Ly-huor ly","Jason Winter"];
    $scope.sampledesc = ["Fibres","Cement","Paint","Cobwebs","Glue","Insect Pieces","Layered FCS"];
    $scope.sampletypes = ["FCS","VFS","VFT","PUTTY","WOVEN ROPE","INSULATION"];
    $scope.furnaceTemp = 40;
    $scope.fibretypes = ["Organic"];
    	$scope.getFibrePropA = function() {
    		$scope.fibreADesc = "Thick, Wavy";
    	}
    	
    	$scope.getFibrePropB = function() {
    		$scope.fibreBDesc = "Thick, Wavy";
    	}
    	
    	$scope.getFibrePropC = function() {
    		$scope.fibreCDesc = "Thick, Wavy";
    	}
    	
		$scope.getPeople = function() {
    		$scope.clientInfo;	
    		console.log("Invoking get people");
    		if ($scope.clientRefNo === '') {
            	console.log("within clientRefNo");
                $scope.jobno = "";
			    $scope.selectedName = "";
              	$scope.client = "";
              	$scope.address = "";
              	$scope.analysisdate = "";
              	$scope.reportNo = "";
              	$scope.clientRefNo = "";
    		  	return;
    		}
    		
            $http({      
              	method: 'POST',
              	url: '/Aus_PHP/getData.php',
             	 data: {client: $scope.client }
              
          	}).then(function (response) {
          		
				if ($scope.clientRefNo === '') {
	              	$scope.jobNo = "";
					  $scope.selectedName = "";
		              $scope.client = "";
		              $scope.address = "";
		              $scope.analysisdate = "";
		              $scope.reportNo = "";
		              $scope.clientRefNo = "";
		    		  return;
	    		}	              
		         
		        // on success
		        $scope.clientInfo = response.data;
		        if (response.data.length == 0) {
		        	alert("No Client Found With the Name: "+$scope.client);
		        	return;
		        }
		        $scope.jobNo = $scope.clientInfo[0].job_no;
				$scope.selectedName = $scope.clientInfo[0].analyst.substring(7);;
		        $scope.client = $scope.clientInfo[0].client;
		        $scope.address = $scope.clientInfo[0].address;
		        $scope.addClient();
		        
		        $scope.analysisdate = $scope.clientInfo[0].date;
		        $scope.reportNo = $scope.clientInfo[0].report_no;
		        $scope.clientRefNo = $scope.clientInfo[0].client_ref_no;
	              
	            //$scope.email = $scope.people[0].email;
              
            }, function (response) {
	            // on error
	            console.log(response.data,response.status);
          	});
    	};

	    $scope.addClient = function() {
	    	var addClientObj = document.getElementById("addClient");
	    	var addClientBtnObj = document.getElementById("addClientBtn");
	    	if (addClientObj.style.display == "none" || addClientObj.style.display === "") {
	    		addClientObj.style.display = "block";
	    		addClientBtnObj.innerHTML = "Cancel";
	    	} else {
	    		addClientObj.style.display = "none";
	    		addClientBtnObj.innerHTML = "Add Client";
	    	}		
	    }		
    	
    });
    
    // Function to display Sample description dropdown
    
    var expanded = false;
	var desc = [];
	
	function checkIfChecked(obj) {
		var checkObj = document.getElementById(obj);
		if (checkObj.checked) {
			var val1 = checkObj.value;
			desc.push(val1);
			document.getElementById("sampleDesc").textContent = desc;
		} else {
           var index = desc.indexOf(checkObj.value);
           if (index > -1) {
           		desc.splice(index,1);
           		document.getElementById("sampleDesc").textContent = desc;
           }			
		}
	}
		
	function showCheckboxes() {
	  var checkboxes = document.getElementById("checkboxes");
	  if (!expanded) {
	    checkboxes.style.display = "block";
	    expanded = true;
	  } else {
	    checkboxes.style.display = "none";
	    expanded = false;
	  }
	}
	
</script>

</body>
</html>

