const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const mysql = require('mysql');


const app = express();

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended:true}));

const account_routing = require('./routing/account.js');


app.use('/account',account_routing);

app.listen(3030,function(){
    console.log('listening on port 3030');
});