const userDb = require("../models/User");
const bookingDb = require("../models/bookings");
const chalk = require("chalk");

module.exports.createUser = (req, res, next) => {
  // IF PHONE NUMBER IS NOT PRESENT SET AS FALSE
  if (req.body.phoneNumber === undefined) {
    console.log("Phone number not found");
    req.body.phoneNumber = false;
  }

  console.log(req.body);

  const { fullName, email, phoneNumber } = req.body;
  console.log(chalk.yellow("Creating a user... "));
  userDb
    .createUser(
      req.user.uid,
      fullName,
      email,
      phoneNumber,
    )
    .then(() => {
      console.log(chalk.green("User created"));
      res.json({
          statusCode:200,
          payload:{
              msg:"User Created!"
          }
      })
    })
    .catch((e) => {
      console.log(
        chalk.red("AN ERROR OCCURED userDataController.js/createUser")
      );
      console.log(e);
      res.status(500).send({
        statusCode: 500,
        data: {
          msg: e.message,
        },
      });
    });
};

module.exports.bookAppointment = (req, res, next) => {
  bookingDb
    .bookAppointment(
      req.user.uid,
      req.body
    )
    .then((data) => {
      console.log(chalk.green("Booked Successfully"));
      res.json({
          statusCode:200,
          data
      })
    })
    .catch((e) => {
      console.log(
        chalk.red("AN ERROR OCCURED userDataController.js/createUser")
      );
      res.status(500).send({
        statusCode: 500,
        data: {
          msg: e.message,
        },
      });
    });

}

module.exports.getBookings = (req, res, next) => {
	console.log(chalk.yellow("Fetching bookings..."));
	bookingDb
		.getBookings(req.body.date)
		.then(bookings => {
			if(bookings.length === 0){
				res.status(200).send({
					statusCode: 200,
					data: {
						msg: "No data found!",
            bookings:[]
					},
				});
			}
			else{
				res.status(200).send({
					statusCode: 200,
					data: {
						msg: "Successfully fetched bookings",
						bookings:bookings
					},
				});
			}
			
		})
		.catch(e => {
			console.log(chalk.red(e));
			res.status(500).send({
				statusCode: 500,
				data: {
					msg: e.message || e,
				},
			});
		});
};

module.exports.updateProfile = (req, res, next) => {
  userDb
    .updateProfile(
      req.user.uid,
      req.body
    )
    .then((data) => {
      console.log(chalk.green("Updated Successfully"));
      res.json({
          statusCode:200,
          data
      })
    })
    .catch((e) => {
      console.log(
        chalk.red("AN ERROR OCCURED userDataController.js/updateProfile")
      );
      res.status(500).send({
        statusCode: 500,
        data: {
          msg: e.message,
        },
      });
    });

}

module.exports.addImage = (req, res, next) => {
  userDb
    .addImage(
      req.user.uid,
      req.body
    )
    .then((data) => {
      console.log(chalk.green("Updated Successfully"));
      res.json({
          statusCode:200,
          data
      })
    })
    .catch((e) => {
      console.log(
        chalk.red("AN ERROR OCCURED userDataController.js/updateProfile")
      );
      res.status(500).send({
        statusCode: 500,
        data: {
          msg: e.message,
        },
      });
    });

}

module.exports.checkInPatient = (req, res, next) => {
  bookingDb
    .checkInPatient(
      req.body
    )
    .then((data) => {
      console.log(chalk.green("Updated Successfully"));
      res.json({
          statusCode:200,
          data
      })
    })
    .catch((e) => {
      console.log(
        chalk.red("AN ERROR OCCURED userDataController.js/updateProfile")
      );
      res.status(500).send({
        statusCode: 500,
        data: {
          msg: e.message,
        },
      });
    });

}