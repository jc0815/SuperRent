-- PHP QUERIES 

-- FOR NO INPUTS
executePlainSQL("SELECT VtName ,count(*) FROM Vehicle WHERE VStatus LIKE 'yes' GROUP BY VtName ORDER BY VtName");
executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes'");

-- FOR VEHICLE TYPE INPUT
executePlainSQL("SELECT VtName, count(*) FROM Vehicle WHERE VStatus LIKE 'yes' AND VtName LIKE inputVt GROUP BY VtName ORDER BY VtName");
executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes' AND VtName LIKE inputVt");

-- FOR LOCATION INPUT
executePlainSQL("SELECT VtName, count(*) FROM Vehicle WHERE VStatus LIKE 'yes' AND VLocation LIKE inputLoc GROUP BY VtName ORDER BY VtName");
executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes' AND VLocation LIKE inputLoc");
 

-- FOR LOCATION AND VEHICLE TYPE
executePlainSQL("SELECT VtName, count(*) FROM Vehicle v WHERE VStatus LIKE 'yes' AND VLocation LIKE inputLoc AND VtName LIKE inputVt GROUP BY VtName ORDER BY VtName");
executePlainSQL("SELECT * FROM Vehicle v WHERE VStatus LIKE 'yes' AND VLocation LIKE inputLoc AND VtName LIKE inputVt");

-- FOR JUST TIMEFRAME
executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE v.VStatus LIKE 'yes' OR v.Vid = re.Vid AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate) GROUP BY v.VtName ORDER BY v.VtName");
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City  FROM Vehicle v, Rental re WHERE v.VStatus LIKE 'yes' OR v.Vid = re.Vid AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate)");

--FOR TIMEFRAME AND LOCATION
executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE inputLoc AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate) GROUP BY v.VtName ORDER BY v.VtName");
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City  FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE inputLoc AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate)");


-- FOR TIMEFRAME AND VEHICLE TYPE
executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VtName LIKE custVt AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate) GROUP BY v.VtName ORDER BY v.VtName");
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City  FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VtName LIKE custVt AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate)");

-- FOR ALL INPUTS
executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE inputLoc AND v.VtName LIKE inputVtName AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate) GROUP BY v.VtName ORDER BY v.VtName");
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City  FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE inputLoc AND v.VtName LIKE inputVtName AND (re.ToDate < inputfromdate OR re.FromDate > inputToDate)");
--



