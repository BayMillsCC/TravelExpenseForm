<?php
if(isset($_POST['submit'])){

	//collect form data
    $name = $_POST['name'];
	$travelDestination = $_POST['travelDestination'];
	$travelPurpose = $_POST['travelPurpose'];
	$travelDates = $_POST['travelDates'];
	$transportationMethod = $_POST['transportationMethod'];

	$ePAY = $_POST['ePAY'];
	$eRAY = $_POST['eRAY'];
	$eRAExplanation = $_POST['eRAExplanation'];
	$expenseReimburseActual = $_POST['expenseReimburseActual'];
	$expenseReimbursePerDiem = $_POST['expenseReimbursePerDiem'];
	$professionalDevelopment = $_POST['professionalDevelopment'];
	
	$programCharged = $_POST['programCharged'];
	
	$departure1Time = $_POST['departure1Time'];
	$departure1Location = $_POST['departure1Location'];
	$arrival1Time = $_POST['arrival1Time'];
	$arrival1Location = $_POST['arrival1Location'];
	$mileage1TotalMiles = $_POST['mileage1TotalMiles'];

	$departure2Time = $_POST['departure2Time'];
	$departure2Location = $_POST['departure2Location'];
	$arrival2Time = $_POST['arrival2Time'];
	$arrival2Location = $_POST['arrival2Location'];
	$mileage2TotalMiles = $_POST['mileage2TotalMiles'];

	$departure3Time = $_POST['departure3Time'];
	$departure3Location = $_POST['departure3Location'];
	$arrival3Time = $_POST['arrival3Time'];
	$arrival3Location = $_POST['arrival3Location'];
	$mileage3TotalMiles = $_POST['mileage3TotalMiles'];

	$departure4Time = $_POST['departure4Time'];
	$departure4Location = $_POST['departure4Location'];
	$arrival4Time = $_POST['arrival4Time'];
	$arrival4Location = $_POST['arrival4Location'];
	$mileage4TotalMiles = $_POST['mileage4TotalMiles'];

	$departure5Time = $_POST['departure5Time'];
	$departure5Location = $_POST['departure5Location'];
	$arrival5Time = $_POST['arrival5Time'];
	$arrival5Location = $_POST['arrival5Location'];
	$mileage5TotalMiles = $_POST['mileage5TotalMiles'];

	$departure6Time = $_POST['departure6Time'];
	$departure6Location = $_POST['departure6Location'];
	$arrival6Time = $_POST['arrival6Time'];
	$arrival6Location = $_POST['arrival6Location'];
	$mileage6TotalMiles = $_POST['mileage6TotalMiles'];


	$perDiemDeparture = $_POST['perDiemDeparture'];
	$perDiemReturn = $_POST['perDiemReturn'];
	$perDiemRate = sprintf('%.2f', $_POST['perDiemRate']);
	
	$actualHotelCosts = sprintf('%.2f', $_POST['actualHotelCosts']);
	$actualFoodCosts = sprintf('%.2f', $_POST['actualFoodCosts']);
	$incidentalCosts = sprintf('%.2f', $_POST['incidentalCosts']);
	
	$miscItem1Name = $_POST['miscItem1Name'];
	$miscItem1Value = sprintf('%.2f', $_POST['miscItem1Value']);
	$miscItem2Name = $_POST['miscItem2Name'];
	$miscItem2Value = sprintf('%.2f', $_POST['miscItem2Value']);
	$miscItem3Name = $_POST['miscItem3Name'];
	$miscItem3Value = sprintf('%.2f', $_POST['miscItem3Value']);
	$miscItem4Name = $_POST['miscItem4Name'];
	$miscItem4Value = sprintf('%.2f', $_POST['miscItem4Value']);
	$miscItem5Name = $_POST['miscItem5Name'];
	$miscItem5Value = sprintf('%.2f', $_POST['miscItem5Value']);

	$totalAdvanceReceived = $_POST['totalAdvanceReceived'];

	if (!isset($name))
	{
		$name = '';
	}
	if (!isset($travelDestination))
	{
		$travelDestination = '';
	}
	if (!isset($travelPurpose))
	{
		$travelPurpose = '';
	}
	if (!isset($travelDates))
	{
		$travelDates = '';
	}
	if (!isset($transportationMethod))
	{
		$transportationMethod = '';
	}
	if (!isset($ePAY))
	{
		$ePAY = '';
	}
	if (!isset($eRAY))
	{
		$eRAY = '';
	}
	if (!isset($eRAExplanation))
	{
		$eRAExplanation = '';
	}
	if (!isset($expenseReimburseActual))
	{
		$expenseReimburseActual = '';
	}
	if (!isset($expenseReimbursePerDiem))
	{
		$expenseReimbursePerDiem = '';
	}
	if (!isset($professionalDevelopment))
	{
		$professionalDevelopment = '';
	}
	if (!isset($programCharged))
	{
		$programCharged = '';
	}
	if (!isset($departure1Time))
	{
		$departure1Time = '';
		$departure1TimeConverted = '';
	}
	else
	{
		if (!empty($departure1Time))
		{
			$departure1TimeConverted =  strtotime($departure1Time);
		}
		else
		{
			$departure1TimeConverted = '';
		}
	}
	if (!isset($departure1Location))
	{
		$departure1Location = '';
	}
	if (!isset($arrival1Time))
	{
		$arrival1Time = '';
		$arrival1TimeConverted = '';
	}
	else
	{
		if (!empty($arrival1Time))
		{
			$arrival1TimeConverted = strtotime($arrival1Time);
		}
		else
		{
			$arrival1TimeConverted = '';
		}
	}
	if (!isset($arrival1Location))
	{
		$arrival1Location = '';
	}
	if (!isset($mileage1TotalMiles))
	{
		$mileage1TotalMiles = '';
	}
	if (!isset($departure2Time))
	{
		$departure2Time = '';
		$departure2TimeConverted = '';
	}
	else
	{
		if (!empty($departure2Time))
		{
			$departure2TimeConverted =  strtotime($departure2Time);
		}
		else
		{
			$departure2TimeConverted = '';
		}
	}
	if (!isset($departure2Location))
	{
		$departure2Location = '';
	}
	if (!isset($arrival2Time))
	{
		$arrival2Time = '';
		$arrival2TimeConverted = '';
	}
	else
	{
		if(!empty($arrival2Time))
		{
			$arrival2TimeConverted = strtotime($arrival2Time);
		}
		else
		{
			$arrival2TimeConverted = '';
		}
	}
	if (!isset($arrival2Location))
	{
		$arrival2Location = '';
	}
	if (!isset($mileage2TotalMiles))
	{
		$mileage2TotalMiles = '';
	}
	if (!isset($departure3Time))
	{
		$departure3Time = '';
		$departure3TimeConverted = '';
	}
	else
	{
		if(!empty($departure3Time))
		{
			$departure3TimeConverted =  strtotime($departure3Time);
		}
		else
		{
			$departure3TimeConverted = '';
		}
	}
	if (!isset($departure3Location))
	{
		$departure3Location = '';
	}
	if (!isset($arrival3Time))
	{
		$arrival3Time = '';
		$arrival3TimeConverted = '';
	}
	else
	{
		if(!empty($departure3Time))
		{
			$arrival3TimeConverted = strtotime($arrival3Time);
		}
		else
		{
			$arrival3TimeConverted = '';
		}
	}
	if (!isset($arrival3Location))
	{
		$arrival3Location = '';
	}
	if (!isset($mileage3TotalMiles))
	{
		$mileage3TotalMiles = '';
	}

	if (!isset($departure4Time))
	{
		$departure4Time = '';
		$departure4TimeConverted = '';
	}
	else
	{
		if (!empty($departure4Time))
		{
			$departure4TimeConverted =  strtotime($departure4Time);
		}
		else
		{
			$departure4TimeConverted = '';
		}
	}
	if (!isset($departure4Location))
	{
		$departure4Location = '';
	}
	if (!isset($arrival4Time))
	{
		$arrival4Time = '';
		$arrival4TimeConverted = '';
	}
	else
	{
		if (!empty($arrival4Time))
		{
			$arrival4TimeConverted = strtotime($arrival4Time);
		}
		else
		{
			$arrival4TimeConverted = '';
		}
	}

	if (!isset($arrival4Location))
	{
		$arrival4Location = '';
	}

	if (!isset($mileage4TotalMiles))
	{
		$mileage4TotalMiles = '';
	}

	if (!isset($departure5Time))
	{
		$departure5Time = '';
		$departure5TimeConverted =  '';
	}
	else
	{
		if (!empty($departure5Time))
		{
			$departure5TimeConverted =  strtotime($departure5Time);
		}
		else
		{
			$departure5TimeConverted =  '';
		}
	}
	if (!isset($departure5Location))
	{
		$departure5Location = '';
	}
	if (!isset($arrival5Time))
	{
		$arrival5Time = '';
		$arrival5TimeConverted = '';
	}
	else
	{
		if (!empty($arrival5Time))
		{
			$arrival5TimeConverted = strtotime($arrival5Time);
		}
		else
		{
			$arrival5TimeConverted = '';
		}
	}
	if (!isset($arrival5Location))
	{
		$arrival5Location = '';
	}
	if (!isset($mileage5TotalMiles))
	{
		$mileage5TotalMiles = '';
	}
	if (!isset($departure6Time))
	{
		$departure6Time = '';
		$departure6TimeConverted = '';
	}
	else
	{
		if(!empty($departure6Time))
		{
			$departure6TimeConverted =  strtotime($departure6Time);
		}
		else
		{
			$departure6TimeConverted = '';
		}
	}
	if (!isset($departure6Location))
	{
		$departure6Location = '';
	}
	if (!isset($arrival6Time))
	{
		$arrival6Time = '';
		$arrival6TimeConverted = '';
	}
	else
	{
		if(!empty($arrival6Time))
		{
			$arrival6TimeConverted = strtotime($arrival6Time);
		}
		else
		{
			$arrival6TimeConverted = '';
		}
	}
	if (!isset($arrival6Location))
	{
		$arrival6Location = '';
	}
	if (!isset($mileage6TotalMiles))
	{
		$mileage6TotalMiles = '';
	}
	if (!isset($perDiemDeparture))
	{
		$perDiemDeparture = '';
	}
	if (!isset($perDiemReturn))
	{
		$perDiemReturn = '';
	}
	if (!isset($perDiemRate))
	{
		$perDiemRate = '';
	}
	if (!isset($actualHotelCosts))
	{
		$actualHotelCosts = '';
	}
	if (!isset($actualFoodCosts))
	{
		$actualHotelCosts = '';
	}
	if (!isset($incidentalCosts))
	{
		$incidentalCosts = '';
	}
	if (!isset($miscItem1Name))
	{
		$miscItem1Name = '';
	}
	if (!isset($miscItem1Value))
	{
		$miscItem1Value = '';
	}
	if (!isset($miscItem2Name))
	{
		$miscItem2Name = '';
	}
	if (!isset($miscItem2Value))
	{
		$miscItem2Value = '';
	}
	if (!isset($miscItem3Name))
	{
		$miscItem3Name = '';
	}
	if (!isset($miscItem3Value))
	{
		$miscItem3Value = '';
	}
	if (!isset($miscItem4Name))
	{
		$miscItem4Name = '';
	}
	if (!isset($miscItem4Value))
	{
		$miscItem4Value = '';
	}
	if (!isset($miscItem5Name))
	{
		$miscItem5Name = '';
	}
	if (!isset($miscItem5Value))
	{
		$miscItem5Value = '';
	}
	if (!isset($totalAdvanceReceived))
	{
		$totalAdvanceReceived = '';
	}
	if ($ePAY == "Yes")
	{
		$ePAYOutput1 = '<input type="radio" name="ePAY" value="Yes" checked>Yes<br>';
		$ePAYOutput2 = '<input type="radio" name="ePAY" value="No">No<br>';
	}
	else
	{
		$ePAYOutput1 = '<input type="radio" name="ePAY" value="Yes">Yes<br>';
		$ePAYOutput2 = '<input type="radio" name="ePAY" value="No" checked>No<br>';
	}
	if ($eRAY == "Yes")
	{
		$eRAYOutput1 = '<input type="radio" name="eRAY" value="Yes" checked>Yes<br>';
		$eRAYOutput2 = '<input type="radio" name="eRAY" value="No">No<br>';
	}
	else
	{
		$eRAYOutput1 = '<input type="radio" name="eRAY" value="Yes">Yes<br>';
		$eRAYOutput2 = '<input type="radio" name="eRAY" value="No" checked>No<br>';
	}

	if ($expenseReimburseActual == "Actual")
	{
		$expenseOutput1 = '<input type="checkbox" name="expenseReimburseActual" value="Actual" checked>Actual Expense';
	}
	else
	{
		$expenseOutput1 = '<input type="checkbox" name="expenseReimburseActual" value="Actual">Actual Expense';
	}
	
	if ($expenseReimbursePerDiem == "PerDiem")
	{
		$expenseOutput2 = '<input type="checkbox" name="expenseReimbursePerDiem" value="PerDiem" checked>Per Diem Allowance';
	}
	else
	{
		$expenseOutput2 = '<input type="checkbox" name="expenseReimbursePerDiem" value="PerDiem">Per Diem Allowance';
	}        
	if ($professionalDevelopment == 'profDevYes')
	{
		$profDevYes = '<input type="radio" name="professionalDevelopment" value="profDevYes" checked>Yes';
        $profDevNo = '<input type="radio" name="professionalDevelopment" value="profDevNo">No';
	}
	else
	{
		$profDevYes = '<input type="radio" name="professionalDevelopment" value="profDevYes">Yes';
        $profDevNo = '<input type="radio" name="professionalDevelopment" value="profDevNo" checked>No';
	}

	$totalMiles = sprintf('%.2f', ($mileage1TotalMiles + $mileage2TotalMiles + $mileage3TotalMiles + $mileage4TotalMiles + $mileage5TotalMiles + $mileage6TotalMiles));
	$totalMileagePrice = sprintf('%.2f', ($totalMiles * 0.5));

	$perDiemDepartureTime = strtotime($perDiemDeparture);
	$perDiemReturnTime = strtotime($perDiemReturn);
	$totalPerDiemHours = abs($perDiemReturnTime - $perDiemDepartureTime)/(60*60);
	$totalPerDiem = sprintf('%.2f', (($perDiemRate * $totalPerDiemHours)/24));
	$totalPerDiemAdvance = sprintf('%.2f', ($totalPerDiem * 0.9));

	$totalActualExpense = sprintf('%.2f', ($actualHotelCosts + $actualFoodCosts + $incidentalCosts));

	$totalMisc = sprintf('%.2f', ($miscItem1Value + $miscItem2Value + $miscItem3Value + $miscItem4Value + $miscItem5Value));

	$totalExpenses = sprintf('%.2f', ($totalMileagePrice + $totalPerDiemAdvance + $totalActualExpense + $totalMisc));

	$balanceDue = sprintf('%.2f', ($totalExpenses - $totalAdvanceReceived));


}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?>


