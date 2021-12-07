import React, { useState } from "react";
import {
  Grid,
  Card,
  Container,
  Divider,
  Button,
  CardContent,
  TextField,
} from "@material-ui/core";
import { Link, Navigate } from "react-router-dom";
import { createBrowserHistory } from "history";

import app from "../../utils/base";
import google from "../../Assets/google_logo.svg";
import signup from "../../Assets/undraw_medical_care_movn.svg";
import axios from "axios";
function Signup(props) {
  const [fullName, setFullName] = useState("");
  const [phone, setPhone] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const [isLoading, setIsLoading] = useState(false);
  let history = createBrowserHistory();

  const handleEmailSignUp = () => {
    setError("");
    setIsLoading(true);
    app
      .auth()
      .createUserWithEmailAndPassword(email, password)
      .then((user) => {
        app
          .auth()
          .currentUser.getIdToken()
          .then((token) => {
            try {
              axios({
                method: "post",
                url: `${process.env.REACT_APP_BACKEND_URL}/user`,
                headers: {
                  Authorization: `Bearer ${token}`,
                  "Content-type": "application/json",
                },
                data: JSON.stringify({
                  fullName: fullName,
                  email: email,
                  phoneNumber: phone,
                  salesforceUser: false,
                }),
              })
                .then((data) => {
                  if (data.data.statusCode === 200) {
                    window.alert("Signed in Successfully");
                    window.location.href = "/";
                  }
                })
                .catch((err) => {
                  window.alert(err.message);
                });
            } catch (err) {
              window.alert(err.message);
            }
          });
      })
      .catch((e) => {
        window.alert(e.message);
        setError(e.message);
        setIsLoading(false);
      });
  };
  const handleGoogleSignUp = () => {
    setError("");
    setIsLoading(true);
    const provider = new app.auth.GoogleAuthProvider();
    app
      .auth()
      .signInWithPopup(provider)
      .then((result) => {
        app
          .auth()
          .currentUser.getIdToken()
          .then((token) => {
            fetch(`${process.env.REACT_APP_BACKEND_URL}/user`, {
              method: "post",
              headers: {
                Authorization: `Bearer ${token}`,
                "Content-type": "application/json",
              },
              body: JSON.stringify({
                fullName: result.user.displayName,
                email: result.user.email,
                phoneNumber: phone,
              }),
            })
              .then(() => (window.location.href = "/app/reserve"))
              .catch((err) => window.alert(err.message));
          })
          .catch((err) => {
            window.alert(err.message);
          });
      })
      .catch((e) => {
        setIsLoading(false);
        setError(e.message);
      });
  };

  return (
    <Container>
      <Grid container style={{ margin: "auto", marginTop: "10vh" }}>
        <Grid item md={6} xs={12}>
          <h2>Welcome to HQueue!</h2>
          <br />
          <br />
          <Card raised={true} variant="outlined" style={{ width: "100%" }}>
            <CardContent style={{ padding: "2% 7%" }}>
              <h3 style={{ padding: "1rem" }}>
                Already a member ? <Link to="/login">Sign in.</Link>
              </h3>
              {/* <br />
              <TextField
                id="outlined-basic2"
                value={fullName}
                onChange={(e) => setFullName(e.target.value)}
                placeholder="Name"
                variant="outlined"
                style={{ width: "95%", margin: "auto" }}
              />
              <br />
              <br />
              <TextField
                id="outlined-basic3"
                value={phone}
                onChange={(e) => setPhone(e.target.value)}
                placeholder="Mobile Number"
                variant="outlined"
                style={{ width: "95%", margin: "auto" }}
              />
              <br />
              <br />
              <TextField
                id="outlined-basic"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                placeholder="Email Address"
                variant="outlined"
                style={{ width: "95%", margin: "auto" }}
              />
              <br />
              <br />
              <TextField
                id="outlined-basic1"
                value={password}
                onChange={(e) => setPassword(e.target.value)}
                placeholder="Password"
                variant="outlined"
                style={{ width: "95%" }}
              />
              <br />
              <br />
              <Button
                variant="contained"
                color="primary"
                style={{ width: "95%", height: "3rem" }}
                onClick={handleEmailSignUp}
              >
                Signup
              </Button>
              <br /> */}
              <br />
              <Button
                variant="contained"
                style={{ width: "95%", height: "3rem" }}
                onClick={handleGoogleSignUp}
              >
                Sign up with Google &nbsp;
                <img
                  style={{ height: "30px", width: "30px" }}
                  src={google}
                  alt="google"
                />
              </Button>
            </CardContent>
          </Card>
        </Grid>
        <Grid item md={6} style={{marginTop:"20vh"}} xs={false}>
          <img src={signup} alt="signup" style={{width:"100%",height:"auto"}} />
        </Grid>
      </Grid>
    </Container>
  );
}

export default Signup;
