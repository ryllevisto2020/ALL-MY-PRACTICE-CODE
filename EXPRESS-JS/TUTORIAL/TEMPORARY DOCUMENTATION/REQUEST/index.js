const express = require('express');
var cookieParser = require('cookie-parser')
const bodyParser = require('body-parser')

const app = express();
app.use(cookieParser());
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());
app.get('/request/access', (req, res)=>{
    //Accessing Request Properties

    //Load all Request Properties
    //console.log(req);

    //Accessing Request Query
    //URI sample -> /request/access?name=visto -> localhost:3080/request/access?name=visto
    console.log("THIS IS A QUERY PROPERTIES")
    console.log(req.query);

    //Accessing Request Headers
    console.log("THIS IS A HEADERS PROPERTIES")
    console.log(req.headers);

    //Accessing Request Body Raw Data & X-WWW-FORM-URLENCODED
    console.log("THIS IS A BODY PROPERTIES")
    console.log(req.body);

    res.send("This is a Test!");
});

app.listen("3080",function() {
    console.log("listening on port 3080");
});