<!DOCTYPE html>
<HTML>
	<HEAD>
		<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<TITLE>travel_expense_form</TITLE>
		<STYLE type="text/css">

			body {margin-top: 0px;margin-left: 0px;}

			#page_1 {position:relative; overflow: hidden;margin: 69px 0px 90px 23px;padding: 0px;border: none;width: 793px;}
			#page_1 #id1_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 792px;overflow: hidden;}
			#page_1 #id1_2 {border:none;margin: 29px 0px 0px 4px;padding: 0px;border:none;width: 789px;overflow: hidden;}

			#page_1 #p1dimg1 {position:absolute;top:226px;left:0px;z-index:-1;width:745px;height:657px;}
			#page_1 #p1dimg1 #p1img1 {width:745px;height:657px;}




			#page_2 {position:relative; overflow: hidden;margin: 69px 0px 84px 24px;padding: 0px;border: none;width: 792px;}





			.ft0{font: 16px 'Arial';line-height: 18px;}
			.ft1{font: 13px 'Arial';line-height: 16px;}
			.ft2{font: 1px 'Arial';line-height: 1px;}
			.ft3{font: 11px 'Helvetica';line-height: 14px;}
			.ft4{font: 1px 'Arial';line-height: 8px;}
			.ft5{font: 1px 'Arial';line-height: 7px;}
			.ft6{font: bold 13px 'Arial';line-height: 16px;}
			.ft7{font: 11px 'Arial';line-height: 14px;}
			.ft8{font: 12px 'Arial';line-height: 15px;}
			.ft9{font: italic bold 13px 'Arial';line-height: 16px;}
			.ft10{font: 13px 'Arial';line-height: 17px;}
			.ft11{font: 13px 'Arial';text-decoration: underline;color: #0000ff;line-height: 16px;}
			.ft12{font: 13px 'Arial';line-height: 18px;}
			.ft13{font: bold 13px 'Arial';line-height: 19px;}
			.ft14{font: italic 11px 'Arial';line-height: 14px;}
			.ft15{font: 1px 'Arial';line-height: 10px;}
			.ft16{font: bold 13px 'Arial';line-height: 15px;}
			.ft17{font: 1px 'Arial';line-height: 14px;}
			.ft18{font: bold 12px 'Arial';line-height: 14px;}
			.ft19{font: 1px 'Arial';line-height: 15px;}
			.ft20{font: 9px 'Helvetica';line-height: 12px;}
			.ft21{font: 13px 'Arial';line-height: 14px;}

			.p0{text-align: left;padding-left: 268px;margin-top: 0px;margin-bottom: 0px;}
			.p1{text-align: left;padding-left: 277px;margin-top: 4px;margin-bottom: 0px;}
			.p2{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p3{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p4{text-align: center;padding-right: 43px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p5{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p6{text-align: right;padding-right: 41px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p7{text-align: center;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p8{text-align: right;padding-right: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p9{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p10{text-align: right;padding-right: 21px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p11{text-align: left;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p12{text-align: left;padding-left: 51px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p13{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;}
			.p14{text-align: left;padding-left: 216px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p15{text-align: left;padding-left: 257px;margin-top: 32px;margin-bottom: 0px;}
			.p16{text-align: left;padding-left: 3px;padding-right: 108px;margin-top: 18px;margin-bottom: 0px;}
			.p17{text-align: left;padding-left: 3px;padding-right: 88px;margin-top: 8px;margin-bottom: 0px;}
			.p18{text-align: left;padding-left: 3px;padding-right: 74px;margin-top: 45px;margin-bottom: 0px;}
			.p19{text-align: right;padding-right: 74px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p20{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p21{text-align: left;padding-left: 70px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p22{text-align: right;padding-right: 75px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p23{text-align: left;margin-top: 0px;margin-bottom: 0px;}
			.p24{text-align: center;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p25{text-align: left;padding-left: 69px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p26{text-align: center;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p27{text-align: left;padding-left: 30px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p28{text-align: left;padding-left: 52px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p29{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p30{text-align: right;padding-right: 18px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p31{text-align: right;padding-right: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p32{text-align: center;padding-right: 78px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p33{text-align: center;padding-right: 68px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p34{text-align: center;padding-right: 19px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p35{text-align: left;padding-left: 209px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p36{text-align: center;padding-right: 18px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p37{text-align: left;padding-left: 71px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

			.td0{padding: 0px;margin: 0px;width: 115px;vertical-align: bottom;}
			.td1{padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;}
			.td2{padding: 0px;margin: 0px;width: 381px;vertical-align: bottom;}
			.td3{padding: 0px;margin: 0px;width: 91px;vertical-align: bottom;}
			.td4{padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
			.td5{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 337px;vertical-align: bottom;}
			.td6{padding: 0px;margin: 0px;width: 44px;vertical-align: bottom;}
			.td7{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
			.td8{padding: 0px;margin: 0px;width: 492px;vertical-align: bottom;}
			.td9{padding: 0px;margin: 0px;width: 516px;vertical-align: bottom;}
			.td10{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 516px;vertical-align: bottom;}
			.td11{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 91px;vertical-align: bottom;}
			.td12{padding: 0px;margin: 0px;width: 393px;vertical-align: bottom;}
			.td13{padding: 0px;margin: 0px;width: 163px;vertical-align: bottom;}
			.td14{padding: 0px;margin: 0px;width: 97px;vertical-align: bottom;}
			.td15{padding: 0px;margin: 0px;width: 556px;vertical-align: bottom;}
			.td16{padding: 0px;margin: 0px;width: 140px;vertical-align: bottom;}
			.td17{padding: 0px;margin: 0px;width: 85px;vertical-align: bottom;}
			.td18{padding: 0px;margin: 0px;width: 98px;vertical-align: bottom;}
			.td19{padding: 0px;margin: 0px;width: 606px;vertical-align: bottom;}
			.td20{padding: 0px;margin: 0px;width: 337px;vertical-align: bottom;}
			.td21{padding: 0px;margin: 0px;width: 336px;vertical-align: bottom;}
			.td22{padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;}
			.td23{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 202px;vertical-align: bottom;}
			.td24{padding: 0px;margin: 0px;width: 202px;vertical-align: bottom;}
			.td25{border-left: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
			.td26{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
			.td27{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 175px;vertical-align: bottom;}
			.td28{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
			.td29{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 29px;vertical-align: bottom;}
			.td30{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
			.td31{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;}
			.td32{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
			.td33{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 183px;vertical-align: bottom;}
			.td34{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
			.td35{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 173px;vertical-align: bottom;}
			.td36{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 164px;vertical-align: bottom;}
			.td37{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;}
			.td38{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
			.td39{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 175px;vertical-align: bottom;}
			.td40{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
			.td41{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;}
			.td42{padding: 0px;margin: 0px;width: 195px;vertical-align: bottom;}
			.td43{padding: 0px;margin: 0px;width: 75px;vertical-align: bottom;}
			.td44{padding: 0px;margin: 0px;width: 272px;vertical-align: bottom;}
			.td45{padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
			.td46{padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
			.td47{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 68px;vertical-align: bottom;}
			.td48{padding: 0px;margin: 0px;width: 116px;vertical-align: bottom;}
			.td49{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 195px;vertical-align: bottom;}
			.td50{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 75px;vertical-align: bottom;}
			.td51{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 272px;vertical-align: bottom;}
			.td52{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
			.td53{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
			.td54{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;}
			.td55{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 68px;vertical-align: bottom;}
			.td56{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 194px;vertical-align: bottom;background: #c0c0c0;}
			.td57{padding: 0px;margin: 0px;width: 431px;vertical-align: bottom;background: #c0c0c0;}
			.td58{padding: 0px;margin: 0px;width: 48px;vertical-align: bottom;background: #c0c0c0;}
			.td59{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 67px;vertical-align: bottom;background: #c0c0c0;}
			.td60{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 740px;vertical-align: bottom;background: #c0c0c0;}
			.td61{padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
			.td62{padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
			.td63{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 116px;vertical-align: bottom;}
			.td64{padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
			.td65{padding: 0px;margin: 0px;width: 542px;vertical-align: bottom;}
			.td66{padding: 0px;margin: 0px;width: 68px;vertical-align: bottom;}

			.tr0{height: 25px;}
			.tr1{height: 17px;}
			.tr2{height: 8px;}
			.tr3{height: 7px;}
			.tr4{height: 33px;}
			.tr5{height: 32px;}
			.tr6{height: 34px;}
			.tr7{height: 47px;}
			.tr8{height: 18px;}
			.tr9{height: 22px;}
			.tr10{height: 23px;}
			.tr11{height: 26px;}
			.tr12{height: 31px;}
			.tr13{height: 50px;}
			.tr14{height: 30px;}
			.tr15{height: 49px;}
			.tr16{height: 21px;}
			.tr17{height: 10px;}
			.tr18{height: 29px;}
			.tr19{height: 20px;}
			.tr20{height: 15px;}
			.tr21{height: 16px;}
			.tr22{height: 19px;}
			.tr23{height: 14px;}
			.tr24{height: 27px;}

			.t0{width: 742px;margin-top: 30px;font: 13px 'Arial';}
			.t1{width: 653px;margin-left: 3px;font: 11px 'Arial';}
			.t2{width: 704px;margin-left: 3px;margin-top: 10px;font: 11px 'Arial';}
			.t3{width: 673px;margin-left: 1px;margin-top: 20px;font: 13px 'Arial';}
			.t4{width: 741px;margin-top: 14px;font: 11px 'Helvetica';}
			.t5{width: 742px;font: 13px 'Arial';}

		</STYLE>
	</HEAD>

	<BODY>
		<DIV id="page_1">
			<DIV id="p1dimg1">
				<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAKRAukDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD1/wAPf8hzxZ/2FY//AEita6Cuf8Pf8hzxZ/2FY/8A0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Hf/JPPEv8A2Crr/wBFNXQVz/jv/knniX/sFXX/AKKaugoA5/w9/wAhzxZ/2FY//SK1roK5/wAPf8hzxZ/2FY//AEita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Hf/JPPEv/AGCrr/0U1dBXP+O/+SeeJf8AsFXX/opq6CgDn/D3/Ic8Wf8AYVj/APSK1roK5/w9/wAhzxZ/2FY//SK1roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8AHf8AyTzxL/2Crr/0U1dBXP8Ajv8A5J54l/7BV1/6KaugoA5/w9/yHPFn/YVj/wDSK1roK5/w9/yHPFn/AGFY/wD0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Hf/ACTzxL/2Crr/ANFNXQVz/jv/AJJ54l/7BV1/6KaugoA5/wAPf8hzxZ/2FY//AEita6Cuf8Pf8hzxZ/2FY/8A0ita6CgAooooAKKKKACiiigCnqVlPfW6xW+p3enuHDGW1WJmIwflPmI4xznpngc9c5f/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDn/+Ee1T/oc9c/782X/yPR/wj2qf9Dnrn/fmy/8AkeugooA5/wD4R7VP+hz1z/vzZf8AyPR/wj2qf9Dnrn/fmy/+R66CigDn/wDhHtU/6HPXP+/Nl/8AI9H/AAj2qf8AQ565/wB+bL/5HroKKAOf/wCEe1T/AKHPXP8AvzZf/I9H/CPap/0Oeuf9+bL/AOR66CigDP0zTrqw837TrN9qW/G37WkC+XjOceVGnXPfPQYxznQoooAKKKKACiiigAooooA5/wAd/wDJPPEv/YKuv/RTV0Fc/wCO/wDknniX/sFXX/opq6CgDn/D3/Ic8Wf9hWP/ANIrWugrn/D3/Ic8Wf8AYVj/APSK1roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8d/8AJPPEv/YKuv8A0U1dBXP+O/8AknniX/sFXX/opq6CgDn/AA9/yHPFn/YVj/8ASK1roK5/w9/yHPFn/YVj/wDSK1roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8d/8k88S/wDYKuv/AEU1dBXP+O/+SeeJf+wVdf8Aopq6CgDn/D3/ACHPFn/YVj/9IrWugrDn8F+Fbq4luLjw1o008rl5JJLCJmdickklckk85qP/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB//QqaH/4Lof8A4mj/AIQTwf8A9Cpof/guh/8AiaAOgorn/wDhBPB/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UUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHyB8bf+Sva7/wBu/wD6Tx15/RRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAH0/8As4/8k81D/sKyf+ioq9goooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP//Z" id="p1img1"></DIV>


			<DIV id="id1_1">
				<P class="p0 ft0">Bay Mills Community College</P>
				<P class="p1 ft0">Travel Expense Statement</P>
				<TABLE cellpadding=0 cellspacing=0 class="t0">
					<TR>
						<TD rowspan=2 class="tr0 td0"><P class="p2 ft1">Employee Name:</P></TD>
						<TD class="tr1 td1"><P class="p3 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr1 td2"><P class="p4 ft3"><?php echo $name; ?></P></TD>
						<TD rowspan=2 class="tr0 td3"><P class="p5 ft1">Today's Date:</P></TD>
						<TD class="tr1 td4"><P class="p6 ft3"><?php echo date("d-m-Y"); ?></P></TD>
					</TR>
					<TR>
						<TD class="tr2 td1"><P class="p3 ft4">&nbsp;</P></TD>
						<TD class="tr3 td5"><P class="p3 ft5">&nbsp;</P></TD>
						<TD class="tr2 td6"><P class="p3 ft4">&nbsp;</P></TD>
						<TD class="tr3 td7"><P class="p3 ft5">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr4 td0"><P class="p2 ft1">Travel Destination:</P></TD>
						<TD class="tr4 td1"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr5 td5"><P class="p7 ft3"><?php echo $travelDestination;?></P></TD>
						<TD class="tr4 td6"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr4 td3"><P class="p8 ft1">Travel Date(s):</P></TD>
						<TD class="tr5 td7"><P class="p9 ft3"><?php echo $travelDates; ?></P></TD>
					</TR>
					<TR>
						<TD class="tr6 td0"><P class="p2 ft1">Purpose of Travel</P></TD>
						<TD colspan=4 class="tr6 td8"><P class="p10 ft1">(briefly explain where you went and why) - <SPAN class="ft6">Attach Meeting Agenda if Available</SPAN></P></TD>
						<TD class="tr6 td4"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr1 td9"><P class="p11 ft3">&nbsp;&nbsp;&nbsp;<?php echo $travelPurpose; ?></P></TD>
						<TD class="tr1 td3"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr1 td4"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr7 td10"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr7 td11"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr7 td7"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr5 td9"><P class="p2 ft1">Is any expense directly paid by another agency? (hotel, meals or transportation)</P></TD>
						<TD class="tr5 td3"><P class="p5 ft7"><?php echo $ePAYOutput1; ?></P></TD>
						<TD class="tr5 td4"><P class="p12 ft7"><?php echo $ePAYOutput2; ?></P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr8 td9"><P class="p2 ft1">Is any expense reimbursable for another agency?</P></TD>
						<TD class="tr8 td3"><P class="p5 ft7"><?php echo $eRAYOutput1; ?></P></TD>
						<TD class="tr8 td4"><P class="p12 ft7"><?php echo $eRAYOutput2; ?></P></TD>
					</TR>
				</TABLE>
				<P class="p13 ft3"><SPAN class="ft8">If so, who? </SPAN>&nbsp;&nbsp;&nbsp;<?php echo $eRAExplanation; ?></P>
				<TABLE cellpadding=0 cellspacing=0 class="t1">
					<TR>
						<TD class="tr9 td12"><P class="p3 ft1">What is their method of reimbursement?</P></TD>
						<TD class="tr9 td13"><P class="p3 ft7"><?php echo $expenseOutput1; ?></P></TD>
						<TD class="tr9 td14"><P class="p3 ft7"><?php echo $expenseOutput2; ?></P></TD>
					</TR>
					<TR>
						<TD colspan=2 class="tr4 td15"><P class="p14 ft9">Attach copies of reimbursement documentation</P></TD>
						<TD class="tr4 td14"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
				</TABLE>
				<P class="p15 ft6">Professional Development Activities</P>
				<P class="p16 ft10">Professional development includes a broad range of topics and activities that expands your professional knowledge, competence, skills, or effectiveness.</P>
				<TABLE cellpadding=0 cellspacing=0 class="t2">
					<TR>
						<TD class="tr10 td2"><P class="p3 ft1">Is this travel for professional development?</P></TD>
						<TD class="tr10 td16"><P class="p3 ft7"><?php echo $profDevYes; ?></P></TD>
						<TD class="tr10 td17"><P class="p3 ft7"><?php echo $profDevNo; ?></P></TD>
						<TD class="tr10 td18"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=3 class="tr4 td19"><P class="p3 ft1">You need to enter the professional development activity in Taskstream before completing this form:</P></TD>
						<TD class="tr4 td18"><P class="p3 ft11"><A href="https://login.taskstream.com/signon/">Taskstream Link</A></P></TD>
					</TR>
				</TABLE>
				<P class="p17 ft12">Please provide the total cost of the training, a narrative explaining the nature of the professional development, what you learned, how it will benefit you at work, and specifically, how it will affect student success outcomes.</P>
				<P class="p18 ft13">I certify that this statement, the amount claimed and the attachments are true, correct and complete to the best of my knowledge and belief, and that payment for the amount claimed has not been received.</P>
				<TABLE cellpadding=0 cellspacing=0 class="t3">
					<TR>
						<TD class="tr1 td20"><P class="p3 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr1 td21"><P class="p19 ft3"><?php echo date("d-m-Y"); ?></P></TD>
					</TR>
					<TR>
						<TD class="tr3 td5"><P class="p3 ft5">&nbsp;</P></TD>
						<TD rowspan=2 class="tr11 td22"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr3 td23"><P class="p3 ft5">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr8 td20"><P class="p20 ft1">Employee Signature</P></TD>
						<TD class="tr8 td24"><P class="p21 ft1">Date</P></TD>
					</TR>
					<TR>
						<TD class="tr12 td5"><P class="p3 ft2">&nbsp;</P></TD>
						<TD rowspan=2 class="tr13 td22"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr12 td23"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr8 td20"><P class="p20 ft1">Supervisor Signature</P></TD>
						<TD class="tr8 td24"><P class="p21 ft1">Date</P></TD>
					</TR>
					<TR>
						<TD class="tr14 td5"><P class="p3 ft2">&nbsp;</P></TD>
						<TD rowspan=2 class="tr15 td22"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr14 td23"><P class="p3 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr8 td20"><P class="p20 ft14"><SPAN class="ft1">HR Initials </SPAN>(Verification of Taskstream entry for PD)</P></TD>
						<TD class="tr8 td24"><P class="p21 ft1">Date</P></TD>
					</TR>
					<TR>
						<TD class="tr16 td20"><P class="p3 ft2"><?php echo $programCharged; ?></P></TD>
						<TD colspan=2 class="tr16 td21"><P class="p22 ft3">$ <?php echo $balanceDue; ?></P></TD>
					</TR>
					<TR>
						<TD class="tr17 td5"><P class="p3 ft15">&nbsp;</P></TD>
						<TD rowspan=2 class="tr18 td22"><P class="p3 ft2">&nbsp;</P></TD>
						<TD class="tr17 td23"><P class="p3 ft15">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr8 td20"><P class="p20 ft1">Program to be charged/GL account number</P></TD>
						<TD class="tr8 td24"><P class="p21 ft1">Amount</P></TD>
					</TR>
				</TABLE>
			</DIV>

			<DIV id="id1_2">
				<P class="p23 ft14"><SPAN class="ft1">Accountant Initials </SPAN>(Ok on Program to Charge/Line Item)</P>
			</DIV>

		</DIV>
		
		<DIV id="page_2">
			<P class="p0 ft0">Bay Mills Community College</P>
			<P class="p1 ft0">Travel Expense Statement</P>

			<TABLE cellpadding=0 cellspacing=0 class="t4">
				<TR>
					<TD class="tr19 td25"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td26"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td27"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr19 td28"><P class="p3 ft6">Mileage Worksheet</P></TD>
					<TD class="tr19 td29"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td30"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td31"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr20 td32"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td33"><P class="p3 ft16">DEPARTURE</P></TD>
					<TD class="tr20 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td35"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td36"><P class="p3 ft16">ARRIVAL</P></TD>
					<TD class="tr20 td37"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr21 td32"><P class="p24 ft1">Date and Time</P></TD>
					<TD class="tr21 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td39"><P class="p25 ft1">From</P></TD>
					<TD class="tr21 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td35"><P class="p25 ft1">To</P></TD>
					<TD class="tr21 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td41"><P class="p7 ft1">Date and Time</P></TD>
					<TD class="tr21 td37"><P class="p26 ft1"># Miles</P></TD>
				</TR>
				<TR>
					<TD class="tr20 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure1TimeConverted); ?></P></TD>
					<TD class="tr20 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td39"><P class="p27 ft3"><?php echo $departure1Location; ?></P></TD>
					<TD class="tr20 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td35"><P class="p28 ft3"><?php echo $arrival1Location; ?></P></TD>
					<TD class="tr20 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival1TimeConverted); ?></P></TD>
					<TD class="tr20 td37"><P class="p9 ft3"><?php echo $mileage1TotalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure2TimeConverted); ?></P></TD>
					<TD class="tr21 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td39"><P class="p27 ft3"><?php echo $departure2Location; ?></P></TD>
					<TD class="tr21 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td35"><P class="p28 ft3"><?php echo $arrival2Location; ?></P></TD>
					<TD class="tr21 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival2TimeConverted); ?></P></TD>
					<TD class="tr21 td37"><P class="p9 ft3"><?php echo $mileage2TotalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr20 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure3TimeConverted); ?></P></TD>
					<TD class="tr20 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td39"><P class="p27 ft3"><?php echo $departure3Location; ?></P></TD>
					<TD class="tr20 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td35"><P class="p28 ft3"><?php echo $arrival3Location; ?></P></TD>
					<TD class="tr20 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival3TimeConverted); ?></P></TD>
					<TD class="tr20 td37"><P class="p9 ft3"><?php echo $mileage3TotalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure4TimeConverted); ?></P></TD>
					<TD class="tr21 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td39"><P class="p27 ft3"><?php echo $departure4Location; ?></P></TD>
					<TD class="tr21 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td35"><P class="p28 ft3"><?php echo $arrival4Location; ?></P></TD>
					<TD class="tr21 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival4TimeConverted); ?></P></TD>
					<TD class="tr21 td37"><P class="p9 ft3"><?php echo $mileage4TotalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr20 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure5TimeConverted); ?></P></TD>
					<TD class="tr20 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td39"><P class="p27 ft3"><?php echo $departure5Location; ?></P></TD>
					<TD class="tr20 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td35"><P class="p28 ft3"><?php echo $arrival5Location; ?></P></TD>
					<TD class="tr20 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival5TimeConverted); ?></P></TD>
					<TD class="tr20 td37"><P class="p9 ft3"><?php echo $mileage5TotalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td32"><P class="p24 ft3"><?php echo date("m/d/Y h:i A", $departure6TimeConverted); ?></P></TD>
					<TD class="tr21 td38"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td39"><P class="p27 ft3"><?php echo $departure6Location; ?></P></TD>
					<TD class="tr21 td34"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td35"><P class="p28 ft3"><?php echo $arrival6Location; ?></P></TD>
					<TD class="tr21 td40"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td41"><P class="p29 ft3"><?php echo date("m/d/Y h:i A", $arrival6TimeConverted); ?></P></TD>
					<TD class="tr21 td37"><P class="p9 ft3"><?php echo $mileage6TotalMiles; ?></P></TD>
				</TR>
			</TABLE>
			
			<TABLE cellpadding=0 cellspacing=0 class="t5">
				<TR>
					<TD class="tr19 td42"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr19 td45"><P class="p3 ft6">Total Miles</P></TD>
					<TD class="tr19 td46"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td47"><P class="p30 ft3"><?php echo $totalMiles; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr23 td42"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td43"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td44"><P class="p3 ft17">&nbsp;</P></TD>
					<TD colspan=2 class="tr23 td45"><P class="p3 ft18">Total Mileage</P></TD>
					<TD colspan=2 class="tr23 td48"><P class="p31 ft3">$ <?php echo $totalMileagePrice; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr1 td49"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td50"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td51"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td52"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td54"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td55"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr21 td56"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=4 class="tr21 td57"><P class="p32 ft1">COMPLETE EITHER PER DIEM OR ACTUAL - NOT BOTH</P></TD>
					<TD class="tr21 td58"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td59"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD colspan=7 class="tr21 td60"><P class="p7 ft9"><NOBR>EXCEPTION-USE</NOBR> STANDARD PER DIEM MEALS/INCIDENTALS ($55 IN 2019) AND ACTUAL HOTEL COSTS</P></TD>
				</TR>
				<TR>
					<TD class="tr4 td42"><P class="p2 ft6">PER DIEM</P></TD>
					<TD class="tr4 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=4 class="tr4 td61"><P class="p8 ft6">HOTEL RECEIPT REQUIRED</P></TD>
				</TR>
				<TR>
					<TD class="tr4 td42"><P class="p2 ft1">Date and time of Departure</P></TD>
					<TD class="tr4 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td44"><P class="p33 ft1">Date (m/d/yy) and Time (h:M tt):</P></TD>
					<TD class="tr4 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr5 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr5 td63"><P class="p34 ft3"><?php echo date("m/d/Y h:i A", $perDiemDepartureTime); ?></P></TD>
				</TR>
				<TR>
					<TD rowspan=2 class="tr4 td42"><P class="p2 ft1">Date and time of Return</P></TD>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p35 ft1">Example:</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td64"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td48"><P class="p36 ft1">7/11/19 4:06 PM</P></TD>
				</TR>
				<TR>
					<TD class="tr1 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p33 ft1">Date (m/d/yy) and Time (h:M tt):</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3"><?php echo date("m/d/Y h:i A", $perDiemReturnTime); ?></P></TD>
				</TR>
				<TR>
					<TD rowspan=2 class="tr4 td42"><P class="p2 ft1">Total Number of Hours</P></TD>
					<TD class="tr1 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p35 ft1">Example:</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td64"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr1 td48"><P class="p36 ft1">7/12/19 8:15 AM</P></TD>
				</TR>
				<TR>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3"><?php echo $totalPerDiemHours; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td42"><P class="p2 ft1">Per Diem Rate from <A href="https://www.gsa.gov/travel/plan-book/per-diem-rates/per-diem-rates-lookup"><SPAN class="ft11">gsa.gov</SPAN></A></P></TD>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft20">$ <?php echo $perDiemRate; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr22 td42"><P class="p2 ft6">Total Per Diem</P></TD>
					<TD class="tr22 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr8 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr8 td63"><P class="p34 ft20">$ <?php echo $totalPerDiem; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr12 td42"><P class="p2 ft6">ACTUAL</P></TD>
					<TD class="tr12 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr12 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=4 class="tr12 td61"><P class="p8 ft6">RECEIPTS REQUIRED</P></TD>
				</TR>
				<TR>
					<TD class="tr4 td42"><P class="p2 ft1">Total Hotel Costs</P></TD>
					<TD class="tr4 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr5 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr5 td63"><P class="p34 ft20">$ <?php echo $actualHotelCosts; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td42"><P class="p2 ft1">Total Food Costs</P></TD>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft20">$ <?php echo $actualFoodCosts; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr1 td42"><P class="p2 ft1">Total Incidentals</P></TD>
					<TD class="tr1 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft20">$ <?php echo $incidentalCosts; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr8 td42"><P class="p2 ft6">Total Cost of Actual Expense</P></TD>
					<TD class="tr8 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr8 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr8 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr1 td63"><P class="p34 ft20">$ <?php echo $totalActualExpense; ?></P></TD>
				</TR>
				<TR>
					<TD colspan=3 class="tr12 td65"><P class="p2 ft1"><SPAN class="ft6">MISCELLANEOUS </SPAN>(bridge, parking, taxi, etc.)</P></TD>
					<TD class="tr12 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr12 td64"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr12 td46"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr12 td66"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr4 td42"><P class="p2 ft1">Item:</P></TD>
					<TD class="tr4 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td64"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td46"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr4 td66"><P class="p2 ft1">Amount:</P></TD>
				</TR>
				<TR>
					<TD class="tr21 td49"><P class="p2 ft3"><?php echo $miscItem1Name; ?></P></TD>
					<TD class="tr21 td50"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3">$ <?php echo $miscItem1Value; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr20 td49"><P class="p2 ft3"><?php echo $miscItem2Name; ?></P></TD>
					<TD class="tr20 td50"><P class="p3 ft19">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3">$ <?php echo $miscItem2Value; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td49"><P class="p2 ft3"><?php echo $miscItem3Name; ?></P></TD>
					<TD class="tr21 td50"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3">$ <?php echo $miscItem3Value; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr20 td49"><P class="p2 ft3"><?php echo $miscItem4Name; ?></P></TD>
					<TD class="tr20 td50"><P class="p3 ft19">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3">$ <?php echo $miscItem4Value; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td49"><P class="p2 ft3"><?php echo $miscItem5Name; ?></P></TD>
					<TD class="tr21 td50"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3">$ <?php echo $miscItem5Value; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr19 td42"><P class="p2 ft6">Total Miscellaneous</P></TD>
					<TD class="tr19 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr19 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr22 td63"><P class="p34 ft3">$ <?php echo $totalMisc; ?></P></TD>
				</TR>
				<TR>
					<TD colspan=3 class="tr24 td65"><P class="p2 ft6">SUMMARY OF TRAVEL COSTS:</P></TD>
					<TD class="tr24 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr24 td64"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr24 td46"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr24 td66"><P class="p3 ft2">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr22 td42"><P class="p2 ft1">Mileage</P></TD>
					<TD class="tr22 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr8 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr8 td63"><P class="p34 ft3">$ <?php echo $totalMileagePrice; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr23 td42"><P class="p2 ft21">Room & Meals</P></TD>
					<TD class="tr23 td43"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td44"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td62"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td64"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td46"><P class="p3 ft17">&nbsp;</P></TD>
					<TD class="tr23 td66"><P class="p3 ft17">&nbsp;</P></TD>
				</TR>
				<TR>
					<TD class="tr22 td42"><P class="p37 ft1">If using Per Diem</P></TD>
					<TD class="tr22 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr22 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr8 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr8 td63"><P class="p34 ft3">$ <?php echo $totalPerDiem; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td42"><P class="p37 ft1">If using Actual</P></TD>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3">$ <?php echo $totalActualExpense; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr21 td42"><P class="p2 ft1">Miscellaneous</P></TD>
					<TD class="tr21 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3">$ <?php echo $totalMisc; ?></P></TD>
				</TR>
				<TR>
					<TD class="tr1 td42"><P class="p2 ft1">Total Expenses</P></TD>
					<TD class="tr1 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3">$ <?php echo $totalExpenses; ?></P></TD>
				</TR>
				<TR>
					<TD colspan=3 class="tr21 td65"><P class="p2 ft1">Total Advance Received (include all advances)</P></TD>
					<TD class="tr21 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr20 td53"><P class="p3 ft19">&nbsp;</P></TD>
					<TD colspan=2 class="tr20 td63"><P class="p34 ft3">$ <?php echo sprintf('%.2f', $totalAdvanceReceived); ?></P></TD>
				</TR>
				<TR>
					<TD class="tr1 td42"><P class="p2 ft1">Balance Due</P></TD>
					<TD class="tr1 td43"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td44"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr1 td62"><P class="p3 ft2">&nbsp;</P></TD>
					<TD class="tr21 td53"><P class="p3 ft2">&nbsp;</P></TD>
					<TD colspan=2 class="tr21 td63"><P class="p34 ft3">$ <?php echo $balanceDue; ?></P></TD>
				</TR>
			</TABLE>
		</DIV>
		
	</BODY>
</HTML>
