CREATE TABLE Customer (CName varchar(20) NOT NULL,
                     PAddress varchar(20) NOT NULL,
                     DriverLicense varchar(20) NOT NULL,
                     CellPhone int NOT NULL, -- NOTE: int
                     PRIMARY KEY (DriverLicense)
                     );
CREATE TABLE VehicleType (VtName varchar(20) NOT NULL,
                      Features varchar(20),
                      Wrate int NOT NULL, -- NOTE: int
                      Drate int NOT NULL, -- NOTE: int
                      Hrate int NOT NULL, -- NOTE: int
                      Wirate int NOT NULL, -- NOTE: int
                      Dirate int NOT NULL, -- NOTE: int
                      Hirate int NOT NULL, -- NOTE: int
                      Krate int NOT NULL, -- NOTE: int
                      PRIMARY KEY (VtName)
                      );
CREATE TABLE Vehicle (VLicense varchar(20) NOT NULL,
                     VStatus varchar(20) NOT NULL, -- yes, no, or maintenance
                     Vid int NOT NULL, -- NOTE: int
                    Make varchar(20) NOT NULL,
                    Model varchar(20) NOT NULL,
                    Color varchar(20) NOT NULL,
                    Odometer int NOT NULL, -- NOTE: int
                    VtName varchar(20) NOT NULL,
                    VLocation varchar(20) NOT NULL, 
                    City varchar(20) NOT NULL,
                    PRIMARY KEY (Vid),
                    FOREIGN KEY (VtName) REFERENCES VehicleType(VtName)
                    );
CREATE TABLE Reservation (ConfNo int NOT NULL, -- NOTE: int
                     VtName varchar(20) NOT NULL, 
                     DriverLicense varchar(20) NOT NULL,
                     FromDate date NOT NULL, -- NOTE: date
                     FromTime int NOT NULL, -- NOTE: int
                     ToDate date NOT NULL, -- NOTE: date
                     ToTime int NOT NULL, -- NOTE: int
                     PRIMARY KEY (ConfNo),
                     FOREIGN KEY (VtName) REFERENCES VehicleType(VtName),
                     FOREIGN KEY (DriverLicense) REFERENCES Customer(DriverLicense)
                    );
CREATE TABLE Rental (Rid int NOT NULL, -- NOTE: int
                    VtName varchar(20) NOT NULL, -- ADDED MAY NOT BE NEEDED
                    Vid int NOT NULL, -- NOTE: int
                    DriverLicense varchar(20) NOT NULL,
                    FromDate date NOT NULL, -- NOTE: date
                    FromTime int NOT NULL, -- NOTE: int
                    ToDate date NOT NULL, -- NOTE: date
                    ToTime int NOT NULL, -- NOTE: int
                    Odometer int NOT NULL, -- NOTE: int
                    CardName varchar(20) NOT NULL,
                    CardNo varchar(20) NOT NULL, -- NOTE: varchar
                    ExpDate date NOT NULL, -- NOTE: date
                    ConfNo int, -- NOTE: int
                    PRIMARY KEY (Rid),
                    FOREIGN KEY (Vid) REFERENCES Vehicle(Vid),
                    FOREIGN KEY (DriverLicense) REFERENCES Customer(DriverLicense),
                    FOREIGN KEY (ConfNo) REFERENCES Reservation(ConfNo)  
                    );
CREATE TABLE ReturnCar (Rid int NOT NULL, -- NOTE: int
                    ReturnDate date NOT NULL, -- NOTE: date
                    ReturnTime int NOT NULL, -- NOTE: int
                    Odometer int NOT NULL, -- NOTE: int
                    FullTank varchar(20) NOT NULL, -- yes or no
                    ReturnValue int NOT NULL,
                    PRIMARY KEY (Rid),
                    FOREIGN KEY (Rid) REFERENCES Rental(Rid)
                    );


